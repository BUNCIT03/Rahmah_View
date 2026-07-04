@extends('layouts.main')

@section('title', 'Rahmah Consultancy Services — Solusi Kewangan, Masa Depan Terjamin')

@section('content')

    {{-- ── 1. HERO (Two-Column with Talking Client Video) ──────────── --}}
    <section class="relative overflow-hidden min-h-[88vh] flex items-center py-28 px-4 sm:px-6 lg:px-8">

        {{-- Background Image (Kept subtle behind everything) --}}
        <div class="hero-bg absolute inset-0"
             style="background-image: url('{{ asset('images/Gemini_Generated_Image_19mvqt19mvqt19mv.png') }}'); background-size: cover; background-position: center;">
        </div>

        {{-- Overlay: Darkened to make text and video pop --}}
        <div class="absolute inset-0"
             style="background: linear-gradient(to right, rgba(15,26,69,0.95) 0%, rgba(15,26,69,0.85) 100%);"></div>

        {{-- Metallic gold top-border accent --}}
        <div class="absolute top-0 left-0 right-0 h-1 z-10"
             style="background: linear-gradient(90deg, #A8882E, #FFE87C, #C9A840, #FFE87C, #A8882E);"></div>

        {{-- Main Content Container (Grid for 2 columns on large screens) --}}
        <div class="relative z-20 max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- LEFT COLUMN: Text Content --}}
            <div class="text-center lg:text-left">
                <p class="font-semibold text-xs tracking-widest uppercase mb-5" style="color:#C9A840;">
                    Solusi Kewangan Terpercaya
                </p>

                <h1 class="hero-headline text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Semak Kelayakan Anda<br>
                    <span class="gold-metallic-text">Bersama Kami</span>
                </h1>

                <p class="text-slate-100 text-lg mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Rahmah Consultancy Services menyediakan penyelesaian kewangan yang inovatif. Sertai lebih 10,000 pelanggan yang telah mempercayai kami.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                    <a href="#contact" class="btn-gold-metallic font-bold px-8 py-4 text-sm tracking-wide shadow-xl">
                        Semak Kelayakan Sekarang
                    </a>
                    <a href="#services" class="inline-block border border-white/30 hover:border-white/60 text-white font-semibold px-8 py-4 rounded-xl transition text-sm">
                        Ketahui Lebih Lanjut
                    </a>
                </div>

                {{-- Service chip pills --}}
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3 mb-10">
                    <a href="#services" class="service-chip">Perancangan Kewangan</a>
                    <a href="#services" class="service-chip">Semakan Pinjaman</a>
                    <a href="#services" class="service-chip">Penyatuan Hutang</a>
                </div>

                {{-- Trust badges --}}
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-6 text-slate-400 text-xs">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" style="color:#C9A840" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span>Selamat & Terjamin</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" style="color:#C9A840" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg>
                        <span>10,000+ Pelanggan</span>
                    </div>
                </div>
            </div>

            {{-- RIGHT COLUMN: Client Video --}}
            <div class="w-full max-w-lg mx-auto lg:max-w-none relative">
                {{-- Decorative glow behind video --}}
                <div class="absolute -inset-1 bg-gradient-to-r from-[#A8882E] to-[#FFE87C] rounded-2xl blur opacity-30"></div>
                
                <div class="relative bg-slate-900 rounded-2xl overflow-hidden shadow-2xl border border-white/10">
                    <video 
                        class="w-full h-auto aspect-video object-cover" 
                        autoplay 
                        loop 
                        muted 
                        playsinline 
                        controls
                        poster="{{ asset('images/video-thumbnail.jpg') }}"
                    >
                        <source src="{{ asset('videos/TestVid.mp4') }}" type="video/mp4">
                        Maaf, pelayar web anda tidak menyokong format video ini.
                    </video>
                    
                    {{-- Optional: A small prompt overlay to tell users to unmute --}}
                    <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-xs px-3 py-1.5 rounded-full border border-white/20 pointer-events-none flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
                        Klik untuk audio
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ── OWNER PROFILE ────────────────────────────────────────────────── --}}
    <section id="profil" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col md:flex-row items-center gap-12">

                {{-- Owner photo with metallic gold ring --}}
                <div class="reveal flex-shrink-0 flex justify-center">
                    <div class="rounded-full p-[3px]" style="background: linear-gradient(135deg, #A8882E, #FFE87C, #C9A840, #FFE87C, #A8882E);">
                        <div class="rounded-full p-1 bg-white">
                            <img src="{{ asset('images/a5e960547f3d1fb5b0f887a23b10d43a~tplv-tiktokx-cropcenter_1080_1080.jpeg') }}"
                                 alt="Pengasas Rahmah Consultancy"
                                 class="w-44 h-44 sm:w-52 sm:h-52 rounded-full object-cover object-top block">
                        </div>
                    </div>
                </div>

                {{-- Biodata --}}
                <div class="reveal text-center md:text-left">
                    <p class="text-gold font-semibold text-xs tracking-widest uppercase mb-2">Pengarah Urusan</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-navy mb-1">Khairul Amri Chamili</h2>
                    
                    {{-- Social Media Icons --}}
                <div class="flex items-center justify-center md:justify-start gap-3 mb-3">
                    <!-- Facebook -->
                    <a href="https://facebook.com/YOUR_USERNAME" target="_blank" rel="noopener noreferrer" 
                    class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-500 border border-slate-100 hover:bg-[#1877F2] hover:text-white hover:border-[#1877F2] transition-all duration-300 shadow-sm" 
                    title="Facebook">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M9 8H7v3h2v9h4v-9h3l.5-3H13V6c0-.5.5-1 1-1h2V2h-3a4 4 0 0 0-4 4v2z"/>
                        </svg>
                    </a>
                    
                    <!-- Instagram -->
                    <a href="https://instagram.com/YOUR_USERNAME" target="_blank" rel="noopener noreferrer" 
                    class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-500 border border-slate-100 hover:bg-[#E1306C] hover:text-white hover:border-[#E1306C] transition-all duration-300 shadow-sm" 
                    title="Instagram">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                        </svg>
                    </a>
                    
                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@khairulconsultant3" target="_blank" rel="noopener noreferrer" 
                    class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-500 border border-slate-100 hover:bg-[#000000] hover:text-white hover:border-[#000000] transition-all duration-300 shadow-sm" 
                    title="TikTok">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.03 2.61-.01 3.91-.02.08 1.53.63 3.02 1.74 4.05 1.08.97 2.52 1.44 3.93 1.55v3.7c-1.78-.05-3.5-.66-4.88-1.84-.02 2.44.02 4.88-.01 7.32-.12 2.78-1.57 5.43-4.13 6.6a8.04 8.04 0 0 1-8.52-.77 8.08 8.08 0 0 1-3.41-6.98 8.12 8.12 0 0 1 4.2-7.25c1.47-.84 3.19-1.15 4.86-.87v3.8a4.23 4.23 0 0 0-2.73 1.4c-.95 1.07-1.28 2.6-1.1 4.02.18 1.63 1.3 3.09 2.87 3.58 1.52.5 3.28.1 4.43-.96.95-1 1.2-2.47 1.18-3.85l.02-14.14z"/>
                        </svg>
                    </a>
                </div>
                <p class="text-slate-400 text-sm mb-5">Rahmah Consultancy Services</p>
                    <div class="w-12 h-0.5 mb-5 mx-auto md:mx-0" style="background: linear-gradient(90deg, #A8882E, #FFE87C, #A8882E);"></div>
                <p class="text-slate-600 leading-relaxed mb-8 text-sm max-w-lg">
                    Dengan lebih 8 tahun pengalaman dalam industri kewangan Malaysia, beliau telah membantu ribuan pelanggan mencapai kebebasan kewangan melalui penyelesaian yang inovatif dan terancang. Pakar dalam perancangan kewangan, semakan pinjaman, dan penyatuan hutang dikenali kerana pendekatan yang telus dan berorientasikan hasil.
                </p>

                    {{-- Credential stats --}}
                    <div class="grid grid-cols-3 gap-4 max-w-sm mx-auto md:mx-0">
                        <div class="reveal bg-slate-50 rounded-xl p-4 text-center border border-slate-100">
                            <p class="text-xl font-extrabold gold-metallic-text count-up" data-target="8" data-suffix="+">8+</p>
                            <p class="text-xs text-slate-500 mt-1 leading-tight">Tahun Pengalaman</p>
                        </div>
                        <div class="reveal bg-slate-50 rounded-xl p-4 text-center border border-slate-100">
                            <p class="text-xl font-extrabold gold-metallic-text count-up" data-target="10" data-suffix="k+">10k+</p>
                            <p class="text-xs text-slate-500 mt-1 leading-tight">Pelanggan Dibantu</p>
                        </div>
                        <div class="reveal bg-slate-50 rounded-xl p-4 text-center border border-slate-100">
                            <p class="text-xl font-extrabold gold-metallic-text count-up" data-target="91" data-suffix="%">91%</p>
                            <p class="text-xs text-slate-500 mt-1 leading-tight">Kadar Kelulusan</p>
                        </div>
                    </div>

                    

            </div>
        </div>
    </section>

    {{-- ── 2. SERVICES ──────────────────────────────────────────────────── --}}
    <section id="services" class="py-20 px-4 bg-dot-grid">
        <div class="max-w-7xl mx-auto">
            <div class="reveal text-center mb-14">
                <p class="text-gold font-semibold text-xs tracking-widest uppercase mb-3">Apa Yang Kami Tawarkan</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-navy">Servis Kami</h2>
                <div class="mt-4 w-16 h-1 mx-auto rounded-full" style="background: linear-gradient(90deg, #A8882E, #FFE87C, #A8882E);"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="reveal group p-8 bg-white rounded-2xl shadow-sm border border-slate-100 hover:shadow-lg hover:border-gold transition-all duration-300">
                    <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6 transition-all duration-300 bg-gold-light text-gold group-hover:bg-gold group-hover:text-white">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3">Perancangan Kewangan</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Kami membantu anda merancang kewangan peribadi dengan strategi yang tersusun untuk mencapai kebebasan kewangan.</p>
                </div>

                <div class="reveal group p-8 bg-white rounded-2xl shadow-sm border border-slate-100 hover:shadow-lg hover:border-gold transition-all duration-300">
                    <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6 transition-all duration-300 bg-gold-light text-gold group-hover:bg-gold group-hover:text-white">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3">Semakan Kelayakan Pinjaman</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Semak kelayakan pinjaman anda dengan cepat dan mudah. Kami akan pandukan anda sepanjang proses permohonan.</p>
                </div>

                <div class="reveal group p-8 bg-white rounded-2xl shadow-sm border border-slate-100 hover:shadow-lg hover:border-gold transition-all duration-300">
                    <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6 transition-all duration-300 bg-gold-light text-gold group-hover:bg-gold group-hover:text-white">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 7l2.55 2.4A1 1 0 0116 11H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3">Pengurusan & Penyatuan Hutang</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Penyelesaian komprehensif untuk membantu anda menguruskan dan merestrukturkan hutang dengan lebih efektif.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ── 3. STATS ─────────────────────────────────────────────────────── --}}
    <section id="stats" class="py-20 px-4 bg-navy">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center md:divide-x md:divide-slate-700">
                <div class="reveal flex flex-col items-center px-4">
                    <span class="text-4xl sm:text-5xl font-extrabold gold-metallic-text mb-2 count-up" data-target="10000" data-suffix="+">10,000+</span>
                    <span class="text-slate-300 text-sm font-medium">Individu & Prospek Dibantu Semakan</span>
                </div>
                <div class="reveal flex flex-col items-center px-4">
                    <span class="text-4xl sm:text-5xl font-extrabold gold-metallic-text mb-2 count-up" data-target="4">4</span>
                    <span class="text-slate-300 text-sm font-medium">Sektor Fokus</span>
                    <span class="text-slate-500 text-xs mt-1">Kerajaan · GLC · Berkanun · Swasta</span>
                </div>
                <div class="reveal flex flex-col items-center px-4">
                    <span class="text-4xl sm:text-5xl font-extrabold gold-metallic-text mb-2 count-up" data-target="8" data-suffix="+">8+</span>
                    <span class="text-slate-300 text-sm font-medium">Tahun Pengalaman</span>
                </div>
                <div class="reveal flex flex-col items-center px-4">
                    <span class="text-4xl sm:text-5xl font-extrabold gold-metallic-text mb-2 count-up" data-target="0" data-suffix="%">0%</span>
                    <span class="text-slate-300 text-sm font-medium">Bayaran Pendahuluan</span>
                    <span class="text-slate-500 text-xs mt-1">Bayar hanya selepas lulus</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ── 4. TESTIMONIALS ─────────────────────────────────────────────── --}}
    <section class="py-20 px-4 bg-gold-light">
        <div class="max-w-6xl mx-auto">
            <div class="reveal text-center mb-12">
                <p class="text-gold font-semibold text-xs tracking-widest uppercase mb-3">Testimoni Pelanggan</p>
                <h2 class="text-3xl font-bold text-navy">Apa Kata Mereka?</h2>
                <div class="mt-4 w-16 h-1 mx-auto rounded-full" style="background: linear-gradient(90deg, #A8882E, #FFE87C, #A8882E);"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="reveal relative bg-white p-8 rounded-2xl shadow-sm flex flex-col">
                    <span class="absolute top-3 left-6 text-6xl text-gold font-serif leading-none opacity-20">"</span>
                    <p class="text-slate-700 text-sm italic leading-relaxed relative z-10 pt-4 flex-grow">
                        Alhamdulillah, pelanggan berjaya mendapatkan solusi penyatuan hutang selepas semakan kelayakan dibuat secara teratur.
                    </p>
                    <div class="mt-6 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-navy flex items-center justify-center text-white font-bold text-xs flex-shrink-0">RCS</div>
                        <div>
                            <p class="font-semibold text-navy text-sm">Pelanggan RCS</p>
                            <p class="text-slate-400 text-xs">Penyatuan Hutang</p>
                        </div>
                    </div>
                </div>

                <div class="reveal relative bg-white p-8 rounded-2xl shadow-sm flex flex-col">
                    <span class="absolute top-3 left-6 text-6xl text-gold font-serif leading-none opacity-20">"</span>
                    <p class="text-slate-700 text-sm italic leading-relaxed relative z-10 pt-4 flex-grow">
                        Pelanggan lebih jelas tentang komitmen bulanan dan pilihan pembiayaan yang sesuai selepas sesi konsultasi.
                    </p>
                    <div class="mt-6 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-navy flex items-center justify-center text-white font-bold text-xs flex-shrink-0">RCS</div>
                        <div>
                            <p class="font-semibold text-navy text-sm">Pelanggan RCS</p>
                            <p class="text-slate-400 text-xs">Konsultasi Kewangan</p>
                        </div>
                    </div>
                </div>

                <div class="reveal relative bg-white p-8 rounded-2xl shadow-sm flex flex-col">
                    <span class="absolute top-3 left-6 text-6xl text-gold font-serif leading-none opacity-20">"</span>
                    <p class="text-slate-700 text-sm italic leading-relaxed relative z-10 pt-4 flex-grow">
                        Proses semakan dibantu daripada peringkat dokumen sehingga permohonan dihantar kepada pihak berkaitan.
                    </p>
                    <div class="mt-6 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-navy flex items-center justify-center text-white font-bold text-xs flex-shrink-0">RCS</div>
                        <div>
                            <p class="font-semibold text-navy text-sm">Pelanggan RCS</p>
                            <p class="text-slate-400 text-xs">Semakan Kelayakan</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ── PANDUAN LAPORAN KREDIT ───────────────────────────────────────── --}}
<section id="panduan-kredit" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-6xl mx-auto">

        <div class="reveal text-center mb-14">
            <p class="text-gold font-semibold text-xs tracking-widest uppercase mb-3">Semak Sendiri Rekod Anda</p>
            <h2 class="text-3xl sm:text-4xl font-bold text-navy">Panduan Mendapatkan Laporan Kredit Individu</h2>
            <div class="mt-4 w-16 h-1 mx-auto rounded-full" style="background: linear-gradient(90deg, #A8882E, #FFE87C, #A8882E);"></div>
            <p class="text-slate-500 text-sm mt-5 max-w-2xl mx-auto leading-relaxed">
                CCRIS, CTOS dan Experian adalah tiga sumber utama yang digunakan bank dan institusi kewangan untuk menilai kelayakan kredit anda. Berikut adalah panduan ringkas untuk mendapatkan setiap laporan secara sah dan terus daripada penyedia rasmi.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- CCRIS --}}
            <div class="reveal bg-slate-50 rounded-2xl border border-slate-100 p-7 flex flex-col">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center bg-gold-light text-gold font-extrabold text-sm flex-shrink-0">BNM</div>
                    <div>
                        <h3 class="text-lg font-bold text-navy leading-tight">Laporan CCRIS</h3>
                        <p class="text-slate-400 text-xs">Bank Negara Malaysia · Percuma</p>
                    </div>
                </div>
                <p class="text-slate-500 text-xs leading-relaxed mb-4">
                    CCRIS (Central Credit Reference Information System) direkodkan oleh Bank Negara Malaysia dan memaparkan sejarah pembiayaan serta rekod pembayaran anda dengan institusi kewangan berlesen.
                </p>
                
                {{-- YouTube Video Embed --}}
                <div class="w-full aspect-video mb-5 rounded-lg overflow-hidden border border-slate-200 bg-slate-200 shadow-sm">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/_Sl8diqCAFw?si=9Qt8_mj1EXz30KTn&amp;controls=0" title="Panduan CCRIS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <ol class="space-y-3 text-sm text-slate-600 flex-grow">
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">1</span>
                        <span>Layari portal rasmi <a href="https://eccris.bnm.gov.my" target="_blank" rel="noopener" class="text-navy font-semibold underline">eccris.bnm.gov.my</a> dan daftar akaun menggunakan MyKad, e-mel serta nombor telefon.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">2</span>
                        <span>Lengkapkan pengesahan identiti (e-KYC) mengikut arahan pada portal.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">3</span>
                        <span>Terima PIN pengesahan dan log masuk buat kali pertama, kemudian tetapkan kata laluan anda.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">4</span>
                        <span>Klik "Credit Report" untuk memuat turun laporan CCRIS anda.</span>
                    </li>
                </ol>
                <p class="text-[11px] text-slate-400 italic mt-5 pt-4 border-t border-slate-200">
                    Alternatif: kunjungi kiosk di cawangan AKPK atau BNM dengan membawa MyKad — laporan dicetak serta-merta secara percuma.
                </p>
            </div>

            {{-- CTOS --}}
            <div id="panduan-ctos" class="reveal bg-slate-50 rounded-2xl border border-slate-100 p-7 flex flex-col">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center bg-gold-light text-gold font-extrabold text-sm flex-shrink-0">CTOS</div>
                    <div>
                        <h3 class="text-lg font-bold text-navy leading-tight">Laporan CTOS</h3>
                        <p class="text-slate-400 text-xs">Agensi Pelaporan Kredit Swasta</p>
                    </div>
                </div>
                <p class="text-slate-500 text-xs leading-relaxed mb-4">
                    CTOS mengumpul maklumat tambahan seperti tindakan undang-undang, status kebankrapan, dan rekod CCRIS dalam satu laporan yang lebih menyeluruh berbanding CCRIS sahaja.
                </p>
                
                {{-- YouTube Video Embed --}}
                <div class="w-full aspect-video mb-5 rounded-lg overflow-hidden border border-slate-200 bg-slate-200 shadow-sm">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/muczNvx9fgg?si=y9GsZhimgBiy9-jL&amp;controls=0" title="Panduan CTOS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <ol class="space-y-3 text-sm text-slate-600 flex-grow">
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">1</span>
                        <span>Layari laman rasmi <a href="https://ctoscredit.com.my" target="_blank" rel="noopener" class="text-navy font-semibold underline">ctoscredit.com.my</a> atau muat turun aplikasi CTOS Malaysia.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">2</span>
                        <span>Daftar akaun percuma menggunakan nombor MyKad dan alamat e-mel yang sah.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">3</span>
                        <span>Sahkan identiti dengan memuat naik imej MyKad (depan & belakang) dan lengkapkan pengesahan TAC melalui telefon bimbit.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">4</span>
                        <span>Log masuk untuk melihat Laporan Asas MyCTOS secara percuma, atau naik taraf kepada MyCTOS Score Report untuk skor kredit terperinci.</span>
                    </li>
                </ol>
                <p class="text-[11px] text-slate-400 italic mt-5 pt-4 border-t border-slate-200">
                    Laporan Asas MyCTOS adalah percuma; laporan berskor terperinci dikenakan bayaran kecil sekali sahaja.
                </p>
            </div>

            {{-- Experian --}}
            <div class="reveal bg-slate-50 rounded-2xl border border-slate-100 p-7 flex flex-col">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center bg-gold-light text-gold font-extrabold text-xs flex-shrink-0">EXP</div>
                    <div>
                        <h3 class="text-lg font-bold text-navy leading-tight">Laporan Experian</h3>
                        <p class="text-slate-400 text-xs">Dahulunya RAM Credit Information</p>
                    </div>
                </div>
                <p class="text-slate-500 text-xs leading-relaxed mb-4">
                    Experian Information Services (Malaysia) turut menyediakan Personal Credit Report yang merangkumi data CCRIS, litigasi, dan rekod institusi lain untuk gambaran kredit yang lebih lengkap.
                </p>
                
                {{-- YouTube Video Embed --}}
                <div class="w-full aspect-video mb-5 rounded-lg overflow-hidden border border-slate-200 bg-slate-200 shadow-sm">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/ARxcq-zsywY?si=L3fM8f5pK511w6kk&amp;controls=0" title="Panduan Experian" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <ol class="space-y-3 text-sm text-slate-600 flex-grow">
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">1</span>
                        <span>Layari laman rasmi <a href="https://www.experian.com.my" target="_blank" rel="noopener" class="text-navy font-semibold underline">experian.com.my</a> atau portal MYCREDITINFO.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">2</span>
                        <span>Pilih produk Personal Credit Report (PCR) dan daftar akaun dengan butiran peribadi anda.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">3</span>
                        <span>Lengkapkan pengesahan identiti mengikut arahan di laman tersebut.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="w-5 h-5 rounded-full bg-navy text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">4</span>
                        <span>Muat turun laporan setelah permohonan diproses dan disahkan.</span>
                    </li>
                </ol>
                <p class="text-[11px] text-slate-400 italic mt-5 pt-4 border-t border-slate-200">
                    Terdapat pilihan laporan asas percuma untuk pendaftaran baharu, dengan laporan lebih terperinci dikenakan bayaran mengikut jenis produk.
                </p>
            </div>

        </div>

        <p class="reveal text-center text-xs text-slate-500 mt-10 max-w-2xl mx-auto leading-relaxed">
            Nota: Semakan sendiri ("self-check") tidak menjejaskan rekod kredit anda. Rahmah Consultancy Services tidak menjamin kelulusan pinjaman; kami membantu anda memahami laporan ini dan menyediakan dokumen sokongan yang tepat sebelum permohonan dibuat.
        </p>

    </div>
