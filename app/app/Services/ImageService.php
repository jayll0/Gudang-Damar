<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Exception;

class ImageService
{
    private string $token;
    private string $model;
    private string $baseUrl = 'https://router.huggingface.co/hf-inference/models/';

    /**
     * Suffix gaya foto — ditaruh di BELAKANG prompt user.
     * User prompt jadi subjek utama, ini hanya penentu gaya/kualitas foto.
     */
    private string $promptSuffix =
        ', product photography, white background, studio lighting, ' .
        'sharp focus, photorealistic, high quality, 4k';

    /**
     * Negative prompt: hal yang tidak boleh muncul di gambar.
     */
    private string $negativePrompt =
        'text, typography, lettering, words, letters, watermark, logo, ' .
        'abstract art, painting, illustration, cartoon, anime, ' .
        'person, people, hands, face, ' .
        'blurry, low quality, low resolution, dark background, ' .
        'multiple objects, duplicate, frame, border, signature, NSFW';

    public function __construct()
    {
        $this->token = config('services.huggingface.key');
        $this->model = config('services.huggingface.model');
    }

    private function translateToEnglish(string $text): string
    {
        try {
            $response = Http::timeout(10)
                ->get('https://api.mymemory.translated.net/get', [
                    'q'        => $text,
                    'langpair' => 'id|en',
                ]);

            if ($response->successful()) {
                $translated = $response->json('responseData.translatedText');
                if ($translated && strtolower($translated) !== strtolower($text)) {
                    Log::info('ImageService translated: "' . $text . '" → "' . $translated . '"');
                    return $translated;
                }
            }
        } catch (Exception $e) {
            Log::warning('ImageService translate failed: ' . $e->getMessage());
        }

        return $text;
    }

    public function generate(string $prompt, array $options = [], int $maxRetries = 3): string
    {
        // 1. Prompt Bahasa Indonesia dari user diterjemahkan otomatis oleh kodemu
        $translatedPrompt = $this->translateToEnglish($prompt);

        // 2. Gabungkan dengan suffix gaya foto (agar hasilnya tetap seperti foto studio)
        $fullPrompt = $translatedPrompt . $this->promptSuffix;

        Log::info('Pollinations original prompt : ' . $prompt);
        Log::info('Pollinations full prompt (EN): ' . $fullPrompt);

        // 3. Format URL Pollinations (harus di-encode agar aman untuk URL)
        // Tambahkan nologo=true agar tidak ada watermark dari pollinations
        $encodedPrompt = urlencode($fullPrompt);
        $imageUrl = "https://image.pollinations.ai/prompt/{$encodedPrompt}?width=1024&height=1024&nologo=true";

        try {
            // 4. Hit API menggunakan Http facade bawaan Laravel
            $response = Http::timeout(120)->get($imageUrl);

            if ($response->failed()) {
                throw new Exception("Gagal mengunduh gambar dari Pollinations.");
            }

            // 5. Simpan gambar ke storage lokal Laravel
            $filename = 'generated/' . Str::uuid() . '.png';
            Storage::disk('public')->put($filename, $response->body());

            return Storage::url($filename);

        } catch (Exception $e) {
            Log::error('Pollinations Error: ' . $e->getMessage());
            throw new Exception("Gagal membuat gambar: " . $e->getMessage());
        }
    }
}