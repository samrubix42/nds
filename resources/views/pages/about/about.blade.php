<div class="w-full bg-white flex flex-col font-sans">
    
    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">

        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">About Us</span>
            </div>
            
            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                About <span class="text-caramel underline decoration-caramel/40 underline-offset-8">NDS Security</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                Learn about Noida's premier PSARA-compliant security force, our core mission, operational strength, and the leadership directing our mission to protect.
            </p>
        </div>
    </section>

    <!-- Who We Are / Mission Section -->
    <section class="py-20 w-full bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center w-full">
            
            <!-- Left Side: Image with Dot Decoration -->
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                 class="lg:col-span-5 relative flex items-center justify-center p-4 transition-all duration-[1400ms] ease-out">
                 
                <!-- Dotted Grid Decoration -->
                <div class="absolute -top-4 -right-4 w-32 h-44 z-0 opacity-30 select-none hidden sm:block">
                    <svg width="120" height="160" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="about-dot-pattern" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                                <circle cx="3" cy="3" r="2" fill="var(--color-primary-caramel)" />
                            </pattern>
                        </defs>
                        <rect width="120" height="160" fill="url(#about-dot-pattern)" />
                    </svg>
                </div>
                <div class="absolute top-8 -right-6 w-5 h-5 bg-caramel/30 rounded-full z-0 hidden sm:block"></div>

                <!-- Main Image -->
                <div class="relative z-10 w-full h-[400px] rounded-[24px] overflow-hidden border border-cream shadow-md">
                    <img src="{{ asset('image/image1.webp') }}"
                        alt="NDS Security Guard Operations"
                        class="w-full h-full object-cover object-center transition-transform duration-700 hover:scale-103" />
                </div>
            </div>

            <!-- Right Side: Content -->
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                 class="lg:col-span-7 flex flex-col gap-6 transition-all duration-[1400ms] ease-out">
                 
                <div class="self-start">
                    <span class="inline-block px-5 py-2 bg-white text-coffee font-extrabold text-xs sm:text-sm tracking-wider uppercase rounded-full shadow-md shadow-caramel/10 border border-cream/80">
                        Our Mission & Identity ~
                    </span>
                </div>

                <h2 class="text-2xl sm:text-4xl font-black tracking-tight text-brownie leading-tight">
                    Securing What Matters with <span class="text-coffee">Uncompromised Discipline</span>
                </h2>

                <div class="flex flex-col gap-4 text-sm sm:text-base text-coffee/90 leading-relaxed font-medium">
                    <p>
                        Established with a primary focus to deliver world-class safety solutions, NDS Security Services has grown into a leading name in private security and asset management in Noida and across the Delhi NCR region. We provide highly structured, PSARA-compliant guarding solutions meticulously aligned with our clients' demands.
                    </p>
                    <p>
                        Our mission is simple yet powerful: to protect individuals, businesses, and assets with strict institutional trust, strength, and tactical precision. Through comprehensive vetting protocols, background checks, and regular training modules, our force of over 500+ security guards remains alert and prepared for any operational scenario.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Stats (Animated counter section) -->
    <section class="relative w-full bg-gradient-to-r from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-16 border-y border-caramel/35 overflow-hidden">

        
        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 items-center text-center">
                <!-- Stat 1 -->
                <div class="flex flex-col items-center justify-center border-r-0 sm:border-r border-cream/15 pr-0 sm:pr-4"
                     x-data="{ count: 0, target: 220, duration: 1800, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-[10px] sm:text-xs font-bold text-cream/85 uppercase tracking-wider mt-2">
                        Townships Secured
                    </p>
                </div>

                <!-- Stat 2 -->
                <div class="flex flex-col items-center justify-center border-r-0 md:border-r border-cream/15 pr-0 md:pr-4"
                     x-data="{ count: 0, target: 30, duration: 1500, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-[10px] sm:text-xs font-bold text-cream/85 uppercase tracking-wider mt-2">
                        Malls & Complexes
                    </p>
                </div>

                <!-- Stat 3 -->
                <div class="flex flex-col items-center justify-center border-r-0 sm:border-r border-cream/15 pr-0 sm:pr-4"
                     x-data="{ count: 0, target: 100, duration: 1600, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-[10px] sm:text-xs font-bold text-cream/85 uppercase tracking-wider mt-2">
                        Corporate Towers
                    </p>
                </div>

                <!-- Stat 4 -->
                <div class="flex flex-col items-center justify-center border-r-0 md:border-r border-cream/15 pr-0 md:pr-4"
                     x-data="{ count: 0, target: 500, duration: 2000, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-[10px] sm:text-xs font-bold text-cream/85 uppercase tracking-wider mt-2">
                        Guards Deployed
                    </p>
                </div>

                <!-- Stat 5 -->
                <div class="flex flex-col items-center justify-center col-span-2 md:col-span-1"
                     x-data="{ count: 0, target: 10, duration: 1500, startCounter() { let start = null; const step = (t) => { if (!start) start = t; const p = Math.min((t - start) / this.duration, 1); this.count = Math.floor(p * this.target); if (p < 1) window.requestAnimationFrame(step); else this.count = this.target; }; window.requestAnimationFrame(step); }, init() { let obs = new IntersectionObserver((entries) => { entries.forEach(e => { if (e.isIntersecting) { this.startCounter(); obs.disconnect(); } }); }, { threshold: 0.1 }); obs.observe(this.$el); } }">
                    <h4 class="text-3xl sm:text-4xl md:text-5xl font-black text-caramel tracking-tight">
                        <span x-text="count">0</span>+
                    </h4>
                    <p class="text-[10px] sm:text-xs font-bold text-cream/85 uppercase tracking-wider mt-2">
                        Years of Experience
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-20 bg-cream/10 border-b border-cream/35">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                 class="flex flex-col items-center text-center gap-3 transition-all duration-[1200ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">FOUNDATIONAL PILLARS</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Our Core Corporate Values
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value Card 1: Trust -->
                <div class="bg-white p-8 rounded-3xl border border-cream shadow-sm flex flex-col gap-4 group hover:border-caramel/40 transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel group-hover:bg-caramel group-hover:text-white transition-all duration-300 shadow-sm">
                        <i class="ri-shield-check-fill text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-black text-brownie uppercase tracking-wide">
                        Absolute Trust
                    </h3>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-medium">
                        Our guards undergo rigorous background verification and police vetting. We ensure transparency in operations and absolute accountability for client assets.
                    </p>
                </div>

                <!-- Value Card 2: Strength -->
                <div class="bg-white p-8 rounded-3xl border border-cream shadow-sm flex flex-col gap-4 group hover:border-caramel/40 transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel group-hover:bg-caramel group-hover:text-white transition-all duration-300 shadow-sm">
                        <i class="ri-shield-flash-fill text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-black text-brownie uppercase tracking-wide">
                        Vigilant Strength
                    </h3>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-medium">
                        Supported by a 24/7 Command Center, patrol monitoring, and real-time response teams. We build tactical resilience in our force through continuous drills.
                    </p>
                </div>

                <!-- Value Card 3: Precision -->
                <div class="bg-white p-8 rounded-3xl border border-cream shadow-sm flex flex-col gap-4 group hover:border-caramel/40 transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel group-hover:bg-caramel group-hover:text-white transition-all duration-300 shadow-sm">
                        <i class="ri-focus-3-fill text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-black text-brownie uppercase tracking-wide">
                        Rigorous Precision
                    </h3>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-medium">
                        PSARA compliant and ISO certified operations. From receptionist guards' protocol to armed transit escorts, we operate with exact guidelines and zero-risk posture.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="py-20 w-full bg-white border-b border-cream/35">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                 class="flex flex-col items-center text-center gap-3 transition-all duration-[1200ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">EXECUTIVE MANAGEMENT</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Meet Our Leadership Team
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <!-- Leadership Team Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Member 1 -->
                <div class="flex flex-col items-center text-center bg-[#FDFBF7] p-6 rounded-3xl border border-cream shadow-sm group hover:border-caramel/40 transition-all duration-300">
                    <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-caramel/20 to-coffee/30 flex items-center justify-center border-2 border-caramel/40 text-coffee font-black text-2xl mb-4 group-hover:scale-105 transition-all">
                        DP
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Deepak Panwar</h3>
                    <p class="text-xs font-bold text-caramel uppercase tracking-widest mt-1">Operation Head</p>
                    <p class="text-xs text-coffee/80 mt-3 font-medium leading-relaxed">
                        Directs the overall tactical deployables, guard patrol schedules, and client safety audits.
                    </p>
                </div>

                <!-- Member 2 -->
                <div class="flex flex-col items-center text-center bg-[#FDFBF7] p-6 rounded-3xl border border-cream shadow-sm group hover:border-caramel/40 transition-all duration-300">
                    <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-caramel/20 to-coffee/30 flex items-center justify-center border-2 border-caramel/40 text-coffee font-black text-2xl mb-4 group-hover:scale-105 transition-all">
                        NP
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Nikka Panwar</h3>
                    <p class="text-xs font-bold text-caramel uppercase tracking-widest mt-1">Legal Advisor</p>
                    <p class="text-xs text-coffee/80 mt-3 font-medium leading-relaxed">
                        Ensures absolute PSARA compliance, labor law adherence, and corporate code governance.
                    </p>
                </div>

                <!-- Member 3 -->
                <div class="flex flex-col items-center text-center bg-[#FDFBF7] p-6 rounded-3xl border border-cream shadow-sm group hover:border-caramel/40 transition-all duration-300">
                    <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-caramel/20 to-coffee/30 flex items-center justify-center border-2 border-caramel/40 text-coffee font-black text-2xl mb-4 group-hover:scale-105 transition-all">
                        AP
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Aditya Panwar</h3>
                    <p class="text-xs font-bold text-caramel uppercase tracking-widest mt-1">HR & Admin</p>
                    <p class="text-xs text-coffee/80 mt-3 font-medium leading-relaxed">
                        Manages background checks, guard onboarding, recruitment drives, and administrative systems.
                    </p>
                </div>

                <!-- Member 4 -->
                <div class="flex flex-col items-center text-center bg-[#FDFBF7] p-6 rounded-3xl border border-cream shadow-sm group hover:border-caramel/40 transition-all duration-300">
                    <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-caramel/20 to-coffee/30 flex items-center justify-center border-2 border-caramel/40 text-coffee font-black text-2xl mb-4 group-hover:scale-105 transition-all">
                        PJ
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Pawan Jaiswal</h3>
                    <p class="text-xs font-bold text-caramel uppercase tracking-widest mt-1">Operation Manager</p>
                    <p class="text-xs text-coffee/80 mt-3 font-medium leading-relaxed">
                        Coordinates field command center, site supervisors, bouncer logs, and emergency patrols.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications & Verification Credentials Section -->
    <section class="py-20 w-full bg-cream/5">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                 class="flex flex-col items-center text-center gap-3 transition-all duration-[1200ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">COMPLIANCE & AUDIT</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Certified Protective Standards
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <!-- Credentials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Cert 1 -->
                <div class="bg-white px-6 py-8 rounded-2xl border border-cream text-center flex flex-col items-center gap-3.5 shadow-sm">
                    <div class="w-10 h-10 rounded-full bg-caramel/10 text-caramel flex items-center justify-center">
                        <i class="ri-government-fill text-xl"></i>
                    </div>
                    <h4 class="text-sm font-black text-brownie uppercase tracking-wider">PSARA Licensed</h4>
                    <p class="text-xs text-coffee/80 leading-relaxed font-semibold">
                        Authorized private security license granted under government regulations for Delhi & Noida NCR operations.
                    </p>
                </div>

                <!-- Cert 2 -->
                <div class="bg-white px-6 py-8 rounded-2xl border border-cream text-center flex flex-col items-center gap-3.5 shadow-sm">
                    <div class="w-10 h-10 rounded-full bg-caramel/10 text-caramel flex items-center justify-center">
                        <i class="ri-award-fill text-xl"></i>
                    </div>
                    <h4 class="text-sm font-black text-brownie uppercase tracking-wider">ISO 9001:2015</h4>
                    <p class="text-xs text-coffee/80 leading-relaxed font-semibold">
                        Quality Management System standard certificate for high precision guard recruitment and patrol audits.
                    </p>
                </div>

                <!-- Cert 3 -->
                <div class="bg-white px-6 py-8 rounded-2xl border border-cream text-center flex flex-col items-center gap-3.5 shadow-sm">
                    <div class="w-10 h-10 rounded-full bg-caramel/10 text-caramel flex items-center justify-center">
                        <i class="ri-shield-cross-fill text-xl"></i>
                    </div>
                    <h4 class="text-sm font-black text-brownie uppercase tracking-wider">ISO 18788:2015</h4>
                    <p class="text-xs text-coffee/80 leading-relaxed font-semibold">
                        Security Operations Management System certificate, upholding clean human rights guidelines.
                    </p>
                </div>

                <!-- Cert 4 -->
                <div class="bg-white px-6 py-8 rounded-2xl border border-cream text-center flex flex-col items-center gap-3.5 shadow-sm">
                    <div class="w-10 h-10 rounded-full bg-caramel/10 text-caramel flex items-center justify-center">
                        <i class="ri-heart-pulse-fill text-xl"></i>
                    </div>
                    <h4 class="text-sm font-black text-brownie uppercase tracking-wider">HSE Standards</h4>
                    <p class="text-xs text-coffee/80 leading-relaxed font-semibold">
                        Environment & Health and Safety standards. Training in fire emergencies and site evacuation procedures.
                    </p>
                </div>
            </div>
        </div>
    </section>

</div>