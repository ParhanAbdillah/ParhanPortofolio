@extends('layouts.main')

@section('content')
<section id="about">
    <style>
        .about-wrapper {
            background-color: #f1f5f9;
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 20px 20px;
            color: #111;
            padding: 6rem 1rem 2rem 1rem;
            font-family: 'Inter', system-ui, sans-serif;
            border-bottom: 1px solid #ccc;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            width: 100%;
        }
        .about-container {
            width: 100%;
            max-width: 950px;
            background: rgba(255, 255, 255, 0.4);
            border: 1px solid #cbd5e1;
            display: flex;
            flex-direction: column;
            backdrop-filter: blur(5px);
            box-shadow: 0 10px 40px -10px rgba(0,0,0,0.1);
            box-sizing: border-box;
        }
        
        .about-header {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #cbd5e1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255,255,255,0.5);
            box-sizing: border-box;
            width: 100%;
        }
        .about-header-title {
            font-family: monospace;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: #334155;
            text-transform: uppercase;
        }
        
        .about-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            max-width: 100%;
        }
        @media(min-width: 768px) {
            .about-grid { grid-template-columns: 280px minmax(0, 1fr); }
        }
        
        /* Left Column: Photo & Basic Info */
        .about-left {
            border-bottom: 1px solid #cbd5e1;
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            width: 100%;
        }
        @media(min-width: 768px) {
            .about-left {
                border-bottom: none;
                border-right: 1px solid #cbd5e1;
            }
        }
        
        .photo-container {
            padding: 1.5rem;
            border-bottom: 1px solid #cbd5e1;
            display: flex;
            justify-content: center;
            background: rgba(255,255,255,0.2);
            box-sizing: border-box;
            width: 100%;
        }
        
        /* Stacked Photo Effect */
        .photo-stack-wrapper { position: relative; z-index: 1; width: 100%; max-width: 180px; aspect-ratio: 3/4; margin-bottom: 10px; margin-right: 10px; }
        .photo-stack-wrapper::before, .photo-stack-wrapper::after {
            content: ''; position: absolute; inset: 0; border: 2px solid #111; z-index: -1; transition: transform 0.3s ease;
        }
        .photo-stack-wrapper::before { transform: translate(5px, 5px); background: #e5e7eb; }
        .photo-stack-wrapper::after { transform: translate(10px, 10px); background: #cbd5e1; z-index: -2; }
        
        .photo-box {
            position: absolute; inset: 0;
            border: 3px solid #111;
            background: #000;
            overflow: hidden;
            z-index: 2;
        }
        .photo-box img {
            width: 100%; height: 100%; object-fit: cover;
            filter: grayscale(10%) contrast(105%);
        }
        
        .quick-info {
            padding: 1.25rem 1.5rem;
            flex-grow: 1;
            box-sizing: border-box;
            width: 100%;
        }
        .info-label { font-size: 9px; color: #64748b; letter-spacing: 0.1em; margin-bottom: 0.25rem; font-family: monospace; text-transform: uppercase; font-weight: bold; }
        .info-value { font-size: 11px; font-weight: 600; color: #0f172a; margin-bottom: 1rem; line-height: 1.4; word-wrap: break-word; overflow-wrap: break-word; }
        .info-value:last-child { margin-bottom: 0; }
        
        /* Right Column: Bio & Details */
        .about-right {
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            width: 100%;
            min-width: 0;
        }
        
        .bio-section {
            padding: 2rem 1.5rem;
            border-bottom: 1px solid #cbd5e1;
            flex-grow: 1;
            box-sizing: border-box;
            width: 100%;
        }
        @media(min-width: 768px) {
            .bio-section { padding: 2rem 2.5rem; }
        }
        .bio-title {
            font-size: clamp(1.75rem, 4vw, 2.25rem);
            font-weight: 900;
            letter-spacing: -0.03em;
            color: #0f172a;
            line-height: 1.1;
            margin-bottom: 0.75rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        .bio-roles {
            display: flex; gap: 0.5rem; margin-bottom: 1.5rem; flex-wrap: wrap;
        }
        .role-tag {
            border: 1px solid #111;
            background: #fff;
            padding: 0.2rem 0.5rem;
            font-size: 10px;
            font-weight: 700;
            font-family: monospace;
            text-transform: uppercase;
        }
        
        .bio-text {
            font-size: 13px;
            line-height: 1.6;
            color: #334155;
            max-width: 600px;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            width: 100%;
        }
        @media(min-width: 640px) {
            .contact-grid { grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); }
        }
        .contact-box {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid #cbd5e1;
            box-sizing: border-box;
            width: 100%;
        }
        @media(min-width: 640px) {
            .contact-box { padding: 1.25rem 2.5rem; border-bottom: none; }
            .contact-box:first-child { border-right: 1px solid #cbd5e1; }
        }
        
    </style>

    <div class="about-wrapper">
        <div class="about-container" data-aos="fade-up" data-aos-duration="1000">
            <div class="about-header">
                <span class="about-header-title">Data Personel / Profil</span>
                <span class="about-header-title">ID: M-PARHAN-A</span>
            </div>
            
            <div class="about-grid">
                <!-- Left Sidebar -->
                <div class="about-left">
                    <div class="photo-container">
                        <div class="photo-stack-wrapper">
                            <div class="photo-box">
                                <img src="{{ $profile && $profile->about_image_path ? asset('storage/' . $profile->about_image_path) : asset('img/poto.jpg') }}" alt="Profile Photo">
                            </div>
                        </div>
                    </div>
                    <div class="quick-info">
                        <div class="info-label">Status</div>
                        <div class="info-value flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500 block"></span> Aktif
                        </div>
                        
                        <div class="info-label">Lokasi Operasional</div>
                        <div class="info-value">
                            Kp. Leles Tengah RT.01, RW.01,<br>
                            Desa Kurniabakti, Kec. Ciawi,<br>
                            Kab. Tasikmalaya
                        </div>
                        
                        <div class="info-label">Kontak Utama</div>
                        <div class="info-value">
                            muhamadparhanabdillah@gmail.com
                        </div>
                    </div>
                </div>
                
                <!-- Right Content -->
                <div class="about-right">
                    <div class="bio-section">
                        <div class="info-label mb-2">IDENTITAS SUBJEK</div>
                        <h1 class="bio-title">Muhamad Parhan Abdillah</h1>
                        
                        <div class="bio-roles mt-2">
                            <span class="role-tag">Website Developer</span>
                            <span class="role-tag">Network Engineer</span>
                            <span class="role-tag">Student</span>
                        </div>
                        
                        <div class="info-label mt-6 mb-3">RINGKASAN EKSEKUTIF</div>
                        <div class="bio-text">
                            <p>
                                {{ $profile?->about_text ?? 'Saya Muhamad Parhan Abdillah, biasa dipanggil Parhan. Saya lahir di Tasikmalaya pada 28 Agustus 2005. Saat ini, saya sedang menempuh pendidikan jenjang D3 di Politeknik LP3I Tasikmalaya.' }}
                            </p>
                            <p class="mt-3">
                                Berfokus pada arsitektur sistem digital dan infrastruktur jaringan, saya memiliki keahlian mendalam di bidang <strong>Website Development</strong> dan <strong>Network Engineering</strong>. Saya terus mendedikasikan diri untuk merancang solusi teknologi yang skalabel dan berkinerja tinggi.
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-grid">
                        <div class="contact-box">
                            <div class="info-label">PENDIDIKAN</div>
                            <div class="info-value mb-0 text-sm">Politeknik LP3I Tasikmalaya</div>
                            <div class="info-label mt-1 text-gray-500 font-normal normal-case">D3 Program</div>
                        </div>
                        <div class="contact-box">
                            <div class="info-label">KETERSEDIAAN</div>
                            <div class="info-value mb-0 text-sm">Terbuka untuk Kolaborasi</div>
                            <div class="info-label mt-1 text-gray-500 font-normal normal-case">Freelance & Kontrak</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
