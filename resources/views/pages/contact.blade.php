@extends('layouts.main')

@section('content')
<section id="Contact">
    <style>
        .contact-wrapper {
            background-color: #e5e5e5;
            background-image: radial-gradient(#a3a3a3 1px, transparent 1px);
            background-size: 20px 20px;
            color: #111;
            padding: 8rem 1.5rem 4rem 1.5rem;
            font-family: 'Inter', system-ui, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .contact-container {
            max-width: 1150px;
            margin: 0 auto;
            width: 100%;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 4rem;
            align-items: center;
        }
        @media(min-width: 1024px) {
            .contact-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
        .contact-left {
            position: relative;
        }
        .contact-label {
            font-family: monospace;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }
        .contact-title {
            font-size: clamp(3rem, 6vw, 5.5rem);
            font-weight: 900;
            letter-spacing: -0.04em;
            line-height: 1;
            color: #111;
        }
        .contact-target-icon {
            position: absolute;
            right: -2rem;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.3;
            font-size: 2rem;
            display: none;
        }
        @media(min-width: 1024px) {
            .contact-target-icon { display: block; }
        }
        .contact-right {
            border: 1px solid #bbb;
            background: rgba(255,255,255,0.4);
            padding: 2rem;
        }
        .contact-list {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem 0;
        }
        .contact-list-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 1.25rem 0;
            border-bottom: 1px dashed #bbb;
            font-family: monospace;
            font-size: 12px;
            color: #333;
        }
        .contact-list-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .contact-list-icon {
            font-size: 1rem;
            color: #111;
        }
        .contact-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .contact-btn {
            background-color: #111;
            color: #fff;
            border: none;
            padding: 0.75rem 1.25rem;
            font-family: monospace;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .contact-btn:hover {
            background-color: #333;
        }
    </style>

    <div class="contact-wrapper">
        <div class="contact-container" data-aos="fade-up" data-aos-duration="1500">
            <div class="contact-grid">
                
                <div class="contact-left">
                    <div class="contact-label">KONTAK</div>
                    <div class="contact-title">Mari kita membangun sesuatu lebih tajam.</div>
                    <div class="contact-target-icon">
                        <i class="fi fi-rs-crosshair"></i>
                    </div>
                </div>

                <div class="contact-right">
                    <ul class="contact-list">
                        <li class="contact-list-item">
                            <i class="fi fi-rs-envelope contact-list-icon"></i>
                            <span>{{ $profile->contact_email ?? 'Email belum diatur' }}</span>
                        </li>
                        <li class="contact-list-item">
                            <i class="fi fi-rs-phone-call contact-list-icon"></i>
                            <span>{{ $profile->contact_phone ?? 'Nomor telepon belum diatur' }}</span>
                        </li>
                        <li class="contact-list-item">
                            <i class="fi fi-rs-marker contact-list-icon"></i>
                            <span style="line-height: 1.4;">{{ $profile->contact_address ?? 'Alamat belum diatur' }}</span>
                        </li>
                    </ul>

                    <div class="contact-buttons">
                        @if($profile && $profile->social_github)
                        <a href="{{ $profile->social_github }}" target="_blank" class="contact-btn">
                            <i class="fi fi-brands-github"></i> GITHUB
                        </a>
                        @endif
                        
                        @if($profile && $profile->social_tiktok)
                        <a href="{{ $profile->social_tiktok }}" target="_blank" class="contact-btn">
                            <i class="fi fi-brands-tiktok"></i> TIKTOK
                        </a>
                        @endif

                        @if($profile && $profile->social_ig)
                        <a href="{{ $profile->social_ig }}" target="_blank" class="contact-btn">
                            <i class="fi fi-brands-instagram"></i> INSTAGRAM
                        </a>
                        @endif

                        @if($profile && $profile->social_wa)
                        <a href="{{ $profile->social_wa }}" target="_blank" class="contact-btn">
                            <i class="fi fi-brands-whatsapp"></i> WHATSAPP
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
