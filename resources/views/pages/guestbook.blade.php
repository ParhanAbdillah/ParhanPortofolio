@extends('layouts.main')

@section('content')
<section id="guestbook">
    <style>
        .gb-wrapper {
            background-color: #e5e5e5;
            background-image: radial-gradient(#a3a3a3 1px, transparent 1px);
            background-size: 20px 20px;
            color: #111;
            padding: 6rem 1rem 1rem 1rem;
            font-family: 'Inter', system-ui, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-sizing: border-box;
            width: 100%;
        }
        .gb-container {
            width: 100%;
            max-width: 1050px;
            height: 85vh;
            background: rgba(255, 255, 255, 0.4);
            border: 1px solid #cbd5e1;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 40px -10px rgba(0,0,0,0.1);
            box-sizing: border-box;
        }
        
        .gb-header-area {
            padding: 2rem 1.5rem 1rem 1.5rem;
            border-bottom: 1px solid #cbd5e1;
            box-sizing: border-box;
            width: 100%;
        }
        @media(min-width: 768px) {
            .gb-header-area { padding: 2rem 2.5rem 1rem 2.5rem; }
        }
        .gb-header-title { font-family: monospace; font-size: 11px; font-weight: bold; color: #64748b; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 0.5rem; word-wrap: break-word; overflow-wrap: break-word; }
        .gb-main-title { font-size: clamp(1.75rem, 4vw, 2.25rem); font-weight: 900; letter-spacing: -0.03em; color: #0f172a; line-height: 1.1; margin-bottom: 0; word-wrap: break-word; overflow-wrap: break-word; }
        
        .gb-grid {
            flex-grow: 1;
            min-height: 0;
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            align-items: stretch;
            max-width: 100%;
        }
        @media(min-width: 1024px) {
            .gb-grid { grid-template-columns: 380px minmax(0, 1fr); }
        }
        
        .gb-panel {
            /* Removing individual backgrounds so it inherits from container */
            display: flex;
            flex-direction: column;
            min-height: 0;
            box-sizing: border-box;
            width: 100%;
            border-bottom: 1px solid #cbd5e1;
        }
        @media(min-width: 1024px) {
            .gb-panel:first-child { border-right: 1px solid #cbd5e1; border-bottom: none; }
            .gb-panel { border-bottom: none; }
        }
        
        .gb-panel-header {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #cbd5e1;
            font-family: monospace;
            font-size: 10px;
            font-weight: 700;
            color: #475569;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
        
        /* Form Section */
        .gb-form-inner { padding: 1.5rem; overflow-y: auto; flex-grow: 1; box-sizing: border-box; width: 100%; }
        .gb-form-title { font-size: clamp(1.5rem, 3.5vw, 2rem); font-weight: 800; line-height: 1.2; letter-spacing: -0.02em; margin-bottom: 1rem; color: #0f172a; word-wrap: break-word; overflow-wrap: break-word; }
        .gb-form-desc { font-size: 13px; color: #64748b; margin-bottom: 2rem; line-height: 1.5; word-wrap: break-word; overflow-wrap: break-word; }
        
        .form-group { margin-bottom: 1.5rem; box-sizing: border-box; width: 100%; }
        .form-label { display: block; font-family: monospace; font-size: 10px; font-weight: 700; color: #64748b; margin-bottom: 0.5rem; text-transform: uppercase; }
        .form-input {
            width: 100%;
            background: rgba(255,255,255,0.6);
            border: 1px solid #cbd5e1;
            padding: 0.75rem 1rem;
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #111;
            outline: none;
            transition: all 0.2s;
            box-sizing: border-box;
        }
        .form-input:focus { border-color: #0f172a; background: #fff; }
        
        .btn-submit {
            background: #0f172a;
            color: #fff;
            border: none;
            padding: 0.75rem 1.25rem;
            font-family: monospace;
            font-weight: 700;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: background 0.2s;
            box-sizing: border-box;
        }
        .btn-submit:hover { background: #334155; }
        
        /* Board Section */
        .gb-board-stats {
            display: flex;
            border-bottom: 1px solid #cbd5e1;
            background: rgba(255,255,255,0.2);
            box-sizing: border-box;
            width: 100%;
        }
        .stat-box { padding: 1rem 1.5rem; flex-grow: 1; border-right: 1px solid #cbd5e1; box-sizing: border-box; min-width: 0; }
        .stat-box:last-child { border-right: none; }
        .stat-label { font-family: monospace; font-size: 9px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 0.25rem; word-wrap: break-word; overflow-wrap: break-word; }
        .stat-value { font-size: clamp(1.2rem, 3vw, 1.5rem); font-weight: 800; color: #0f172a; word-wrap: break-word; overflow-wrap: break-word; }
        
        .gb-messages {
            flex-grow: 1;
            overflow-y: auto;
            padding: 1.25rem 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            box-sizing: border-box;
            width: 100%;
        }
        
        /* Scrollbar */
        .gb-messages::-webkit-scrollbar { width: 6px; }
        .gb-messages::-webkit-scrollbar-track { background: transparent; border-left: 1px solid #cbd5e1; }
        .gb-messages::-webkit-scrollbar-thumb { background: #94a3b8; }
        
        .msg-card {
            background: rgba(255,255,255,0.7);
            border: 1px solid #cbd5e1;
            padding: 1.25rem;
            position: relative;
            box-sizing: border-box;
            width: 100%;
        }
        .msg-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.75rem; }
        .msg-name { font-size: 16px; font-weight: 800; color: #0f172a; word-wrap: break-word; overflow-wrap: break-word; }
        .msg-time { font-family: monospace; font-size: 9px; color: #64748b; margin-top: 0.25rem; text-transform: uppercase; }
        .msg-icon { color: #64748b; font-size: 14px; flex-shrink: 0; }
        
        .msg-text { font-size: 14px; line-height: 1.6; color: #334155; word-wrap: break-word; overflow-wrap: break-word; }
        
        .msg-reply {
            margin-top: 1.25rem;
            padding: 1rem;
            border: 1px solid #cbd5e1;
            background: repeating-linear-gradient(-45deg, rgba(203,213,225,0.1), rgba(203,213,225,0.1) 4px, rgba(203,213,225,0.2) 4px, rgba(203,213,225,0.2) 8px);
            box-sizing: border-box;
            width: 100%;
        }
        .reply-header { font-family: monospace; font-size: 9px; font-weight: 700; color: #475569; display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem; text-transform: uppercase; }
        .reply-text { font-size: 13px; line-height: 1.5; color: #475569; word-wrap: break-word; overflow-wrap: break-word; }
        
        /* Mobile adjustments */
        @media (max-width: 1023px) {
            .gb-wrapper {
                height: auto !important;
                min-height: 100vh;
                overflow: visible !important;
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .gb-container {
                height: auto;
                min-height: 100vh;
            }
            .gb-messages {
                overflow-y: visible;
            }
            .gb-form-inner {
                overflow-y: visible;
            }
        }
    </style>

    <div class="gb-wrapper">
        <div class="gb-container" data-aos="fade-up" data-aos-duration="1000">
            <div class="gb-header-area">
                <div class="gb-header-title">BUKU TAMU / PESAN</div>
                <h1 class="gb-main-title">Tinggalkan catatan, kritik, atau saran.</h1>
            </div>
            
            @if(session('success'))
                <div style="background: #10b981; color: white; padding: 1rem; margin-bottom: 1.5rem; font-weight: bold; border-radius: 4px;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="gb-grid">
                
                <!-- Left Form -->
                <div class="gb-panel">
                    <div class="gb-panel-header">CATATAN PUBLIK</div>
                    <div class="gb-form-inner">
                        <h2 class="gb-form-title">Tulis sesuatu yang bermanfaat, tajam, atau baik.</h2>
                        <p class="gb-form-desc">Pesan akan muncul di sini setelah dikirim. Saya dapat membalas dari browser saya sendiri setelah membuka kunci mode admin.</p>
                        
                        <form action="/guestbook" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">NAMA</label>
                                <input type="text" name="name" class="form-input" placeholder="Nama Anda" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">PESAN</label>
                                <textarea name="message" class="form-input" rows="4" placeholder="Tulis pesan Anda..." required></textarea>
                            </div>
                            <button type="submit" class="btn-submit">
                                KIRIM PESAN <i class="fi fi-rs-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Right Board -->
                <div class="gb-panel">
                    <div class="gb-board-stats">
                        <div class="stat-box">
                            <div class="stat-label">PAPAN PESAN</div>
                            <div class="stat-value">{{ $messages->count() }} pesan</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-label">BALASAN</div>
                            <div class="stat-value">{{ $messages->where('reply', '!=', null)->count() }}</div>
                        </div>
                    </div>
                    
                    <div class="gb-messages">
                        
                        @forelse($messages as $msg)
                        <div class="msg-card">
                            <div class="msg-header">
                                <div>
                                    <div class="msg-name">{{ $msg->name }}</div>
                                    <div class="msg-time">{{ $msg->created_at->format('d F Y, H:i') }}</div>
                                </div>
                                <i class="fi fi-rs-comment-alt msg-icon"></i>
                            </div>
                            <div class="msg-text">
                                {{ $msg->message }}
                            </div>
                            
                            @if($msg->reply)
                            <div class="msg-reply">
                                <div class="reply-header">
                                    <i class="fi fi-rs-undo"></i> PARHAN MENJAWAB
                                </div>
                                <div class="reply-text">
                                    {{ $msg->reply }}
                                </div>
                            </div>
                            @endif
                        </div>
                        @empty
                        <div style="padding: 2rem; text-align: center; color: #64748b; font-family: monospace; font-size: 12px;">
                            Belum ada pesan. Jadilah yang pertama!
                        </div>
                        @endforelse
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection
