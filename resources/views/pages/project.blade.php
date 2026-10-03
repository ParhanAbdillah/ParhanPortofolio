@extends('layouts.main')

@section('content')
<section id="Project">
    <div class="dossier-page">
        <!-- Header -->
        <div class="dossier-header">
            <div class="dossier-subtitle">2023-2026 / SISTEM TERPILIH</div>
            <h1 class="dossier-title">Arsip proyek.</h1>
        </div>

        <!-- Main Layout -->
        <div class="dossier-layout">
            
            <!-- Left Sidebar: Project List -->
            <div class="dossier-sidebar">
                <div class="sidebar-header">
                    <span class="tracking-widest">DAFTAR PROYEK</span>
                    <span class="font-bold">{{ count($projects) }} proyek</span>
                </div>
                
                <div class="sidebar-list">
                    @foreach($projects as $index => $project)
                    <div class="sidebar-item {{ $index === 0 ? 'active' : '' }}" onclick="selectProject({{ $index }})" id="nav-item-{{ $index }}">
                        <div class="item-meta">TAHUN {{ $project->year ?? '2026' }} {{ strtoupper($project->type ?? 'SISTEM') }}</div>
                        <div class="item-title">{{ $project->title }}</div>
                        <div class="item-status">{{ strtoupper($project->status ?? 'PENGEMBANGAN AKTIF') }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Content: Project Details -->
            <div class="dossier-content-wrapper">
                <div class="content-header">
                    <span class="tracking-widest">BERKAS PROYEK</span>
                    <div class="content-actions">
                        <span class="action-tag">PENGEMBANGAN AKTIF</span>
                        <span class="action-tag">PRIBADI</span>
                        <button class="nav-btn" onclick="prevProject()">&larr;</button>
                        <span class="pagination-text">Proyek <span id="current-page-num">1</span> dari {{ count($projects) }}</span>
                        <button class="nav-btn" onclick="nextProject()">&rarr;</button>
                    </div>
                </div>

                <div class="content-panels">
                    @foreach($projects as $index => $project)
                    <div class="project-panel {{ $index === 0 ? 'active' : '' }}" id="panel-{{ $index }}">
                        
                        <div class="panel-layout">
                            <!-- Main Detail Area -->
                            <div class="panel-main">
                                <div class="project-meta">{{ $project->year ?? '2026' }} / {{ strtoupper($project->type ?? 'SISTEM') }}</div>
                                <h2 class="project-title-large">{{ $project->title }}</h2>
                                
                                <div class="image-header">
                                    <span class="tracking-widest">TANGKAPAN LAYAR</span>
                                    <span style="font-size: 10px;">1 GAMBAR</span>
                                </div>
                                <div class="image-outer-box">
                                    <div class="image-stack-wrapper">
                                        <div class="image-box" style="cursor: pointer;" onclick="openLightbox('{{ $project->image_path ? asset('storage/' . $project->image_path) : asset('img/presensi.png') }}', '{{ addslashes($project->title) }}')">
                                            <img src="{{ $project->image_path ? asset('storage/' . $project->image_path) : asset('img/presensi.png') }}" alt="{{ $project->title }}">
                                            <div class="image-overlay-btn">
                                                MEMBUKA &nearr;
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="project-desc">
                                    {{ $project->description ?: 'Website profil dan sistem informasi dengan narasi layanan, konten proyek, dan dasbor konten.' }}
                                </div>
                            </div>

                            <!-- Right Stats Column -->
                            <div class="panel-stats">
                                <div class="stat-block">
                                    <div class="stat-label">KEMAJUAN</div>
                                    <div class="stat-value text-black font-bold">{{ $project->status ?? 'Pengembangan aktif' }}</div>
                                    <div class="stat-sub">FOKUS PORTOFOLIO SAAT INI</div>
                                </div>
                                
                                <div class="stat-block">
                                    <div class="stat-label">INFORMASI PROYEK</div>
                                    <div class="info-grid">
                                        <div class="info-col">
                                            <div class="stat-label">JENIS</div>
                                            <div class="stat-value font-bold text-sm">{{ $project->type ?? 'Website' }}</div>
                                        </div>
                                        <div class="info-col">
                                            <div class="stat-label">TAHUN</div>
                                            <div class="stat-value font-bold text-sm">tahun {{ $project->year ?? '2026' }}</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="stat-block" style="flex-grow: 1;">
                                    <div class="stat-label">TUMPUKAN</div>
                                    <div class="stack-tags-wrapper">
                                        <div class="stack-tags">
                                            @php
                                                $techs = $project->tech_stack ?? ['LARAVEL', 'TAILWIND CSS'];
                                                if (is_string($techs)) $techs = json_decode($techs, true) ?? [];
                                            @endphp
                                            @foreach($techs as $tech)
                                            <span class="stack-tag">
                                                <i class="fi fi-rs-code-simple"></i> {{ strtoupper($tech) }}
                                            </span>
                                            @endforeach
                                            <!-- Duplicate for continuous marquee -->
                                            @foreach($techs as $tech)
                                            <span class="stack-tag" aria-hidden="true">
                                                <i class="fi fi-rs-code-simple"></i> {{ strtoupper($tech) }}
                                            </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="stat-block" style="border-bottom: none;">
                                    <div class="stat-label">MENGAKSES</div>
                                    <a href="#" class="access-btn">
                                        <i class="fi fi-ss-lock"></i> REPOSITORI {{ strtoupper($project->access ?? 'PRIBADI') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        /* CSS Reset & Variables for Dossier */
        :root {
            --dos-bg: #f3f4f6;
            --dos-border: #d1d5db;
            --dos-text: #1f2937;
            --dos-muted: #9ca3af;
            --dos-accent: #000000;
        }

        html, body {
            overflow: hidden !important; /* STRICTLY NO SCROLLING */
            height: 100vh;
            width: 100vw;
        }

        .dossier-page {
            background-color: var(--dos-bg);
            background-image: radial-gradient(#d1d5db 1px, transparent 1px);
            background-size: 16px 16px;
            height: 100vh;
            width: 100vw;
            padding: 5rem 2rem 1.5rem 2rem; /* Much smaller padding to fit screen */
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            color: var(--dos-text);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            box-sizing: border-box;
        }

        /* Header */
        .dossier-header { margin-bottom: 1rem; flex-shrink: 0; }
        .dossier-subtitle { font-size: 10px; font-weight: bold; color: #6b7280; margin-bottom: 0.25rem; letter-spacing: 0.05em; }
        .dossier-title { font-size: 2.5rem; font-weight: 900; font-family: 'Inter', system-ui, sans-serif; letter-spacing: -0.02em; color: #111; line-height: 1; }

        /* Main Layout */
        .dossier-layout {
            display: flex;
            gap: 1.5rem;
            flex-grow: 1;
            min-height: 0;
            background: transparent;
            overflow: hidden;
        }

        /* Sidebar */
        .dossier-sidebar {
            width: 280px;
            border: 1px solid var(--dos-border);
            display: flex;
            flex-direction: column;
            background: rgba(255,255,255,0.4);
            flex-shrink: 0;
        }
        .sidebar-header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--dos-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            font-weight: bold;
            color: #4b5563;
            flex-shrink: 0;
        }
        .sidebar-list {
            overflow-y: auto;
            flex-grow: 1;
            min-height: 0;
        }
        .sidebar-list::-webkit-scrollbar { width: 4px; }
        .sidebar-list::-webkit-scrollbar-thumb { background: #cbd5e1; }
        
        .sidebar-item {
            padding: 1rem;
            border-bottom: 1px dotted var(--dos-border);
            cursor: pointer;
            transition: all 0.2s;
        }
        .sidebar-item:hover { background: rgba(0,0,0,0.03); }
        .sidebar-item.active {
            background: repeating-linear-gradient(
                -45deg,
                #111,
                #111 4px,
                #1a1a1a 4px,
                #1a1a1a 8px
            );
            color: #fff;
            border-bottom: 1px solid #111;
        }
        .sidebar-item .item-meta { font-size: 8px; margin-bottom: 0.25rem; opacity: 0.7; letter-spacing: 0.05em; }
        .sidebar-item .item-title { font-size: 13px; font-weight: bold; font-family: 'Inter', sans-serif; margin-bottom: 0.25rem; line-height: 1.2;}
        .sidebar-item .item-status { font-size: 8px; opacity: 0.6; }

        /* Content Area */
        .dossier-content-wrapper {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: rgba(255,255,255,0.4);
            min-width: 0;
            border: 1px solid var(--dos-border);
        }
        .content-header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--dos-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            font-weight: bold;
            color: #4b5563;
            flex-shrink: 0;
        }
        .content-actions { display: flex; align-items: center; gap: 0.75rem; }
        .action-tag { border: 1px solid var(--dos-border); padding: 0.35rem 0.75rem; font-size: 11px; font-weight: bold; background: #fff; color: #111; }
        .nav-btn {
            border: 1px solid var(--dos-border);
            background: #fff;
            width: 28px; height: 28px;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer;
        }
        .nav-btn:hover { background: #e5e7eb; }
        .pagination-text { font-size: 12px; margin: 0 0.5rem; font-weight: bold; color: #111; }

        /* Panel Content */
        .content-panels { flex-grow: 1; position: relative; overflow: hidden; }
        .project-panel {
            position: absolute; inset: 0;
            display: none; opacity: 0;
            transition: opacity 0.3s ease;
        }
        .project-panel.active { display: block; opacity: 1; }
        
        .panel-layout {
            display: flex; height: 100%;
        }

        /* Left Main Panel */
        .panel-main {
            flex-grow: 1;
            padding: 1.5rem 2rem;
            overflow-y: auto; /* Internal scroll only if it overflows */
            min-width: 0;
        }
        .project-meta { font-size: 10px; color: #6b7280; letter-spacing: 0.1em; margin-bottom: 0.5rem; }
        .project-title-large { font-size: 2.2rem; font-weight: 900; font-family: 'Inter', sans-serif; color: #111; line-height: 1.1; margin-bottom: 1.5rem; letter-spacing: -0.03em; }
        
        .image-header { display: flex; justify-content: space-between; font-size: 10px; color: #6b7280; margin-bottom: 0.5rem; border-bottom: 1px dotted var(--dos-border); padding-bottom: 0.25rem; }
        .image-outer-box { padding: 0.75rem 1.25rem 1.25rem 0.75rem; border: 1px dotted var(--dos-border); margin-bottom: 2rem; display: inline-block; width: 100%; max-width: 380px; position: relative; z-index: 3; }
        .image-stack-wrapper { position: relative; z-index: 1; }
        .image-stack-wrapper::before, .image-stack-wrapper::after {
            content: ''; position: absolute; inset: 0; border: 2px solid #111; z-index: -1; transition: transform 0.3s ease;
        }
        .image-stack-wrapper::before { transform: translate(4px, 4px); background: #e5e7eb; }
        .image-stack-wrapper::after { transform: translate(8px, 8px); background: #f3f4f6; z-index: -2; }
        .image-stack-wrapper:hover::before { transform: translate(6px, 6px); }
        .image-stack-wrapper:hover::after { transform: translate(12px, 12px); }
        .image-box { position: relative; border: 3px solid #111; background: #000; overflow: hidden; display: flex; justify-content: center; align-items: center; }
        .image-box img { width: 100%; height: auto; object-fit: contain; display: block; opacity: 0.9; transition: opacity 0.3s; }
        .image-box:hover img { opacity: 1; }
        .image-overlay-btn {
            position: absolute; top: 0.75rem; right: 0.75rem;
            background: #111; color: #fff;
            border: 1px solid rgba(255,255,255,0.2);
            padding: 0.2rem 0.5rem; font-size: 9px;
            font-weight: bold; cursor: pointer;
        }

        .project-desc {
            font-size: 13px;
            font-family: 'Inter', sans-serif;
            color: #4b5563;
            line-height: 1.5;
            max-width: 100%;
        }

        /* Right Stats Sidebar */
        .panel-stats {
            width: 340px;
            border-left: 1px solid var(--dos-border);
            display: flex; flex-direction: column;
            background: rgba(255,255,255,0.4);
            flex-shrink: 0;
            overflow: hidden;
        }
        .stat-block {
            padding: 1rem;
            border-bottom: 1px solid var(--dos-border);
        }
        .stat-label { font-size: 10px; color: #9ca3af; letter-spacing: 0.1em; margin-bottom: 0.5rem; }
        .stat-value { font-family: 'Inter', sans-serif; font-size: 1rem; margin-bottom: 0.25rem; }
        .stat-sub { font-size: 10px; color: #6b7280; letter-spacing: 0.05em; }
        
        .info-grid { display: flex; margin: 1rem -1rem -1rem -1rem; border-top: 1px solid var(--dos-border); }
        .info-col { flex: 1; padding: 1rem; border-right: 1px solid var(--dos-border); }
        .info-col:last-child { border-right: none; }
        
        .stack-tags-wrapper {
            overflow: hidden;
            width: 100%;
            position: relative;
        }
        @keyframes scrollStack {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .stack-tags { 
            display: flex; gap: 0.75rem; 
            width: max-content;
            padding: 0.5rem 0 1rem 0; 
            animation: scrollStack 10s linear infinite;
        }
        .stack-tags:hover { animation-play-state: paused; }
        .stack-tag {
            border: 1px solid var(--dos-border);
            background: rgba(255,255,255,0.6); 
            padding: 0.75rem 1rem;
            font-size: 11px; font-weight: bold;
            display: inline-flex; align-items: center; gap: 0.5rem;
            color: #111;
            flex-shrink: 0;
        }
        
        .access-btn {
            display: block; width: 100%; text-align: center;
            border: 1px solid var(--dos-border);
            background: rgba(255,255,255,0.8); padding: 0.75rem;
            font-size: 12px; font-weight: bold; color: #111;
            text-decoration: none; transition: background 0.2s;
        }
        .access-btn:hover { background: #e5e7eb; }

        /* Responsive Mobile Layout */
        @media (max-width: 1023px) {
            html, body {
                overflow-y: auto !important;
                height: auto !important;
                width: 100% !important;
            }
            .dossier-page {
                height: auto;
                min-height: 100vh;
                padding: 6rem 1rem 2rem 1rem;
                overflow: visible;
            }
            .dossier-layout {
                flex-direction: column;
                overflow: visible;
            }
            .dossier-sidebar {
                width: 100%;
                max-height: 250px;
            }
            .dossier-content-wrapper {
                overflow: visible;
            }
            .content-panels {
                overflow: visible;
            }
            .project-panel {
                position: relative;
                display: none;
            }
            .project-panel.active {
                display: block;
            }
            .panel-layout {
                flex-direction: column;
            }
            .panel-main {
                overflow: visible;
                padding: 1rem;
            }
            .panel-stats {
                width: 100%;
                border-left: none;
                border-top: 1px solid var(--dos-border);
            }
            .content-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            .content-actions {
                flex-wrap: wrap;
            }
        }

        /* Lightbox Styles */
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
            max-width: 90%; max-height: 65vh; object-fit: contain;
            border-radius: 4px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255,255,255,0.1);
        }
        .lightbox-caption { margin-top: 2rem; color: white; font-family: 'Inter', sans-serif; font-size: 1.25rem; font-weight: bold; text-align: center; }
        
        .lightbox-thumbnails {
            padding: 1rem 2rem 2rem; display: flex; justify-content: center; gap: 1rem;
        }
        .thumbnail-item {
            width: 80px; height: 60px; border-radius: 6px; overflow: hidden; cursor: pointer;
            border: 2px solid transparent; transition: all 0.2s;
            opacity: 0.4;
        }
        .thumbnail-item.active { border-color: #fff; opacity: 1; transform: scale(1.05); }
        .thumbnail-item img { width: 100%; height: 100%; object-fit: cover; }

    </style>

    <!-- Lightbox HTML structure -->
    <div id="customLightbox" class="lightbox-modal">
        <div class="lightbox-toolbar">
            <div class="lightbox-counter">1 / 1 &nbsp;&nbsp; GAMBAR PROYEK</div>
            <div class="lightbox-controls">
                <button onclick="closeLightbox()"><i class="fi fi-rs-cross"></i></button>
            </div>
        </div>
        
        <div class="lightbox-content" onclick="closeLightbox()">
            <img id="lightboxImage" src="" alt="" onclick="event.stopPropagation()">
            <div class="lightbox-caption" id="lightboxCaption"></div>
        </div>
        
        <div class="lightbox-thumbnails">
            <div class="thumbnail-item active">
                <img id="lightboxThumb" src="" alt="">
            </div>
        </div>
    </div>

    <script>
        function openLightbox(imgSrc, title) {
            const modal = document.getElementById('customLightbox');
            document.getElementById('lightboxImage').src = imgSrc;
            document.getElementById('lightboxThumb').src = imgSrc;
            document.getElementById('lightboxCaption').innerText = title;
            modal.classList.add('active');
        }

        function closeLightbox() {
            document.getElementById('customLightbox').classList.remove('active');
        }

        const totalProjects = {{ count($projects) }};
        let currentIndex = 0;

        function selectProject(index) {
            if(index < 0 || index >= totalProjects) return;
            
            // Update Sidebar Active State
            document.querySelectorAll('.sidebar-item').forEach(el => el.classList.remove('active'));
            document.getElementById('nav-item-' + index).classList.add('active');
            
            // Update Content Active State
            document.querySelectorAll('.project-panel').forEach(el => el.classList.remove('active'));
            document.getElementById('panel-' + index).classList.add('active');

            // Update Pagination Text
            document.getElementById('current-page-num').innerText = (index + 1);

            // Scroll sidebar if needed
            document.getElementById('nav-item-' + index).scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            
            currentIndex = index;
        }

        function nextProject() {
            selectProject((currentIndex + 1) % totalProjects);
        }

        function prevProject() {
            selectProject((currentIndex - 1 + totalProjects) % totalProjects);
        }
    </script>
</section>
@endsection