</section>

    {{-- ── 5. FAQS ──────────────────────────────────────────────────────── --}}
    <section id="faqs" class="py-20 px-4 bg-dot-grid">
        <div class="max-w-3xl mx-auto">
            <div class="reveal text-center mb-12">
                <p class="text-gold font-semibold text-xs tracking-widest uppercase mb-3">Ada Soalan?</p>
                <h2 class="text-3xl font-bold text-navy">Soalan Lazim</h2>
                <div class="mt-4 w-16 h-1 mx-auto rounded-full" style="background: linear-gradient(90deg, #A8882E, #FFE87C, #A8882E);"></div>
            </div>
            <div class="space-y-3">

                <div class="reveal faq-item bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left font-semibold text-navy hover:text-gold transition text-sm">
                        <span>Apakah servis utama RCS?</span>
                        <svg class="faq-icon w-5 h-5 text-gold flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        RCS menyediakan khidmat konsultasi kewangan, semakan kelayakan pembiayaan peribadi, penyatuan hutang dan panduan berkaitan isu CCRIS, CTOS, AKPK, SAA, legal action serta komitmen kewangan.
                    </div>
                </div>

                <div class="reveal faq-item bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left font-semibold text-navy hover:text-gold transition text-sm">
                        <span>Siapa yang boleh membuat semakan?</span>
                        <svg class="faq-icon w-5 h-5 text-gold flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        Semakan terbuka kepada kakitangan kerajaan, GLC, badan berkanun dan pekerja swasta yang mempunyai pendapatan tetap serta dokumen sokongan yang lengkap.
                    </div>
                </div>

                <div class="reveal faq-item bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left font-semibold text-navy hover:text-gold transition text-sm">
                        <span>Apakah kelayakan asas untuk semakan awal?</span>
                        <svg class="faq-icon w-5 h-5 text-gold flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        <ul class="space-y-1 mb-3">
                            <li>• <strong>Kerajaan:</strong> Gaji asas minimum RM1,500</li>
                            <li>• <strong>GLC / Badan Berkanun:</strong> Gaji asas minimum RM2,500</li>
                            <li>• <strong>Swasta:</strong> Gaji asas minimum RM3,000</li>
                        </ul>
                        <p class="text-slate-400 text-xs italic">Kelayakan sebenar masih bergantung kepada dokumen, rekod kewangan dan polisi bank / koperasi.</p>
                    </div>
                </div>

                <div class="reveal faq-item bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left font-semibold text-navy hover:text-gold transition text-sm">
                        <span>Adakah perlu bayar dahulu sebelum semakan dibuat?</span>
                        <svg class="faq-icon w-5 h-5 text-gold flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        Tidak. RCS mengamalkan konsep bayaran hanya apabila permohonan berjaya diluluskan, tertakluk kepada terma perkhidmatan.
                    </div>
                </div>

                <div class="reveal faq-item bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left font-semibold text-navy hover:text-gold transition text-sm">
                        <span>Dokumen apa yang diperlukan untuk semakan awal?</span>
                        <svg class="faq-icon w-5 h-5 text-gold flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        <p class="font-semibold text-navy mb-1">Kerajaan / GLC / Badan Berkanun:</p>
                        <ol class="list-decimal list-inside space-y-0.5 mb-3 ml-2">
                            <li>Slip gaji 3 bulan terkini</li>
                            <li>Laporan CTOS terkini</li>
                        </ol>
                        <p class="font-semibold text-navy mb-1">Swasta:</p>
                        <ol class="list-decimal list-inside space-y-0.5 ml-2">
                            <li>Slip gaji 3 bulan terkini</li>
                            <li>Laporan CTOS terkini</li>
                            <li>Penyata EPF 2 tahun terkini</li>
                        </ol>
                    </div>
                </div>

                <div class="reveal faq-item bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left font-semibold text-navy hover:text-gold transition text-sm">
                        <span>Bolehkah pelanggan yang ada CCRIS, CTOS, AKPK, SAA atau legal action membuat semakan?</span>
                        <svg class="faq-icon w-5 h-5 text-gold flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        Boleh. Namun kelayakan bergantung kepada tahap rekod kewangan, jenis isu, dokumen sokongan, status pekerjaan dan polisi pihak bank / koperasi.
                    </div>
                </div>

                <div class="reveal faq-item bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left font-semibold text-navy hover:text-gold transition text-sm">
                        <span>Adakah RCS menjamin kelulusan pinjaman?</span>
                        <svg class="faq-icon w-5 h-5 text-gold flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        Tidak. Kelulusan adalah tertakluk sepenuhnya kepada penilaian pihak bank atau koperasi. RCS membantu dari segi semakan awal, konsultasi, penyusunan dokumen dan cadangan solusi yang bersesuaian.
                    </div>
                </div>

                <div class="reveal faq-item bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left font-semibold text-navy hover:text-gold transition text-sm">
                        <span>Berapa lama proses permohonan?</span>
                        <svg class="faq-icon w-5 h-5 text-gold flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        Tempoh proses bergantung kepada kelengkapan dokumen, jenis produk pembiayaan, polisi institusi kewangan dan keadaan rekod pelanggan.
                    </div>
                </div>

                <div class="reveal faq-item bg-slate-50 rounded-xl border border-slate-100 overflow-hidden">
                    <button class="faq-btn w-full flex justify-between items-center p-5 text-left font-semibold text-navy hover:text-gold transition text-sm">
                        <span>Adakah maklumat pelanggan dirahsiakan?</span>
                        <svg class="faq-icon w-5 h-5 text-gold flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-answer hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        Ya. Semua maklumat dan dokumen pelanggan digunakan hanya untuk tujuan semakan dan permohonan berkaitan, tertakluk kepada persetujuan pelanggan.
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ── 6. FORM ──────────────────────────────────────────────────────── --}}
    <section id="contact" class="py-20 px-4 bg-slate-50">
        <div class="max-w-2xl mx-auto">
            <div class="reveal text-center mb-10">
                <p class="text-gold font-semibold text-xs tracking-widest uppercase mb-3">Mulakan Sekarang</p>
                <h2 class="text-3xl font-bold text-navy mb-3">Semak Kelayakan Anda</h2>
                <p class="text-slate-500 text-sm">Isi maklumat ringkas & upload dokumen untuk semakan awal.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="bg-navy px-6 py-4">
                    <p class="text-white font-semibold text-sm">Borang Semakan Kelayakan</p>
                    <p class="text-slate-400 text-xs mt-0.5">Semua maklumat adalah SULIT dan dilindungi</p>
                </div>

                <form id="borang-permohonan" action="#" method="POST" enctype="multipart/form-data" class="p-6 sm:p-8 space-y-8">
                    @csrf

                    {{-- Group 1: Maklumat Peribadi --}}
                    <fieldset>
                        <legend class="flex items-center gap-2 text-xs font-bold text-navy uppercase tracking-widest mb-5 pb-2 border-b border-gold-light w-full">
                            <span class="w-5 h-5 bg-gold-light text-gold rounded flex items-center justify-center font-bold">1</span>
                            Maklumat Peribadi
                        </legend>
                        <div class="space-y-4">
                            <div>
                                <label for="nama" class="block text-xs font-semibold text-slate-600 mb-1.5">Nama Penuh <span class="text-rose-500">*</span></label>
                                <input type="text" id="nama" name="nama" placeholder="Nama seperti dalam IC" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border text-sm transition" required>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="no_tele" class="block text-xs font-semibold text-slate-600 mb-1.5">No. Telefon / WhatsApp <span class="text-rose-500">*</span></label>
                                    <input type="tel" id="no_tele" name="no_tele" placeholder="+60 12-345 6789" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border text-sm transition" required>
                                </div>
                                <div>
                                    <label for="alamat_emel" class="block text-xs font-semibold text-slate-600 mb-1.5">Alamat Emel <span class="text-slate-400 font-normal">(Pilihan)</span></label>
                                    <input type="email" id="alamat_emel" name="alamat_emel" placeholder="nama@emel.com" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border text-sm transition">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="daerah" class="block text-xs font-semibold text-slate-600 mb-1.5">Daerah <span class="text-rose-500">*</span></label>
                                    <input type="text" id="daerah" name="daerah" placeholder="Contoh: Petaling Jaya" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border text-sm transition" required>
                                </div>
                                <div>
                                    <label for="poskod" class="block text-xs font-semibold text-slate-600 mb-1.5">Poskod <span class="text-rose-500">*</span></label>
                                    <input type="text" id="poskod" name="poskod" placeholder="Contoh: 47810" maxlength="5" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border text-sm transition" required>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    {{-- Group 2: Maklumat Pekerjaan --}}
                    <fieldset>
                        <legend class="flex items-center gap-2 text-xs font-bold text-navy uppercase tracking-widest mb-5 pb-2 border-b border-gold-light w-full">
                            <span class="w-5 h-5 bg-gold-light text-gold rounded flex items-center justify-center font-bold">2</span>
                            Maklumat Pekerjaan
                        </legend>
                        <div class="space-y-4">
                            <div>
                                <label for="sektor_pekerjaan" class="block text-xs font-semibold text-slate-600 mb-1.5">Sektor Pekerjaan <span class="text-rose-500">*</span></label>
                                <select id="sektor_pekerjaan" name="sektor_pekerjaan" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border bg-white text-sm transition" required>
                                    <option value="">Sila pilih sektor...</option>
                                    <option value="kerajaan">Kerajaan</option>
                                    <option value="glc">GLC (Syarikat Berkaitan Kerajaan)</option>
                                    <option value="berkanun">Badan Berkanun</option>
                                    <option value="swasta">Swasta</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="nama_majikan" class="block text-xs font-semibold text-slate-600 mb-1.5">Nama Majikan <span class="text-rose-500">*</span></label>
                                    <input type="text" id="nama_majikan" name="nama_majikan" placeholder="Contoh: Kementerian Pendidikan" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border text-sm transition" required>
                                </div>
                                <div>
                                    <label for="jawatan" class="block text-xs font-semibold text-slate-600 mb-1.5">Jawatan <span class="text-rose-500">*</span></label>
                                    <input type="text" id="jawatan" name="jawatan" placeholder="Contoh: Pegawai Tadbir" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border text-sm transition" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="gaji_asas" class="block text-xs font-semibold text-slate-600 mb-1.5">Gaji Asas (RM) <span class="text-rose-500">*</span></label>
                                    <input type="number" id="gaji_asas" name="gaji_asas" placeholder="Contoh: 3500" min="0" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border text-sm transition" required>
                                </div>
                                <div>
                                    <label for="status_pekerjaan" class="block text-xs font-semibold text-slate-600 mb-1.5">Status Pekerjaan <span class="text-rose-500">*</span></label>
                                    <select id="status_pekerjaan" name="status_pekerjaan" class="w-full rounded-lg border-slate-200 focus:border-navy focus:ring-navy p-2.5 border bg-white text-sm transition" required>
                                        <option value="">Sila pilih...</option>
                                        <option value="tetap">Tetap</option>
                                        <option value="kontrak">Kontrak</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-2">Masalah Utama <span class="text-rose-500">*</span> <span class="text-slate-400 font-normal">(Boleh pilih lebih dari satu)</span></label>
                                <div class="grid grid-cols-2 gap-2">
                                    <label class="flex items-center gap-2 p-2.5 rounded-lg border border-slate-200 hover:border-gold cursor-pointer text-sm text-slate-600 transition has-[:checked]:border-gold has-[:checked]:bg-gold-light">
                                        <input type="checkbox" name="masalah[]" value="komitmen_tinggi" class="accent-navy flex-shrink-0"> Komitmen Tinggi
                                    </label>
                                    <label class="flex items-center gap-2 p-2.5 rounded-lg border border-slate-200 hover:border-gold cursor-pointer text-sm text-slate-600 transition has-[:checked]:border-gold has-[:checked]:bg-gold-light">
                                        <input type="checkbox" name="masalah[]" value="ccris" class="accent-navy flex-shrink-0"> CCRIS
                                    </label>
                                    <label class="flex items-center gap-2 p-2.5 rounded-lg border border-slate-200 hover:border-gold cursor-pointer text-sm text-slate-600 transition has-[:checked]:border-gold has-[:checked]:bg-gold-light">
                                        <input type="checkbox" name="masalah[]" value="ctos" class="accent-navy flex-shrink-0"> CTOS
                                    </label>
                                    <label class="flex items-center gap-2 p-2.5 rounded-lg border border-slate-200 hover:border-gold cursor-pointer text-sm text-slate-600 transition has-[:checked]:border-gold has-[:checked]:bg-gold-light">
                                        <input type="checkbox" name="masalah[]" value="akpk" class="accent-navy flex-shrink-0"> AKPK
                                    </label>
                                    <label class="flex items-center gap-2 p-2.5 rounded-lg border border-slate-200 hover:border-gold cursor-pointer text-sm text-slate-600 transition has-[:checked]:border-gold has-[:checked]:bg-gold-light">
                                        <input type="checkbox" name="masalah[]" value="saa" class="accent-navy flex-shrink-0"> SAA
                                    </label>
                                    <label class="flex items-center gap-2 p-2.5 rounded-lg border border-slate-200 hover:border-gold cursor-pointer text-sm text-slate-600 transition has-[:checked]:border-gold has-[:checked]:bg-gold-light">
                                        <input type="checkbox" name="masalah[]" value="legal_action" class="accent-navy flex-shrink-0"> Legal Action
                                    </label>
                                    <label class="flex items-center gap-2 p-2.5 rounded-lg border border-slate-200 hover:border-gold cursor-pointer text-sm text-slate-600 transition col-span-2 has-[:checked]:border-gold has-[:checked]:bg-gold-light">
                                        <input type="checkbox" name="masalah[]" value="lain_lain" class="accent-navy flex-shrink-0"> Lain-lain
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    {{-- Group 3: Dokumen Sokongan --}}
                    <fieldset>
                        <legend class="flex items-center gap-2 text-xs font-bold text-navy uppercase tracking-widest mb-5 pb-2 border-b border-gold-light w-full">
                            <span class="w-5 h-5 bg-gold-light text-gold rounded flex items-center justify-center font-bold">3</span>
                            Dokumen Sokongan
                        </legend>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-2">Slip Gaji 3 Bulan Terkini <span class="text-rose-500">*</span></label>
                                
                                <div class="space-y-3">
                                    {{-- Bulan 1 (Terkini) --}}
                                    <div class="border-2 border-dashed border-slate-200 rounded-lg p-4 hover:border-gold transition">
                                        <label for="slip_gaji_1" class="block text-[11px] font-medium text-slate-500 mb-1.5">Bulan Pertama (Terkini)</label>
                                        <input type="file" id="slip_gaji_1" name="slip_gaji[]" class="w-full text-xs text-slate-600 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-navy file:text-white hover:file:bg-navy-dark transition" required>
                                    </div>

                                    {{-- Bulan 2 --}}
                                    <div class="border-2 border-dashed border-slate-200 rounded-lg p-4 hover:border-gold transition">
                                        <label for="slip_gaji_2" class="block text-[11px] font-medium text-slate-500 mb-1.5">Bulan Kedua</label>
                                        <input type="file" id="slip_gaji_2" name="slip_gaji[]" class="w-full text-xs text-slate-600 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-navy file:text-white hover:file:bg-navy-dark transition" required>
                                    </div>

                                    {{-- Bulan 3 --}}
                                    <div class="border-2 border-dashed border-slate-200 rounded-lg p-4 hover:border-gold transition">
                                        <label for="slip_gaji_3" class="block text-[11px] font-medium text-slate-500 mb-1.5">Bulan Ketiga</label>
                                        <input type="file" id="slip_gaji_3" name="slip_gaji[]" class="w-full text-xs text-slate-600 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-navy file:text-white hover:file:bg-navy-dark transition" required>
                                    </div>
                                </div>
                                
                                <p class="text-[10px] text-slate-400 mt-2">Sila muat naik slip gaji untuk 3 bulan secara berasingan. PDF atau imej. Maks 5MB setiap fail.</p>
                            </div>
                            <div>
                                 <label for="ctos_report" class="flex items-center justify-between gap-2 text-xs font-semibold text-slate-600 mb-1.5">
                                    <span>Laporan CTOS Terkini <span class="text-rose-500">*</span></span>
                                        <a href="#panduan-ctos" class="inline-flex items-center gap-1 text-[10px] font-semibold text-gold hover:text-navy transition whitespace-nowrap">
                                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Cara dapatkan?
                                    </a>
                                </label>
                                <div class="border-2 border-dashed border-slate-200 rounded-lg p-4 hover:border-gold transition">
                                    <input type="file" id="ctos_report" name="ctos_report" class="w-full text-xs text-slate-600 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-navy file:text-white hover:file:bg-navy-dark transition" required>
                                    <p class="text-[10px] text-slate-400 mt-1.5">PDF atau imej. Maks 5MB.</p>
                                </div>
                            </div>
                            {{-- EPF: shown only for Swasta --}}
                            <div id="epf_section" class="hidden">
                                <label for="penyata_epf" class="block text-xs font-semibold text-slate-600 mb-1.5">
                                    Penyata EPF 2 Tahun Terkini <span class="text-rose-500">*</span>
                                    <span class="text-blue-500 font-normal ml-1">(Swasta sahaja)</span>
                                </label>
                                <div class="border-2 border-dashed border-blue-200 rounded-lg p-4 hover:border-gold transition">
                                    <input type="file" id="penyata_epf" name="penyata_epf" class="w-full text-xs text-slate-600 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-navy file:text-white hover:file:bg-navy-dark transition">
                                    <p class="text-[10px] text-slate-400 mt-1.5">PDF atau imej. Maks 5MB.</p>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <button type="button" onclick="openConsentModal()" class="btn-gold-metallic w-full font-bold py-4 px-4 text-sm tracking-wide shadow-sm">
                        Hantar Permohonan Sekarang
                    </button>
                    <p class="text-center text-[10px] text-slate-400">
                        Dengan menghantar borang ini, anda bersetuju dengan <a href="#" class="text-navy underline">Dasar Privasi</a> kami.
                    </p>
                </form>

                {{-- Consent Modal --}}
                <div id="consent-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 hidden">
                    {{-- Backdrop --}}
                    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeConsentModal()"></div>

                    {{-- Modal card --}}
                    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg max-h-[90vh] flex flex-col">

                        {{-- Header --}}
                        <div class="px-6 pt-6 pb-4 border-b border-slate-100 flex items-start justify-between gap-4 flex-shrink-0">
                            <div>
                                <h3 class="font-bold text-slate-800 text-base leading-snug">Pengesahan & Persetujuan</h3>
                                <p class="text-xs text-slate-400 mt-0.5">Sila baca dan tandakan persetujuan anda sebelum menghantar</p>
                            </div>
                            <button onclick="closeConsentModal()" class="text-slate-400 hover:text-slate-600 transition mt-0.5 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        {{-- Scrollable body --}}
                        <div class="overflow-y-auto px-6 py-5 space-y-5 flex-1">

                            {{-- Declaration text --}}
                            <div class="bg-slate-50 rounded-xl p-4 border border-slate-200">
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Saya mengesahkan bahawa semua maklumat dan dokumen yang diberikan adalah benar. Saya bersetuju membenarkan <span class="font-semibold text-navy">Rahmah Consultancy Services</span> mengumpul, menyimpan, memproses dan berkongsi maklumat saya kepada bank, koperasi, institusi kewangan, banker, panel atau rakan strategik berkaitan bagi tujuan semakan kelayakan, penyatuan hutang, permohonan pembiayaan, pemulihan rekod dan susulan kes. Saya faham bahawa semakan ini <span class="font-semibold">tidak menjamin kelulusan</span>.
                                </p>
                            </div>

                            {{-- Mandatory checkboxes --}}
                            <div class="space-y-3">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Wajib</p>

                                <label class="flex items-start gap-3 cursor-pointer group">
                                    <input type="checkbox" id="modal-consent-pdpa" class="mt-0.5 accent-navy flex-shrink-0 w-4 h-4">
                                    <span class="text-xs text-slate-600 leading-relaxed group-hover:text-slate-800 transition">
                                        Saya telah membaca, memahami dan bersetuju dengan <a href="#" class="text-navy underline font-medium">Notis Perlindungan Data Peribadi</a>.
                                    </span>
                                </label>

                                <label class="flex items-start gap-3 cursor-pointer group">
                                    <input type="checkbox" id="modal-consent-contact" class="mt-0.5 accent-navy flex-shrink-0 w-4 h-4">
                                    <span class="text-xs text-slate-600 leading-relaxed group-hover:text-slate-800 transition">
                                        Saya bersetuju untuk dihubungi melalui WhatsApp/telefon/emel bagi tujuan semakan dan susulan kes.
                                    </span>
                                </label>
                            </div>

                            {{-- Optional marketing checkbox --}}
                            <div class="pt-2 border-t border-slate-100 space-y-3">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Pilihan</p>

                                <label class="flex items-start gap-3 cursor-pointer group">
                                    <input type="checkbox" id="modal-consent-marketing" name="consent_marketing" class="mt-0.5 accent-navy flex-shrink-0 w-4 h-4">
                                    <span class="text-xs text-slate-500 leading-relaxed group-hover:text-slate-700 transition">
                                        Saya bersetuju menerima maklumat promosi/pendidikan kewangan daripada Rahmah Consultancy Services.
                                    </span>
                                </label>
                            </div>

                            {{-- Inline error --}}
                            <p id="consent-error" class="hidden text-xs text-rose-500 font-medium">
                                Sila tandakan kedua-dua kotak wajib sebelum menghantar.
                            </p>

                        </div>

                        {{-- Footer actions --}}
                        <div class="px-6 py-4 border-t border-slate-100 flex gap-3 flex-shrink-0">
                            <button onclick="closeConsentModal()" class="flex-1 py-2.5 px-4 rounded-xl border border-slate-200 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition">
                                Batal
                            </button>
                            <button onclick="submitWithConsent()" class="flex-1 btn-gold-metallic py-2.5 px-4 text-sm font-bold rounded-xl">
                                Hantar Permohonan
                            </button>
                        </div>

                    </div>
                </div>

                <script>
                function openConsentModal() {
                    const form = document.getElementById('borang-permohonan') || document.querySelector('form');
                    if (form && !form.checkValidity()) {
                        form.reportValidity();
                        return;
                    }
                    document.getElementById('consent-modal').classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                }

                function closeConsentModal() {
                    document.getElementById('consent-modal').classList.add('hidden');
                    document.body.style.overflow = '';
                    document.getElementById('consent-error').classList.add('hidden');
                }

                function submitWithConsent() {
                    const pdpa    = document.getElementById('modal-consent-pdpa').checked;
                    const contact = document.getElementById('modal-consent-contact').checked;

                    if (!pdpa || !contact) {
                        document.getElementById('consent-error').classList.remove('hidden');
                        return;
                    }

                    // Sync marketing opt-in value into the real form before submit
                    const marketing = document.getElementById('modal-consent-marketing').checked;
                    const form = document.getElementById('borang-permohonan') || document.querySelector('form');
                    let hiddenMarketing = form.querySelector('input[name="consent_marketing"]');
                    if (!hiddenMarketing) {
                        hiddenMarketing = document.createElement('input');
                        hiddenMarketing.type  = 'hidden';
                        hiddenMarketing.name  = 'consent_marketing';
                        form.appendChild(hiddenMarketing);
                    }
                    hiddenMarketing.value = marketing ? '1' : '0';

                    form.submit();
                }

                document.addEventListener('keydown', e => {
                    if (e.key === 'Escape') closeConsentModal();
                });
                </script>
            </div>

            <div class="mt-6 flex flex-wrap justify-center gap-6 text-sm text-slate-500">
                <a href="mailto:hello@rahmahconsulting.com" class="flex items-center gap-2 hover:text-navy transition">
                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
                    rahmahconsultant@gmail.com
                </a>
                <a href="tel:" class="flex items-center gap-2 hover:text-navy transition">
                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    +60 12-345 6789
                </a>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.faq-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var answer = this.nextElementSibling;
                var icon = this.querySelector('.faq-icon');
                answer.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Show EPF upload only for Swasta sector
        document.getElementById('sektor_pekerjaan').addEventListener('change', function () {
            var epfSection = document.getElementById('epf_section');
            var epfInput   = document.getElementById('penyata_epf');
            if (this.value === 'swasta') {
                epfSection.classList.remove('hidden');
                epfInput.required = true;
            } else {
                epfSection.classList.add('hidden');
                epfInput.required = false;
                epfInput.value = '';
            }
        });
    </script>

    {{-- ── Scroll animations: reveal-on-scroll + count-up stats ────────── --}}
    <script>
    (function () {
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        /* ── Reveal on scroll (fade + rise + de-blur, staggered per group) ── */
        const reveals = document.querySelectorAll('.reveal');
        if (reduceMotion || !('IntersectionObserver' in window)) {
            reveals.forEach(el => el.classList.add('is-visible'));
        } else {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    // Stagger by position among sibling .reveal elements in the same container.
                    const siblings = el.parentElement
                        ? Array.from(el.parentElement.children).filter(c => c.classList.contains('reveal'))
                        : [el];
                    const index = Math.max(0, siblings.indexOf(el));
                    el.style.transitionDelay = Math.min(index * 90, 540) + 'ms';
                    el.classList.add('is-visible');
                    revealObserver.unobserve(el);
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
            reveals.forEach(el => revealObserver.observe(el));
        }

        /* ── Count-up numbers ── */
        const counters = document.querySelectorAll('.count-up');
        const format = (n) => n.toLocaleString('en-US');

        function runCount(el) {
            const target = parseFloat(el.dataset.target || '0');
            const prefix = el.dataset.prefix || '';
            const suffix = el.dataset.suffix || '';
            const settle = () => { el.textContent = prefix + format(target) + suffix; };

            if (reduceMotion || target === 0 || !('requestAnimationFrame' in window)) {
                settle();
                return;
            }

            const duration = 1600;
            let startTs = null;
            function step(ts) {
                if (startTs === null) startTs = ts;
                const p = Math.min((ts - startTs) / duration, 1);
                const eased = 1 - Math.pow(1 - p, 3); // easeOutCubic
                el.textContent = prefix + format(Math.round(target * eased)) + suffix;
                if (p < 1) requestAnimationFrame(step);
                else settle();
            }
            requestAnimationFrame(step);
        }

        if (!('IntersectionObserver' in window)) {
            counters.forEach(runCount);
        } else {
            const countObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    runCount(entry.target);
                    countObserver.unobserve(entry.target);
                });
            }, { threshold: 0.4 });
            counters.forEach(el => countObserver.observe(el));
        }
    })();
    </script>

@endsection
