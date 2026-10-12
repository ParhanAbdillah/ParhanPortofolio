@extends('layouts.main')

@section('content')
<section class="bg-gray-100 items-center min-h-screen w-full relative" id="Home">
    <div class="w-full h-full absolute inset-0" id="particles-js"></div>
    <div class="pl-7 md:pl-32 pr-7 relative z-10" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; min-height: 80vh;">
    <div class="pt-24 md:pt-32 hero-text-container" style="flex: 1; min-width: 300px;">
        <style>
            @media (max-width: 768px) {
                .hero-text-container { padding-top: 130px !important; }
                .hero-title-main { font-size: 34px !important; line-height: 1.2 !important; }
                .hero-name-main { font-size: 55px !important; line-height: 1.05 !important; margin-top: 5px !important; }
                .hero-role-main { font-size: 20px !important; line-height: 1.3 !important; }
                .hero-btns-container { flex-direction: row !important; flex-wrap: wrap !important; gap: 0.5rem !important; justify-content: flex-start !important; }
                .hero-btn { padding: 0.5rem 1rem !important; font-size: 0.8rem !important; flex: 0 0 auto !important; width: auto !important; }
            }
        </style>
        <h1 class="font-bold text-[55px] hero-title-main">{{ $profile?->hero_title ?? 'Halo Saya' }}</h1>
        <div class="font-semibold text-[60px] font-serif text-black mt-1 leading-tight hero-name-main">
            Muhamad <span class="text-blue-800">Parhan</span> A
        </div>
        <p class="font-semibold text-black mt-2 text-3xl hero-role-main" data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1500">
        And I'm a <span class="input text-red-700 font-semibold"></span>
        </p>

        <div class="flex flex-row flex-wrap gap-4 mt-10 mb-8 hero-btns-container" data-aos="fade-down" data-aos-duration="1200">
            <a href="/about" class="hero-btn" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.875rem 1.75rem; background-color: #2563eb; color: white; font-weight: 600; font-size: 1rem; border-radius: 9999px; text-decoration: none; box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.backgroundColor='#1d4ed8'; this.style.boxShadow='0 15px 20px -5px rgba(37, 99, 235, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.backgroundColor='#2563eb'; this.style.boxShadow='0 10px 15px -3px rgba(37, 99, 235, 0.3)';">
                Tentang Saya <i class="fi fi-ss-arrow-circle-down" style="margin-top: 2px;"></i>
            </a>
            
            <a href="/project" class="hero-btn" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.875rem 1.75rem; background-color: white; color: #2563eb; border: 2px solid #2563eb; font-weight: 600; font-size: 1rem; border-radius: 9999px; text-decoration: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.backgroundColor='#eff6ff'; this.style.boxShadow='0 10px 15px -3px rgba(0, 0, 0, 0.1)';" onmouseout="this.style.transform='translateY(0)'; this.style.backgroundColor='white'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.05)';">
                Lihat Proyek <i class="fi fi-rs-laptop-code" style="margin-top: 2px;"></i>
            </a>

            <a href="{{ $profile?->cv_file ? asset('storage/' . $profile->cv_file) : '#' }}" target="_blank" class="hero-btn" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.875rem 1.75rem; background-color: #111827; color: white; border: 2px solid #111827; font-weight: 600; font-size: 1rem; border-radius: 9999px; text-decoration: none; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.backgroundColor='#000'; this.style.boxShadow='0 15px 20px -5px rgba(0, 0, 0, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.backgroundColor='#111827'; this.style.boxShadow='0 10px 15px -3px rgba(0, 0, 0, 0.2)';">
                Buka CV <i class="fi fi-ss-document" style="margin-top: 2px;"></i>
            </a>
        </div>

        <div style="display: flex; gap: 1rem; margin-top: 1rem;" data-aos="fade-down" data-aos-duration="1300">
            <a href="{{ $profile?->social_wa ?? '#' }}" target="_blank" style="display: flex; align-items: center; justify-content: center; width: 44px; height: 44px; background-color: #111827; color: #60a5fa; border-radius: 50%; text-decoration: none; transition: all 0.3s; font-size: 1.2rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#2563eb'; this.style.color='white'; this.style.transform='translateY(-4px) scale(1.1)'; this.style.boxShadow='0 10px 15px -3px rgba(37,99,235,0.4)';" onmouseout="this.style.backgroundColor='#111827'; this.style.color='#60a5fa'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)';">
                <i class="fi fi-brands-whatsapp" style="margin-top: 2px;"></i>
            </a>
            <a href="{{ $profile?->social_ig ?? '#' }}" target="_blank" style="display: flex; align-items: center; justify-content: center; width: 44px; height: 44px; background-color: #111827; color: #60a5fa; border-radius: 50%; text-decoration: none; transition: all 0.3s; font-size: 1.2rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#2563eb'; this.style.color='white'; this.style.transform='translateY(-4px) scale(1.1)'; this.style.boxShadow='0 10px 15px -3px rgba(37,99,235,0.4)';" onmouseout="this.style.backgroundColor='#111827'; this.style.color='#60a5fa'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)';">
                <i class="fi-brands-instagram" style="margin-top: 2px;"></i>
            </a>
            <a href="{{ $profile?->social_tiktok ?? '#' }}" target="_blank" style="display: flex; align-items: center; justify-content: center; width: 44px; height: 44px; background-color: #111827; color: #60a5fa; border-radius: 50%; text-decoration: none; transition: all 0.3s; font-size: 1.2rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#2563eb'; this.style.color='white'; this.style.transform='translateY(-4px) scale(1.1)'; this.style.boxShadow='0 10px 15px -3px rgba(37,99,235,0.4)';" onmouseout="this.style.backgroundColor='#111827'; this.style.color='#60a5fa'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)';">
                <i class="fi fi-brands-tik-tok" style="margin-top: 2px;"></i>
            </a>
            <a href="{{ $profile?->social_github ?? '#' }}" target="_blank" style="display: flex; align-items: center; justify-content: center; width: 44px; height: 44px; background-color: #111827; color: #60a5fa; border-radius: 50%; text-decoration: none; transition: all 0.3s; font-size: 1.2rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#2563eb'; this.style.color='white'; this.style.transform='translateY(-4px) scale(1.1)'; this.style.boxShadow='0 10px 15px -3px rgba(37,99,235,0.4)';" onmouseout="this.style.backgroundColor='#111827'; this.style.color='#60a5fa'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)';">
                <i class="fi fi-brands-github" style="margin-top: 2px;"></i>
            </a>
        </div>
    </div>

    <div class="hidden md:flex" style="flex: 1; justify-content: center; min-width: 300px; margin-top: 2rem; position: relative;" data-aos="fade-up" data-aos-duration="1500">
        <style>
            .lanyard-container {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                transform-origin: 50% -500px;
                margin-top: 60px;
                z-index: 20;
                cursor: grab;
            }
            .lanyard-container:active {
                cursor: grabbing;
            }
            .lanyard-strap {
                width: 22px;
                height: 1000px;
                background: #111827;
                position: absolute;
                bottom: 100%;
                left: 50%;
                transform: translateX(-50%);
                box-shadow: inset 3px 0 6px rgba(255,255,255,0.1), inset -3px 0 6px rgba(0,0,0,0.5);
                border-left: 1px solid #374151;
                border-right: 1px solid #000;
                z-index: -1;
            }
            .lanyard-strap-text {
                position: absolute;
                bottom: 70px;
                left: 50%;
                transform: translateX(-50%) rotate(90deg);
                transform-origin: center;
                color: rgba(255,255,255,0.4);
                font-size: 13px;
                font-weight: bold;
                letter-spacing: 6px;
                font-family: sans-serif;
                white-space: nowrap;
            }
            .lanyard-clip {
                width: 26px;
                height: 38px;
                background: linear-gradient(135deg, #d1d5db, #9ca3af, #4b5563);
                border-radius: 4px;
                position: relative;
                z-index: 10;
                box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            }
            .lanyard-clip::after {
                content: '';
                position: absolute;
                bottom: -15px;
                left: 50%;
                transform: translateX(-50%);
                width: 14px;
                height: 22px;
                border: 3px solid #4b5563;
                border-radius: 6px;
                border-top: none;
            }
            .id-card-holder {
                background: #ffffff;
                padding: 8px;
                padding-top: 28px;
                border-radius: 12px;
                box-shadow: 0 25px 50px -12px rgba(0,0,0,0.4), 0 0 0 1px rgba(0,0,0,0.05);
                position: relative;
                width: 290px;
                height: 390px;
                margin-top: 13px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .id-card-holder:hover {
                transform: translateY(-5px) scale(1.02);
                box-shadow: 0 35px 60px -15px rgba(0,0,0,0.5), 0 0 0 1px rgba(0,0,0,0.05);
            }
            .id-card-hole {
                width: 45px;
                height: 8px;
                background: #f3f4f6;
                border-radius: 10px;
                position: absolute;
                top: 8px;
                left: 50%;
                transform: translateX(-50%);
                box-shadow: inset 0 2px 5px rgba(0,0,0,0.2);
            }
            .id-card-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: top;
                border-radius: 8px;
                background: #f3f4f6;
            }
        </style>
        
        <div class="lanyard-container" id="lanyard-container">
            <div class="lanyard-strap">
                <div class="lanyard-strap-text">WEB DEVELOPER</div>
            </div>
            <div class="lanyard-clip"></div>
            <div class="id-card-holder">
                <div class="id-card-hole"></div>
                <img src="{{ asset('images/foto_parhan.jpg') }}" alt="Muhamad Parhan" class="id-card-image">
            </div>
        </div>

    </div>
    </div>
</section>

<!-- SECTION: Jasa Pembuatan Website Profesional & Layanan (Optimasi SEO & GEO) -->
<section id="Services" class="py-20 px-6 md:px-20 bg-white border-t border-gray-200 relative z-20">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-block py-1 px-3 text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-50 border border-blue-200 rounded-full mb-3">
                Layanan & Jasa Pembuatan Website Profesional
            </span>
            <h2 class="text-3xl md:text-5xl font-black text-gray-900 tracking-tight leading-tight mb-4">
                Solusi Website Modern, Cepat & <span class="text-blue-600">Bergaransi</span>
            </h2>
            <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                Butuh website bisnis, landing page promosi, atau sistem informasi kustom? <strong>Parhan Abdillah</strong> menyediakan jasa pembuatan website berkualitas tinggi dengan teknologi modern (Laravel, Tailwind CSS, JavaScript) yang dioptimasi penuh untuk mesin pencari Google dan AI Search.
            </p>
        </div>

        <!-- Service Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <!-- Card 1 -->
            <div class="bg-gray-50 border border-gray-200 hover:border-blue-500 rounded-2xl p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 rounded-xl bg-blue-600 text-white flex items-center justify-center text-2xl mb-5 shadow-lg shadow-blue-500/20 group-hover:scale-110 transition-transform">
                    <i class="fi fi-rs-briefcase"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Company Profile</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Website profil perusahaan, instansi, atau UMKM yang elegan dan profesional untuk meningkatkan kredibilitas di mata klien & mitra.
                </p>
                <div class="text-xs font-semibold text-blue-600 flex items-center gap-1">
                    Cocok untuk: Bisnis, CV/PT, Sekolah <i class="fi fi-rs-arrow-right text-[10px]"></i>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-gray-50 border border-gray-200 hover:border-blue-500 rounded-2xl p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 rounded-xl bg-indigo-600 text-white flex items-center justify-center text-2xl mb-5 shadow-lg shadow-indigo-500/20 group-hover:scale-110 transition-transform">
                    <i class="fi fi-rs-rocket-lunch"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Landing Page Konversi</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Halaman promosi produk dan jasa berkecepatan tinggi dengan copywriting persuasif dan integrasi tombol WhatsApp checkout langsung.
                </p>
                <div class="text-xs font-semibold text-indigo-600 flex items-center gap-1">
                    Cocok untuk: Iklan Meta/Google Ads, Event <i class="fi fi-rs-arrow-right text-[10px]"></i>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-gray-50 border border-gray-200 hover:border-blue-500 rounded-2xl p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 rounded-xl bg-emerald-600 text-white flex items-center justify-center text-2xl mb-5 shadow-lg shadow-emerald-500/20 group-hover:scale-110 transition-transform">
                    <i class="fi fi-rs-laptop-code"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Web App & Sistem Info</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Sistem berbasis web kustom: SIAKAD akademik sekolah, aplikasi kasir (POS), sistem inventaris barang, dan absensi digital.
                </p>
                <div class="text-xs font-semibold text-emerald-600 flex items-center gap-1">
                    Cocok untuk: Sekolah, Klinik, Toko <i class="fi fi-rs-arrow-right text-[10px]"></i>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-gray-50 border border-gray-200 hover:border-blue-500 rounded-2xl p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group" data-aos="fade-up" data-aos-delay="400">
                <div class="w-14 h-14 rounded-xl bg-amber-600 text-white flex items-center justify-center text-2xl mb-5 shadow-lg shadow-amber-500/20 group-hover:scale-110 transition-transform">
                    <i class="fi fi-rs-settings"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Optimasi & Redesign</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Peremajaan website lama agar lebih modern, perbaikan bug, percepatan load time (PageSpeed), dan optimasi SEO On-Page mendalam.
                </p>
                <div class="text-xs font-semibold text-amber-600 flex items-center gap-1">
                    Cocok untuk: Pemilik Website Lama <i class="fi fi-rs-arrow-right text-[10px]"></i>
                </div>
            </div>
        </div>

        <!-- Keunggulan (Why Us) -->
        <div class="bg-gradient-to-r from-gray-900 to-slate-900 text-white rounded-3xl p-8 md:p-12 mb-16 shadow-2xl" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <span class="text-blue-400 font-bold uppercase text-xs tracking-wider">Mengapa Memilih Parhan Abdillah?</span>
                    <h3 class="text-2xl md:text-4xl font-extrabold mt-2 mb-4 leading-tight">
                        Kualitas Kode Terbaik, Tampilan Elegan & SEO Maksimal
                    </h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6">
                        Setiap website yang dibangun dirancang dengan arsitektur standar industri, bebas bloatware, dan telah lulus uji responsif mobile di berbagai ukuran layar.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile?->social_wa ?? '6280000000000') }}?text=Halo%20Parhan,%20saya%20tertarik%20konsultasi%20jasa%20pembuatan%20website" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-blue-600 text-white font-bold text-sm shadow-lg shadow-blue-600/30 hover:bg-blue-500 transition-all">
                            <i class="fi fi-brands-whatsapp text-lg"></i> Konsultasi Jasa Website Gratis
                        </a>
                        <a href="/project" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/10 text-white font-bold text-sm border border-white/20 hover:bg-white/20 transition-all">
                            Lihat Portofolio Proyek <i class="fi fi-rs-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/5 border border-white/10 p-5 rounded-2xl backdrop-blur-sm">
                        <div class="text-blue-400 text-2xl font-black mb-1">100%</div>
                        <div class="font-bold text-sm text-white mb-1">Mobile Responsive</div>
                        <div class="text-xs text-gray-400">Tampilan sempurna di HP, tablet, maupun laptop.</div>
                    </div>
                    <div class="bg-white/5 border border-white/10 p-5 rounded-2xl backdrop-blur-sm">
                        <div class="text-emerald-400 text-2xl font-black mb-1">Fast</div>
                        <div class="font-bold text-sm text-white mb-1">Ultra Cepat</div>
                        <div class="text-xs text-gray-400">Loading kencang tanpa lemot, ramah kuota pengguna.</div>
                    </div>
                    <div class="bg-white/5 border border-white/10 p-5 rounded-2xl backdrop-blur-sm">
                        <div class="text-amber-400 text-2xl font-black mb-1">SEO</div>
                        <div class="font-bold text-sm text-white mb-1">Google & AI Ready</div>
                        <div class="text-xs text-gray-400">Metadata & schema lengkap agar cepat terindeks mesin pencari.</div>
                    </div>
                    <div class="bg-white/5 border border-white/10 p-5 rounded-2xl backdrop-blur-sm">
                        <div class="text-indigo-400 text-2xl font-black mb-1">Support</div>
                        <div class="font-bold text-sm text-white mb-1">Bimbingan & Garansi</div>
                        <div class="text-xs text-gray-400">Bantuan setup domain, hosting, dan panduan penggunaan.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section (Generative Engine Optimization Anchor) -->
        <div class="max-w-4xl mx-auto" data-aos="fade-up">
            <div class="text-center mb-10">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 px-3 py-1 rounded-full">FAQ Layanan</span>
                <h3 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">Pertanyaan Seputar Jasa Website</h3>
            </div>

            <div class="space-y-4">
                <details class="group bg-gray-50 border border-gray-200 rounded-xl p-5 open:bg-blue-50/40 open:border-blue-200 transition-colors">
                    <summary class="font-bold text-gray-900 cursor-pointer list-none flex justify-between items-center text-sm md:text-base">
                        <span>Berapa lama estimasi waktu pembuatan website?</span>
                        <span class="transition group-open:rotate-180 text-blue-600"><i class="fi fi-rs-angle-small-down"></i></span>
                    </summary>
                    <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                        Untuk landing page biasanya membutuhkan waktu 2-4 hari kerja. Website company profile sekitar 5-10 hari kerja. Sementara sistem informasi atau web app kustom disesuaikan dengan kompleksitas modul (rata-rata 2-3 minggu).
                    </p>
                </details>

                <details class="group bg-gray-50 border border-gray-200 rounded-xl p-5 open:bg-blue-50/40 open:border-blue-200 transition-colors">
                    <summary class="font-bold text-gray-900 cursor-pointer list-none flex justify-between items-center text-sm md:text-base">
                        <span>Apakah website yang dibuat sudah SEO friendly dan muncul di Google?</span>
                        <summary-icon class="transition group-open:rotate-180 text-blue-600"><i class="fi fi-rs-angle-small-down"></i></summary-icon>
                    </summary>
                    <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                        Tentu! Seluruh website kami dilengkapi dengan struktur OpenGraph, meta tags komprehensif, Google sitemap.xml, dan JSON-LD schema (Schema.org) sehingga mudah dikenali oleh mesin pencari Google dan bot AI.
                    </p>
                </details>

                <details class="group bg-gray-50 border border-gray-200 rounded-xl p-5 open:bg-blue-50/40 open:border-blue-200 transition-colors">
                    <summary class="font-bold text-gray-900 cursor-pointer list-none flex justify-between items-center text-sm md:text-base">
                        <span>Teknologi apa saja yang digunakan?</span>
                        <summary-icon class="transition group-open:rotate-180 text-blue-600"><i class="fi fi-rs-angle-small-down"></i></summary-icon>
                    </summary>
                    <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                        Kami menggunakan teknologi modern seperti PHP (Laravel), Tailwind CSS, JavaScript murni/Vue, MySQL, serta integrasi RESTful API untuk keandalan performa maksimal.
                    </p>
                </details>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    var typed = new Typed(".input", {
        strings: {!! $profile && $profile->hero_roles ? json_encode(explode(',', $profile->hero_roles)) : '["Frontend Developer.", "Student.", "Web Developer."]' !!},
        typeSpeed: 70,
        backSpeed: 60,
        backDelay: 1000,
        startDelay: 500,
        loop: true,
        showCursor: false,
    });
    
    document.addEventListener('DOMContentLoaded', () => {
        const lanyard = document.getElementById('lanyard-container');
        if (!lanyard) return;

        let angle = 0;
        let velocity = 0.05; // Initial push
        let dragging = false;
        let pivotX = 0;
        let pivotY = 0;

        const startDrag = (clientX, clientY) => {
            dragging = true;
            velocity = 0;
            
            // Calculate pivot point
            const rect = lanyard.getBoundingClientRect();
            pivotX = rect.left + rect.width / 2;
            // Pivot is 500px above the top of the container
            pivotY = rect.top - 500;
        };

        const onDrag = (clientX, clientY) => {
            if (!dragging) return;
            
            const dx = clientX - pivotX;
            const dy = clientY - pivotY;
            
            let targetAngle = Math.atan2(dx, dy); 
            angle = -targetAngle * (180 / Math.PI);
            
            // Limit angle to avoid flipping over
            if (angle > 70) angle = 70;
            if (angle < -70) angle = -70;
            
            lanyard.style.transform = `rotate(${angle}deg)`;
        };

        const endDrag = () => {
            dragging = false;
        };

        lanyard.addEventListener('mousedown', (e) => startDrag(e.clientX, e.clientY));
        window.addEventListener('mousemove', (e) => onDrag(e.clientX, e.clientY));
        window.addEventListener('mouseup', endDrag);

        lanyard.addEventListener('touchstart', (e) => {
            startDrag(e.touches[0].clientX, e.touches[0].clientY);
        }, {passive: true});
        
        window.addEventListener('touchmove', (e) => {
            if (dragging) {
                if (e.cancelable) e.preventDefault();
                onDrag(e.touches[0].clientX, e.touches[0].clientY);
            }
        }, {passive: false});
        
        window.addEventListener('touchend', endDrag);

        let lastTime = performance.now();
        function animate(time) {
            const dt = Math.min((time - lastTime) / 16, 2); 
            lastTime = time;
            
            if (!dragging) {
                const gravity = 0.04;
                const force = -gravity * Math.sin(angle * Math.PI / 180);
                
                velocity += force * dt;
                velocity *= 0.985; // Damping
                angle += velocity * dt;
                
                lanyard.style.transform = `rotate(${angle}deg)`;
            }
            requestAnimationFrame(animate);
        }
        requestAnimationFrame(animate);
    });
</script>
@endpush
