<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofoio | Parhan</title>
    <link rel="stylesheet" href="{{ asset('output.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css"
    />
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- GSAP for smooth animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
  </head>
  <body class="w-full min-h-screen bg-gray-50 text-gray-900">
    
    <!-- Cinematic Page Transition Curtain -->
    <div id="page-transition" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 99999; display: flex; pointer-events: none;">
        <div class="transition-panel" style="flex: 1; background-color: #111; background-image: radial-gradient(#333 1px, transparent 1px); background-size: 20px 20px; transform: translateY(-100%);"></div>
        <div class="transition-panel" style="flex: 1; background-color: #111; background-image: radial-gradient(#333 1px, transparent 1px); background-size: 20px 20px; transform: translateY(-100%);"></div>
        <div class="transition-panel" style="flex: 1; background-color: #111; background-image: radial-gradient(#333 1px, transparent 1px); background-size: 20px 20px; transform: translateY(-100%);"></div>
        <div class="transition-panel" style="flex: 1; background-color: #111; background-image: radial-gradient(#333 1px, transparent 1px); background-size: 20px 20px; transform: translateY(-100%); border-right: 1px solid #333; border-left: 1px solid #333;"></div>
        <div class="transition-panel" style="flex: 1; background-color: #111; background-image: radial-gradient(#333 1px, transparent 1px); background-size: 20px 20px; transform: translateY(-100%);"></div>
        <div id="transition-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; font-family: monospace; font-size: 1.5rem; font-weight: 700; letter-spacing: 0.2em; opacity: 0; text-transform: uppercase;">MEMUAT</div>
    </div>

    <!-- header -->
    <header id="main-header" style="position: fixed; top: 0; left: 0; right: 0; z-index: 50; display: flex; justify-content: space-between; align-items: center; padding: 1.25rem 2.5rem; background-color: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); box-shadow: 0 4px 20px -2px rgba(0,0,0,0.05); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);">
      
      <!-- Scroll Progress Bar -->
      <div id="scroll-progress" style="position: absolute; bottom: 0; left: 0; height: 3px; background: linear-gradient(90deg, #3b82f6, #60a5fa, #2563eb); width: 0%; transition: width 0.15s ease-out; border-radius: 0 2px 2px 0;"></div>
      
      <div style="padding-left: 1rem;">
        <a href="/admin" style="text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
            <h1 style="font-size: 1.5rem; font-weight: 800; font-family: 'Inter', system-ui, sans-serif; margin: 0; color: #1e293b; letter-spacing: -0.02em;">
              Parhan <span style="color: #2563eb;">Abdillah</span>
            </h1>
        </a>
      </div>
      
      <style>
          /* Modern Nav Link Animations */
          .nav-container {
              display: none;
              align-items: center;
              gap: 2.5rem; /* Fixes the squished layout */
              padding-right: 1.5rem;
          }
          @media (min-width: 768px) {
              .nav-container { display: flex; }
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
              color: #1e293b; /* Darker text when active */
          }
          /* Center-expanding sleek line */
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
          /* Subtle dot for active state */
          .nav-link.active {
              color: #000000;
          }
      </style>

      <nav class="nav-container" style="align-items: center; display: flex;">
        <a href="#Home" class="nav-link active">{{ __('Home') }}</a>
        <a href="#about" class="nav-link">{{ __('About') }}</a>
        <a href="#Skill" class="nav-link">{{ __('Skills') }}</a>
        <a href="#Project" class="nav-link">{{ __('Project') }}</a>
        <a href="#Certificate" class="nav-link">{{ __('Certificate') }}</a>
        <a href="#Contact" class="nav-link">{{ __('Contact') }}</a>
        
        <div style="width: 1px; height: 20px; background-color: #cbd5e1; margin: 0 0.5rem;"></div>

        <!-- Language Dropdown -->
        <div class="relative inline-block text-left" id="lang-dropdown-container">
            <div>
                <button type="button" onclick="document.getElementById('lang-menu').classList.toggle('hidden')" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <i class="fi fi-rs-language" style="margin-top: 2px;"></i>
                    {{ strtoupper(Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale()) }}
                    <i class="fi fi-rs-angle-small-down" style="margin-top: 2px;"></i>
                </button>
            </div>

            <!-- Dropdown menu -->
            <div id="lang-menu" class="hidden absolute right-0 z-10 mt-2 w-32 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                    @foreach(Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a href="{{ Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" 
                           class="text-gray-700 block px-4 py-2 text-sm hover:bg-blue-50 hover:text-blue-700 {{ $localeCode == Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() ? 'bg-blue-50 text-blue-700 font-bold' : '' }}" 
                           role="menuitem" tabindex="-1" id="menu-item-{{ $localeCode }}">
                            {{ $properties['native'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- Close dropdown on click outside -->
        <script>
            window.addEventListener('click', function(e){
                if (!document.getElementById('lang-dropdown-container').contains(e.target)){
                    document.getElementById('lang-menu').classList.add('hidden');
                }
            });
        </script>
      </nav>
    </header>
    <!-- section 1 -->
    <section class="bg-gray-100 items-center h-full w-full" id="Home">
      <div class="w-full h-full absolute top-0 left-0" id="particles-js"></div>
      <div class="pl-7 md:pl-32 pr-7 relative z-10" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; min-height: 80vh;">
        <div class="pt-20 md:pt-32" style="flex: 1; min-width: 300px;">
          <h1 class="font-bold text-[55px]">{{ $profile?->hero_title ?? "Hello,It's Me" }}</h1>
          <div class="font-semibold text-[60px] font-serif text-black mt-1 leading-tight">
            <h1>Muhamad <span class="text-blue-800">Parhan</span> A</h1>
          </div>
          <p class="font-semibold text-black mt-2 text-3xl" data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500">
            And I'm a, <span class="input text-red-700 font-semibold"></span>
          </p>

          <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 3rem; margin-bottom: 2rem;" data-aos="fade-down" data-aos-duration="1200">
            <a href="#about" style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.875rem 1.75rem; background-color: #2563eb; color: white; font-weight: 600; font-size: 1.1rem; border-radius: 9999px; text-decoration: none; box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.backgroundColor='#1d4ed8'; this.style.boxShadow='0 15px 20px -5px rgba(37, 99, 235, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.backgroundColor='#2563eb'; this.style.boxShadow='0 10px 15px -3px rgba(37, 99, 235, 0.3)';">
              About Me <i class="fi fi-ss-arrow-circle-down" style="margin-top: 2px;"></i>
            </a>
            
            <a href="#Project" style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.875rem 1.75rem; background-color: white; color: #2563eb; border: 2px solid #2563eb; font-weight: 600; font-size: 1.1rem; border-radius: 9999px; text-decoration: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.backgroundColor='#eff6ff'; this.style.boxShadow='0 10px 15px -3px rgba(0, 0, 0, 0.1)';" onmouseout="this.style.transform='translateY(0)'; this.style.backgroundColor='white'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.05)';">
              View Project <i class="fi fi-rs-laptop-code" style="margin-top: 2px;"></i>
            </a>

            <a href="#" style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.875rem 1.75rem; background-color: #111827; color: white; border: 2px solid #111827; font-weight: 600; font-size: 1.1rem; border-radius: 9999px; text-decoration: none; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.backgroundColor='#000'; this.style.boxShadow='0 15px 20px -5px rgba(0, 0, 0, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.backgroundColor='#111827'; this.style.boxShadow='0 10px 15px -3px rgba(0, 0, 0, 0.2)';">
              Open CV <i class="fi fi-ss-document" style="margin-top: 2px;"></i>
            </a>
          </div>

          <div style="display: flex; gap: 1rem; margin-top: 1rem;" data-aos="fade-down" data-aos-duration="1300">
            <!-- Social icons can be styled with inline styles too to ensure perfection -->
            <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; background-color: #111827; color: #60a5fa; border-radius: 50%; text-decoration: none; transition: all 0.3s; font-size: 1.3rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#2563eb'; this.style.color='white'; this.style.transform='translateY(-4px) scale(1.1)'; this.style.boxShadow='0 10px 15px -3px rgba(37,99,235,0.4)';" onmouseout="this.style.backgroundColor='#111827'; this.style.color='#60a5fa'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)';">
              <i class="fi fi-brands-whatsapp" style="margin-top: 2px;"></i>
            </a>
            <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; background-color: #111827; color: #60a5fa; border-radius: 50%; text-decoration: none; transition: all 0.3s; font-size: 1.3rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#2563eb'; this.style.color='white'; this.style.transform='translateY(-4px) scale(1.1)'; this.style.boxShadow='0 10px 15px -3px rgba(37,99,235,0.4)';" onmouseout="this.style.backgroundColor='#111827'; this.style.color='#60a5fa'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)';">
              <i class="fi-brands-instagram" style="margin-top: 2px;"></i>
            </a>
            <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; background-color: #111827; color: #60a5fa; border-radius: 50%; text-decoration: none; transition: all 0.3s; font-size: 1.3rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#2563eb'; this.style.color='white'; this.style.transform='translateY(-4px) scale(1.1)'; this.style.boxShadow='0 10px 15px -3px rgba(37,99,235,0.4)';" onmouseout="this.style.backgroundColor='#111827'; this.style.color='#60a5fa'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)';">
              <i class="fi fi-brands-tik-tok" style="margin-top: 2px;"></i>
            </a>
            <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; background-color: #111827; color: #60a5fa; border-radius: 50%; text-decoration: none; transition: all 0.3s; font-size: 1.3rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#2563eb'; this.style.color='white'; this.style.transform='translateY(-4px) scale(1.1)'; this.style.boxShadow='0 10px 15px -3px rgba(37,99,235,0.4)';" onmouseout="this.style.backgroundColor='#111827'; this.style.color='#60a5fa'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)';">
              <i class="fi fi-brands-github" style="margin-top: 2px;"></i>
            </a>
          </div>
        </div>

        <div style="flex: 1; display: flex; justify-content: center; min-width: 300px; margin-top: 2rem; position: relative;" data-aos="fade-up" data-aos-duration="1500">
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
                    background: #f3f4f6; /* matches bg-gray-100 */
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

            <script>
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
        </div>
      </div>
    </section>

    <!-- section 2 -->
    <section id="about">
      <div class="gap-3 flex mt-44 md:mt-7 justify-center p-20">
        <i class="fi fi-ss-user text-[35px]"></i>
        <h1 class="text-4xl font-bold text-center">
          About <span class="text-blue-600">Me</span>
        </h1>
      </div>
      <!-- foto -->
      <div class="pl-60 flex gap-16">
        <div id="tilt-image" class="h-[410px] w-[450px] ml-2 rounded-3xl shadow-2xl transition-transform duration-300 ease-in-out hover:bg-blue-300 overflow-hidden">
          <img src="{{ $profile && $profile->about_image_path ? asset('storage/' . $profile->about_image_path) : asset('img/poto.jpg') }}" alt="Profile Photo" class="w-full h-full object-cover">
        </div>
        <div class="ml-[10px] mr-32">
          <h1 class="text-2xl font-bold"data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1200">I'm Muhamad Parhan Abdillah</h1>
          <p class="font-semibold mt-3"data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1000">
            Website Developer| Network Engineer| Student.
          </p>
          <div class="mt-3"data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="900">
            <p>
              {{ $profile?->about_text ?? 'Saya Muhamad Parhan Abdillah, biasa di panggil parhan, saya lahir di Tasikmalaya, 28 Agustus 2005, saya sedang menempuh D3 di Kampus Politeknik LP3I Tasikmalaya. Saya memeiliki keahlian di bidang website Developer & Network Engineer.' }}
            </p>
          </div>
          <p class="mt-3"data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="850">
            <span class="text-blue-700">Email :</span>
            muhamadparhanabdillah@gmail.com
          </p>
          <p class="mt-3"data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="800">
            <span class="text-blue-700">Alamat :</span> Kp. Leles Tengah RT.01,
            RW.01, Desa. Kurniabakti, kec. Ciawi, Kab. Tasikmalaya, Jawa Barat
          </p>
        </div>
      </div>
    </section>

    <!-- section 3 -->
    <section id="Skill">
      <!-- <div class="bg-gray-700 h-full w-full mt-10"> -->
<?php
    $dbSkills = \App\Models\Skill::all()->groupBy('category');
    
    // Default categories if DB is empty to ensure structure remains
    $skillCategories = [
        'Web Development' => 'Frontend layouts, backend logic, and responsive UI frameworks.',
        'Networking & Infrastructure' => 'Server setups, routing, hardware configurations, and IoT devices.',
        'Productivity & Others' => 'Documentation, office utilities, and personal activities.'
    ];

    $getIconClass = function($name) {
        $name = strtolower(trim($name));
        $map = [
            'html' => 'fa-brands fa-html5 text-orange-500',
            'css' => 'fa-brands fa-css3-alt text-blue-500',
            'tailwind' => 'fa-solid fa-wind text-teal-400',
            'php' => 'fi fi-brands-php text-indigo-400',
            'bootstrap' => 'fa-brands fa-bootstrap text-purple-500',
            'network' => 'fa-solid fa-wifi text-gray-300',
            'cisco' => 'fa-solid fa-network-wired text-cyan-400',
            'mikrotik' => 'fa-solid fa-server text-gray-300',
            'iot' => 'fa-solid fa-robot text-emerald-400',
            'excel' => 'fa-solid fa-file-excel text-green-500',
            'word' => 'fa-solid fa-file-word text-blue-600',
            'futsal' => 'fa-regular fa-futbol text-white',
            'python' => 'fa-brands fa-python text-yellow-400',
            'javascript' => 'fa-brands fa-js text-yellow-300',
            'laravel' => 'fa-brands fa-laravel text-red-500',
            'react' => 'fa-brands fa-react text-cyan-400',
            'vue' => 'fa-brands fa-vuejs text-emerald-500',
            'node' => 'fa-brands fa-node text-green-500',
            'git' => 'fa-brands fa-git-alt text-orange-600',
            'github' => 'fa-brands fa-github text-white',
            'figma' => 'fa-brands fa-figma text-pink-400',
            'linux' => 'fa-brands fa-linux text-yellow-200',
            'mysql' => 'fa-solid fa-database text-blue-400',
            'sql' => 'fa-solid fa-database text-blue-400',
        ];
        return $map[$name] ?? 'fa-solid fa-code text-blue-400';
    };

    // Populate default if empty for showcase
    if ($dbSkills->isEmpty()) {
        $dbSkills = collect([
            'Web Development' => collect([
                (object)['name' => 'HTML'], (object)['name' => 'CSS'], (object)['name' => 'Tailwind'], (object)['name' => 'PHP'], (object)['name' => 'Bootstrap']
            ]),
            'Networking & Infrastructure' => collect([
                (object)['name' => 'Network'], (object)['name' => 'Cisco'], (object)['name' => 'Mikrotik'], (object)['name' => 'IOT']
            ]),
            'Productivity & Others' => collect([
                (object)['name' => 'Excel'], (object)['name' => 'Word'], (object)['name' => 'Futsal']
            ])
        ]);
    }
?>
      <style>
          .skill-wrapper {
              background-color: #f1f5f9; 
              background-image: radial-gradient(#cbd5e1 1px, transparent 1px); 
              background-size: 20px 20px; 
              color: #0f172a; 
              border-top: 1px solid #e2e8f0; 
              border-bottom: 1px solid #e2e8f0;
              padding: 5rem 1.5rem;
              margin-top: 6rem;
              position: relative;
              font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
          }
          .skill-watermark {
              position: absolute;
              top: 5%;
              left: -2%;
              font-size: clamp(80px, 15vw, 220px);
              font-weight: 900;
              color: rgba(203, 213, 225, 0.4);
              letter-spacing: -5px;
              line-height: 1;
              z-index: 0;
              user-select: none;
              pointer-events: none;
          }
          .skill-container {
              max-width: 1150px;
              margin: 0 auto;
              position: relative;
              z-index: 10;
          }
          .skill-header-flex {
              display: flex;
              justify-content: space-between;
              align-items: flex-end;
              margin-bottom: 2rem;
          }
          .skill-grid {
              display: grid;
              grid-template-columns: 1fr;
              gap: 1.5rem; 
          }
          @media (min-width: 768px) {
              .skill-grid {
                  grid-template-columns: repeat(12, minmax(0, 1fr));
              }
              .skill-col-5 {
                  grid-column: span 5 / span 5;
                  display: flex;
                  flex-direction: column;
                  gap: 1.5rem;
              }
              .skill-col-7 {
                  grid-column: span 7 / span 7;
                  display: flex;
                  flex-direction: column;
                  gap: 1.5rem; 
              }
              .skill-wrapper { padding: 5rem 3rem; }
          }
          /* Typography */
          .skill-text-mono-sm { font-size: 10px; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace; letter-spacing: 0.15em; text-transform: uppercase; font-weight: 700; color: #64748b; }
          .skill-text-mono-xs { font-size: 9px; font-family: ui-monospace, monospace; letter-spacing: 0.1em; text-transform: uppercase; color: #94a3b8; margin-bottom: 4px; }
          .skill-title { font-size: clamp(2rem, 4vw, 2.75rem); font-weight: 800; line-height: 1.1; letter-spacing: -0.03em; color: #0f172a; margin-bottom: 8px; }
          .skill-subtitle { font-size: 1.25rem; font-weight: 800; line-height: 1.4; color: #1e293b; margin-bottom: 0.75rem; }
          .skill-desc { font-size: 12px; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem; }
          
          /* Boxes */
          .skill-box-p { padding: 1.5rem; }
          .skill-cat-card { background-color: rgba(255,255,255,0.85); border: 1px solid #cbd5e1; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); border-radius: 2px; overflow: hidden; }
          .skill-cat-header { padding: 1.25rem 1.5rem 1rem 1.5rem; }
          .skill-badge-dark { display: inline-block; background: #0f172a; color: #fff; font-size: 9px; font-family: monospace; font-weight: 700; letter-spacing: 0.1em; padding: 4px 10px; border-radius: 2px; text-transform: uppercase; margin-bottom: 1rem; }
          .skill-info-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; padding-top: 1.25rem; border-top: 1px dotted #cbd5e1; }
          
          /* Pills & Marquee */
          .skill-flex-gap2 { display: flex; flex-wrap: wrap; gap: 0.5rem; }
          .skill-pill { padding: 4px 8px; background: #fff; font-size: 9px; font-weight: 700; border: 1px solid #cbd5e1; text-transform: uppercase; font-family: monospace; display: flex; align-items: center; gap: 6px; color: #475569; box-shadow: 0 1px 2px rgba(0,0,0,0.05); }
          
          .skill-marquee-wrapper { overflow: hidden; position: relative; width: 100%; border-top: 1px solid #cbd5e1; background: rgba(248, 250, 252, 0.5); mask-image: linear-gradient(to right, transparent, black 2%, black 98%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 2%, black 98%, transparent); }
          .skill-strip-container { display: flex; width: max-content; animation: skillMarquee 25s linear infinite; }
          .skill-strip-item { padding: 8px 16px; font-size: 10px; font-weight: 700; color: #475569; border-right: 1px solid #cbd5e1; text-transform: uppercase; font-family: monospace; display: flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.4); }
          
          @keyframes skillMarquee {
              0% { transform: translateX(0); }
              100% { transform: translateX(-33.33%); }
          }
      </style>

      <div class="skill-wrapper">
        
        <!-- Watermark -->
        <div class="skill-watermark">SKILLS</div>

        <div class="skill-container" data-aos="zoom-in-up">
            
            <!-- Top Header & Badge -->
            <div class="skill-header-flex">
                <div>
                    <div>
                        <span class="skill-text-mono-sm">Skills / Capability Map</span>
                    </div>
                    <h1 class="skill-title">
                        Skills, kept practical.
                    </h1>
                </div>
                <div class="hidden md:block" style="display: none;">
                    <!-- Hide on mobile -->
                </div>
                <!-- Inline style block for desktop badge -->
                <div style="padding: 6px 24px; border: 1px solid #cbd5e1; background: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(203,213,225,0.2) 10px, rgba(203,213,225,0.2) 20px);" class="skill-text-mono-sm">
                    Skill Map / Active
                </div>
            </div>

            <!-- Main Grid/Table -->
            <div class="skill-grid">
                
                <!-- LEFT COLUMN -->
                <div class="skill-col-5">
                    
                    <!-- Core Profile Box (Separate Card) -->
                    <div class="skill-cat-card skill-box-p">
                        <div class="skill-badge-dark">
                            Core Direction
                        </div>
                        <h2 class="skill-subtitle">
                            Full-stack web developer for web systems, automation, AI workflows, GIS, and data products.
                        </h2>
                        <p class="skill-desc">
                            I build the technical product first, then support it with clear visuals, cost documents, planning, and handoff materials when the project needs them.
                        </p>

                        <div class="skill-info-grid">
                            <div>
                                <div class="skill-text-mono-xs">Core IT</div>
                                <div style="color: #1e293b; font-weight: 700; font-size: 10px;">Web, API, AI, GIS</div>
                            </div>
                            <div>
                                <div class="skill-text-mono-xs">Support Skill</div>
                                <div style="color: #1e293b; font-weight: 700; font-size: 10px;">Design, docs, costing</div>
                            </div>
                            <div>
                                <div class="skill-text-mono-xs">Delivery Mode</div>
                                <div style="color: #1e293b; font-weight: 700; font-size: 10px;">Build, document, handoff</div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Delivery Box (Separate Card) -->
                    <div class="skill-cat-card skill-box-p">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem;">
                            <h3 style="font-size: 12px; font-weight: 900; color: #64748b; letter-spacing: 0.1em; text-transform: uppercase; margin: 0;">Project Delivery</h3>
                            <div class="skill-text-mono-xs" style="margin: 0;">Design / Docs / Costing</div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem 1.5rem;">
                            <!-- Visuals -->
                            <div>
                                <div class="skill-text-mono-xs">Visual & Layout</div>
                                <div class="skill-flex-gap2">
                                    <span class="skill-pill"><i class="fa-brands fa-figma" style="color: #94a3b8;"></i> Figma</span>
                                    <span class="skill-pill"><i class="fa-solid fa-c" style="color: #94a3b8;"></i> Canva</span>
                                </div>
                            </div>
                            
                            <!-- Docs -->
                            <div>
                                <div class="skill-text-mono-xs">Docs & Presentation</div>
                                <div class="skill-flex-gap2">
                                    <span class="skill-pill"><i class="fa-solid fa-file-word" style="color: #94a3b8;"></i> Word / Docs</span>
                                </div>
                            </div>

                            <!-- Costing -->
                            <div>
                                <div class="skill-text-mono-xs">Costing & Admin</div>
                                <div class="skill-flex-gap2">
                                    <span class="skill-pill"><i class="fa-solid fa-file-excel" style="color: #94a3b8;"></i> Excel / Sheets</span>
                                </div>
                            </div>

                            <!-- Planning -->
                            <div>
                                <div class="skill-text-mono-xs">Planning & Handoff</div>
                                <div class="skill-flex-gap2">
                                    <span class="skill-pill"><i class="fa-solid fa-folder-tree" style="color: #94a3b8;"></i> Draw.io</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="skill-col-7">
                    
                    @foreach($skillCategories as $catName => $catDesc)
                    <div class="skill-cat-card" style="display: flex; flex-direction: column;">
                        
                        <!-- Category Header -->
                        <div class="skill-cat-header">
                            <h3 style="font-size: 1.125rem; font-weight: 600; color: #1e293b; margin: 0 0 2px 0;">{{ $catName }}</h3>
                            <p class="skill-text-mono-xs" style="color: #64748b; font-size: 10px;">{{ $catDesc }}</p>
                        </div>
                        
                        <!-- Marquee Strip (No Gaps, Table style) -->
                        <div class="skill-marquee-wrapper">
                            <div class="skill-strip-container">
                                @if(isset($dbSkills[$catName]))
                                    @foreach($dbSkills[$catName] as $skill)
                                        <div class="skill-strip-item">
                                            <i class="{{ $getIconClass($skill->name) }}" style="color: #94a3b8; font-size: 12px;"></i> {{ $skill->name }}
                                        </div>
                                    @endforeach
                                    <!-- Duplicate for seamless scroll -->
                                    @foreach($dbSkills[$catName] as $skill)
                                        <div class="skill-strip-item">
                                            <i class="{{ $getIconClass($skill->name) }}" style="color: #94a3b8; font-size: 12px;"></i> {{ $skill->name }}
                                        </div>
                                    @endforeach
                                    @foreach($dbSkills[$catName] as $skill)
                                        <div class="skill-strip-item">
                                            <i class="{{ $getIconClass($skill->name) }}" style="color: #94a3b8; font-size: 12px;"></i> {{ $skill->name }}
                                        </div>
                                    @endforeach
                                @else
                                    <div class="skill-strip-item" style="font-style: italic;">No skills added yet.</div>
                                @endif
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>

            </div>
        </div>
      </div>
    </div>
      <!-- </div> -->
    </section>

    <!-- Section 4 -->
    <section id="Project">
      <div class="bg-[#f8fafc] w-full min-h-screen pt-24 pb-20 relative border-b border-gray-200" style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 20px 20px;">
        <div class="max-w-[1400px] mx-auto px-4 lg:px-8">
            
            <!-- Header -->
            <div class="mb-10" data-aos="fade-up" data-aos-duration="1000">
                <p class="text-xs font-mono text-gray-500 uppercase tracking-widest mb-2">2023-2026 / SISTEM TERPILIH</p>
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 tracking-tight">Arsip proyek.</h1>
            </div>

            <!-- 3 Column Layout Container -->
            <div class="flex flex-col xl:flex-row border border-gray-300 bg-white shadow-2xl" data-aos="fade-up" data-aos-duration="1500" style="min-height: 700px;">
                
                @php 
                    $mainProject = $projects->first(); 
                @endphp
                
                @if($projects->count() > 0)
                <!-- COLUMN 1: Daftar Proyek (Left Sidebar) -->
                <div class="w-full xl:w-[280px] flex-shrink-0 border-b xl:border-b-0 xl:border-r border-gray-300 bg-white flex flex-col">
                    <div class="flex justify-between items-center px-5 py-4 border-b border-gray-200 bg-white">
                        <span class="text-[10px] font-mono text-gray-400 tracking-widest uppercase">DAFTAR PROYEK</span>
                        <span class="text-[11px] font-bold text-gray-700">{{ count($projects) }} proyek</span>
                    </div>
                    
                    <div class="p-4 flex-grow overflow-y-auto" style="max-height: 700px;">
                        @foreach($projects as $index => $project)
                        <div class="project-list-item {{ $index === 0 ? 'bg-black text-white' : 'bg-white text-gray-800 hover:bg-gray-50 border border-gray-200' }} p-5 relative overflow-hidden cursor-pointer mb-3 transition-colors" 
                             onclick="showProject({{ $index }}, this)"
                             style="{{ $index === 0 ? 'box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);' : '' }}">
                            
                            <!-- Wavy SVG for active item -->
                            <svg class="wavy-bg absolute bottom-0 left-0 w-full {{ $index === 0 ? 'block' : 'hidden' }}" viewBox="0 0 1440 100" fill="white" xmlns="http://www.w3.org/2000/svg" style="height: 15px; transform: translateY(1px);">
                                <path d="M0,50 C120,0 240,100 360,50 C480,0 600,100 720,50 C840,0 960,100 1080,50 C1200,0 1320,100 1440,50 L1440,100 L0,100 Z"></path>
                            </svg>
                            
                            <div class="year-type text-[9px] font-mono {{ $index === 0 ? 'text-gray-400' : 'text-gray-500' }} mb-1 tracking-widest uppercase relative z-10">TAHUN {{ $project->year ?? '2026' }} WEB APP</div>
                            <h3 class="title font-bold text-sm leading-tight mb-3 truncate relative z-10">{{ $project->title }}</h3>
                            <div class="status text-[9px] font-bold {{ $index === 0 ? 'text-gray-400' : 'text-gray-500' }} uppercase tracking-widest relative z-10">{{ $project->status ?? 'ACTIVE' }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- COLUMN 2: Berkas Proyek (Middle Main Content) -->
                <div class="flex-grow flex flex-col min-w-0 bg-white">
                    <!-- Topbar -->
                    <div class="flex flex-wrap gap-4 justify-between items-center px-6 py-4 border-b border-gray-200 bg-white">
                        <span class="text-[10px] font-mono text-gray-400 tracking-widest uppercase">BERKAS PROYEK</span>
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="text-[9px] font-bold text-gray-600 border border-gray-300 px-2 py-1 uppercase tracking-widest">PENGEMBANGAN AKTIF</span>
                            <span class="text-[9px] font-bold text-gray-600 border border-gray-300 px-2 py-1 uppercase tracking-widest">PRIBADI</span>
                            <div class="flex border border-gray-300 bg-white">
                                <button class="px-2 py-1 border-r border-gray-300 hover:bg-gray-100" onclick="prevProject()"><i class="fi fi-rs-angle-left text-[10px]"></i></button>
                                <span class="px-3 py-1 text-[10px] font-mono text-gray-500 flex items-center bg-white" id="project-counter">Proyek 1 dari {{ count($projects) }}</span>
                                <button class="px-2 py-1 border-l border-gray-300 hover:bg-gray-100" onclick="nextProject()"><i class="fi fi-rs-angle-right text-[10px]"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Content Area -->
                    <div class="p-6 md:p-10 lg:p-12 overflow-y-auto flex-grow" style="max-height: 700px;">
                        <h2 id="project-title" class="text-3xl md:text-5xl font-black text-gray-900 mb-10 tracking-tight">{{ $mainProject->title }}</h2>
                        
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-[10px] font-mono text-gray-400 tracking-widest uppercase">TANGKAPAN LAYAR</span>
                            <span class="text-[10px] font-mono text-gray-400 tracking-widest uppercase">1 GAMBAR</span>
                        </div>

                        <!-- Image Box -->
                        <div class="bg-black border border-gray-200 mb-10 flex justify-center items-center w-full overflow-hidden relative">
                            <img id="project-image" src="{{ $mainProject->image_path ? asset('storage/' . $mainProject->image_path) : asset('img/presensi.png') }}" alt="Project Image" class="w-full object-cover" style="display: block;">
                        </div>

                        <!-- Description -->
                        <div id="project-description" class="text-gray-600 text-[15px] leading-relaxed text-justify w-full">
                            {!! nl2br(e($mainProject->description ?: 'No detailed description available.')) !!}
                        </div>
                    </div>
                </div>

                <!-- COLUMN 3: Metadata (Right Sidebar) -->
                <div class="w-full xl:w-[280px] 2xl:w-[320px] flex-shrink-0 border-t xl:border-t-0 xl:border-l border-gray-300 bg-[#f8fafc] flex flex-col">
                    <div class="p-6 border-b border-gray-200">
                        <span class="text-[9px] font-mono text-gray-400 tracking-widest uppercase block mb-2">KEMAJUAN</span>
                        <div id="project-status" class="font-bold text-gray-900 text-lg">{{ $mainProject->status ?? 'Active' }}</div>
                        <span class="text-[9px] font-mono text-gray-400 tracking-widest uppercase mt-1 block">FOKUS PORTOFOLIO SAAT INI</span>
                    </div>

                    <div class="p-6 border-b border-gray-200">
                        <span class="text-[9px] font-mono text-gray-400 tracking-widest uppercase block mb-4">INFORMASI PROYEK</span>
                        <div class="flex justify-between items-end border-b border-gray-300 pb-2">
                            <div>
                                <span class="text-[9px] font-mono text-gray-400 tracking-widest uppercase block mb-1">JENIS</span>
                                <div id="project-type" class="font-bold text-gray-900 text-sm">{{ $mainProject->type ?? 'Web App' }}</div>
                            </div>
                            <div class="text-right">
                                <span class="text-[9px] font-mono text-gray-400 tracking-widest uppercase block mb-1">TAHUN</span>
                                <div id="project-year" class="font-bold text-gray-900 text-sm">tahun {{ $mainProject->year ?? '2026' }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-b border-gray-200">
                        <span class="text-[9px] font-mono text-gray-400 tracking-widest uppercase block mb-4">TUMPUKAN</span>
                        <div id="project-tech" class="flex flex-wrap gap-2">
                            <!-- Filled via JS -->
                        </div>
                    </div>

                    <div class="p-6 mt-auto border-t border-gray-200 bg-[#f8fafc]">
                        <span class="text-[9px] font-mono text-gray-400 tracking-widest uppercase block mb-4">MENGAKSES</span>
                        <button class="w-full border border-gray-300 bg-white text-[10px] font-bold text-gray-800 py-3 px-4 uppercase tracking-widest flex justify-center items-center gap-2 hover:bg-gray-50 transition-colors shadow-sm">
                            <i class="fi fi-ss-lock"></i> <span id="project-access">REPOSITORI {{ strtoupper($mainProject->access ?? 'PRIVATE REPO') }}</span>
                        </button>
                    </div>
                </div>
                @else
                <div class="p-12 w-full text-center text-gray-500 font-mono text-sm">Belum ada proyek.</div>
                @endif
                
            </div>
        </div>
    </section>

    <!-- Section: Certificate (New) -->
    <section id="Certificate">
      <style>
          .cert-wrapper {
              background-color: #e5e5e5;
              background-image: radial-gradient(#a3a3a3 1px, transparent 1px);
              background-size: 20px 20px;
              color: #111;
              padding: 5rem 1.5rem 3rem 1.5rem;
              font-family: 'Inter', system-ui, sans-serif;
              border-bottom: 1px solid #ccc;
          }
          .cert-container {
              max-width: 1150px;
              margin: 0 auto;
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
              grid-template-columns: 1fr;
              gap: 1.5rem;
          }
          @media(min-width: 1024px) {
              .cert-grid {
                  grid-template-columns: 350px 1fr;
              }
          }
          
          /* Left Box */
          .cert-left-box {
              border: 1px solid #bbb;
              background: rgba(255,255,255,0.4);
              padding: 1.5rem;
              display: flex;
              flex-direction: column;
              justify-content: space-between;
              min-height: 400px;
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
          }
          .cert-left-desc {
              font-size: 13px;
              color: #555;
              line-height: 1.5;
          }
          .cert-stats-grid {
              display: grid;
              grid-template-columns: 1fr 1fr;
              border-top: 1px solid #bbb;
          }
          .cert-stat-item {
              padding: 1rem;
              border-bottom: 1px solid #bbb;
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
          }
          .cert-stat-value {
              font-size: 1.5rem;
              font-weight: 900;
          }

          /* Right Box */
          .cert-right-box {
              border: 1px solid #bbb;
              background: rgba(255,255,255,0.4);
              padding: 1.5rem;
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
          
          /* Cards Grid */
          .cert-cards-grid {
              display: grid;
              grid-template-columns: 1fr;
              gap: 1.5rem;
          }
          @media(min-width: 768px) {
              .cert-cards-grid {
                  grid-template-columns: 1fr 1fr;
              }
          }
          
          .cert-card {
              border: 1px solid #bbb;
              background: rgba(255,255,255,0.7);
              display: flex;
              flex-direction: column;
              padding: 1rem;
              position: relative;
          }
          /* Corner markers for card */
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
              width: 80px;
              height: 110px;
              background: #fff;
              border: 1px solid #ddd;
              padding: 2px;
              flex-shrink: 0;
          }
          .cert-img-box img {
              width: 100%;
              height: 100%;
              object-fit: cover;
          }
          .cert-info {
              flex: 1;
          }
          .cert-cat {
              font-family: monospace;
              font-size: 9px;
              font-weight: 700;
              color: #666;
              letter-spacing: 0.05em;
              margin-bottom: 0.25rem;
          }
          .cert-name {
              font-size: 1rem;
              font-weight: 800;
              line-height: 1.2;
              margin-bottom: 0.25rem;
          }
          .cert-issuer {
              font-size: 11px;
              color: #555;
          }
      </style>

      <div class="cert-wrapper">
          <div class="cert-container" data-aos="fade-up" data-aos-duration="1500">
              <div class="cert-main-title">
                  Kredensial, sertifikat, dan catatan lapangan.
              </div>
              
              <div class="cert-grid">
                  <!-- LEFT COL -->
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
                              <div class="cert-stat-value">16</div>
                          </div>
                          <div class="cert-stat-item">
                              <div class="cert-stat-label">SERTIFIKAT</div>
                              <div class="cert-stat-value">4</div>
                          </div>
                          <div class="cert-stat-item" style="border-bottom: none;">
                              <div class="cert-stat-label">SK MENYELESAIKAN PEKERJAAN</div>
                              <div class="cert-stat-value">12</div>
                          </div>
                          <div class="cert-stat-item" style="border-bottom: none;">
                              <div class="cert-stat-label">PERAN LAPANGAN</div>
                              <div class="cert-stat-value">2</div>
                          </div>
                      </div>
                  </div>

                  <!-- RIGHT COL -->
                  <div class="cert-right-box">
                      <div class="cert-right-header">
                          <span>SERTIFIKAT</span>
                          <i class="fi fi-rs-badge-check"></i>
                      </div>
                      
                      <div class="cert-cards-grid">
                          <!-- CARD 1 -->
                          <div class="cert-card">
                              <div class="cert-card-top">
                                  <span>CERT-01</span>
                                  <a href="#" style="color: inherit; text-decoration: none;">PRATINJAU PDF <i class="fi fi-rs-document"></i></a>
                              </div>
                              <div class="cert-card-content">
                                  <div class="cert-img-box">
                                      <img src="https://via.placeholder.com/80x110.png?text=CERT" alt="Sertifikat Magang">
                                  </div>
                                  <div class="cert-info">
                                      <div class="cert-cat">MAGANG</div>
                                      <div class="cert-name">Sertifikat Magang Kominfo</div>
                                      <div class="cert-issuer">Diskominfo Kalimantan Barat</div>
                                  </div>
                              </div>
                          </div>
                          
                          <!-- CARD 2 -->
                          <div class="cert-card">
                              <div class="cert-card-top">
                                  <span>CERT-02</span>
                                  <a href="#" style="color: inherit; text-decoration: none;">PRATINJAU PDF <i class="fi fi-rs-document"></i></a>
                              </div>
                              <div class="cert-card-content">
                                  <div class="cert-img-box">
                                      <img src="https://via.placeholder.com/80x110.png?text=CERT" alt="Ijazah">
                                  </div>
                                  <div class="cert-info">
                                      <div class="cert-cat">PENDIDIKAN</div>
                                      <div class="cert-name">D3 Teknik Informatika</div>
                                      <div class="cert-issuer">Politeknik Negeri Pontianak</div>
                                  </div>
                              </div>
                          </div>
                          
                          <!-- CARD 3 -->
                          <div class="cert-card">
                              <div class="cert-card-top">
                                  <span>CERT-03</span>
                                  <a href="#" style="color: inherit; text-decoration: none;">PRATINJAU PDF <i class="fi fi-rs-document"></i></a>
                              </div>
                              <div class="cert-card-content">
                                  <div class="cert-img-box">
                                      <img src="https://via.placeholder.com/80x110.png?text=CERT" alt="Kompetensi">
                                  </div>
                                  <div class="cert-info">
                                      <div class="cert-cat">KOMPETENSI</div>
                                      <div class="cert-name">Pengembang Web Junior</div>
                                      <div class="cert-issuer">BNSP / LSP Informatika</div>
                                  </div>
                              </div>
                          </div>
                          
                          <!-- CARD 4 -->
                          <div class="cert-card">
                              <div class="cert-card-top">
                                  <span>CERT-04</span>
                                  <a href="#" style="color: inherit; text-decoration: none;">PRATINJAU PDF <i class="fi fi-rs-document"></i></a>
                              </div>
                              <div class="cert-card-content">
                                  <div class="cert-img-box">
                                      <img src="https://via.placeholder.com/80x110.png?text=CERT" alt="Pelatihan">
                                  </div>
                                  <div class="cert-info">
                                      <div class="cert-cat">PELATIHAN</div>
                                      <div class="cert-name">Programmer Web Junior</div>
                                      <div class="cert-issuer">Politeknik Negeri Pontianak</div>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <!-- Section: Contact (New) -->
    <section id="Contact">
      <style>
          .contact-wrapper {
              background-color: #e5e5e5;
              background-image: radial-gradient(#a3a3a3 1px, transparent 1px);
              background-size: 20px 20px;
              color: #111;
              padding: 6rem 1.5rem;
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

          /* Left Side */
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

          /* Right Side */
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

          /* Buttons */
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
                  
                  <!-- Left Side -->
                  <div class="contact-left">
                      <div class="contact-label">KONTAK</div>
                      <div class="contact-title">Mari kita membangun sesuatu lebih tajam.</div>
                      <!-- Crosshair / Target Icon -->
                      <div class="contact-target-icon">
                          <i class="fi fi-rs-crosshair"></i>
                      </div>
                  </div>

                  <!-- Right Side -->
                  <div class="contact-right">
                      <ul class="contact-list">
                          <li class="contact-list-item">
                              <i class="fi fi-rs-envelope contact-list-icon"></i>
                              <span>muhamadparhanabdillah@gmail.com</span>
                          </li>
                          <li class="contact-list-item">
                              <i class="fi fi-rs-phone-call contact-list-icon"></i>
                              <span>+62 895 0581 5088</span>
                          </li>
                          <li class="contact-list-item">
                              <i class="fi fi-rs-marker contact-list-icon"></i>
                              <span style="line-height: 1.4;">Kp. Leles Tengah Rt.001, Rw.001, Desa Kurniabakti,<br>Kec. Ciawi, Kab. Tasikmalaya, Jawa Barat</span>
                          </li>
                      </ul>

                      <div class="contact-buttons">
                          <a href="#" class="contact-btn">
                              <i class="fi fi-brands-github"></i> GITHUB
                          </a>
                          <a href="#" class="contact-btn">
                              <i class="fi fi-brands-linkedin"></i> LINKEDIN
                          </a>
                          <a href="#" class="contact-btn">
                              <i class="fi fi-brands-instagram"></i> INSTAGRAM
                          </a>
                          <a href="#" class="contact-btn">
                              <i class="fi fi-brands-whatsapp"></i> WHATSAPP
                          </a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
    </section>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <!-- js dikit -->        
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
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
    </script>
     
    <script src="{{ asset('particles.js') }}"></script>
    <script src="{{ asset('app.js') }}"></script>
    
    <script>
        const projectData = @json($projects);
        let currentProjectIndex = 0;

        function showProject(index, element) {
            if (!projectData || !projectData[index]) return;
            
            currentProjectIndex = index;
            const project = projectData[index];
            
            // Update UI styling for active item
            document.querySelectorAll('.project-list-item').forEach((el, idx) => {
                const wavy = el.querySelector('.wavy-bg');
                const yearType = el.querySelector('.year-type');
                const status = el.querySelector('.status');
                
                if (idx === index) {
                    el.className = 'project-list-item bg-black text-white p-5 relative overflow-hidden cursor-pointer mb-3 transition-colors';
                    el.style.boxShadow = '0 10px 25px -5px rgba(0,0,0,0.3)';
                    if(wavy) wavy.classList.remove('hidden');
                    if(yearType) yearType.className = 'year-type text-[9px] font-mono text-gray-400 mb-1 tracking-widest uppercase relative z-10';
                    if(status) status.className = 'status text-[9px] font-bold text-gray-400 uppercase tracking-widest relative z-10';
                } else {
                    el.className = 'project-list-item bg-white text-gray-800 hover:bg-gray-50 border border-gray-200 p-5 relative overflow-hidden cursor-pointer mb-3 transition-colors';
                    el.style.boxShadow = 'none';
                    if(wavy) wavy.classList.add('hidden');
                    if(yearType) yearType.className = 'year-type text-[9px] font-mono text-gray-500 mb-1 tracking-widest uppercase relative z-10';
                    if(status) status.className = 'status text-[9px] font-bold text-gray-500 uppercase tracking-widest relative z-10';
                }
            });

            // Update content pane
            document.getElementById('project-counter').innerText = `Proyek ${index + 1} dari ${projectData.length}`;
            document.getElementById('project-title').innerText = project.title || 'Untitled';
            
            const imgPath = project.image_path ? `/storage/${project.image_path}` : '/img/presensi.png';
            document.getElementById('project-image').src = imgPath;
            
            let description = project.description || 'No detailed description available.';
            document.getElementById('project-description').innerHTML = description.replace(/\n/g, '<br>');

            // Update metadata
            document.getElementById('project-status').innerText = project.status || 'Active';
            document.getElementById('project-type').innerText = project.type || 'Web App';
            document.getElementById('project-year').innerText = `tahun ${project.year || '2026'}`;
            document.getElementById('project-access').innerText = `REPOSITORI ${String(project.access || 'PRIVATE REPO').toUpperCase()}`;

            // Update tech stack
            const techContainer = document.getElementById('project-tech');
            techContainer.innerHTML = '';
            
            let techs = [];
            try {
                techs = typeof project.tech_stack === 'string' ? JSON.parse(project.tech_stack) : project.tech_stack;
            } catch(e) {}
            if(!Array.isArray(techs) || techs.length === 0) techs = ['REACT', 'TAILWIND', 'LARAVEL'];
            
            techs.forEach(tech => {
                const span = document.createElement('span');
                span.className = 'border border-gray-300 bg-white text-[9px] font-mono text-gray-600 px-3 py-1.5 uppercase tracking-widest flex items-center gap-2';
                span.innerHTML = `<i class="fi fi-rs-code text-[8px]"></i> ${tech}`;
                techContainer.appendChild(span);
            });
        }

        function prevProject() {
            if (currentProjectIndex > 0) {
                showProject(currentProjectIndex - 1);
            }
        }

        function nextProject() {
            if (currentProjectIndex < projectData.length - 1) {
                showProject(currentProjectIndex + 1);
            }
        }
        
        // Initialize first project tech stack if it exists
        document.addEventListener('DOMContentLoaded', function() {
            if(projectData && projectData.length > 0) {
                showProject(0);
            }
        });
    </script>

        // --- NEW: SPA CURTAIN TRANSITION LOGIC ---
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            const transitionEl = document.getElementById('page-transition');
            const panels = document.querySelectorAll('.transition-panel');
            const textNode = document.getElementById('transition-text');
            const progressBar = document.getElementById('scroll-progress');
            
            // 1. Initial State: Hide all sections except Home
            sections.forEach(sec => {
                if(sec.id !== 'Home') sec.style.display = 'none';
            });
            
            let isAnimating = false;

            // 2. The Core Page Transition Function
            function changePage(targetId, targetText, clickedLink) {
                if (isAnimating) return;
                const targetSection = document.getElementById(targetId);
                if (!targetSection || targetSection.style.display === 'block') return; // Already on this page
                
                isAnimating = true;
                
                // Update active classes on nav
                navLinks.forEach(link => link.classList.remove('active'));
                if(clickedLink) clickedLink.classList.add('active');
                
                // Update text
                textNode.innerText = targetText || targetId;
                
                // Enable pointer events to block clicks during transition
                transitionEl.style.pointerEvents = 'all';
                
                const tl = gsap.timeline();
                
                // Animate panels dropping down (Stagger)
                tl.to(panels, {
                    duration: 0.7,
                    y: "0%",
                    ease: "power4.inOut",
                    stagger: 0.08
                })
                // Fade in text in the middle of screen
                .to(textNode, {
                    duration: 0.3,
                    opacity: 1
                }, "-=0.3")
                // --- AT THIS EXACT MOMENT, SCREEN IS BLACK ---
                .call(() => {
                    // Hide all sections
                    sections.forEach(sec => sec.style.display = 'none');
                    // Show target section
                    targetSection.style.display = 'block';
                    
                    // Reset scroll to very top instantly behind the curtain
                    window.scrollTo(0, 0);
                    
                    // Refresh AOS animations so they trigger correctly on the new page
                    if(typeof AOS !== 'undefined') {
                        setTimeout(() => AOS.refresh(), 100);
                    }
                })
                // Hold the black screen for a fraction of a second
                .to({}, {duration: 0.3})
                // Fade out text
                .to(textNode, {
                    duration: 0.2,
                    opacity: 0
                })
                // Animate panels sliding down to exit (or up, let's do down for a continuous sweep)
                .to(panels, {
                    duration: 0.7,
                    y: "100%",
                    ease: "power4.inOut",
                    stagger: 0.08
                }, "-=0.1")
                // Reset panels instantly back to the top (-100%) for the next time
                .set(panels, { y: "-100%" })
                .call(() => {
                    transitionEl.style.pointerEvents = 'none';
                    isAnimating = false;
                });
            }

            // 3. Attach Click Events to Nav Links
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); 
                    const targetId = this.getAttribute('href').substring(1);
                    const targetText = this.innerText; // "Home", "About", "Skills", etc.
                    changePage(targetId, targetText, this);
                });
            });
            
            // 4. Also apply to CTA buttons in Hero (About Me, View Project)
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                if(!anchor.classList.contains('nav-link')) {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href').substring(1);
                        
                        // Find the corresponding nav link to make it active
                        let matchingNavLink = null;
                        navLinks.forEach(nl => {
                            if(nl.getAttribute('href') === '#' + targetId) matchingNavLink = nl;
                        });
                        
                        let targetText = targetId.toUpperCase();
                        changePage(targetId, targetText, matchingNavLink);
                    });
                }
            });

            // 5. Update Scroll Progress Bar (Only tracks internal page scroll now)
            window.addEventListener('scroll', function() {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
                if(progressBar) progressBar.style.width = scrolled + "%";
            });
        });
    </script>
  </body>
</html>
