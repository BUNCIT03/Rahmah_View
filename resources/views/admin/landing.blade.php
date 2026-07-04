@extends('layouts.admin')

@section('title', 'Tetapan Laman')
@section('page_title', 'Tetapan Laman')
@section('page_subtitle', 'Kemaskini maklumat hubungan dan kandungan laman utama')

@section('admin_content')

<div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

    <!-- WhatsApp Number -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-100">
            <h3 class="font-semibold text-slate-800 text-sm">Nombor WhatsApp</h3>
            <p class="text-xs text-slate-400 mt-0.5">Nombor yang menerima semua permohonan dari laman</p>
        </div>
        <div class="p-6">
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Nombor Telefon (dengan kod negara)</label>
                    <input type="tel" name="whatsapp_number" value="+60"
                           placeholder="+60123456789"
                           class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                    <p class="text-xs text-slate-400 mt-1.5">Contoh: +60123456789</p>
                </div>
                <button type="submit"
                        class="bg-navy hover:bg-navy-dark text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition">
                    Simpan Nombor
                </button>
            </form>
        </div>
    </div>

    <!-- Contact Details -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-100">
            <h3 class="font-semibold text-slate-800 text-sm">Maklumat Hubungan</h3>
            <p class="text-xs text-slate-400 mt-0.5">Dipaparkan di bahagian footer laman</p>
        </div>
        <div class="p-6">
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Alamat Emel</label>
                    <input type="email" name="contact_email"
                           placeholder="info@rahmahconsultancy.com"
                           class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Facebook URL</label>
                    <input type="url" name="facebook_url"
                           placeholder="https://facebook.com/rahmahconsultancy"
                           class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">TikTok URL</label>
                    <input type="url" name="tiktok_url"
                           placeholder="https://tiktok.com/@rahmahconsultancy"
                           class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Instagram URL</label>
                    <input type="url" name="instagram_url"
                           placeholder="https://instagram.com/rahmahconsultancy"
                           class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                </div>
                <button type="submit"
                        class="bg-navy hover:bg-navy-dark text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition">
                    Simpan Maklumat
                </button>
            </form>
        </div>
    </div>

    <!-- Hero Content -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden lg:col-span-2">
        <div class="px-6 py-4 border-b border-slate-100">
            <h3 class="font-semibold text-slate-800 text-sm">Kandungan Hero</h3>
            <p class="text-xs text-slate-400 mt-0.5">Tajuk dan teks utama di bahagian atas laman</p>
        </div>
        <div class="p-6">
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1.5">Tajuk Utama</label>
                        <input type="text" name="hero_title" value="Semak Kelayakan Anda"
                               class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1.5">Teks Butang (CTA)</label>
                        <input type="text" name="hero_cta" value="Semak Kelayakan Sekarang"
                               class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Sub-tajuk</label>
                    <textarea name="hero_subtitle" rows="2"
                              class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">Rahmah Consultancy Services menyediakan penyelesaian kewangan yang inovatif. Sertai lebih 10,000 pelanggan yang telah mempercayai kami.</textarea>
                </div>
                <button type="submit" class="bg-navy hover:bg-navy-dark text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition">
                    Simpan Kandungan
                </button>
            </form>
        </div>
    </div>

   <!-- Biodata Content -->
    <!-- Added h-full and flex classes to stretch the card -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden h-full flex flex-col">
        <div class="px-6 py-4 border-b border-slate-100">
            <h3 class="font-semibold text-slate-800 text-sm">Kandungan Biodata</h3>
            <p class="text-xs text-slate-400 mt-0.5">Biodata di bahagian laman (dipaparkan di bawah Hero Section)</p>
        </div>
        <!-- Added flex-grow and flex-col -->
        <div class="p-6 flex-grow flex flex-col">
            <!-- Added flex-grow and flex-col to the form -->
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6 flex-grow flex flex-col">
                @csrf
                
                <!-- 1. Image Upload Field -->
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Gambar Profil</label>
                    <input type="file" name="bio_image" accept="image/*"
                        class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-white focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                    <p class="text-xs text-slate-400 mt-1">Muat naik gambar beresolusi tinggi (format .jpg, .png).</p>
                </div>

                @php
                // Biodata Info
                $criteria = [
                    ['label' => 'Jawatan', 'name' => 'bio_jawatan', 'val' => 'Pengarah Urusan'],
                    ['label' => 'Nama',    'name' => 'bio_nama',    'val' => 'Khairul Amri Chamili'],
                    ['label' => 'Info',    'name' => 'bio_info',    'val' => 'Dengan lebih 8 tahun pengalaman dalam industri kewangan Malaysia, beliau telah membantu ribuan pelanggan mencapai kebebasan kewangan melalui penyelesaian yang inovatif dan terancang. Pakar dalam perancangan kewangan, semakan pinjaman, dan penyatuan hutang dikenali kerana pendekatan yang telus dan berorientasikan hasil.'],
                ];

                // 3 Cards Data Reference
                $stats = [
                    ['title' => 'Kad 1', 'val_name' => 'stat_1_val', 'val_data' => '8+', 'label_name' => 'stat_1_label', 'label_data' => 'Tahun Pengalaman'],
                    ['title' => 'Kad 2', 'val_name' => 'stat_2_val', 'val_data' => '10k+', 'label_name' => 'stat_2_label', 'label_data' => 'Pelanggan Dibantu'],
                    ['title' => 'Kad 3', 'val_name' => 'stat_3_val', 'val_data' => '91%', 'label_name' => 'stat_3_label', 'label_data' => 'Kadar Kelulusan'],
                ];

                // Social Media Links Reference
                $socials = [
                    ['label' => 'Facebook URL',  'name' => 'social_facebook',  'val' => 'https://facebook.com/username',  'placeholder' => 'https://facebook.com/...'],
                    ['label' => 'Instagram URL', 'name' => 'social_instagram', 'val' => 'https://instagram.com/username', 'placeholder' => 'https://instagram.com/...'],
                    ['label' => 'TikTok URL',    'name' => 'social_tiktok',    'val' => 'https://tiktok.com/@username',   'placeholder' => 'https://tiktok.com/...'],
                ];
                @endphp
                
                <div class="space-y-4">
                    @foreach($criteria as $c)
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1.5">{{ $c['label'] }}</label>
                        
                        @if($c['name'] == 'bio_info')
                            <!-- Increased rows from 4 to 6 to organically fill more space -->
                            <textarea name="{{ $c['name'] }}" rows="6" 
                                    class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">{{ $c['val'] }}</textarea>
                        @else
                            <input type="text" name="{{ $c['name'] }}" value="{{ $c['val'] }}" 
                                class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                        @endif
                    </div>
                    @endforeach
                </div>

                <hr class="border-slate-100">

                <!-- 2. The 3 Editable Cards Below -->
                <div>
                    <h4 class="font-semibold text-slate-800 text-sm mb-3">Statistik (3 Kad Bawah)</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach($stats as $stat)
                        <div class="p-4 border border-slate-100 bg-slate-50 rounded-lg space-y-3">
                            <h5 class="text-xs font-bold text-slate-700 uppercase">{{ $stat['title'] }}</h5>
                            
                            <!-- Card Value -->
                            <div>
                                <label class="block text-xs text-slate-500 mb-1">Nilai Teks (Kuning)</label>
                                <input type="text" name="{{ $stat['val_name'] }}" value="{{ $stat['val_data'] }}" 
                                    class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                            </div>
                            
                            <!-- Card Label -->
                            <div>
                                <label class="block text-xs text-slate-500 mb-1">Label Bawah</label>
                                <input type="text" name="{{ $stat['label_name'] }}" value="{{ $stat['label_data'] }}" 
                                    class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <hr class="border-slate-100">

                <!-- 3. Social Media Links Section -->
                <div>
                    <h4 class="font-semibold text-slate-800 text-sm mb-3">Pautan Media Sosial</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach($socials as $social)
                        <div>
                            <label class="block text-xs font-semibold text-slate-600 mb-1.5">{{ $social['label'] }}</label>
                            <input type="url" name="{{ $social['name'] }}" value="{{ $social['val'] }}" placeholder="{{ $social['placeholder'] }}"
                                class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Added mt-auto to push the button to the bottom of the container -->
                <div class="mt-auto pt-4">
                    <button type="submit" class="bg-navy hover:bg-navy-dark text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition w-fit">
                        Simpan Biodata
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Services Content -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-100">
        <h3 class="font-semibold text-slate-800 text-sm">Servis Kami</h3>
        <p class="text-xs text-slate-400 mt-0.5">Kemaskini maklumat perkhidmatan yang dipaparkan di halaman utama</p>
    </div>
    <div class="p-6">
        <form action="#" method="POST" class="space-y-6">
            @csrf
            
            <!-- Servis 1 -->
            <div class="bg-slate-50 p-4 rounded-lg border border-slate-100 space-y-4">
                <h4 class="text-sm font-bold text-slate-700 border-b border-slate-200 pb-2">Servis 1</h4>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Tajuk Servis</label>
                    <input type="text" name="service_1_title"
                           value="Perancangan Kewangan"
                           placeholder="Contoh: Perancangan Kewangan"
                           class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Penerangan</label>
                    <textarea name="service_1_desc" rows="3"
                              placeholder="Masukkan penerangan servis..."
                              class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">Kami membantu anda merancang kewangan peribadi dengan strategi yang tersusun untuk mencapai kebebasan kewangan.</textarea>
                </div>
            </div>

            <!-- Servis 2 -->
            <div class="bg-slate-50 p-4 rounded-lg border border-slate-100 space-y-4">
                <h4 class="text-sm font-bold text-slate-700 border-b border-slate-200 pb-2">Servis 2</h4>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Tajuk Servis</label>
                    <input type="text" name="service_2_title"
                           value="Semakan Kelayakan Pinjaman"
                           placeholder="Contoh: Semakan Kelayakan Pinjaman"
                           class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Penerangan</label>
                    <textarea name="service_2_desc" rows="3"
                              placeholder="Masukkan penerangan servis..."
                              class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">Semak kelayakan pinjaman anda dengan cepat dan mudah. Kami akan pandukan anda sepanjang proses permohonan.</textarea>
                </div>
            </div>

            <!-- Servis 3 -->
            <div class="bg-slate-50 p-4 rounded-lg border border-slate-100 space-y-4">
                <h4 class="text-sm font-bold text-slate-700 border-b border-slate-200 pb-2">Servis 3</h4>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Tajuk Servis</label>
                    <input type="text" name="service_3_title"
                           value="Pengurusan & Penyatuan Hutang"
                           placeholder="Contoh: Pengurusan & Penyatuan Hutang"
                           class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">Penerangan</label>
                    <textarea name="service_3_desc" rows="3"
                              placeholder="Masukkan penerangan servis..."
                              class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">Penyelesaian komprehensif untuk membantu anda menguruskan dan merestrukturkan hutang dengan lebih efektif.</textarea>
                </div>
            </div>

            <button type="submit"
                    class="bg-navy hover:bg-navy-dark text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition">
                Simpan Maklumat
            </button>
        </form>
    </div>
