<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofoio | Parhan</title>
    <link rel="stylesheet" href="{{ asset('output.css') }}" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css" />
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- GSAP for smooth animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        html, body {
            overflow-x: hidden;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        html::-webkit-scrollbar, body::-webkit-scrollbar {
            display: none;
        }
    </style>
  </head>
  <body class="w-full min-h-screen bg-gray-50 text-gray-900">
    
    <!-- Cinematic Page Transition Curtain -->
    <div id="page-transition" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 99999; display: flex; pointer-events: none;">
        
        <!-- Layer 1: Bright Blue Accent -->
        <div id="transition-layer-1" style="position: absolute; inset: 0; display: flex; width: 100%; height: 100%;">
            <div class="transition-panel-1" style="flex: 1; background-color: #2563eb; transform: translateY(0%);"></div>
            <div class="transition-panel-1" style="flex: 1; background-color: #2563eb; transform: translateY(0%);"></div>
            <div class="transition-panel-1" style="flex: 1; background-color: #2563eb; transform: translateY(0%);"></div>
            <div class="transition-panel-1" style="flex: 1; background-color: #2563eb; transform: translateY(0%);"></div>
            <div class="transition-panel-1" style="flex: 1; background-color: #2563eb; transform: translateY(0%);"></div>
        </div>

        <!-- Layer 2: Deep Premium Slate -->
        <div id="transition-layer-2" style="position: absolute; inset: 0; display: flex; width: 100%; height: 100%;">
            <div class="transition-panel-2" style="flex: 1; background-color: #0f172a; border-right: 1px solid rgba(255,255,255,0.05); box-shadow: 0 0 20px rgba(0,0,0,0.5); transform: translateY(0%);"></div>
            <div class="transition-panel-2" style="flex: 1; background-color: #0f172a; border-right: 1px solid rgba(255,255,255,0.05); box-shadow: 0 0 20px rgba(0,0,0,0.5); transform: translateY(0%);"></div>
            <div class="transition-panel-2" style="flex: 1; background-color: #0f172a; border-right: 1px solid rgba(255,255,255,0.05); box-shadow: 0 0 20px rgba(0,0,0,0.5); transform: translateY(0%);"></div>
            <div class="transition-panel-2" style="flex: 1; background-color: #0f172a; border-right: 1px solid rgba(255,255,255,0.05); box-shadow: 0 0 20px rgba(0,0,0,0.5); transform: translateY(0%);"></div>
            <div class="transition-panel-2" style="flex: 1; background-color: #0f172a; box-shadow: 0 0 20px rgba(0,0,0,0.5); transform: translateY(0%);"></div>
        </div>
        
        <div id="transition-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; font-family: 'Inter', sans-serif; font-size: 2rem; font-weight: 900; letter-spacing: 0.1em; opacity: 1; text-transform: uppercase; z-index: 10;">
            <span style="color: #60a5fa;">//</span> MEMUAT
        </div>
    </div>

    <!-- header -->
    <header id="main-header" style="position: fixed; top: 0; left: 0; right: 0; z-index: 10000; display: flex; justify-content: space-between; align-items: center; padding: 1.25rem 2.5rem; background-color: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); box-shadow: 0 4px 20px -2px rgba(0,0,0,0.05); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);">
      
      <div style="padding-left: 1rem;">
        <a href="/admin" style="text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
            <h1 style="font-size: 1.5rem; font-weight: 800; font-family: 'Inter', system-ui, sans-serif; margin: 0; color: #1e293b; letter-spacing: -0.02em;">
              Parhan <span style="color: #2563eb;">Abdillah</span>
            </h1>
        </a>
      </div>
      
      <style>
          @media (max-width: 1023px) {
              .desktop-nav-only { display: none !important; }
              .mobile-btn-only { display: flex !important; }
              #main-header { padding: 1rem 1.5rem !important; }
          }
          @media (min-width: 1024px) {
              .desktop-nav-only { display: flex !important; gap: 1.5rem; }
              .mobile-btn-only { display: none !important; }
          }
          .nav-link {
              position: relative;
              color: #64748b;
              text-decoration: none;
              font-weight: 600;
              font-size: 0.95rem;
              font-family: 'Inter', system-ui, sans-serif;
              transition: color 0.3s ease;
              padding: 0.5rem 0;
          }
          .nav-link:hover, .nav-link.active {
              color: #1e293b;
          }
          .nav-link::after {
              content: '';
              position: absolute;
              bottom: 0;
              left: 50%;
              transform: translateX(-50%);
              width: 0%;
              height: 2px;
              background-color: #2563eb;
              transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
              border-radius: 2px;
          }
          .nav-link.active::after, .nav-link:hover::after {
              width: 100%;
          }
          .nav-link.active {
              color: #2563eb;
          }
          
          /* Pure CSS Mobile Menu Overlay */
          #mobile-menu {
              position: fixed;
              top: 0; left: 0; right: 0; bottom: 0;
              background-color: white;
              z-index: 9999;
              display: none;
              flex-direction: column;
              padding-top: 100px;
              padding-left: 24px;
              padding-right: 24px;
              overflow-y: auto;
          }
          .mobile-menu-link {
              padding: 16px 0;
              font-size: 1.125rem;
              font-weight: 600;
              color: #1f2937;
              border-bottom: 1px solid #f3f4f6;
              text-decoration: none;
              font-family: 'Inter', system-ui, sans-serif;
          }
          .mobile-menu-link.active {
              color: #2563eb;
          }
      </style>

      <!-- Mobile Hamburger Button -->
      <button id="mobile-menu-btn" onclick="toggleMobileMenu()" class="mobile-btn-only" style="align-items: center; justify-content: center; width: 48px; height: 48px; background: transparent; border: none; cursor: pointer; color: #2563eb;">
          <svg xmlns="http://www.w3.org/2000/svg" style="width: 32px; height: 32px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </button>

      <script>
          function toggleMobileMenu() {
              var menu = document.getElementById('mobile-menu');
              if (window.getComputedStyle(menu).display === 'none') {
                  menu.style.display = 'flex';
              } else {
                  menu.style.display = 'none';
              }
          }
      </script>

      <!-- Desktop Navigation -->
      <nav class="nav-container desktop-nav-only items-center gap-6 pr-4">
        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
        <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">Tentang</a>
        <a href="/skills" class="nav-link {{ request()->is('skills') ? 'active' : '' }}">Keahlian</a>
        <a href="/project" class="nav-link {{ request()->is('project') ? 'active' : '' }}">Proyek</a>
        <a href="/certificate" class="nav-link {{ request()->is('certificate') ? 'active' : '' }}">Sertifikat</a>
        <a href="/guestbook" class="nav-link {{ request()->is('guestbook') ? 'active' : '' }}">Buku Tamu</a>
        <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Kontak</a>
        
        <div style="width: 1px; height: 20px; background-color: #cbd5e1; margin: 0 0.5rem;"></div>

        <!-- Google Translate Widget (Hidden) -->
        <div id="google_translate_element" style="display: none;"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'id',
                    autoDisplay: false
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        <style>
            .goog-te-banner-frame { display: none !important; }
            body { top: 0px !important; }
            .skiptranslate > iframe { display: none !important; }
            .custom-scrollbar::-webkit-scrollbar { width: 6px; }
            .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; }
            .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        </style>

        <!-- Custom Beautiful Language Dropdown -->
        <div class="relative inline-block text-left" id="lang-dropdown-container" style="margin-left: 0.5rem;">
            <div>
                <button type="button" onclick="document.getElementById('lang-menu').classList.toggle('hidden')" class="inline-flex w-full justify-center items-center gap-x-2 rounded-full bg-white px-4 py-2.5 text-sm font-bold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-200 hover:bg-gray-50 transition-all duration-200" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <i class="fi fi-rs-world" style="margin-top: 1px; color: #2563eb; font-size: 1.1rem;"></i>
                    <span id="current-lang-text">Language</span>
                    <i class="fi fi-rs-angle-small-down text-gray-400" style="margin-top: 1px;"></i>
                </button>
            </div>

            <!-- Dropdown menu -->
            <div id="lang-menu" class="hidden absolute right-0 z-50 mt-2 w-48 origin-top-right rounded-xl bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1 max-h-64 overflow-y-auto custom-scrollbar" role="none">
                    <a href="#" onclick="changeLanguage('id'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇮🇩 Indonesian (Asli)</a>
                    <a href="#" onclick="changeLanguage('en'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇬🇧 English</a>
                    <a href="#" onclick="changeLanguage('ja'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇯🇵 Japanese</a>
                    <a href="#" onclick="changeLanguage('ko'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇰🇷 Korean</a>
                    <a href="#" onclick="changeLanguage('ar'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇸🇦 Arabic</a>
                    <a href="#" onclick="changeLanguage('es'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇪🇸 Spanish</a>
                    <a href="#" onclick="changeLanguage('zh-CN'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇨🇳 Chinese</a>
                    <a href="#" onclick="changeLanguage('fr'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇫🇷 French</a>
                    <a href="#" onclick="changeLanguage('de'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇩🇪 German</a>
                    <a href="#" onclick="changeLanguage('ru'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇷🇺 Russian</a>
                    <a href="#" onclick="changeLanguage('th'); return false;" class="text-gray-700 block px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition-colors font-medium">🇹🇭 Thai</a>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const match = document.cookie.match(new RegExp('(^| )googtrans=([^;]+)'));
                if (match) {
                    const lang = match[2].split('/')[2];
                    const langMap = {
                        'id': 'Indonesian', 'en': 'English', 'ja': 'Japanese', 'ko': 'Korean', 
                        'ar': 'Arabic', 'es': 'Spanish', 'zh-CN': 'Chinese', 'fr': 'French', 
                        'de': 'German', 'ru': 'Russian', 'th': 'Thai'
                    };
                    if(langMap[lang]) {
                        document.getElementById('current-lang-text').innerText = langMap[lang];
                    }
                } else {
                    document.getElementById('current-lang-text').innerText = 'Indonesian';
                }
            });

            function changeLanguage(langCode) {
                // Set cookie for google translate (translate from id to target lang)
                if(langCode === 'id') {
                    // Reset translation
                    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; domain=" + window.location.hostname + "; path=/;";
                } else {
                    document.cookie = "googtrans=/id/" + langCode + "; path=/";
                    document.cookie = "googtrans=/id/" + langCode + "; domain=" + window.location.hostname + "; path=/";
                }
                window.location.reload();
            }

            // Close dropdown on click outside
            window.addEventListener('click', function(e){
                if (!document.getElementById('lang-dropdown-container').contains(e.target)){
                    document.getElementById('lang-menu').classList.add('hidden');
                }
            });
        </script>
      </nav>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu">
        <a href="/" class="mobile-menu-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
        <a href="/about" class="mobile-menu-link {{ request()->is('about') ? 'active' : '' }}">Tentang</a>
        <a href="/skills" class="mobile-menu-link {{ request()->is('skills') ? 'active' : '' }}">Keahlian</a>
        <a href="/project" class="mobile-menu-link {{ request()->is('project') ? 'active' : '' }}">Proyek</a>
        <a href="/certificate" class="mobile-menu-link {{ request()->is('certificate') ? 'active' : '' }}">Sertifikat</a>
        <a href="/guestbook" class="mobile-menu-link {{ request()->is('guestbook') ? 'active' : '' }}">Buku Tamu</a>
        <a href="/contact" class="mobile-menu-link {{ request()->is('contact') ? 'active' : '' }}">Kontak</a>
        
        <div style="margin-top: 1.5rem;">
            <p style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.5rem; font-weight: 600;">Ganti Bahasa / Change Language:</p>
            <select onchange="if(this.value) changeLanguage(this.value);" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; background-color: #f9fafb; border: 1px solid #e5e7eb; color: #1f2937; font-weight: 500; outline: none;">
                <option value="">-- Pilih Bahasa --</option>
                <option value="id">🇮🇩 Indonesian</option>
                <option value="en">🇬🇧 English</option>
                <option value="ja">🇯🇵 Japanese</option>
                <option value="ko">🇰🇷 Korean</option>
                <option value="ar">🇸🇦 Arabic</option>
                <option value="es">🇪🇸 Spanish</option>
                <option value="zh-CN">🇨🇳 Chinese</option>
                <option value="fr">🇫🇷 French</option>
                <option value="de">🇩🇪 German</option>
                <option value="ru">🇷🇺 Russian</option>
                <option value="th">🇹🇭 Thai</option>
            </select>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="{{ asset('particles.js') }}"></script>
    <script src="{{ asset('app.js') }}"></script>
    
    <script>
        // SPA Routing GSAP Logic - Multi-Layer Premium Curtain (Fast & Snappy)
        document.addEventListener('DOMContentLoaded', function() {
            const transitionEl = document.getElementById('page-transition');
            const panels1 = document.querySelectorAll('.transition-panel-1');
            const panels2 = document.querySelectorAll('.transition-panel-2');
            const textNode = document.getElementById('transition-text');
            const navLinks = document.querySelectorAll('.nav-link, a.btn-navigate');
            
            // 1. Reveal page on initial load (Curtains open UPwards)
            const tlInit = gsap.timeline();
            tlInit.to(textNode, { duration: 0.1, opacity: 0, delay: 0.05 }) // Minimal delay
                  // Layer 2 (Slate) goes up first - FAST
                  .to(panels2, {
                      duration: 0.45,
                      y: "-100%",
                      ease: "power3.inOut",
                      stagger: 0.03
                  }, "-=0.05")
                  // Layer 1 (Blue) follows quickly behind - FAST
                  .to(panels1, {
                      duration: 0.45,
                      y: "-100%",
                      ease: "power3.inOut",
                      stagger: 0.03
                  }, "-=0.35")
                  .set([panels1, panels2], { y: "-100%" }) // keep them up
                  .call(() => {
                      transitionEl.style.pointerEvents = 'none';
                  });

            // --- NEW: Animate Elements/Cards On Page Load ---
            const cardsToReveal = document.querySelectorAll('.project-wrapper, .skill-cat-card, .cert-card, .contact-list-item, .id-card-holder');
            if (cardsToReveal.length > 0) {
                // Set initial state before animation
                gsap.set(cardsToReveal, { y: 40, opacity: 0 });
                // Stagger them in right as the curtain is finishing opening
                tlInit.to(cardsToReveal, {
                    duration: 0.6,
                    y: 0,
                    opacity: 1,
                    stagger: 0.05,
                    ease: "back.out(1.2)",
                    clearProps: "all" // Clear inline styles so hover effects keep working
                }, "-=0.2");
            } else {
                // If it's Home Page (text instead of cards)
                const homeText = document.querySelectorAll('.pt-20 h1, .pt-20 p, .btn-navigate');
                if (homeText.length > 0) {
                    gsap.set(homeText, { y: 20, opacity: 0 });
                    tlInit.to(homeText, {
                        duration: 0.5,
                        y: 0,
                        opacity: 1,
                        stagger: 0.05,
                        ease: "power2.out",
                        clearProps: "all"
                    }, "-=0.2");
                }
            }

            // 2. Intercept clicks to trigger curtain closing
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const targetUrl = this.getAttribute('href');
                    
                    // Don't animate if clicking current page or external link
                    if (targetUrl === window.location.pathname || targetUrl.startsWith('http')) return;
                    
                    e.preventDefault(); 
                    
                    const targetText = this.innerText.toUpperCase();
                    
                    transitionEl.style.pointerEvents = 'all';
                    textNode.innerHTML = `<span style="color: #60a5fa;">//</span> ${targetText}`;
                    
                    const tl = gsap.timeline();
                    
                    // Reset positions to top
                    tl.set([panels1, panels2], { y: "-100%" })
                      // Layer 1 (Blue) drops down FAST
                      .to(panels1, {
                          duration: 0.45,
                          y: "0%",
                          ease: "power3.inOut",
                          stagger: 0.03
                      })
                      // Layer 2 (Slate) drops down immediately after FAST
                      .to(panels2, {
                          duration: 0.45,
                          y: "0%",
                          ease: "power3.inOut",
                          stagger: 0.03
                      }, "-=0.35")
                      // Text fades in
                      .to(textNode, {
                          duration: 0.2,
                          opacity: 1
                      }, "-=0.2")
                      .call(() => {
                          // ONCE COVERED, NAVIGATE TO NEW PAGE
                          window.location.href = targetUrl;
                      });
                });
            });
        });
    </script>
    @stack('scripts')
  </body>
</html>
