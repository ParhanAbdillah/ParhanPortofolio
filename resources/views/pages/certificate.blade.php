@extends('layouts.main')

@section('content')
<section id="Certificate">
    <style>
        .cert-wrapper {
            background-color: #e5e5e5;
            background-image: radial-gradient(#a3a3a3 1px, transparent 1px);
            background-size: 20px 20px;
            color: #111;
            padding: 6rem 1.5rem 2rem 1.5rem;
            font-family: 'Inter', system-ui, sans-serif;
            border-bottom: 1px solid #ccc;
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            width: 100%;
        }
        .cert-container {
            max-width: 1150px;
            margin: 0 auto;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            height: 100%;
            box-sizing: border-box;
            width: 100%;
        }
        .cert-main-title {
            font-size: clamp(1.75rem, 3.5vw, 2.5rem);
            font-weight: 900;
            letter-spacing: -0.02em;
            line-height: 1.2;
            margin-bottom: 2rem;
            max-width: 900px;
        }
        .cert-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            gap: 1.5rem;
            flex-grow: 1;
            min-height: 0;
            max-width: 100%;
        }
        @media(min-width: 1024px) {
            .cert-grid {
                grid-template-columns: 350px minmax(0, 1fr);
            }
        }
        .cert-left-box {
            border: 1px solid #bbb;
            background: rgba(255,255,255,0.4);
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            box-sizing: border-box;
            width: 100%;
        }
        .cert-left-header {
            font-family: monospace;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }
        .cert-left-title {
            font-size: 1.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        .cert-left-desc {
            font-size: 13px;
            color: #555;
            line-height: 1.5;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        .cert-stats-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            border-top: 1px solid #bbb;
            width: 100%;
        }
        .cert-stat-item {
            padding: 1rem;
            border-bottom: 1px solid #bbb;
            box-sizing: border-box;
            width: 100%;
        }
        .cert-stat-item:nth-child(odd) {
            border-right: 1px solid #bbb;
        }
        .cert-stat-label {
            font-family: monospace;
            font-size: 9px;
            font-weight: 700;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.5rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        .cert-stat-value {
            font-size: 1.5rem;
            font-weight: 900;
        }
        .cert-right-box {
            border: 1px solid #bbb;
            background: rgba(255,255,255,0.4);
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            min-height: 0;
            height: 100%;
            box-sizing: border-box;
            width: 100%;
        }
        .cert-right-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: monospace;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: #666;
            margin-bottom: 1.5rem;
        }
        .cert-cards-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            gap: 1.5rem;
            flex-grow: 1;
            overflow-y: auto;
            padding-right: 0.5rem;
            scrollbar-width: thin;
            scrollbar-color: rgba(0,0,0,0.3) rgba(0,0,0,0.05);
            max-width: 100%;
        }
        .cert-cards-grid::-webkit-scrollbar {
            width: 6px;
        }
        .cert-cards-grid::-webkit-scrollbar-track {
            background: rgba(0,0,0,0.05);
            border-radius: 4px;
        }
        .cert-cards-grid::-webkit-scrollbar-thumb {
            background: rgba(0,0,0,0.2);
            border-radius: 4px;
        }
        .cert-cards-grid::-webkit-scrollbar-thumb:hover {
            background: rgba(0,0,0,0.4);
        }
        @media(min-width: 768px) {
            .cert-cards-grid {
                grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            }
        }
        .cert-card {
            border: 1px solid #bbb;
            background: rgba(255,255,255,0.7);
            display: flex;
            flex-direction: column;
            padding: 1rem;
            position: relative;
            box-sizing: border-box;
            width: 100%;
        }
        .cert-card::before, .cert-card::after {
            content: ''; position: absolute; width: 8px; height: 8px; border: 2px solid #333;
        }
        .cert-card::before { top: -2px; left: -2px; border-right: none; border-bottom: none; }
        .cert-card::after { bottom: -2px; right: -2px; border-left: none; border-top: none; }

        .cert-card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: monospace;
            font-size: 9px;
            font-weight: 700;
            color: #666;
            border-bottom: 1px dashed #ccc;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }
        .cert-card-content {
            display: flex;
            gap: 1rem;
            align-items: center;
        }
        .cert-img-box {
            background: #fff;
            border: 1px solid #ddd;
            padding: 2px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        .cert-img-box img {
            width: 100px; /* Base width */
            height: auto;
            max-height: 140px; /* Limit height so portrait doesn't get too tall */
            object-fit: contain;
        }
        .cert-info {
            flex: 1;
            min-width: 0; /* Important for flex child to truncate or wrap text correctly */
        }
        .cert-cat {
            font-family: monospace;
            font-size: 9px;
            font-weight: 700;
            color: #666;
            letter-spacing: 0.05em;
            margin-bottom: 0.25rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        .cert-name {
            font-size: 1rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 0.25rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        .cert-issuer {
            font-size: 11px;
            color: #555;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        /* Mobile specific adjustments */
        @media (max-width: 1023px) {
            .cert-wrapper {
                height: auto !important;
                min-height: 100vh;
                overflow: visible !important;
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .cert-right-box {
                overflow: visible;
                height: auto;
            }
            .cert-cards-grid {
                overflow-y: visible;
            }
            .cert-left-box {
                height: auto;
            }
        }
    </style>

    <div class="cert-wrapper">
        <div class="cert-container" data-aos="fade-up" data-aos-duration="1500">
            <div class="cert-main-title">
                Kredensial, sertifikat, dan catatan lapangan.
            </div>
            
            <div class="cert-grid">
                <div class="cert-left-box">
                    <div>
                        <div class="cert-left-header">KUMPULAN DOKUMEN</div>
                        <div class="cert-left-title">
                            Studi, kompetensi, magang, dan catatan lapangan.
                        </div>
                        <div class="cert-left-desc">
                            Arsip sertifikat, catatan kompetensi, dan SK selesai kerja pilihan dari CV Karya Profesional Nusantara.
                        </div>
                    </div>
                    
                    <div class="cert-stats-grid" style="margin-top: 3rem; margin-bottom: -2rem; margin-left: -2rem; margin-right: -2rem;">
                        <div class="cert-stat-item">
                            <div class="cert-stat-label">ARSIP PDF</div>
                            <div class="cert-stat-value">{{ $certificates->where('type', 'Archive')->count() }}</div>
                        </div>
                        <div class="cert-stat-item">
                            <div class="cert-stat-label">SERTIFIKAT</div>
                            <div class="cert-stat-value">{{ $certificates->where('type', 'Certificate')->count() }}</div>
                        </div>
                        <div class="cert-stat-item" style="border-bottom: none;">
                            <div class="cert-stat-label">SK MENYELESAIKAN PEKERJAAN</div>
                            <div class="cert-stat-value">{{ $certificates->where('type', 'SK')->count() }}</div>
                        </div>
                        <div class="cert-stat-item" style="border-bottom: none;">
                            <div class="cert-stat-label">PERAN LAPANGAN</div>
                            <div class="cert-stat-value">{{ $certificates->where('type', 'Field')->count() }}</div>
                        </div>
                    </div>
                </div>

                <div class="cert-right-box">
                    <div class="cert-right-header">
                        <span>SERTIFIKAT</span>
                        <i class="fi fi-rs-badge-check"></i>
                    </div>
                    
                    <div class="cert-cards-grid">
                        @forelse($certificates as $cert)
                        <div class="cert-card">
                            <div class="cert-card-top">
                                <span>{{ $cert->code ?? 'CERT-01' }}</span>
                                @if($cert->file_path)
                                <a href="{{ asset('storage/' . $cert->file_path) }}" target="_blank" style="color: inherit; text-decoration: none;">PRATINJAU PDF <i class="fi fi-rs-document"></i></a>
                                @endif
                            </div>
                            <div class="cert-card-content">
                                <div class="cert-img-box" onclick="openLightbox('{{ $cert->image_path ? asset('storage/' . $cert->image_path) : 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%221100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%201100%22%20preserveAspectRatio%3D%22none%22%3E%3Crect%20width%3D%22800%22%20height%3D%221100%22%20fill%3D%22%23eeeeee%22%20%2F%3E%3Ctext%20x%3D%22400%22%20y%3D%22550%22%20font-family%3D%22monospace%22%20font-size%3D%2260%22%20fill%3D%22%23aaaaaa%22%20text-anchor%3D%22middle%22%20alignment-baseline%3D%22middle%22%3EDOCUMENT%3C%2Ftext%3E%3C%2Fsvg%3E' }}', '{{ addslashes($cert->name) }}')">
                                    <img src="{{ $cert->image_path ? asset('storage/' . $cert->image_path) : 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%221100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%201100%22%20preserveAspectRatio%3D%22none%22%3E%3Crect%20width%3D%22800%22%20height%3D%221100%22%20fill%3D%22%23eeeeee%22%20%2F%3E%3Ctext%20x%3D%22400%22%20y%3D%22550%22%20font-family%3D%22monospace%22%20font-size%3D%2260%22%20fill%3D%22%23aaaaaa%22%20text-anchor%3D%22middle%22%20alignment-baseline%3D%22middle%22%3EDOCUMENT%3C%2Ftext%3E%3C%2Fsvg%3E' }}" alt="{{ $cert->name }}">
                                </div>
                                <div class="cert-info">
                                    <div class="cert-cat">{{ $cert->category }}</div>
                                    <div class="cert-name">{{ $cert->name }}</div>
                                    <div class="cert-issuer">{{ $cert->issuer }}</div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div style="font-family: monospace; font-size: 11px; color: #666;">Belum ada dokumen yang diunggah.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<!-- Lightbox Styles & Script -->
<style>
    .lightbox-modal {
        display: none;
        position: fixed;
        z-index: 99999;
        inset: 0;
        background: rgba(15, 23, 42, 0.95);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        flex-direction: column;
    }
    .lightbox-modal.active { display: flex; }
    
    .lightbox-toolbar {
        display: flex; justify-content: space-between; align-items: center;
        padding: 1.5rem 2rem; color: #fff;
    }
    .lightbox-counter { font-size: 14px; font-weight: bold; letter-spacing: 0.1em; color: #94a3b8; }
    
    .lightbox-controls button {
        background: rgba(255,255,255,0.1); border: none; color: white; width: 44px; height: 44px; 
        border-radius: 8px; cursor: pointer; display: inline-flex; align-items: center; justify-content: center;
        transition: background 0.2s; margin-left: 0.5rem; font-size: 1.2rem;
    }
    .lightbox-controls button:hover { background: rgba(255,255,255,0.25); }
    
    .lightbox-content {
        flex-grow: 1; display: flex; flex-direction: column; justify-content: center; align-items: center;
        padding: 1rem 2rem; overflow: hidden; position: relative;
    }
    .lightbox-content img {
        max-width: 90%; max-height: 80vh; object-fit: contain;
        border-radius: 4px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255,255,255,0.1);
    }
    .lightbox-caption { margin-top: 2rem; color: white; font-family: 'Inter', sans-serif; font-size: 1.25rem; font-weight: bold; text-align: center; }
</style>

<div id="customLightbox" class="lightbox-modal">
    <div class="lightbox-toolbar">
        <div class="lightbox-counter">PRATINJAU DOKUMEN</div>
        <div class="lightbox-controls">
            <button onclick="closeLightbox()"><i class="fi fi-rs-cross"></i></button>
        </div>
    </div>
    
    <div class="lightbox-content" onclick="closeLightbox()">
        <img id="lightboxImage" src="" alt="" onclick="event.stopPropagation()">
        <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>
</div>

<script>
    function openLightbox(imgSrc, title) {
        const modal = document.getElementById('customLightbox');
        document.getElementById('lightboxImage').src = imgSrc;
        document.getElementById('lightboxCaption').innerText = title;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        document.getElementById('customLightbox').classList.remove('active');
        document.body.style.overflow = '';
    }

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if(e.key === 'Escape') closeLightbox();
    });
</script>
