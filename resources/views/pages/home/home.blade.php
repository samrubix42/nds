<div class="w-full bg-white flex flex-col">
    <!-- Hero Section: Simple Video Playing (No text/overlays) -->
    <section class="relative w-full h-[80vh] min-h-[650px] overflow-hidden bg-cream">
        <!-- Background Video (YouTube Embed - Cropped to hide title text and shadow overlays) -->
        <div class="absolute inset-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <iframe src="https://www.youtube.com/embed/ApLnqFUtHWc?autoplay=1&mute=1&loop=1&playlist=ApLnqFUtHWc&controls=0&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&enablejsapi=1"
                class="absolute top-1/2 left-1/2 w-[115vw] h-[65vw] min-h-[120vh] min-w-[204vh] -translate-x-1/2 -translate-y-1/2 scale-125 opacity-100"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
            </iframe>
        </div>
    </section>



    <!-- Who We Are Section (Reference Pattern: Image Left, Content Right - Centered in 7xl Screen) -->
    <section class="py-20 w-full bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center w-full">
            <!-- Left Side: Image with dot decoration (5 columns) -->
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                 class="lg:col-span-5 relative flex items-center justify-center p-4 transition-all duration-[1400ms] ease-out">
                <!-- Dotted Grid Decoration (Reference details) -->
                <div class="absolute -top-4 -right-4 w-32 h-44 z-0 opacity-30 select-none hidden sm:block">
                    <svg width="120" height="160" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="dot-pattern" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                                <circle cx="3" cy="3" r="2" fill="var(--color-primary-caramel)" />
                            </pattern>
                        </defs>
                        <rect width="120" height="160" fill="url(#dot-pattern)" />
                    </svg>
                </div>
                <!-- Small floating accent circle -->
                <div class="absolute top-8 -right-6 w-5 h-5 bg-caramel/30 rounded-full z-0 hidden sm:block"></div>

                <!-- Main Image -->
                <div class="relative z-10 w-full h-[380px] rounded-[24px] overflow-hidden border border-cream shadow-md">
                    <img src="{{ asset('image/image1.webp') }}"
                        alt="NDS Security Operations"
                        class="w-full h-full object-cover object-center transition-transform duration-700 hover:scale-103" />
                </div>
            </div>

            <!-- Right Side: Content with Left Accent Border (7 columns) -->
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                 class="lg:col-span-7 flex flex-col gap-6 transition-all duration-[1400ms] ease-out">
                <!-- Pill chip -->
                <div class="self-start">
                    <span class="inline-block px-5 py-2 bg-white text-coffee font-extrabold text-xs sm:text-sm tracking-wider uppercase rounded-full shadow-md shadow-caramel/10 border border-cream/80">
                        Who We Are ~
                    </span>
                </div>

                <!-- Heading -->
                <h2 class="text-2xl sm:text-4xl md:text-5xl font-black tracking-tight text-brownie leading-tight">
                    The <span class="text-coffee">Most Trusted</span> Name in Security Services in Noida
                </h2>

                <!-- Content text with left accent border -->
                <div class="border-caramel/70 py-1">
                    <p class="text-sm sm:text-base md:text-lg text-coffee/90 leading-relaxed font-medium">
                        Founded with a vision to deliver unmatched safety, NDS Security Services is Noida's leading private security provider. We cater to over 150+ corporate clients, manage deployments across 200+ secured locations in Noida & Delhi NCR, and employ a force of over 500+ highly trained guards. As a premier security partner, NDS is renowned for its PSARA-compliant Manned Guarding, 24/7 Command Center monitoring, electronic surveillance integration, executive VIP escorts, and comprehensive site risk assessments. We ensure your assets, employees, and premises remain protected round the clock with tactical precision.
                    </p>
                </div>

                <!-- Gradient pill button -->
                <div class="self-start">
                    <a href="#" class="bg-gradient-to-r from-caramel to-coffee hover:from-coffee hover:to-brownie text-white text-xs sm:text-sm font-bold uppercase tracking-wider py-3.5 px-8 rounded-full shadow-md shadow-caramel/25 transition-all inline-flex items-center gap-2 cursor-pointer mt-4">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Text Marquee Section (Immediately after Who We Are) -->
    <div class="relative w-full bg-gradient-to-r from-caramel via-[#cf9562] to-coffee text-white py-3.5 border-y border-cream/20 overflow-hidden select-none pointer-events-none z-10">
        <div class="flex animate-marquee whitespace-nowrap w-max items-center">
            <!-- Group 1 -->
            <div class="flex gap-16 items-center whitespace-nowrap px-8 text-xs sm:text-sm font-black uppercase tracking-widest">
                <span class="flex items-center gap-2">
                    <i class="ri-shield-check-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">PSARA Certified</strong> Security
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-flashlight-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">15 Mins</strong> Emergency Response
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-shield-user-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">Background Verified</strong> Guards
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-radar-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">24/7 Command Center</strong> Monitoring
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-building-2-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">150+ Corporate</strong> Sites Noida
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-focus-3-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">Regular Tactical</strong> Training
                </span>
            </div>
            <!-- Group 2 -->
            <div class="flex gap-16 items-center whitespace-nowrap px-8 text-xs sm:text-sm font-black uppercase tracking-widest">
                <span class="flex items-center gap-2">
                    <i class="ri-shield-check-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">PSARA Certified</strong> Security
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-flashlight-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">15 Mins</strong> Emergency Response
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-shield-user-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">Background Verified</strong> Guards
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-radar-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">24/7 Command Center</strong> Monitoring
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-building-2-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">150+ Corporate</strong> Sites Noida
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-focus-3-fill text-cream text-sm"></i>
                    <strong class="text-cream font-black">Regular Tactical</strong> Training
                </span>
            </div>
        </div>
    </div>


    <!-- Advanced Features & Impact Stats Section (Tailored specifically for NDS Security Guard Company) -->
    <section class="relative w-full bg-gradient-to-r from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-16 sm:py-24 border-y border-caramel/35 overflow-hidden">
        <!-- Organic Background Wave & Subtle Light Glow -->
        <div class="absolute inset-0 z-0 opacity-15 pointer-events-none select-none">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="feature-grid" width="44" height="44" patternUnits="userSpaceOnUse">
                        <path d="M 44 0 L 0 0 0 44" fill="none" stroke="rgba(207,149,98,0.3)" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#feature-grid)" />
            </svg>
        </div>
        <div class="absolute top-1/2 left-10 -translate-y-1/2 w-80 h-80 bg-caramel/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute top-1/2 right-10 -translate-y-1/2 w-80 h-80 bg-coffee/25 rounded-full blur-[100px] pointer-events-none"></div>

        <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-14'"
             class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full transition-all duration-[1400ms] ease-out">

            <!-- Top Tier: Headline + Animated Circular Contact Badge -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-16">
                <div class="flex flex-col gap-3.5 max-w-2xl">
                    <!-- Pill Chip Tag -->
                    <div class="self-start">
                        <span class="inline-flex items-center gap-2 px-4.5 py-1.5 bg-caramel/20 border border-caramel/40 text-cream text-xs sm:text-sm font-extrabold tracking-wider uppercase rounded-full shadow-sm backdrop-blur-sm">
                            <i class="ri-shield-check-fill text-caramel"></i> WHY NDS SECURITY ~
                        </span>
                    </div>

                    <!-- Main Title -->
                    <h2 class="text-2xl sm:text-4xl md:text-5xl font-black tracking-tight text-white leading-[1.15]">
                        Trained Security Force & <span class="text-caramel underline decoration-caramel/40 underline-offset-8">24/7 Tactical Command</span> Protection
                    </h2>
                </div>

                <!-- Rotating Circular Contact Badge -->
                <a href="tel:+919999988888" class="relative shrink-0 group flex items-center justify-center cursor-pointer mt-2 md:mt-0">
                    <!-- Animated SVG Rotating Circular Text -->
                    <div class="w-24 h-24 sm:w-28 sm:h-28 animate-[spin_14s_linear_infinite]">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-cream/80 fill-current">
                            <path id="circlePath" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="none"/>
                            <text class="text-[10px] font-bold uppercase tracking-[2.5px]">
                                <textPath href="#circlePath">
                                    Contact Now • Contact Now •
                                </textPath>
                            </text>
                        </svg>
                    </div>
                    <!-- Center Badge Icon -->
                    <div class="absolute w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-gradient-to-tr from-caramel to-coffee text-white shadow-2xl shadow-caramel/30 flex items-center justify-center text-xl sm:text-2xl transition-all duration-300 group-hover:scale-110 group-hover:bg-cream group-hover:text-brownie">
                        <i class="ri-phone-fill"></i>
                    </div>
                </a>
            </div>

            <!-- Middle Tier: 4 Feature Items Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 pb-14 border-b border-cream/15">
                <!-- Feature 1 -->
                <div class="flex flex-col gap-3.5 group p-4 rounded-2xl transition-all duration-300 hover:bg-cream/5 border border-transparent hover:border-caramel/20">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/20 border border-caramel/40 flex items-center justify-center text-caramel group-hover:bg-caramel group-hover:text-white transition-all duration-300 shadow-md">
                        <i class="ri-shield-user-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-cream uppercase tracking-wide group-hover:text-caramel transition-colors">
                        PSARA-Certified Force
                    </h3>
                    <p class="text-xs sm:text-sm text-cream/75 leading-relaxed font-medium">
                        Rigorously vetted, background-verified security guards trained for industrial complexes, corporate IT parks, and residential townships.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="flex flex-col gap-3.5 group p-4 rounded-2xl transition-all duration-300 hover:bg-cream/5 border border-transparent hover:border-caramel/20">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/20 border border-caramel/40 flex items-center justify-center text-caramel group-hover:bg-caramel group-hover:text-white transition-all duration-300 shadow-md">
                        <i class="ri-radar-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-cream uppercase tracking-wide group-hover:text-caramel transition-colors">
                        24/7 Command Patrol
                    </h3>
                    <p class="text-xs sm:text-sm text-cream/75 leading-relaxed font-medium">
                        Real-time GPS patrol monitoring, digital incident logging, and a 15-minute rapid emergency response team active round the clock.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="flex flex-col gap-3.5 group p-4 rounded-2xl transition-all duration-300 hover:bg-cream/5 border border-transparent hover:border-caramel/20">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/20 border border-caramel/40 flex items-center justify-center text-caramel group-hover:bg-caramel group-hover:text-white transition-all duration-300 shadow-md">
                        <i class="ri-building-4-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-cream uppercase tracking-wide group-hover:text-caramel transition-colors">
                        Corporate Protection
                    </h3>
                    <p class="text-xs sm:text-sm text-cream/75 leading-relaxed font-medium">
                        Polite front-desk reception guards, automated digital visitor gate-pass management, and multi-tier access control protocols.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="flex flex-col gap-3.5 group p-4 rounded-2xl transition-all duration-300 hover:bg-cream/5 border border-transparent hover:border-caramel/20">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/20 border border-caramel/40 flex items-center justify-center text-caramel group-hover:bg-caramel group-hover:text-white transition-all duration-300 shadow-md">
                        <i class="ri-shield-star-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-cream uppercase tracking-wide group-hover:text-caramel transition-colors">
                        VVIP & Armed Escorts
                    </h3>
                    <p class="text-xs sm:text-sm text-cream/75 leading-relaxed font-medium">
                        Disciplined ex-servicemen & personal security officers (PSOs) specialized in executive escorts, cash transit, and event safety.
                    </p>
                </div>
            </div>

            <!-- Bottom Tier: 5 Counter Stats with Vertical Separator Lines -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 pt-12 items-center text-center">
                <!-- Stat 1 -->
                <div class="flex flex-col items-center justify-center border-r-0 sm:border-r border-cream/15 pr-0 sm:pr-4"
                     x-data="{ count: 0, target: 220, duration: 1800, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-xs sm:text-sm font-bold text-cream/85 uppercase tracking-wider mt-1 sm:mt-2">
                        Residential Townships
                    </p>
                </div>

                <!-- Stat 2 -->
                <div class="flex flex-col items-center justify-center border-r-0 md:border-r border-cream/15 pr-0 md:pr-4"
                     x-data="{ count: 0, target: 30, duration: 1500, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-xs sm:text-sm font-bold text-cream/85 uppercase tracking-wider mt-1 sm:mt-2">
                        Malls & Complexes
                    </p>
                </div>

                <!-- Stat 3 -->
                <div class="flex flex-col items-center justify-center border-r-0 sm:border-r border-cream/15 pr-0 sm:pr-4"
                     x-data="{ count: 0, target: 100, duration: 1600, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-xs sm:text-sm font-bold text-cream/85 uppercase tracking-wider mt-1 sm:mt-2">
                        Corporate Towers
                    </p>
                </div>

                <!-- Stat 4 -->
                <div class="flex flex-col items-center justify-center border-r-0 md:border-r border-cream/15 pr-0 md:pr-4"
                     x-data="{ count: 0, target: 500, duration: 2000, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-xs sm:text-sm font-bold text-cream/85 uppercase tracking-wider mt-1 sm:mt-2">
                        Guards Deployed
                    </p>
                </div>

                <!-- Stat 5 -->
                <div class="flex flex-col items-center justify-center col-span-2 md:col-span-1"
                     x-data="{ count: 0, target: 25, duration: 1500, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-xs sm:text-sm font-bold text-cream/85 uppercase tracking-wider mt-1 sm:mt-2">
                        Years of Trust
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- Client Logo Alpine Slider Section (No arrow controls, auto sliding transition) -->
    <section class="bg-white py-20 border-b border-cream/30 overflow-hidden relative z-10"
        x-data="{ 
                 activeIndex: 0, 
                 totalLogos: 26,
                 getVisibleLogos() {
                     if (window.innerWidth >= 1024) return 5;
                     if (window.innerWidth >= 768) return 3;
                     return 2;
                 },
                 init() {
                     setInterval(() => {
                         const maxIndex = this.totalLogos - this.getVisibleLogos();
                         if (this.activeIndex < maxIndex) {
                             this.activeIndex++;
                         } else {
                             this.activeIndex = 0;
                         }
                     }, 2800);
                 }
             }"
        @resize.window="if (activeIndex > totalLogos - getVisibleLogos()) activeIndex = totalLogos - getVisibleLogos()">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-14'"
                 class="flex flex-col items-center text-center gap-3 mb-16 transition-all duration-[1300ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">Elite Partners</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Trusted by Noida's Leading Landmarks
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <div class="relative w-full overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out items-center"
                    :style="'width: ' + (totalLogos / getVisibleLogos() * 100) + '%; transform: translateX(-' + (activeIndex * (100 / totalLogos)) + '%)'">
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/01-1-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/02-1-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/04-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/05-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/06-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/08-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/09-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/10-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/11-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/12-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L01-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L02-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L03-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L04-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L05-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L06-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L07-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L09-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L11-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L13-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L16-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L17-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L18-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L19-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L20-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                    <div :style="'width: ' + (100 / totalLogos) + '%'" class="flex justify-center px-6 shrink-0">
                        <img src="{{ asset('clients/L21-150x150.jpg') }}" alt="Client Logo" class="h-20 md:h-24 w-auto object-contain transition-all duration-300 select-none pointer-events-none hover:scale-105" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Bento Grid Section (Expertise - Clean & Modern Layout) -->
    <section class="bg-cream/15 py-20 sm:py-24 border-y border-cream/50 relative overflow-hidden">
        <!-- Subtle Grid Background -->
        <div class="absolute inset-0 z-0 opacity-25 pointer-events-none select-none">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="home-services-grid" width="32" height="32" patternUnits="userSpaceOnUse">
                        <path d="M 32 0 L 0 0 0 32" fill="none" stroke="rgba(192,133,82,0.12)" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#home-services-grid)" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full relative z-10">
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-14'"
                 class="flex flex-col items-center text-center gap-3 mb-16 transition-all duration-[1300ms] ease-out">
                <span class="inline-flex items-center gap-1.5 px-4 py-1.5 bg-caramel/10 border border-caramel/25 text-caramel text-xs font-extrabold tracking-widest uppercase rounded-full shadow-sm">
                    <i class="ri-shield-star-fill text-sm"></i> Services
                </span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black tracking-tight text-brownie max-w-2xl leading-tight">
                    Comprehensive <span class="text-caramel">security</span> and surveillance solutions
                </h2>
                <div class="w-12 h-1 bg-caramel mt-2 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
                <!-- Card 1: Physical Guarding -->
                <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.1 }); obs.observe(this.$el); } }"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-95'"
                     class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-[1300ms] delay-100 ease-out flex flex-col items-center text-center">
                    <div class="relative w-full h-52 overflow-hidden bg-cream">
                        <img src="https://lh3.googleusercontent.com/aida/AP1WRLsV-SoJDZgIiLPzKak3XtVbnVX5XnElfRbSkQYICqCOVcycOg3d1s828xbjfSmsyrTmGlCuMgdu-zYwid1ZkyzhIoGHnuDB1j1j-QfB4LoH0SSgIjOh-u1QbqH63jFLpa-mN1ZboHEE789M-9-4rkZ9GDgmjCDIXcUz4o_fDyJq_wCg7_cXNCwEvpN377TtvamcMDwA22uFkHw6cWJLD9B4Lb5us4ZtbwNemca1asUusaUVYJj8zLe0nbxO"
                            alt="Security Guard"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-brownie/40 via-transparent to-transparent"></div>
                    </div>
                    <!-- Overlapping Center Circular Icon Badge -->
                    <div class="relative -mt-7 z-20 w-14 h-14 rounded-full bg-gradient-to-tr from-caramel to-coffee text-white border-4 border-white shadow-lg flex items-center justify-center text-2xl transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                        <i class="ri-shield-star-fill"></i>
                    </div>
                    <div class="p-6 pt-4 flex flex-col items-center text-center flex-grow w-full justify-between">
                        <div>
                            <h3 class="text-lg sm:text-xl font-black text-brownie tracking-tight mb-2.5 group-hover:text-caramel transition-colors">
                                Physical Guarding
                            </h3>
                            <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium mb-6">
                                Vigilant, disciplined physical security guards trained for industrial complexes, retail malls, IT parks, and residential neighborhoods.
                            </p>
                        </div>
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-extrabold text-caramel hover:text-brownie transition-all group/btn">
                            <span>Discover More</span>
                            <div class="w-7 h-7 rounded-full bg-caramel text-white flex items-center justify-center transition-transform duration-300 group-hover/btn:translate-x-1 group-hover/btn:bg-brownie shadow-sm">
                                <i class="ri-arrow-right-line text-sm"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Corporate Security -->
                <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.1 }); obs.observe(this.$el); } }"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-95'"
                     class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-[1300ms] delay-200 ease-out flex flex-col items-center text-center">
                    <div class="relative w-full h-52 overflow-hidden bg-cream">
                        <img src="https://lh3.googleusercontent.com/aida/AP1WRLs9GDpOIG8v_zrMNLzN1ZWLKuiXBgbety7WqPbN63CW2rOl2Rqj_Esuv-IOyhAO3lj-XXAbR0jcKTob8wSDGHcJBlbWR4R6Vax643wA2jey5tPsUPI7z3l8kDGjRZA9qS7Qtb6BiCD7pBj2exLlzIuhED9zcJS_YF200wmbHk0RH0PJrIhQOCJESBD4q7wTm_EObRytDfWN5okLtKYiPKG9yvLsERs1GqapQjgjd9znPe2MVlTxL5OO_Gs"
                            alt="Corporate Security"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-brownie/40 via-transparent to-transparent"></div>
                    </div>
                    <!-- Overlapping Center Circular Icon Badge -->
                    <div class="relative -mt-7 z-20 w-14 h-14 rounded-full bg-gradient-to-tr from-caramel to-coffee text-white border-4 border-white shadow-lg flex items-center justify-center text-2xl transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                        <i class="ri-building-fill"></i>
                    </div>
                    <div class="p-6 pt-4 flex flex-col items-center text-center flex-grow w-full justify-between">
                        <div>
                            <h3 class="text-lg sm:text-xl font-black text-brownie tracking-tight mb-2.5 group-hover:text-caramel transition-colors">
                                Corporate Security
                            </h3>
                            <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium mb-6">
                                Integrated corporate facility security, digital gate-pass tracking, and front-desk receptionist-guard protocols.
                            </p>
                        </div>
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-extrabold text-caramel hover:text-brownie transition-all group/btn">
                            <span>Discover More</span>
                            <div class="w-7 h-7 rounded-full bg-caramel text-white flex items-center justify-center transition-transform duration-300 group-hover/btn:translate-x-1 group-hover/btn:bg-brownie shadow-sm">
                                <i class="ri-arrow-right-line text-sm"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Armed Escorts -->
                <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.1 }); obs.observe(this.$el); } }"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-95'"
                     class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-[1300ms] delay-300 ease-out flex flex-col items-center text-center">
                    <div class="relative w-full h-52 overflow-hidden bg-cream">
                        <img src="https://lh3.googleusercontent.com/aida/AP1WRLvIHW23j_OUjwvXqlEeitUANjVbDzIZZ-FuEFvMemmRCO6egwo9SIXBbo10oOOE2IEZLW27ahSHbum1PyB9o5BoPC9wcAbRpCZ64gwouwKGQisazj2i8n_zRImx_e6tG4nEVR1UTvop7fm45lPEWcHg-1AAbNFMGH4L5xgryo7DPB7YnpbXtPasJt2h5cGoEqfDD_9mNu9UgoGnx0MLTdc9puKJkpwMJU6YlV_8KcHtBjEGxu5zEeXCKtBm"
                            alt="Escort Security"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-brownie/40 via-transparent to-transparent"></div>
                    </div>
                    <!-- Overlapping Center Circular Icon Badge -->
                    <div class="relative -mt-7 z-20 w-14 h-14 rounded-full bg-gradient-to-tr from-caramel to-coffee text-white border-4 border-white shadow-lg flex items-center justify-center text-2xl transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                        <i class="ri-user-star-fill"></i>
                    </div>
                    <div class="p-6 pt-4 flex flex-col items-center text-center flex-grow w-full justify-between">
                        <div>
                            <h3 class="text-lg sm:text-xl font-black text-brownie tracking-tight mb-2.5 group-hover:text-caramel transition-colors">
                                Armed Escorts
                            </h3>
                            <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium mb-6">
                                Elite personal protective guards and armed transit protection for executives, VVIPs, and critical cash transit.
                            </p>
                        </div>
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-extrabold text-caramel hover:text-brownie transition-all group/btn">
                            <span>Discover More</span>
                            <div class="w-7 h-7 rounded-full bg-caramel text-white flex items-center justify-center transition-transform duration-300 group-hover/btn:translate-x-1 group-hover/btn:bg-brownie shadow-sm">
                                <i class="ri-arrow-right-line text-sm"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Card 4: Electronic Surveillance -->
                <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.1 }); obs.observe(this.$el); } }"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-95'"
                     class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-[1300ms] delay-200 ease-out flex flex-col items-center text-center">
                    <div class="relative w-full h-52 overflow-hidden bg-cream">
                        <img src="{{ asset('command_center.png') }}"
                            alt="Electronic Surveillance Control Room"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-brownie/40 via-transparent to-transparent"></div>
                    </div>
                    <!-- Overlapping Center Circular Icon Badge -->
                    <div class="relative -mt-7 z-20 w-14 h-14 rounded-full bg-gradient-to-tr from-caramel to-coffee text-white border-4 border-white shadow-lg flex items-center justify-center text-2xl transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                        <i class="ri-radar-fill"></i>
                    </div>
                    <div class="p-6 pt-4 flex flex-col items-center text-center flex-grow w-full justify-between">
                        <div>
                            <h3 class="text-lg sm:text-xl font-black text-brownie tracking-tight mb-2.5 group-hover:text-caramel transition-colors">
                                Electronic Surveillance
                            </h3>
                            <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium mb-6">
                                24/7 centralized command monitoring, smart AI-driven CCTV integrations, thermal imaging, and perimeter intrusion detection.
                            </p>
                        </div>
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-extrabold text-caramel hover:text-brownie transition-all group/btn">
                            <span>Discover More</span>
                            <div class="w-7 h-7 rounded-full bg-caramel text-white flex items-center justify-center transition-transform duration-300 group-hover/btn:translate-x-1 group-hover/btn:bg-brownie shadow-sm">
                                <i class="ri-arrow-right-line text-sm"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Card 5: Event Security Management -->
                <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.1 }); obs.observe(this.$el); } }"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-95'"
                     class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-[1300ms] delay-300 ease-out flex flex-col items-center text-center">
                    <div class="relative w-full h-52 overflow-hidden bg-cream">
                        <img src="https://lh3.googleusercontent.com/aida/AP1WRLsnr0nCqgBFokwmrnxmAUVtAeJNt-nhkcJhehbgISmRSxUV_d5Y--Ep0kBLFtTmbp2noGJ_OXHU5-ucAYqHazKbHOfLh_PElXVh09yjMf67799TggbUrBb8djUWjLXGXy4nRrUcxRg1ka-jV75zhKLGoYfuDiftNVte3InfxGT4eOR8xq4jMZOx2wNPz6TsyqxOvy2OtFrqMcchpTDHAE5aPUfddNOZ_QsQHayyYFpBnJrHW6qWdodo8O1w"
                            alt="Event Crowd Control Security"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-brownie/40 via-transparent to-transparent"></div>
                    </div>
                    <!-- Overlapping Center Circular Icon Badge -->
                    <div class="relative -mt-7 z-20 w-14 h-14 rounded-full bg-gradient-to-tr from-caramel to-coffee text-white border-4 border-white shadow-lg flex items-center justify-center text-2xl transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                        <i class="ri-group-fill"></i>
                    </div>
                    <div class="p-6 pt-4 flex flex-col items-center text-center flex-grow w-full justify-between">
                        <div>
                            <h3 class="text-lg sm:text-xl font-black text-brownie tracking-tight mb-2.5 group-hover:text-caramel transition-colors">
                                Event Security
                            </h3>
                            <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium mb-6">
                                Tactical crowd management, VIP routing plans, rapid evacuation drills, and comprehensive security coordination for corporate events.
                            </p>
                        </div>
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-extrabold text-caramel hover:text-brownie transition-all group/btn">
                            <span>Discover More</span>
                            <div class="w-7 h-7 rounded-full bg-caramel text-white flex items-center justify-center transition-transform duration-300 group-hover/btn:translate-x-1 group-hover/btn:bg-brownie shadow-sm">
                                <i class="ri-arrow-right-line text-sm"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Card 6: Risk Assessment & Audit -->
                <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.1 }); obs.observe(this.$el); } }"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-95'"
                     class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-[1300ms] delay-400 ease-out flex flex-col items-center text-center">
                    <div class="relative w-full h-52 overflow-hidden bg-cream">
                        <img src="https://lh3.googleusercontent.com/aida/AP1WRLtyBG6H2kDhbY3d3BTw7l3dichQuqW7371O7Sd2S51O2_iLMOBHrjQ_-Ccre68Wcvq8huiXsb7FqveSxZRAIhf-FmBWLbXXkpQpIHbqVqWm6ZDNb5pkqer42NC2QJEkOQ1LRfcENWYgd6Noqi-GFk_17XCVcvZXq7nFUyf5MjGRXuMvSYj55l0qjJFInPJ-i40uXI8M3Mjm8dc6BFyz1eMI2CTqu2fxV7Yo3awlz2PgrGyqV_-mlJ5ujQ1C"
                            alt="Security Audit Inspection"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-brownie/40 via-transparent to-transparent"></div>
                    </div>
                    <!-- Overlapping Center Circular Icon Badge -->
                    <div class="relative -mt-7 z-20 w-14 h-14 rounded-full bg-gradient-to-tr from-caramel to-coffee text-white border-4 border-white shadow-lg flex items-center justify-center text-2xl transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                        <i class="ri-file-shield-2-fill"></i>
                    </div>
                    <div class="p-6 pt-4 flex flex-col items-center text-center flex-grow w-full justify-between">
                        <div>
                            <h3 class="text-lg sm:text-xl font-black text-brownie tracking-tight mb-2.5 group-hover:text-caramel transition-colors">
                                Risk Assessment
                            </h3>
                            <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium mb-6">
                                Detailed safety audit sweeps, fire-safety protocol checks, perimeter threat assessments, and security compliance reports.
                            </p>
                        </div>
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-extrabold text-caramel hover:text-brownie transition-all group/btn">
                            <span>Discover More</span>
                            <div class="w-7 h-7 rounded-full bg-caramel text-white flex items-center justify-center transition-transform duration-300 group-hover/btn:translate-x-1 group-hover/btn:bg-brownie shadow-sm">
                                <i class="ri-arrow-right-line text-sm"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Slider Section (Showing 2 cards at a time, Photo-less design matching theme) -->
    <section class="bg-gradient-to-b from-cream/20 via-white to-cream/30 py-20 border-t border-cream relative overflow-hidden"
        x-data="{ 
                 activeIndex: 0, 
                 totalCards: 4,
                 getVisibleCards() {
                     if (window.innerWidth >= 640) return 2;
                     return 1;
                 },
                 next() {
                     const visible = this.getVisibleCards();
                     if (this.activeIndex < this.totalCards - visible) {
                         this.activeIndex++;
                     } else {
                         this.activeIndex = 0; // Loop back
                     }
                 },
                 prev() {
                     const visible = this.getVisibleCards();
                     if (this.activeIndex > 0) {
                         this.activeIndex--;
                     } else {
                         this.activeIndex = this.totalCards - visible; // Loop to end
                     }
                 },
                 init() {
                     setInterval(() => {
                         this.next();
                     }, 4500);
                 }
             }"
        @resize.window="if (activeIndex > totalCards - getVisibleCards()) activeIndex = totalCards - getVisibleCards()">
        <!-- Faint background accent pattern -->
        <div class="absolute inset-0 z-0 opacity-25 pointer-events-none select-none">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                <defs>
                    <pattern id="testi-dots" width="24" height="24" patternUnits="userSpaceOnUse">
                        <circle cx="3" cy="3" r="1.5" fill="rgba(192,133,82,0.15)" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#testi-dots)" />
            </svg>
        </div>

        <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-95'"
             class="max-w-6xl mx-auto px-6 md:px-12 w-full relative z-10 transition-all duration-[1400ms] ease-out">
            
            <!-- Section Header (Matching Reference Design) -->
            <div class="flex flex-col items-center text-center gap-3 mb-14">
                <span class="inline-flex items-center gap-1.5 px-4 py-1 bg-caramel/10 border border-caramel/25 text-caramel text-xs font-extrabold tracking-widest uppercase rounded-full shadow-sm">
                    <i class="ri-chat-voice-fill text-sm"></i> TESTIMONIALS
                </span>
                <h2 class="text-2xl sm:text-4xl md:text-5xl font-black tracking-tight text-brownie">
                    Trusted feedback <span class="text-caramel">from our clients</span>
                </h2>
            </div>

            <!-- Card Slider Viewport (2 Cards Visible Side by Side) -->
            <div class="relative w-full">
                <div class="overflow-hidden py-3 -mx-3">
                    <div class="flex transition-transform duration-600 ease-out"
                        :style="'width: ' + (totalCards / getVisibleCards() * 100) + '%; transform: translateX(-' + (activeIndex * (100 / totalCards)) + '%)'">
                        
                        <!-- Card 1: Amit Sharma / DLF Tech Park -->
                        <div :style="'width: ' + (100 / totalCards) + '%'" class="shrink-0 px-3">
                            <div class="bg-white border border-cream/90 rounded-[24px] p-6 sm:p-8 shadow-md shadow-caramel/5 hover:shadow-xl hover:border-caramel/30 transition-all duration-300 flex flex-col justify-between h-full">
                                <div>
                                    <!-- Top Row: Name & Title (Left) + Red Accent Quote Icon (Right) - NO PHOTO -->
                                    <div class="flex items-start justify-between gap-4 pb-5 border-b border-cream/80">
                                        <div>
                                            <h3 class="text-base sm:text-lg font-black text-brownie tracking-tight">
                                                Amit Sharma
                                            </h3>
                                            <p class="text-xs sm:text-sm font-semibold text-coffee/70 mt-0.5">
                                                Chief Executive Officer, DLF Tech Park
                                            </p>
                                        </div>
                                        <div class="text-caramel/80 shrink-0">
                                            <i class="ri-double-quotes-r text-3xl sm:text-4xl"></i>
                                        </div>
                                    </div>

                                    <!-- Middle: 5 Stars Rating -->
                                    <div class="flex gap-1 text-caramel my-5">
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                    </div>

                                    <!-- Bottom: Testimonial Quote -->
                                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-medium">
                                        "NDS has been managing our manned guarding and 24/7 command center operations for over 3 years. Their discipline, regular operations audits, and emergency response time are unmatched in Delhi NCR. Highly recommend their services!"
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Priya Goel / Gaur City Mall -->
                        <div :style="'width: ' + (100 / totalCards) + '%'" class="shrink-0 px-3">
                            <div class="bg-white border border-cream/90 rounded-[24px] p-6 sm:p-8 shadow-md shadow-caramel/5 hover:shadow-xl hover:border-caramel/30 transition-all duration-300 flex flex-col justify-between h-full">
                                <div>
                                    <!-- Top Row: Name & Title (Left) + Quote Icon (Right) - NO PHOTO -->
                                    <div class="flex items-start justify-between gap-4 pb-5 border-b border-cream/80">
                                        <div>
                                            <h3 class="text-base sm:text-lg font-black text-brownie tracking-tight">
                                                Priya Goel
                                            </h3>
                                            <p class="text-xs sm:text-sm font-semibold text-coffee/70 mt-0.5">
                                                Operations Director, Gaur City Mall
                                            </p>
                                        </div>
                                        <div class="text-caramel/80 shrink-0">
                                            <i class="ri-double-quotes-r text-3xl sm:text-4xl"></i>
                                        </div>
                                    </div>

                                    <!-- Middle: 5 Stars Rating -->
                                    <div class="flex gap-1 text-caramel my-5">
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                    </div>

                                    <!-- Bottom: Testimonial Quote -->
                                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-medium">
                                        "Securing a high-footfall mall requires swift coordination. NDS deployed a highly trained crowd control squad and optimized our parking patrol loop. Their team is always alert and professional."
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: Rohan Mehta / Emerald Heights -->
                        <div :style="'width: ' + (100 / totalCards) + '%'" class="shrink-0 px-3">
                            <div class="bg-white border border-cream/90 rounded-[24px] p-6 sm:p-8 shadow-md shadow-caramel/5 hover:shadow-xl hover:border-caramel/30 transition-all duration-300 flex flex-col justify-between h-full">
                                <div>
                                    <!-- Top Row: Name & Title (Left) + Quote Icon (Right) - NO PHOTO -->
                                    <div class="flex items-start justify-between gap-4 pb-5 border-b border-cream/80">
                                        <div>
                                            <h3 class="text-base sm:text-lg font-black text-brownie tracking-tight">
                                                Rohan Mehta
                                            </h3>
                                            <p class="text-xs sm:text-sm font-semibold text-coffee/70 mt-0.5">
                                                President, RWA Emerald Heights
                                            </p>
                                        </div>
                                        <div class="text-caramel/80 shrink-0">
                                            <i class="ri-double-quotes-r text-3xl sm:text-4xl"></i>
                                        </div>
                                    </div>

                                    <!-- Middle: 5 Stars Rating -->
                                    <div class="flex gap-1 text-caramel my-5">
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                    </div>

                                    <!-- Bottom: Testimonial Quote -->
                                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-medium">
                                        "With NDS Security, our township residents feel completely safe. Their digital visitor verification protocols and polite, background-verified guards are outstanding. The best security partner!"
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4: Vikram Singh / Tech Mahindra -->
                        <div :style="'width: ' + (100 / totalCards) + '%'" class="shrink-0 px-3">
                            <div class="bg-white border border-cream/90 rounded-[24px] p-6 sm:p-8 shadow-md shadow-caramel/5 hover:shadow-xl hover:border-caramel/30 transition-all duration-300 flex flex-col justify-between h-full">
                                <div>
                                    <!-- Top Row: Name & Title (Left) + Quote Icon (Right) - NO PHOTO -->
                                    <div class="flex items-start justify-between gap-4 pb-5 border-b border-cream/80">
                                        <div>
                                            <h3 class="text-base sm:text-lg font-black text-brownie tracking-tight">
                                                Vikram Singh
                                            </h3>
                                            <p class="text-xs sm:text-sm font-semibold text-coffee/70 mt-0.5">
                                                Facility Head, Tech Mahindra Noida
                                            </p>
                                        </div>
                                        <div class="text-caramel/80 shrink-0">
                                            <i class="ri-double-quotes-r text-3xl sm:text-4xl"></i>
                                        </div>
                                    </div>

                                    <!-- Middle: 5 Stars Rating -->
                                    <div class="flex gap-1 text-caramel my-5">
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                    </div>

                                    <!-- Bottom: Testimonial Quote -->
                                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-medium">
                                        "The access control systems and manned guarding deployed by NDS have streamlined our corporate visitor tracking. Their 24/7 command center support is top notch."
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Bottom Centered Arrow Controls (Matching Reference Screenshot) -->
                <div class="flex items-center justify-center gap-3 mt-8">
                    <button @click="prev()"
                        class="w-10 h-10 rounded-full bg-white border border-cream/90 shadow-sm hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all cursor-pointer">
                        <i class="ri-arrow-left-s-line text-xl"></i>
                    </button>
                    <button @click="next()"
                        class="w-10 h-10 rounded-full bg-white border border-cream/90 shadow-sm hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all cursor-pointer">
                        <i class="ri-arrow-right-s-line text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (SIS & Securitas Interactive Accordion Pattern) -->
    <section class="bg-white py-16 border-t border-cream/50" x-data="{ activeFaq: null }">
        <div class="w-full px-6 md:px-12">
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-14'"
                 class="flex flex-col items-center text-center gap-3 mb-12 transition-all duration-[1300ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">Common Queries</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight text-brownie">
                    Frequently Asked Questions
                </h2>
                <div class="w-12 h-1 bg-caramel mt-1"></div>
            </div>

            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-16'"
                 class="max-w-3xl mx-auto flex flex-col gap-3 transition-all duration-[1400ms] delay-150 ease-out">
                <!-- FAQ 1 -->
                <div class="border border-cream rounded-[4px] bg-cream/10 overflow-hidden">
                    <button @click="activeFaq = (activeFaq === 1 ? null : 1)"
                        class="w-full flex justify-between items-center p-4 text-left text-sm sm:text-base font-bold uppercase tracking-wider text-brownie hover:bg-cream/20 transition-colors cursor-pointer">
                        <span>Are your security guards PSARA certified?</span>
                        <i class="ri-arrow-down-s-line text-base transition-transform duration-300" :class="activeFaq === 1 ? 'rotate-180 text-caramel' : ''"></i>
                    </button>
                    <div x-show="activeFaq === 1" x-cloak x-transition class="p-4 border-t border-cream bg-white">
                        <p class="text-sm sm:text-base text-coffee leading-relaxed font-medium">
                            Yes, 100% of our security personnel are compliant with the PSARA Act 2005. Every guard undergoes mandatory character validation, medical fitness screening, and a background verification check before deployment.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-cream rounded-[4px] bg-cream/10 overflow-hidden">
                    <button @click="activeFaq = (activeFaq === 2 ? null : 2)"
                        class="w-full flex justify-between items-center p-4 text-left text-sm sm:text-base font-bold uppercase tracking-wider text-brownie hover:bg-cream/20 transition-colors cursor-pointer">
                        <span>What is the emergency response time in Noida & NCR?</span>
                        <i class="ri-arrow-down-s-line text-base transition-transform duration-300" :class="activeFaq === 2 ? 'rotate-180 text-caramel' : ''"></i>
                    </button>
                    <div x-show="activeFaq === 2" x-cloak x-transition class="p-4 border-t border-cream bg-white">
                        <p class="text-sm sm:text-base text-coffee leading-relaxed font-medium">
                            We operate a 24/7 central command room that coordinates quick response alerts. For any emergency at our secured Noida or NCR facilities, backup guards and field operations supervisors respond to the site in under 15 minutes.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-cream rounded-[4px] bg-cream/10 overflow-hidden">
                    <button @click="activeFaq = (activeFaq === 3 ? null : 3)"
                        class="w-full flex justify-between items-center p-4 text-left text-sm sm:text-base font-bold uppercase tracking-wider text-brownie hover:bg-cream/20 transition-colors cursor-pointer">
                        <span>How do you monitor guard attendance and patrols?</span>
                        <i class="ri-arrow-down-s-line text-base transition-transform duration-300" :class="activeFaq === 3 ? 'rotate-180 text-caramel' : ''"></i>
                    </button>
                    <div x-show="activeFaq === 3" x-cloak x-transition class="p-4 border-t border-cream bg-white">
                        <p class="text-sm sm:text-base text-coffee leading-relaxed font-medium">
                            Our security guards use real-time digital logging and biometric devices at client entries. Patrol paths are managed through barcode/RFID tags placed across the facility perimeter, which update the Noida Command Center instantly.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-cream rounded-[4px] bg-cream/10 overflow-hidden">
                    <button @click="activeFaq = (activeFaq === 4 ? null : 4)"
                        class="w-full flex justify-between items-center p-4 text-left text-sm sm:text-base font-bold uppercase tracking-wider text-brownie hover:bg-cream/20 transition-colors cursor-pointer">
                        <span>Can you customize configurations for retail and high-footfall sites?</span>
                        <i class="ri-arrow-down-s-line text-base transition-transform duration-300" :class="activeFaq === 4 ? 'rotate-180 text-caramel' : ''"></i>
                    </button>
                    <div x-show="activeFaq === 4" x-cloak x-transition class="p-4 border-t border-cream bg-white">
                        <p class="text-sm sm:text-base text-coffee leading-relaxed font-medium">
                            Absolutely. We specialize in custom security deployments for high-footfall commercial zones like shopping centers and tech parks (e.g., Gaur City Mall). We coordinate physical guarding, vehicle flow, entry checkpoints, and central CCTV monitoring.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation Call Section (Premium High-Impact CTA Banner) -->
    <section class="py-16 sm:py-20 px-4 sm:px-6 md:px-12 w-full bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto w-full">
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 scale-100 translate-y-0' : 'opacity-0 scale-95 translate-y-16'"
                 class="relative rounded-3xl sm:rounded-[36px] bg-gradient-to-r from-[#2a1b10] via-brownie to-[#2a1b10] text-white p-8 sm:p-12 md:p-16 shadow-2xl shadow-caramel/15 border border-caramel/30 overflow-hidden text-center transition-all duration-[1400ms] ease-out">
                
                <!-- Clean Soft Gradient Background Glows (No ribbed lines) -->
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-caramel/10 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-coffee/30 rounded-full blur-3xl pointer-events-none"></div>

                <!-- Content Container -->
                <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center gap-6">
                    <!-- Glowing Pill Chip Tag -->
                    <span class="inline-flex items-center gap-2 px-5 py-2 bg-caramel/20 border border-caramel/40 text-cream text-xs sm:text-sm font-extrabold tracking-wider uppercase rounded-full shadow-inner backdrop-blur-md">
                        <i class="ri-shield-flash-fill text-caramel"></i> INSTANT CONSULTATION & SITE AUDIT
                    </span>

                    <!-- Main Headline -->
                    <h2 class="text-2xl sm:text-4xl md:text-5xl font-black tracking-tight text-white leading-tight">
                        Need Immediate <span class="text-caramel underline decoration-caramel/40 underline-offset-8">Security Guard Deployment</span> or Risk Audit?
                    </h2>

                    <!-- Description -->
                    <p class="text-xs sm:text-base md:text-lg text-cream/85 max-w-2xl leading-relaxed font-medium">
                        Talk to our tactical security advisors today. We conduct physical site risk assessments within 24 hours and deliver customized, PSARA-compliant security guard deployment plans across Noida & Delhi NCR.
                    </p>

                    <!-- Dual Interactive CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mt-3 w-full sm:w-auto">
                        <a href="tel:+919999988888" class="bg-gradient-to-r from-caramel via-[#d49964] to-caramel hover:brightness-110 text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider py-4 px-8 rounded-full shadow-xl shadow-caramel/30 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-2.5">
                            <i class="ri-phone-fill text-base"></i>
                            <span>Call +91 99999 88888</span>
                        </a>
                        <a href="#" class="bg-white/10 hover:bg-white/20 border border-cream/30 text-cream font-extrabold text-xs sm:text-sm uppercase tracking-wider py-4 px-8 rounded-full backdrop-blur-md hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-2">
                            <i class="ri-file-search-line text-base text-caramel"></i>
                            <span>Request Free Site Audit</span>
                        </a>
                    </div>

                    <!-- Trust Indicators Footer Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-8 pt-8 mt-2 border-t border-cream/15 w-full text-xs font-bold text-cream/75 uppercase tracking-wider">
                        <div class="flex items-center justify-center gap-2">
                            <i class="ri-shield-check-fill text-caramel text-base"></i>
                            <span>100% PSARA Licensed</span>
                        </div>
                        <div class="flex items-center justify-center gap-2">
                            <i class="ri-flashlight-fill text-caramel text-base"></i>
                            <span>15-Min Rapid Response</span>
                        </div>
                        <div class="flex items-center justify-center gap-2">
                            <i class="ri-radar-fill text-caramel text-base"></i>
                            <span>24/7 Noida Command Desk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>