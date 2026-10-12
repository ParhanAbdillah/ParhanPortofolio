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
<section id="Services" class="svc-section">
    <style>
        .svc-section {
            background-color: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 5rem 1.5rem;
            position: relative;
            z-index: 20;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            box-sizing: border-box;
        }
        .svc-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .svc-header {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 3.5rem auto;
        }
        .svc-badge {
            display: inline-block;
            padding: 0.35rem 1rem;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #1d4ed8;
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 9999px;
            margin-bottom: 1rem;
        }
        .svc-title {
            font-size: clamp(1.85rem, 3.5vw, 2.75rem);
            font-weight: 900;
            color: #0f172a;
            line-height: 1.2;
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
        }
        .svc-title-highlight {
            color: #2563eb;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .svc-desc {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.7;
        }
        
        /* Grid 4 Cards */
        .svc-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3.5rem;
        }
        .svc-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 1.75rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.04), 0 2px 4px -2px rgba(0, 0, 0, 0.02);
            position: relative;
            overflow: hidden;
        }
        .svc-card:hover {
            transform: translateY(-6px);
            border-color: #93c5fd;
            box-shadow: 0 20px 25px -5px rgba(37, 99, 235, 0.1), 0 8px 10px -6px rgba(37, 99, 235, 0.05);
        }
        .svc-icon-box {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #ffffff;
            margin-bottom: 1.25rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        .svc-icon-blue { background: linear-gradient(135deg, #2563eb, #1d4ed8); }
        .svc-icon-purple { background: linear-gradient(135deg, #6366f1, #4f46e5); }
        .svc-icon-emerald { background: linear-gradient(135deg, #059669, #047857); }
        .svc-icon-amber { background: linear-gradient(135deg, #d97706, #b45309); }

        .svc-card-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 0.5rem;
            letter-spacing: -0.01em;
        }
        .svc-card-text {
            color: #64748b;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 1.25rem;
            flex-grow: 1;
        }
        .svc-card-badge {
            font-size: 0.78rem;
            font-weight: 600;
            color: #2563eb;
            background: #eff6ff;
            padding: 0.4rem 0.75rem;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        /* Dark Banner Keunggulan */
        .svc-banner {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            border-radius: 24px;
            padding: 3rem;
            color: #ffffff;
            margin-bottom: 3.5rem;
            box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.25);
            border: 1px solid #334155;
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.5rem;
            align-items: center;
        }
        @media(min-width: 992px) {
            .svc-banner {
                grid-template-columns: 1.1fr 0.9fr;
            }
        }
        .svc-banner-tag {
            color: #60a5fa;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            display: block;
            margin-bottom: 0.5rem;
        }
        .svc-banner-h3 {
            font-size: clamp(1.5rem, 2.5vw, 2.25rem);
            font-weight: 900;
            line-height: 1.25;
            margin-bottom: 1rem;
        }
        .svc-banner-p {
            color: #94a3b8;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.75rem;
        }
        .svc-btn-group {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .svc-btn-wa {
            background: #2563eb;
            color: #ffffff;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.4);
            transition: all 0.2s;
        }
        .svc-btn-wa:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }
        .svc-btn-portfolio {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.2s;
        }
        .svc-btn-portfolio:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .svc-stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .svc-stat-box {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: 1.25rem;
            backdrop-filter: blur(8px);
        }
        .svc-stat-val {
            font-size: 1.5rem;
            font-weight: 900;
            margin-bottom: 0.25rem;
        }
        .svc-stat-lbl {
            font-size: 0.85rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 0.25rem;
        }
        .svc-stat-sub {
            font-size: 0.72rem;
            color: #94a3b8;
            line-height: 1.4;
        }

        /* FAQ Accordion */
        .svc-faq-section {
            max-width: 800px;
            margin: 0 auto;
        }
        .svc-faq-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 1.25rem;
            margin-bottom: 0.85rem;
            cursor: pointer;
            transition: all 0.2s;
        }
        .svc-faq-item[open] {
            background: #eff6ff;
            border-color: #bfdbfe;
        }
        .svc-faq-q {
            font-weight: 700;
            color: #0f172a;
            font-size: 0.95rem;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .svc-faq-q::-webkit-details-marker { display: none; }
        .svc-faq-a {
            color: #475569;
            font-size: 0.88rem;
            line-height: 1.6;
            margin-top: 0.75rem;
            padding-top: 0.75rem;
            border-top: 1px dashed rgba(0, 0, 0, 0.08);
        }
    </style>

    <div class="svc-container">
        <!-- Section Header -->
        <div class="svc-header">
            <span class="svc-badge">Layanan & Jasa Pembuatan Website</span>
            <h2 class="svc-title">
                Solusi Website Modern, Cepat & <span class="svc-title-highlight">Bergaransi</span>
            </h2>
            <p class="svc-desc">
                Butuh website bisnis, landing page promosi, atau sistem informasi kustom? <strong>Parhan Abdillah</strong> menyediakan jasa pembuatan website berkualitas tinggi dengan arsitektur modern (Laravel, Tailwind CSS, JavaScript) yang dioptimasi penuh untuk mesin pencari Google dan AI Search.
            </p>
        </div>

        <!-- Service Cards Grid -->
        <div class="svc-grid">
            <!-- Card 1 -->
            <div class="svc-card">
                <div class="svc-icon-box svc-icon-blue">
                    <i class="fi fi-rs-briefcase"></i>
                </div>
                <h3 class="svc-card-title">Company Profile</h3>
                <p class="svc-card-text">
                    Website profil perusahaan, instansi, atau UMKM yang elegan dan profesional untuk meningkatkan kredibilitas di mata klien & calon mitra bisnis.
                </p>
                <div>
                    <span class="svc-card-badge">
                        Cocok untuk: Bisnis, CV/PT, Sekolah <i class="fi fi-rs-arrow-right" style="font-size: 10px;"></i>
                    </span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="svc-card">
                <div class="svc-icon-box svc-icon-purple">
                    <i class="fi fi-rs-rocket-lunch"></i>
                </div>
                <h3 class="svc-card-title">Landing Page Konversi</h3>
                <p class="svc-card-text">
                    Halaman promosi produk dan jasa berkecepatan tinggi dengan copywriting persuasif dan integrasi tombol WhatsApp checkout langsung.
                </p>
                <div>
                    <span class="svc-card-badge">
                        Cocok untuk: Iklan Meta/Google Ads, Event <i class="fi fi-rs-arrow-right" style="font-size: 10px;"></i>
                    </span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="svc-card">
                <div class="svc-icon-box svc-icon-emerald">
                    <i class="fi fi-rs-laptop-code"></i>
                </div>
                <h3 class="svc-card-title">Web App & Sistem Info</h3>
                <p class="svc-card-text">
                    Sistem aplikasi web kustom: SIAKAD akademik sekolah, aplikasi kasir (POS), sistem inventaris barang, dan absensi digital terintegrasi.
                </p>
                <div>
                    <span class="svc-card-badge">
                        Cocok untuk: Sekolah, Klinik, Toko <i class="fi fi-rs-arrow-right" style="font-size: 10px;"></i>
                    </span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="svc-card">
                <div class="svc-icon-box svc-icon-amber">
                    <i class="fi fi-rs-settings"></i>
                </div>
                <h3 class="svc-card-title">Optimasi & Redesign</h3>
                <p class="svc-card-text">
                    Peremajaan website lama agar lebih modern, perbaikan bug kode, percepatan load time (PageSpeed 90+), dan optimasi SEO On-Page mendalam.
                </p>
                <div>
                    <span class="svc-card-badge">
                        Cocok untuk: Pemilik Website Lama <i class="fi fi-rs-arrow-right" style="font-size: 10px;"></i>
                    </span>
                </div>
            </div>
        </div>

        <!-- Keunggulan (Why Us) Banner -->
        <div class="svc-banner">
            <div>
                <span class="svc-banner-tag">// Mengapa Memilih Parhan Abdillah?</span>
                <h3 class="svc-banner-h3">
                    Kualitas Kode Terbaik, Desain Eksklusif & SEO Maksimal
                </h3>
                <p class="svc-banner-p">
                    Setiap website dirancang dengan arsitektur rapi standar industri, bebas bloatware, dan telah lulus uji responsif mobile di berbagai ukuran perangkat.
                </p>
                <div class="svc-btn-group">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile?->social_wa ?? '6280000000000') }}?text=Halo%20Parhan,%20saya%20tertarik%20konsultasi%20jasa%20pembuatan%20website" target="_blank" class="svc-btn-wa">
                        <i class="fi fi-brands-whatsapp"></i> Konsultasi Jasa Website Gratis
                    </a>
                    <a href="/project" class="svc-btn-portfolio">
                        Lihat Portofolio Proyek <i class="fi fi-rs-arrow-right" style="font-size: 10px;"></i>
                    </a>
                </div>
            </div>

            <div class="svc-stats-grid">
                <div class="svc-stat-box">
                    <div class="svc-stat-val" style="color: #60a5fa;">100%</div>
                    <div class="svc-stat-lbl">Mobile Responsive</div>
                    <div class="svc-stat-sub">Tampilan sempurna di HP, tablet, maupun laptop.</div>
                </div>
                <div class="svc-stat-box">
                    <div class="svc-stat-val" style="color: #34d399;">Fast</div>
                    <div class="svc-stat-lbl">Ultra Cepat</div>
                    <div class="svc-stat-sub">Loading kencang tanpa lemot, ramah kuota pengguna.</div>
                </div>
                <div class="svc-stat-box">
                    <div class="svc-stat-val" style="color: #fbbf24;">SEO</div>
                    <div class="svc-stat-lbl">Google & AI Ready</div>
                    <div class="svc-stat-sub">Metadata & schema lengkap agar cepat terindeks mesin pencari.</div>
                </div>
                <div class="svc-stat-box">
                    <div class="svc-stat-val" style="color: #818cf8;">Support</div>
                    <div class="svc-stat-lbl">Bimbingan & Garansi</div>
                    <div class="svc-stat-sub">Bantuan setup domain, hosting, dan panduan penggunaan.</div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="svc-faq-section">
            <div style="text-align: center; margin-bottom: 2rem;">
                <span class="svc-badge">FAQ Layanan</span>
                <h3 style="font-size: 1.75rem; font-weight: 800; color: #0f172a; margin-top: 0.5rem;">Pertanyaan Seputar Jasa Website</h3>
            </div>

            <details class="svc-faq-item">
                <summary class="svc-faq-q">
                    <span>Berapa lama estimasi waktu pembuatan website?</span>
                    <i class="fi fi-rs-angle-small-down" style="color: #2563eb;"></i>
                </summary>
                <div class="svc-faq-a">
                    Untuk landing page biasanya membutuhkan waktu 2-4 hari kerja. Website company profile sekitar 5-10 hari kerja. Sementara sistem informasi atau web app kustom disesuaikan dengan kompleksitas modul (rata-rata 2-3 minggu).
                </div>
            </details>

            <details class="svc-faq-item">
                <summary class="svc-faq-q">
                    <span>Apakah website yang dibuat sudah SEO friendly dan muncul di Google?</span>
                    <i class="fi fi-rs-angle-small-down" style="color: #2563eb;"></i>
                </summary>
                <div class="svc-faq-a">
                    Tentu! Seluruh website kami dilengkapi dengan struktur OpenGraph, meta tags komprehensif, Google sitemap.xml, dan JSON-LD schema (Schema.org) sehingga mudah dikenali oleh mesin pencari Google dan bot AI.
                </div>
            </details>

            <details class="svc-faq-item">
                <summary class="svc-faq-q">
                    <span>Teknologi apa saja yang digunakan?</span>
                    <i class="fi fi-rs-angle-small-down" style="color: #2563eb;"></i>
                </summary>
                <div class="svc-faq-a">
                    Kami menggunakan teknologi modern seperti PHP (Laravel), Tailwind CSS, JavaScript murni/Vue, MySQL, serta integrasi RESTful API untuk keandalan performa maksimal.
                </div>
            </details>
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
