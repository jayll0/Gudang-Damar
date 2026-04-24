<template>
<div class="flex bg-surface text-on-surface min-h-screen">
<!-- Main Content Area -->
<main class="flex-1 min-h-screen w-full">
<!-- Page Content Container -->
<div class="pt-8 px-6 pb-12 max-w-7xl mx-auto space-y-8">
<!-- Page Header & Filters -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
<div>
<h2 class="text-3xl font-light tracking-tight text-primary font-display mb-1">Revenue Analytics</h2>
<p class="text-on-surface-variant text-sm">Detailed financial insights for your warehouse operations.</p>
</div>
</div>
<!-- Summary Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Card 1 -->
<div class="bg-surface-container-lowest rounded-lg p-6 shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col justify-between h-36">
<span class="text-xs font-semibold text-on-surface-variant uppercase tracking-widest font-label">Total Revenue</span>
<div>
<div class="text-3xl font-light text-primary tracking-tight font-display">IDR 12,450.80 <span class="text-lg text-outline">M</span></div>
<div class="flex items-center mt-2">
<span class="flex items-center text-secondary bg-secondary-container/30 px-2 py-0.5 rounded-full text-xs font-medium mr-2">
<span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
                                +15.4%
                            </span>
<span class="text-xs text-outline">vs last month</span>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest rounded-lg p-6 shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col justify-between h-36">
<span class="text-xs font-semibold text-on-surface-variant uppercase tracking-widest font-label">YTD Growth</span>
<div>
<div class="text-3xl font-light text-primary tracking-tight font-display">+24.8%</div>
<div class="flex items-center mt-2">
<span class="text-xs text-outline">Exceeds target by 4.2%</span>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest rounded-lg p-6 shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col justify-between h-36 relative overflow-hidden">
<!-- Subtle background decoration -->
<div class="absolute right-0 bottom-0 opacity-5 pointer-events-none">
<span class="material-symbols-outlined text-[100px]">military_tech</span>
</div>
<span class="text-xs font-semibold text-on-surface-variant uppercase tracking-widest font-label relative z-10">Peak Revenue Period</span>
<div class="relative z-10">
<div class="text-3xl font-light text-primary tracking-tight font-display">Q3 '23</div>
<div class="flex items-center mt-2">
<span class="text-xs text-outline">Driven by high seasonal demand</span>
</div>
</div>
</div>
</div>
<!-- Main Layout Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Main Chart Area (2 columns wide) -->
<div class="lg:col-span-2 flex flex-col gap-6">
<div class="bg-surface-container-lowest rounded-lg shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col h-[500px]">
<div class="p-6 pb-2 border-b border-surface-variant flex justify-between items-center">
<h3 class="font-bold text-primary font-headline">Revenue Trend Analysis</h3>
<div class="flex items-center space-x-2">
<div class="flex bg-surface-container-high rounded-DEFAULT p-1 overflow-x-auto no-scrollbar">
<button class="px-3 py-1 text-xs font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1D</button>
<button class="px-3 py-1 text-xs font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1W</button>
<button class="px-3 py-1 text-xs font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1M</button>
<button class="px-3 py-1 text-xs font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">3M</button>
<button class="px-3 py-1 text-xs font-bold bg-surface-container-lowest text-primary shadow-sm rounded-DEFAULT transition-colors whitespace-nowrap">YTD</button>
<button class="px-3 py-1 text-xs font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1Y</button>
<button class="px-3 py-1 text-xs font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">5Y</button>
</div>
<button class="p-1.5 hover:bg-surface-container-high rounded-DEFAULT text-outline transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</div>
<div class="p-6 flex-1 relative flex items-end justify-between px-10 pb-12 pt-8">
<!-- Chart Grid Lines -->
<div class="absolute inset-0 p-6 pb-12 pointer-events-none flex flex-col justify-between">
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-outline-variant/40 w-full"></div> <!-- Baseline -->
</div>
<!-- Bar Chart (Modern) -->
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-48 rounded-t-sm shadow-sm relative cursor-pointer">
<!-- Tooltip -->
<div class="absolute bottom-full mb-2 left-1/2 -translate-x-1/2 bg-surface-container-lowest border border-outline-variant/20 shadow-[0_12px_40px_rgba(0,30,64,0.1)] rounded-DEFAULT p-3 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none w-32 z-50">
<p class="text-[10px] font-label uppercase text-outline mb-1 text-center">JAN</p>
<p class="text-sm font-bold text-primary text-center">IDR 850M</p>
</div>
</div>
<div class="absolute -bottom-8 text-xs text-outline font-label">JAN</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-36 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-xs text-outline font-label">FEB</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-56 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-xs text-outline font-label">MAR</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-52 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-xs text-outline font-label">APR</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-64 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-xs text-outline font-label">MAY</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-40 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-xs text-outline font-label">JUN</div>
</div>
<!-- Y-Axis Labels -->
<div class="absolute left-6 top-6 bottom-12 flex flex-col justify-between text-[10px] text-outline font-label pointer-events-none">
<span>2,000M</span>
<span>1,500M</span>
<span>1,000M</span>
<span>500M</span>
<span>0</span>
</div>
</div>
</div>
</div>
<!-- Insights Sidebar -->
<div class="bg-surface-container-low rounded-lg p-6 h-[500px] flex flex-col">
<h3 class="font-bold text-primary font-headline mb-6">Revenue by Category</h3>
<div class="flex-1 space-y-6 overflow-y-auto pr-2 no-scrollbar">
<!-- Category Item 1 -->
<div>
<div class="flex justify-between items-center mb-2">
<span class="text-sm font-medium text-on-surface">Mechanical Parts</span>
<span class="text-sm font-bold text-primary">45%</span>
</div>
<div class="w-full bg-surface-variant rounded-full h-1.5">
<div class="bg-primary h-1.5 rounded-full" style="width: 45%"></div>
</div>
<p class="text-xs text-outline mt-1 text-right">IDR 5,602.8 M</p>
</div>
<!-- Category Item 2 -->
<div>
<div class="flex justify-between items-center mb-2">
<span class="text-sm font-medium text-on-surface">Electrical Components</span>
<span class="text-sm font-bold text-primary">30%</span>
</div>
<div class="w-full bg-surface-variant rounded-full h-1.5">
<div class="bg-primary-container h-1.5 rounded-full" style="width: 30%"></div>
</div>
<p class="text-xs text-outline mt-1 text-right">IDR 3,735.2 M</p>
</div>
<!-- Category Item 3 -->
<div>
<div class="flex justify-between items-center mb-2">
<span class="text-sm font-medium text-on-surface">Raw Materials</span>
<span class="text-sm font-bold text-primary">15%</span>
</div>
<div class="w-full bg-surface-variant rounded-full h-1.5">
<div class="bg-primary-fixed-dim h-1.5 rounded-full" style="width: 15%"></div>
</div>
<p class="text-xs text-outline mt-1 text-right">IDR 1,867.6 M</p>
</div>
<!-- Category Item 4 -->
<div>
<div class="flex justify-between items-center mb-2">
<span class="text-sm font-medium text-on-surface">Packaging Supplies</span>
<span class="text-sm font-bold text-primary">10%</span>
</div>
<div class="w-full bg-surface-variant rounded-full h-1.5">
<div class="bg-surface-tint h-1.5 rounded-full" style="width: 10%"></div>
</div>
<p class="text-xs text-outline mt-1 text-right">IDR 1,245.2 M</p>
</div>
</div>
<div class="pt-6 mt-4 border-t border-surface-variant">
<button class="w-full flex items-center justify-center space-x-2 text-sm font-medium text-primary hover:text-primary-container transition-colors">
<span>View Full Breakdown</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
</div>

