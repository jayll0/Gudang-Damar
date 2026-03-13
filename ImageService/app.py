from flask import Flask, request, jsonify
from flask_cors import CORS
from supabase import create_client
import openai
import os
import requests
import uuid
from dotenv import load_dotenv

load_dotenv()

app = Flask(__name__)
CORS(app)

openai.api_key = os.getenv("OPENAI_API_KEY")

supabase = create_client(
    os.getenv("SUPABASE_URL"),
    os.getenv("SUPABASE_KEY")
)

BUCKET = os.getenv("SUPABASE_BUCKET", "product-images")


@app.route('/health', methods=['GET'])
def health():
    return jsonify({"status": "ok"})


@app.route('/generate', methods=['POST'])
def generate_image():
    data     = request.json
    nama     = data.get('nama', '')
    kategori = data.get('kategori', '')

    # 1. Generate via DALL-E
    prompt = (
        f"Product image of {nama}, category: {kategori}, "
        f"clean white background, professional product photo, high quality"
    )

    response = openai.images.generate(
        model="dall-e-3",
        prompt=prompt,
        size="1024x1024",
        quality="standard",
        n=1,
    )

    dalle_url = response.data[0].url

    # 2. Download gambar dari DALL-E
    img_bytes = requests.get(dalle_url).content

    # 3. Upload ke Supabase Storage
    filename = f"{uuid.uuid4()}.png"
    supabase.storage.from_(BUCKET).upload(
        path=filename,
        file=img_bytes,
        file_options={"content-type": "image/png"}
    )

    # 4. Ambil public URL permanen
    public_url = supabase.storage.from_(BUCKET).get_public_url(filename)

    return jsonify({"image_url": public_url})


if __name__ == '__main__':
    app.run(debug=True, port=5000)