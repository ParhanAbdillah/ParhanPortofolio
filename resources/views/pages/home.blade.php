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