</div>

    <!-- Eligibility Criteria -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden lg:col-span-2">
        <div class="px-6 py-4 border-b border-slate-100">
            <h3 class="font-semibold text-slate-800 text-sm">Kriteria Kelayakan</h3>
            <p class="text-xs text-slate-400 mt-0.5">Gaji asas minimum bagi semakan awal (dipaparkan di FAQ)</p>
        </div>
        <div class="p-6">
            <form action="#" method="POST" class="space-y-4">
                @csrf
                @php
                $criteria = [
                    ['label' => 'Kerajaan',              'name' => 'min_gaji_kerajaan', 'val' => '1500'],
                    ['label' => 'GLC / Badan Berkanun',  'name' => 'min_gaji_glc',      'val' => '2500'],
                    ['label' => 'Swasta',                'name' => 'min_gaji_swasta',   'val' => '3000'],
                ];
                @endphp
                @foreach($criteria as $c)
                <div>
                    <label class="block text-xs font-semibold text-slate-600 mb-1.5">{{ $c['label'] }} <span class="text-slate-400 font-normal">(RM)</span></label>
                    <input type="number" name="{{ $c['name'] }}" value="{{ $c['val'] }}" min="0"
                           class="w-full text-sm border border-slate-200 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-navy/30 focus:border-navy transition">
                </div>
                @endforeach
                <button type="submit" class="bg-navy hover:bg-navy-dark text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition">
                    Simpan Kriteria
                </button>
            </form>
        </div>
    </div>

    <!-- Video Upload -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden lg:col-span-2">
        <div class="px-6 py-4 border-b border-slate-100">
            <h3 class="font-semibold text-slate-800 text-sm">Video Iklan</h3>
            <p class="text-xs text-slate-400 mt-0.5">Muat naik video promosi untuk dipaparkan di laman utama</p>
        </div>
        <div class="p-6">
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div class="border-2 border-dashed border-slate-200 rounded-xl p-8 text-center hover:border-navy/30 transition cursor-pointer">
                    <svg class="w-10 h-10 text-slate-300 mx-auto mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    <p class="text-sm text-slate-500 mb-1">Seret fail video ke sini atau</p>
                    <label class="inline-block cursor-pointer text-navy hover:text-gold font-medium text-sm transition">
                        pilih fail
                        <input type="file" name="video_iklan" accept="video/*" class="hidden">
                    </label>
                    <p class="text-xs text-slate-400 mt-2">MP4, MOV — Saiz maksimum 100MB</p>
                </div>
                <button type="submit"
                        class="bg-navy hover:bg-navy-dark text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition">
                    Muat Naik Video
                </button>
            </form>
        </div>
    </div>

</div>

@endsection