<!-- Full Width Section for Rankings and Trends -->
<div class="flex flex-col gap-8">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="bg-surface-container-lowest rounded-lg p-6 shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col">
<div class="flex justify-between items-center mb-6">
<h3 class="font-bold text-primary uppercase font-headline tracking-wider text-sm">Top 10 Stok Terbanyak</h3>
<button class="p-1 text-outline hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">sort</span>
</button>
</div>
<div class="space-y-4">
<!-- Item 1 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Baja Ringan C75</span>
<span class="text-sm font-medium text-on-surface">4.5K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary h-1.5 rounded-full" style="width: 100%"></div>
</div>
</div>
<!-- Item 2 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Paku Beton 5cm</span>
<span class="text-sm font-medium text-on-surface">3.2K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/90 h-1.5 rounded-full" style="width: 71%"></div>
</div>
</div>
<!-- Item 3 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Besi Beton 10mm</span>
<span class="text-sm font-medium text-on-surface">2.8K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/80 h-1.5 rounded-full" style="width: 62%"></div>
</div>
</div>
<!-- Item 4 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Pipa PVC 3"</span>
<span class="text-sm font-medium text-on-surface">2.1K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/70 h-1.5 rounded-full" style="width: 46%"></div>
</div>
</div>
<!-- Item 5 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Kabel NYM 2x1.5</span>
<span class="text-sm font-medium text-on-surface">1.5K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/60 h-1.5 rounded-full" style="width: 33%"></div>
</div>
</div>
</div>
</div>
<div class="bg-surface-container-lowest rounded-lg p-6 shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col">
<div class="flex justify-between items-center mb-6">
<h3 class="font-bold text-primary uppercase font-headline tracking-wider text-sm">Top 10 Barang Terjual</h3>
<button class="p-1 text-outline hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">sort</span>
</button>
</div>
<div class="space-y-4">
<!-- Item 1 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Semen Tiga Roda</span>
<span class="text-sm font-medium text-on-surface">8.2K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary h-1.5 rounded-full" style="width: 100%"></div>
</div>
</div>
<!-- Item 2 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Bata Merah</span>
<span class="text-sm font-medium text-on-surface">6.5K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/90 h-1.5 rounded-full" style="width: 79%"></div>
</div>
</div>
<!-- Item 3 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Kaca Nako Bening</span>
<span class="text-sm font-medium text-on-surface">5.1K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/80 h-1.5 rounded-full" style="width: 62%"></div>
</div>
</div>
<!-- Item 4 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Cat Tembok Putih</span>
<span class="text-sm font-medium text-on-surface">4.8K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/70 h-1.5 rounded-full" style="width: 58%"></div>
</div>
</div>
<!-- Item 5 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Engsel Pintu</span>
<span class="text-sm font-medium text-on-surface">3.2K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/60 h-1.5 rounded-full" style="width: 39%"></div>
</div>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-4">
<h2 class="text-2xl font-light tracking-tight text-primary font-display">Analisis Tren Pesanan</h2>
<div class="grid grid-cols-1 gap-6">
<div class="bg-surface-container-lowest rounded-lg shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col h-[400px]">
<div class="p-6 pb-2 border-b border-surface-variant flex justify-between items-center">
<h3 class="font-bold text-primary font-headline uppercase tracking-wider text-sm">Trend Pesanan</h3>
<div class="flex items-center space-x-2">
<div class="flex bg-surface-container-high rounded-DEFAULT p-1 overflow-x-auto no-scrollbar hidden lg:flex">
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1D</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1W</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1M</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">3M</button>
<button class="px-2 py-1 text-[10px] font-bold bg-surface-container-lowest text-primary shadow-sm rounded-DEFAULT transition-colors whitespace-nowrap">YTD</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1Y</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">5Y</button>
</div>
<button class="p-1.5 hover:bg-surface-container-high rounded-DEFAULT text-outline transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</div>
<div class="p-6 flex-1 relative flex items-end justify-between px-10 pb-12 pt-8">
<div class="absolute inset-0 p-6 pb-12 pointer-events-none flex flex-col justify-between">
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-outline-variant/40 w-full"></div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-32 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">JAN</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-24 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">FEB</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-40 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">MAR</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-36 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">APR</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-48 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">MAY</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-28 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">JUN</div>
</div>
<div class="absolute left-6 top-6 bottom-12 flex flex-col justify-between text-[10px] text-outline font-label pointer-events-none hidden sm:flex">
<span>10K</span>
<span>7.5K</span>
<span>5K</span>
<span>2.5K</span>
<span>0</span>
</div>
</div>
</div>
<div class="bg-surface-container-lowest rounded-lg p-6 shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col h-[400px]">
<div class="flex justify-between items-center mb-6">
<h3 class="font-bold text-primary uppercase font-headline tracking-wider text-sm">Top 5 Pesanan</h3>
<button class="p-1 text-outline hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">sort</span>
</button>
</div>
<div class="space-y-4">
<!-- Item 1 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Semen Tiga Roda</span>
<span class="text-sm font-medium text-on-surface">8.5K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary h-1.5 rounded-full" style="width: 100%"></div>
</div>
</div>
<!-- Item 2 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Cat Dulux Putih</span>
<span class="text-sm font-medium text-on-surface">6.2K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/90 h-1.5 rounded-full" style="width: 72%"></div>
</div>
</div>
<!-- Item 3 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Kaca Nako Bening</span>
<span class="text-sm font-medium text-on-surface">5.8K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/80 h-1.5 rounded-full" style="width: 68%"></div>
</div>
</div>
<!-- Item 4 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Triplek 18mm</span>
<span class="text-sm font-medium text-on-surface">4.1K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/70 h-1.5 rounded-full" style="width: 48%"></div>
</div>
</div>
<!-- Item 5 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Engsel Pintu Solid</span>
<span class="text-sm font-medium text-on-surface">3.5K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/60 h-1.5 rounded-full" style="width: 41%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-4">
<h2 class="text-2xl font-light tracking-tight text-primary font-display">Analisis Tren Servis</h2>
<div class="grid grid-cols-1 gap-6">
<div class="bg-surface-container-lowest rounded-lg shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col h-[400px]">
<div class="p-6 pb-2 border-b border-surface-variant flex justify-between items-center">
<h3 class="font-bold text-primary font-headline uppercase tracking-wider text-sm">Trend Servis</h3>
<div class="flex items-center space-x-2">
<div class="flex bg-surface-container-high rounded-DEFAULT p-1 overflow-x-auto no-scrollbar hidden lg:flex">
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1D</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1W</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1M</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">3M</button>
<button class="px-2 py-1 text-[10px] font-bold bg-surface-container-lowest text-primary shadow-sm rounded-DEFAULT transition-colors whitespace-nowrap">YTD</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">1Y</button>
<button class="px-2 py-1 text-[10px] font-medium text-on-surface-variant hover:text-primary rounded-DEFAULT transition-colors whitespace-nowrap">5Y</button>
</div>
<button class="p-1.5 hover:bg-surface-container-high rounded-DEFAULT text-outline transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</div>
<div class="p-6 flex-1 relative flex items-end justify-between px-10 pb-12 pt-8">
<div class="absolute inset-0 p-6 pb-12 pointer-events-none flex flex-col justify-between">
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-surface-container-high w-full"></div>
<div class="border-t border-outline-variant/40 w-full"></div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-20 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">JAN</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-28 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">FEB</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-16 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">MAR</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-32 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">APR</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-24 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">MAY</div>
</div>
<div class="relative z-10 flex flex-col items-center group h-full justify-end">
<div class="w-10 bg-primary-container group-hover:bg-primary transition-colors h-40 rounded-t-sm shadow-sm relative cursor-pointer"></div>
<div class="absolute -bottom-8 text-[10px] text-outline font-label">JUN</div>
</div>
<div class="absolute left-6 top-6 bottom-12 flex flex-col justify-between text-[10px] text-outline font-label pointer-events-none hidden sm:flex">
<span>5K</span>
<span>3.75K</span>
<span>2.5K</span>
<span>1.25K</span>
<span>0</span>
</div>
</div>
</div>
<div class="bg-surface-container-lowest rounded-lg p-6 shadow-[0_4px_20px_rgba(0,30,64,0.03)] border border-outline-variant/15 flex flex-col h-[400px]">
<div class="flex justify-between items-center mb-6">
<h3 class="font-bold text-primary uppercase font-headline tracking-wider text-sm">Top 5 Servis</h3>
<button class="p-1 text-outline hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">sort</span>
</button>
</div>
<div class="space-y-4">
<!-- Item 1 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Potong Besi</span>
<span class="text-sm font-medium text-on-surface">2.4K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary h-1.5 rounded-full" style="width: 100%"></div>
</div>
</div>
<!-- Item 2 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Oplos Cat</span>
<span class="text-sm font-medium text-on-surface">1.8K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/90 h-1.5 rounded-full" style="width: 75%"></div>
</div>
</div>
<!-- Item 3 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Pengantaran Cepat</span>
<span class="text-sm font-medium text-on-surface">1.5K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/80 h-1.5 rounded-full" style="width: 62%"></div>
</div>
</div>
<!-- Item 4 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Konsultasi Produk</span>
<span class="text-sm font-medium text-on-surface">1.1K</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/70 h-1.5 rounded-full" style="width: 45%"></div>
</div>
</div>
<!-- Item 5 -->
<div>
<div class="flex justify-between items-center mb-1">
<span class="text-sm font-medium text-on-surface">Bongkar Muat</span>
<span class="text-sm font-medium text-on-surface">850</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5">
<div class="bg-primary/60 h-1.5 rounded-full" style="width: 35%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</template>

<script setup>
</script>

<style scoped>
</style>
