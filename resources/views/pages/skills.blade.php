@extends('layouts.main')

@section('content')
<section id="Skill">
<?php
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

    if (isset($dbSkills) && $dbSkills->isEmpty()) {
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
        body {
            overflow-x: hidden;
        }

        .skill-wrapper {
            background-color: #f1f5f9; 
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px); 
            background-size: 20px 20px; 
            color: #0f172a; 
            border-top: 1px solid #e2e8f0; 
            border-bottom: 1px solid #e2e8f0;
            padding: 7rem 1.5rem 2.5rem 1.5rem; /* Adjusted padding for header */
            position: relative;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            min-height: 100vh;
            width: 100%;
            overflow-x: hidden;
            box-sizing: border-box;
            display: flex;
            align-items: flex-start;
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
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }
        .skill-header-flex {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 2rem;
        }
        .skill-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            gap: 1rem; 
            max-width: 100%;
        }
        @media (min-width: 768px) {
            .skill-grid {
                grid-template-columns: repeat(12, minmax(0, 1fr));
            }
            .skill-col-5 {
                grid-column: span 5 / span 5;
                display: flex;
                flex-direction: column;
                gap: 0.75rem;
                max-width: 100%;
            }
            .skill-col-7 {
                grid-column: span 7 / span 7;
                display: flex;
                flex-direction: column;
                gap: 0.75rem; 
                max-width: 100%;
            }
            .skill-wrapper { padding: 5rem 3rem 1rem 3rem; }
        }
        .skill-text-mono-sm { font-size: 9px; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace; letter-spacing: 0.15em; text-transform: uppercase; font-weight: 700; color: #64748b; }
        .skill-text-mono-xs { font-size: 8px; font-family: ui-monospace, monospace; letter-spacing: 0.1em; text-transform: uppercase; color: #94a3b8; margin-bottom: 2px; }
        .skill-title { font-size: clamp(1.5rem, 3vw, 2.25rem); font-weight: 800; line-height: 1.1; letter-spacing: -0.03em; color: #0f172a; margin-bottom: 4px; }
        .skill-subtitle { font-size: 1.1rem; font-weight: 800; line-height: 1.3; color: #1e293b; margin-bottom: 0.5rem; word-wrap: break-word; overflow-wrap: break-word; }
        .skill-desc { font-size: 11px; color: #64748b; line-height: 1.5; margin-bottom: 0.75rem; word-wrap: break-word; overflow-wrap: break-word; }
        .skill-box-p { padding: 1.5rem; box-sizing: border-box; width: 100%; }
        .skill-cat-card { background-color: rgba(255,255,255,0.4); border: 1px solid #cbd5e1; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); border-radius: 2px; overflow: hidden; width: 100%; box-sizing: border-box; }
        .skill-cat-header { padding: 1.25rem 1.5rem 1rem 1.5rem; }
        .skill-badge-dark { display: inline-block; background: #0f172a; color: #fff; font-size: 9px; font-family: monospace; font-weight: 700; letter-spacing: 0.1em; padding: 4px 10px; border-radius: 2px; text-transform: uppercase; margin-bottom: 1rem; }
        .skill-info-grid { display: grid; grid-template-columns: minmax(0, 1fr); gap: 1rem; padding-top: 1.25rem; border-top: 1px dotted #cbd5e1; }
        .project-delivery-grid { display: grid; grid-template-columns: minmax(0, 1fr); gap: 1rem 1.5rem; }
        @media (min-width: 640px) {
            .skill-info-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .project-delivery-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }
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
        <div class="skill-watermark">SKILLS</div>
        <div class="skill-container" data-aos="zoom-in-up">
            <div class="skill-header-flex">
                <div>
                    <div>
                        <span class="skill-text-mono-sm">Skills / Capability Map</span>
                    </div>
                    <h1 class="skill-title">
                        Skills, kept practical.
                    </h1>
                </div>
                <div style="padding: 6px 24px; border: 1px solid #cbd5e1; background: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(203,213,225,0.2) 10px, rgba(203,213,225,0.2) 20px);" class="skill-text-mono-sm">
                    Skill Map / Active
                </div>
            </div>

            <div class="skill-grid">
                <div class="skill-col-5">
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

                    <div class="skill-cat-card skill-box-p">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem;">
                            <h3 style="font-size: 12px; font-weight: 900; color: #64748b; letter-spacing: 0.1em; text-transform: uppercase; margin: 0;">Project Delivery</h3>
                            <div class="skill-text-mono-xs" style="margin: 0;">Design / Docs / Costing</div>
                        </div>

                        <div class="project-delivery-grid">
                            <div>
                                <div class="skill-text-mono-xs">Visual & Layout</div>
                                <div class="skill-flex-gap2">
                                    <span class="skill-pill"><i class="fa-brands fa-figma" style="color: #94a3b8;"></i> Figma</span>
                                    <span class="skill-pill"><i class="fa-solid fa-c" style="color: #94a3b8;"></i> Canva</span>
                                </div>
                            </div>
                            <div>
                                <div class="skill-text-mono-xs">Docs & Presentation</div>
                                <div class="skill-flex-gap2">
                                    <span class="skill-pill"><i class="fa-solid fa-file-word" style="color: #94a3b8;"></i> Word / Docs</span>
                                </div>
                            </div>
                            <div>
                                <div class="skill-text-mono-xs">Costing & Admin</div>
                                <div class="skill-flex-gap2">
                                    <span class="skill-pill"><i class="fa-solid fa-file-excel" style="color: #94a3b8;"></i> Excel / Sheets</span>
                                </div>
                            </div>
                            <div>
                                <div class="skill-text-mono-xs">Planning & Handoff</div>
                                <div class="skill-flex-gap2">
                                    <span class="skill-pill"><i class="fa-solid fa-folder-tree" style="color: #94a3b8;"></i> Draw.io</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skill-col-7">
                    @foreach($skillCategories as $catName => $catDesc)
                    <div class="skill-cat-card" style="display: flex; flex-direction: column;">
                        <div class="skill-cat-header">
                            <h3 style="font-size: 1.125rem; font-weight: 600; color: #1e293b; margin: 0 0 2px 0;">{{ $catName }}</h3>
                            <p class="skill-text-mono-xs" style="color: #64748b; font-size: 10px;">{{ $catDesc }}</p>
                        </div>
                        <div class="skill-marquee-wrapper">
                            <div class="skill-strip-container">
                                @if(isset($dbSkills[$catName]))
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
</section>
@endsection
