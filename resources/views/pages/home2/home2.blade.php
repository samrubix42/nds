<div class="w-full bg-white flex flex-col min-h-screen">

    <!-- 1. HERO SECTION: Sleek & Clean with Intro Animation -->
    <section class="relative w-full py-8 lg:py-12 overflow-hidden bg-gradient-to-b from-cream/20 via-white to-white">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- LEFT SIDE CONTENT (7 Columns on LG) -->
                <div x-data="{ shown: false }" 
                     x-init="setTimeout(() => shown = true, 100)"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-12 scale-[0.98]'"
                     class="lg:col-span-7 flex flex-col gap-5 transition-all duration-1000 ease-out">
                    
                    <!-- Clean Pill Tag -->
                    <div class="self-start">
                        <span class="inline-flex items-center gap-2 px-3.5 py-1 bg-caramel/10 border border-caramel/25 text-brownie font-bold text-xs tracking-wider uppercase rounded-full">
                            <span class="w-2 h-2 rounded-full bg-caramel animate-ping"></span>
                            <span>PSARA Certified Security Agency</span>
                        </span>
                    </div>

                    <!-- Clean Main Headline -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-black tracking-tight text-brownie leading-[1.15]">
                        Tactical Protection & <br class="hidden sm:inline" />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-coffee via-caramel to-brownie">Security Excellence</span> in Noida
                    </h1>

                    <!-- Clean Subtitle -->
                    <p class="text-sm sm:text-base text-brownie/80 font-medium leading-relaxed max-w-xl">
                        PSARA-compliant manned guarding, 24/7 central command surveillance, corporate asset protection, and executive escorts across 150+ sites in Delhi NCR.
                    </p>

                    <!-- Key Feature Bullet Points (Compact 2-Column) -->
                    <div class="grid grid-cols-2 gap-2.5 py-1 text-xs sm:text-sm font-semibold text-brownie/90 max-w-lg">
                        <div class="flex items-center gap-2">
                            <i class="ri-checkbox-circle-fill text-caramel text-base"></i>
                            <span>500+ Verified Guards</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="ri-checkbox-circle-fill text-caramel text-base"></i>
                            <span>24/7 Command Sync</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="ri-checkbox-circle-fill text-caramel text-base"></i>
                            <span>15-Min SLA Response</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="ri-checkbox-circle-fill text-caramel text-base"></i>
                            <span>100-Hr Vetted Training</span>
                        </div>
                    </div>

                    <!-- Sleek Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-1">
                        <a href="#contact" 
                           class="group bg-brownie hover:bg-caramel text-white text-xs sm:text-sm font-bold uppercase tracking-wider py-3.5 px-7 rounded-full shadow-md hover:shadow-lg transition-all duration-300 inline-flex items-center justify-center gap-2 text-center">
                            <span>Request Security Audit</span>
                            <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        
                        <a href="{{ route('services') }}" 
                           class="bg-white hover:bg-cream/40 text-brownie text-xs sm:text-sm font-bold tracking-wider py-3.5 px-6 rounded-full border border-brownie/20 hover:border-caramel shadow-sm transition-all duration-300 inline-flex items-center justify-center gap-2 text-center">
                            <span>View All Services</span>
                            <i class="ri-shield-check-line text-caramel"></i>
                        </a>
                    </div>

                    <!-- Sleek Trust Stats Bar -->
                    <div class="pt-3 border-t border-cream/80 flex items-center gap-6">
                        <div>
                            <div class="text-lg font-black text-brownie">15+ Years</div>
                            <div class="text-[11px] text-brownie/60 font-medium">Industry Experience</div>
                        </div>
                        <div class="h-6 w-px bg-cream"></div>
                        <div>
                            <div class="text-lg font-black text-brownie">150+ Sites</div>
                            <div class="text-[11px] text-brownie/60 font-medium">Noida & NCR Shielded</div>
                        </div>
                        <div class="h-6 w-px bg-cream"></div>
                        <div>
                            <div class="text-lg font-black text-brownie">99.8%</div>
                            <div class="text-[11px] text-brownie/60 font-medium">Client Satisfaction</div>
                        </div>
                    </div>

                </div>

                <!-- RIGHT SIDE: CLEAN SLIDER (5 Columns on LG) -->
                <div x-data="{ shown: false }" 
                     x-init="setTimeout(() => shown = true, 250)"
                     :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-12 scale-[0.98]'"
                     class="lg:col-span-5 relative w-full transition-all duration-1000 ease-out">
                    <div x-data="{ 
                        activeSlide: 0,
                        images: [
                            '{{ asset('image/PIC_3766.webp') }}',
                            '{{ asset('image/PIC_3788.webp') }}',
                            '{{ asset('image/PIC_3792.webp') }}',
                            '{{ asset('image/PIC_3795.webp') }}',
                            '{{ asset('image/PIC_3861.webp') }}',
                            '{{ asset('image/PIC_4855.webp') }}',
                            '{{ asset('image/PIC_4880.webp') }}'
                        ],
                        timer: null,
                        startAutoSlide() {
                            this.stopAutoSlide();
                            this.timer = setInterval(() => {
                                this.nextSlide();
                            }, 4000);
                        },
                        stopAutoSlide() {
                            if(this.timer) clearInterval(this.timer);
                        },
                        nextSlide() {
                            this.activeSlide = (this.activeSlide + 1) % this.images.length;
                        },
                        prevSlide() {
                            this.activeSlide = (this.activeSlide - 1 + this.images.length) % this.images.length;
                        },
                        goToSlide(index) {
                            this.activeSlide = index;
                            this.startAutoSlide();
                        }
                    }"
                    x-init="startAutoSlide()"
                    @mouseenter="stopAutoSlide()"
                    @mouseleave="startAutoSlide()"
                    class="relative w-full h-[360px] sm:h-[440px] rounded-2xl overflow-hidden shadow-lg border border-cream transition-all duration-500 select-none group bg-gray-100">

                        <!-- Clean Rectangle Images -->
                        <template x-for="(img, index) in images" :key="index">
                            <div x-show="activeSlide === index"
                                 x-transition:enter="transition ease-out duration-700"
                                 x-transition:enter-start="opacity-0 scale-102"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-500"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-98"
                                 class="absolute inset-0 w-full h-full">
                                <img :src="img" 
                                     alt="NDS Security Operations"
                                     class="w-full h-full object-cover object-top" />
                            </div>
                        </template>

                        <!-- Bullet Dots -->
                        <div class="absolute bottom-3 inset-x-0 z-20 flex items-center justify-center px-4 pointer-events-none">
                            <div class="flex items-center gap-1.5 pointer-events-auto bg-black/40 px-3 py-1 rounded-full backdrop-blur-sm shadow-md">
                                <template x-for="(img, index) in images" :key="index">
                                    <button @click="goToSlide(index)" 
                                            type="button"
                                            :aria-label="'Go to image ' + (index + 1)"
                                            :class="activeSlide === index ? 'w-5 bg-caramel' : 'w-1.5 bg-white/50 hover:bg-white'"
                                            class="h-1.5 rounded-full transition-all duration-300 focus:outline-none">
                                    </button>
                                </template>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. INFINITE SECURITY MARQUEE TICKER -->
    <div class="w-full bg-brownie py-3.5 text-white overflow-hidden shadow-inner select-none">
        <div class="flex whitespace-nowrap animate-marquee">
            <div class="flex items-center gap-10 text-xs font-bold tracking-widest uppercase">
                <span class="inline-flex items-center gap-2"><i class="ri-shield-check-fill text-caramel"></i> PSARA Certified Agency</span>
                <span class="text-caramel/40">•</span>
                <span class="inline-flex items-center gap-2"><i class="ri-radar-fill text-caramel"></i> 24/7 Live Command Center</span>
                <span class="text-caramel/40">•</span>
                <span class="inline-flex items-center gap-2"><i class="ri-building-4-fill text-caramel"></i> 150+ Corporate Sites Shielded</span>
                <span class="text-caramel/40">•</span>
                <span class="inline-flex items-center gap-2"><i class="ri-timer-flash-fill text-caramel"></i> 15-Min Rapid Emergency Unit</span>
                <span class="text-caramel/40">•</span>
                <span class="inline-flex items-center gap-2"><i class="ri-user-star-fill text-caramel"></i> Executive VIP Officers</span>
                <span class="text-caramel/40">•</span>
            </div>
            <div class="flex items-center gap-10 text-xs font-bold tracking-widest uppercase pl-10">
                <span class="inline-flex items-center gap-2"><i class="ri-shield-check-fill text-caramel"></i> PSARA Certified Agency</span>
                <span class="text-caramel/40">•</span>
                <span class="inline-flex items-center gap-2"><i class="ri-radar-fill text-caramel"></i> 24/7 Live Command Center</span>
                <span class="text-caramel/40">•</span>
                <span class="inline-flex items-center gap-2"><i class="ri-building-4-fill text-caramel"></i> 150+ Corporate Sites Shielded</span>
                <span class="text-caramel/40">•</span>
                <span class="inline-flex items-center gap-2"><i class="ri-timer-flash-fill text-caramel"></i> 15-Min Rapid Emergency Unit</span>
                <span class="text-caramel/40">•</span>
                <span class="inline-flex items-center gap-2"><i class="ri-user-star-fill text-caramel"></i> Executive VIP Officers</span>
                <span class="text-caramel/40">•</span>
            </div>
        </div>
    </div>

    <!-- 3. CLIENTELE LOGO SECTION (Dynamic Grid Format) -->
    <section x-data="{ shown: false }" 
             x-init="const obs = new IntersectionObserver(([e]) => { if (e.isIntersecting) { shown = true; obs.disconnect(); } }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }); obs.observe($el);"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-[0.97]'"
             class="py-12 w-full bg-white overflow-hidden border-b border-cream select-none relative transition-all duration-1000 ease-out">
        
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full flex flex-col gap-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 border-b border-cream/50 pb-4">
                <div class="flex flex-col gap-1">
                    <span class="text-xs font-extrabold tracking-widest text-caramel uppercase">Our Elite Clientele Portfolio</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-brownie tracking-tight">Trusted by Premier Corporates, Plazas & Townships</h2>
                </div>
                <a href="{{ route('clientele') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold text-caramel hover:text-coffee transition-colors group">
                    <span>Explore Full Portfolio</span>
                    <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <!-- Dynamic Clients Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-6">
                @foreach($clients as $client)
                    <div class="h-20 sm:h-24 p-3.5 bg-white rounded-xl border border-cream/90 shadow-2xs hover:shadow-md hover:border-caramel/50 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group">
                        <img 
                            src="{{ $client->image_url }}" 
                            alt="Client Partner" 
                            class="max-h-full max-w-full object-contain filter group-hover:scale-105 transition-transform duration-300 select-none" 
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 4. WHO WE ARE SECTION (Dramatic Slow Scroll Reveal Animation) -->
    <section x-data="{ shown: false }" 
             x-init="const obs = new IntersectionObserver(([e]) => { if (e.isIntersecting) { shown = true; obs.disconnect(); } }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }); obs.observe($el);"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-[0.97]'"
             class="py-16 lg:py-20 w-full bg-white transition-all duration-1000 ease-out">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Image with Clean Border -->
            <div class="lg:col-span-5 relative group">
                <div class="relative w-full h-[380px] sm:h-[450px] rounded-2xl overflow-hidden shadow-xl border border-cream">
                    <img src="{{ asset('image/PIC_3766.webp') }}" 
                         alt="NDS Guarding Force" 
                         class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700" />
                </div>
                <!-- Clean Accent Pill Overlay -->
                <div class="absolute -bottom-4 -right-4 bg-white p-4 rounded-xl shadow-lg border border-cream flex items-center gap-3 hover:-translate-y-1 transition-transform">
                    <div class="w-10 h-10 rounded-lg bg-caramel/15 text-caramel flex items-center justify-center text-xl font-bold">
                        <i class="ri-shield-user-fill"></i>
                    </div>
                    <div>
                        <div class="text-xs font-black uppercase tracking-wider text-brownie">PSARA Approved</div>
                        <div class="text-[11px] text-brownie/60 font-semibold">Government Regulated</div>
                    </div>
                </div>
            </div>

            <!-- Right Content & Pillars -->
            <div class="lg:col-span-7 flex flex-col gap-6">
                
                <span class="text-xs font-extrabold tracking-widest text-caramel uppercase">Who We Are</span>
                
                <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-brownie leading-tight">
                    Noida's Premier & Most Trusted Security Service Partner
                </h2>

                <p class="text-sm sm:text-base text-brownie/80 font-medium leading-relaxed">
                    Founded with a core mission to protect people, property, and corporate assets, NDS Security Services operates across Noida, Greater Noida, and the Delhi NCR region. We deploy highly trained, background-checked personnel equipped with tactical training and backed by our 24/7 central command center.
                </p>

                <!-- Interactive Accordion Details -->
                <div x-data="{ openTab: 1 }" class="flex flex-col gap-3 pt-2">
                    
                    <!-- Tab 1 -->
                    <div class="border border-cream rounded-xl p-4 transition-all" :class="openTab === 1 ? 'bg-cream/30 border-caramel/40 shadow-sm' : 'bg-white'">
                        <button @click="openTab = (openTab === 1 ? null : 1)" class="w-full flex items-center justify-between font-bold text-sm text-brownie text-left focus:outline-none">
                            <span class="flex items-center gap-2.5">
                                <i class="ri-shield-star-line text-caramel"></i>
                                <span>Rigorous Vetting & Police Verification</span>
                            </span>
                            <i class="ri-arrow-down-s-line transition-transform duration-300" :class="openTab === 1 ? 'rotate-180 text-caramel' : ''"></i>
                        </button>
                        <div x-show="openTab === 1" class="pt-3 text-xs text-brownie/70 leading-relaxed font-medium">
                            Every candidate recruited into NDS undergoes complete police background checks, medical physical clearance, address verification, and drug testing before deployment.
                        </div>
                    </div>

                    <!-- Tab 2 -->
                    <div class="border border-cream rounded-xl p-4 transition-all" :class="openTab === 2 ? 'bg-cream/30 border-caramel/40 shadow-sm' : 'bg-white'">
                        <button @click="openTab = (openTab === 2 ? null : 2)" class="w-full flex items-center justify-between font-bold text-sm text-brownie text-left focus:outline-none">
                            <span class="flex items-center gap-2.5">
                                <i class="ri-customer-service-2-line text-caramel"></i>
                                <span>24/7 Command Monitoring & Supervision</span>
                            </span>
                            <i class="ri-arrow-down-s-line transition-transform duration-300" :class="openTab === 2 ? 'rotate-180 text-caramel' : ''"></i>
                        </button>
                        <div x-show="openTab === 2" class="pt-3 text-xs text-brownie/70 leading-relaxed font-medium">
                            Our Noida head office command center continuously monitors CCTV streams, processes panic alarms, and coordinates GPS-tracked supervisor patrol loops around the clock.
                        </div>
                    </div>

                    <!-- Tab 3 -->
                    <div class="border border-cream rounded-xl p-4 transition-all" :class="openTab === 3 ? 'bg-cream/30 border-caramel/40 shadow-sm' : 'bg-white'">
                        <button @click="openTab = (openTab === 3 ? null : 3)" class="w-full flex items-center justify-between font-bold text-sm text-brownie text-left focus:outline-none">
                            <span class="flex items-center gap-2.5">
                                <i class="ri-fire-line text-caramel"></i>
                                <span>Fire Hazard & Crisis Management Trained</span>
                            </span>
                            <i class="ri-arrow-down-s-line transition-transform duration-300" :class="openTab === 3 ? 'rotate-180 text-caramel' : ''"></i>
                        </button>
                        <div x-show="openTab === 3" class="pt-3 text-xs text-brownie/70 leading-relaxed font-medium">
                            All NDS officers complete Red Cross first-aid training, practice high-rise fire evacuation layouts, and know how to operate commercial fire panels effectively.
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- 5. IMPACT METRICS GRID (Dramatic Slow Scroll Reveal Animation) -->
    <section x-data="{ shown: false }" 
             x-init="const obs = new IntersectionObserver(([e]) => { if (e.isIntersecting) { shown = true; obs.disconnect(); } }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }); obs.observe($el);"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-[0.97]'"
             class="py-14 w-full bg-cream/20 border-y border-cream/80 transition-all duration-1000 ease-out">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                
                <!-- Stat Card 1 -->
                <div class="p-6 rounded-2xl bg-white border border-cream hover:border-caramel/40 hover:shadow-lg hover:-translate-y-1.5 transition-all duration-300 group flex flex-col gap-2">
                    <div class="w-10 h-10 rounded-xl bg-caramel/15 text-caramel flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-caramel group-hover:text-white transition-all">
                        <i class="ri-shield-user-fill"></i>
                    </div>
                    <div class="text-3xl sm:text-4xl font-black text-brownie group-hover:text-caramel transition-colors tracking-tight mt-1">500+</div>
                    <div class="text-xs font-bold text-brownie/70 uppercase tracking-wider">Trained Security Guards</div>
                    <p class="text-[11px] text-brownie/50 font-medium">PSARA verified personnel across NCR</p>
                </div>

                <!-- Stat Card 2 -->
                <div class="p-6 rounded-2xl bg-white border border-cream hover:border-caramel/40 hover:shadow-lg hover:-translate-y-1.5 transition-all duration-300 group flex flex-col gap-2">
                    <div class="w-10 h-10 rounded-xl bg-caramel/15 text-caramel flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-caramel group-hover:text-white transition-all">
                        <i class="ri-building-2-fill"></i>
                    </div>
                    <div class="text-3xl sm:text-4xl font-black text-brownie group-hover:text-caramel transition-colors tracking-tight mt-1">150+</div>
                    <div class="text-xs font-bold text-brownie/70 uppercase tracking-wider">Corporate Sites Protected</div>
                    <p class="text-[11px] text-brownie/50 font-medium">Commercial plazas, IT parks & societies</p>
                </div>

                <!-- Stat Card 3 -->
                <div class="p-6 rounded-2xl bg-white border border-cream hover:border-caramel/40 hover:shadow-lg hover:-translate-y-1.5 transition-all duration-300 group flex flex-col gap-2">
                    <div class="w-10 h-10 rounded-xl bg-caramel/15 text-caramel flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-caramel group-hover:text-white transition-all">
                        <i class="ri-timer-flash-fill"></i>
                    </div>
                    <div class="text-3xl sm:text-4xl font-black text-brownie group-hover:text-caramel transition-colors tracking-tight mt-1">15-Min</div>
                    <div class="text-xs font-bold text-brownie/70 uppercase tracking-wider">Emergency Response SLA</div>
                    <p class="text-[11px] text-brownie/50 font-medium">Guaranteed rapid response dispatch</p>
                </div>

                <!-- Stat Card 4 -->
                <div class="p-6 rounded-2xl bg-white border border-cream hover:border-caramel/40 hover:shadow-lg hover:-translate-y-1.5 transition-all duration-300 group flex flex-col gap-2">
                    <div class="w-10 h-10 rounded-xl bg-caramel/15 text-caramel flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-caramel group-hover:text-white transition-all">
                        <i class="ri-award-fill"></i>
                    </div>
                    <div class="text-3xl sm:text-4xl font-black text-brownie group-hover:text-caramel transition-colors tracking-tight mt-1">100%</div>
                    <div class="text-xs font-bold text-brownie/70 uppercase tracking-wider">PSARA Vetted & Compliant</div>
                    <p class="text-[11px] text-brownie/50 font-medium">Full police & medical verification</p>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. SERVICES SHOWCASE (Dramatic Slow Scroll Reveal Animation) -->
    <section x-data="{ shown: false }" 
             x-init="const obs = new IntersectionObserver(([e]) => { if (e.isIntersecting) { shown = true; obs.disconnect(); } }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }); obs.observe($el);"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-[0.97]'"
             class="py-16 lg:py-20 w-full bg-cream/20 transition-all duration-1000 ease-out">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full flex flex-col gap-12">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div class="flex flex-col gap-2 max-w-xl">
                    <span class="text-xs font-extrabold tracking-widest text-caramel uppercase">Tailored Security Solutions</span>
                    <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-brownie">
                        Comprehensive Security Services Built for Enterprise Trust
                    </h2>
                </div>
                <a href="{{ route('services') }}" class="self-start md:self-auto inline-flex items-center gap-2 text-sm font-bold text-caramel hover:text-coffee transition-colors group">
                    <span>Explore All Services</span>
                    <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <!-- Asymmetrical Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Service 1: Manned Guarding -->
                <div class="group bg-white p-8 rounded-[28px] border border-cream hover:border-caramel/50 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between gap-6 relative overflow-hidden">
                    <div class="flex flex-col gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-2xl group-hover:bg-caramel group-hover:text-white group-hover:scale-110 transition-all duration-300">
                            <i class="ri-shield-user-line"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-brownie group-hover:text-coffee transition-colors">PSARA Manned Guarding</h3>
                        <p class="text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                            Rigorously trained physical guarding force for commercial complexes, corporate offices, and residential townships with 24/7 supervisor check-ins.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-cream">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-caramel">Manned Defense</span>
                        <a href="{{ route('services') }}" class="w-8 h-8 rounded-full bg-cream/60 group-hover:bg-caramel group-hover:text-white flex items-center justify-center text-brownie transition-all">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2: Command Center -->
                <div class="group bg-white p-8 rounded-[28px] border border-cream hover:border-caramel/50 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between gap-6 relative overflow-hidden">
                    <div class="flex flex-col gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-2xl group-hover:bg-caramel group-hover:text-white group-hover:scale-110 transition-all duration-300">
                            <i class="ri-radar-line"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-brownie group-hover:text-coffee transition-colors">24/7 Command Center</h3>
                        <p class="text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                            Centralized CCTV monitoring, automated alarm processing, and live GPS patrol sync ensuring guaranteed rapid dispatch across all sites.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-cream">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-caramel">Live Surveillance</span>
                        <a href="{{ route('services') }}" class="w-8 h-8 rounded-full bg-cream/60 group-hover:bg-caramel group-hover:text-white flex items-center justify-center text-brownie transition-all">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3: Corporate Asset Shield -->
                <div class="group bg-white p-8 rounded-[28px] border border-cream hover:border-caramel/50 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between gap-6 relative overflow-hidden">
                    <div class="flex flex-col gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-2xl group-hover:bg-caramel group-hover:text-white group-hover:scale-110 transition-all duration-300">
                            <i class="ri-building-2-line"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-brownie group-hover:text-coffee transition-colors">Corporate & Industrial Asset Shield</h3>
                        <p class="text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                            Visitor entry authorization, turnstile access logs, loading bay inspection, and site risk management tailored for IT parks & factories.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-cream">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-caramel">Facility Protection</span>
                        <a href="{{ route('services') }}" class="w-8 h-8 rounded-full bg-cream/60 group-hover:bg-caramel group-hover:text-white flex items-center justify-center text-brownie transition-all">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 4: VIP Executive Protection -->
                <div class="group bg-white p-8 rounded-[28px] border border-cream hover:border-caramel/50 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between gap-6 relative overflow-hidden">
                    <div class="flex flex-col gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-2xl group-hover:bg-caramel group-hover:text-white group-hover:scale-110 transition-all duration-300">
                            <i class="ri-user-star-line"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-brownie group-hover:text-coffee transition-colors">VIP Executive Escort</h3>
                        <p class="text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                            Discreet, highly trained Personal Security Officers (PSO) and armored vehicle transit management for corporate executives and delegates.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-cream">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-caramel">PSO & Transit</span>
                        <a href="{{ route('services') }}" class="w-8 h-8 rounded-full bg-cream/60 group-hover:bg-caramel group-hover:text-white flex items-center justify-center text-brownie transition-all">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 5: Event Security -->
                <div class="group bg-white p-8 rounded-[28px] border border-cream hover:border-caramel/50 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between gap-6 relative overflow-hidden">
                    <div class="flex flex-col gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-2xl group-hover:bg-caramel group-hover:text-white group-hover:scale-110 transition-all duration-300">
                            <i class="ri-group-line"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-brownie group-hover:text-coffee transition-colors">Event & Crowd Control</h3>
                        <p class="text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                            Turnkey security management for corporate events, exhibitions, and public gatherings with metal detector screening & stage security.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-cream">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-caramel">Crowd Management</span>
                        <a href="{{ route('services') }}" class="w-8 h-8 rounded-full bg-cream/60 group-hover:bg-caramel group-hover:text-white flex items-center justify-center text-brownie transition-all">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 6: Electronic CCTV & Access -->
                <div class="group bg-white p-8 rounded-[28px] border border-cream hover:border-caramel/50 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between gap-6 relative overflow-hidden">
                    <div class="flex flex-col gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-2xl group-hover:bg-caramel group-hover:text-white group-hover:scale-110 transition-all duration-300">
                            <i class="ri-eye-line"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-brownie group-hover:text-coffee transition-colors">Electronic CCTV Integration</h3>
                        <p class="text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                            Supply, setup, and maintenance of high-definition 4K IP cameras, biometric gate access, and automated boom barrier systems.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-cream">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-caramel">Smart Tech</span>
                        <a href="{{ route('services') }}" class="w-8 h-8 rounded-full bg-cream/60 group-hover:bg-caramel group-hover:text-white flex items-center justify-center text-brownie transition-all">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. TACTICAL GUARD ACADEMY (Dramatic Slow Scroll Reveal Animation) -->
    <section x-data="{ shown: false }" 
             x-init="const obs = new IntersectionObserver(([e]) => { if (e.isIntersecting) { shown = true; obs.disconnect(); } }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }); obs.observe($el);"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-[0.97]'"
             class="py-16 lg:py-20 w-full bg-brownie text-white relative overflow-hidden transition-all duration-1000 ease-out">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Image with Clean Rectangle -->
            <div class="lg:col-span-6 relative group">
                <div class="relative w-full h-[360px] sm:h-[420px] rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('image/PIC_4855.webp') }}" 
                         alt="NDS Training Academy" 
                         class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700" />
                </div>
            </div>

            <!-- Right Content & Process Steps -->
            <div class="lg:col-span-6 flex flex-col gap-6">
                <span class="text-xs font-extrabold tracking-widest text-caramel uppercase">NDS Training Academy</span>
                <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white leading-tight">
                    Rigorous Physical, Fire Safety & Threat Detection Drills
                </h2>
                <p class="text-sm sm:text-base text-cream/80 font-medium leading-relaxed">
                    A security guard is only as effective as their training. At the NDS Academy, candidates undergo daily physical endurance courses, practice handling high-pressure fire extinguishers, and master digital visitor entry logs.
                </p>

                <!-- Process Steps Checklist -->
                <div class="flex flex-col gap-3 pt-2">
                    <div class="flex items-center gap-3 text-sm font-semibold text-cream group">
                        <div class="w-6 h-6 rounded-full bg-caramel text-white flex items-center justify-center text-xs font-bold shrink-0 group-hover:scale-110 transition-transform">1</div>
                        <span>100-Hour Mandatory Physical & Tactical Defense Regimen</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm font-semibold text-cream group">
                        <div class="w-6 h-6 rounded-full bg-caramel text-white flex items-center justify-center text-xs font-bold shrink-0 group-hover:scale-110 transition-transform">2</div>
                        <span>Fire Safety Drills, Hydrant Panel Operation & First-Aid</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm font-semibold text-cream group">
                        <div class="w-6 h-6 rounded-full bg-caramel text-white flex items-center justify-center text-xs font-bold shrink-0 group-hover:scale-110 transition-transform">3</div>
                        <span>Soft Skills, Conflict De-escalation & Professional Grooming</span>
                    </div>
                </div>

                <div class="pt-3">
                    <a href="{{ route('training') }}" class="inline-flex items-center gap-2 px-7 py-3 bg-caramel hover:bg-coffee text-white text-xs sm:text-sm font-bold uppercase tracking-wider rounded-full shadow-lg transition-all group">
                        <span>Explore Academy Program</span>
                        <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- 8. CLIENTELE PORTFOLIO HIGHLIGHTS (Dramatic Slow Scroll Reveal Animation) -->
    <section x-data="{ shown: false }" 
             x-init="const obs = new IntersectionObserver(([e]) => { if (e.isIntersecting) { shown = true; obs.disconnect(); } }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }); obs.observe($el);"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-[0.97]'"
             class="py-16 lg:py-20 w-full bg-white transition-all duration-1000 ease-out">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full flex flex-col gap-12">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div class="flex flex-col gap-2 max-w-xl">
                    <span class="text-xs font-extrabold tracking-widest text-caramel uppercase">Proven Deployment Track Record</span>
                    <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-brownie">
                        Securing Commercial, Industrial & Residential Complexes
                    </h2>
                </div>
                <a href="{{ route('clientele') }}" class="self-start md:self-auto inline-flex items-center gap-2 text-sm font-bold text-caramel hover:text-coffee transition-colors group">
                    <span>View Client Portfolio</span>
                    <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <!-- Portfolio 3 Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Portfolio 1 -->
                <div class="group bg-cream/20 rounded-2xl overflow-hidden border border-cream hover:border-caramel/40 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="h-56 w-full overflow-hidden relative">
                        <img src="{{ asset('image/PIC_3788.webp') }}" alt="Commercial Plaza" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-brownie/80 backdrop-blur-sm text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Commercial Plaza</span>
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <h4 class="text-lg font-extrabold text-brownie group-hover:text-coffee transition-colors">Gaur City Commercial Plaza, Noida</h4>
                        <p class="text-xs text-brownie/70 font-medium leading-relaxed">
                            24/7 manned guarding deployment, turnstile visitor access log management, and parking patrol loop.
                        </p>
                    </div>
                </div>

                <!-- Portfolio 2 -->
                <div class="group bg-cream/20 rounded-2xl overflow-hidden border border-cream hover:border-caramel/40 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="h-56 w-full overflow-hidden relative">
                        <img src="{{ asset('image/PIC_3792.webp') }}" alt="IT Office Park" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-brownie/80 backdrop-blur-sm text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">IT Tech Park</span>
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <h4 class="text-lg font-extrabold text-brownie group-hover:text-coffee transition-colors">Sector-62 IT Office Park, Noida</h4>
                        <p class="text-xs text-brownie/70 font-medium leading-relaxed">
                            Integrated CCTV command center monitoring, biometric gate security, and executive PSO escorting.
                        </p>
                    </div>
                </div>

                <!-- Portfolio 3 -->
                <div class="group bg-cream/20 rounded-2xl overflow-hidden border border-cream hover:border-caramel/40 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="h-56 w-full overflow-hidden relative">
                        <img src="{{ asset('image/PIC_3795.webp') }}" alt="Gated Residential Society" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-brownie/80 backdrop-blur-sm text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Residential Society</span>
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <h4 class="text-lg font-extrabold text-brownie group-hover:text-coffee transition-colors">Expressway Residential Township</h4>
                        <p class="text-xs text-brownie/70 font-medium leading-relaxed">
                            800+ flats gated security management, RFID vehicle boom barriers, and round-the-clock perimeter patrol.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 9. CLIENT STORIES & TESTIMONIALS (Dramatic Slow Scroll Reveal Animation) -->
    <section x-data="{ shown: false }" 
             x-init="const obs = new IntersectionObserver(([e]) => { if (e.isIntersecting) { shown = true; obs.disconnect(); } }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }); obs.observe($el);"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-[0.97]'"
             class="py-16 lg:py-20 w-full bg-cream/20 border-y border-cream transition-all duration-1000 ease-out">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full flex flex-col gap-12">
            
            <div class="text-center max-w-2xl mx-auto flex flex-col gap-2">
                <span class="text-xs font-extrabold tracking-widest text-caramel uppercase">Client Satisfaction</span>
                <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-brownie">
                    Trusted by Over 150+ Organizations in Delhi NCR
                </h2>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Testimonial 1 -->
                <div class="p-8 rounded-[24px] bg-white border border-cream hover:border-caramel/40 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between gap-6 group">
                    <div class="flex flex-col gap-4">
                        <div class="flex text-caramel gap-1 text-sm">
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                        </div>
                        <p class="text-xs sm:text-sm text-brownie/80 font-medium italic leading-relaxed">
                            "NDS has been managing our manned guarding and 24/7 command center operations for 3 years. Their discipline, regular audits, and emergency response time are unmatched in Noida."
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-4 border-t border-cream">
                        <div class="w-10 h-10 rounded-full bg-caramel/20 text-caramel font-bold flex items-center justify-center text-sm shrink-0 group-hover:bg-caramel group-hover:text-white transition-colors">
                            RP
                        </div>
                        <div>
                            <div class="text-sm font-extrabold text-brownie">Rajesh Puri</div>
                            <div class="text-[11px] text-brownie/60 font-semibold">Facility Director, Noida Commercial Plaza</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="p-8 rounded-[24px] bg-white border border-cream hover:border-caramel/40 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between gap-6 group">
                    <div class="flex flex-col gap-4">
                        <div class="flex text-caramel gap-1 text-sm">
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                        </div>
                        <p class="text-xs sm:text-sm text-brownie/80 font-medium italic leading-relaxed">
                            "Vetted guards, PSARA compliance, and polite staff. NDS coordinates gate access control and biometric logs for our Noida IT Park seamlessly with our HR system."
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-4 border-t border-cream">
                        <div class="w-10 h-10 rounded-full bg-caramel/20 text-caramel font-bold flex items-center justify-center text-sm shrink-0 group-hover:bg-caramel group-hover:text-white transition-colors">
                            MS
                        </div>
                        <div>
                            <div class="text-sm font-extrabold text-brownie">Meenakshi Sharma</div>
                            <div class="text-[11px] text-brownie/60 font-semibold">VP Admin, Sector-62 Tech Park</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="p-8 rounded-[24px] bg-white border border-cream hover:border-caramel/40 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between gap-6 group">
                    <div class="flex flex-col gap-4">
                        <div class="flex text-caramel gap-1 text-sm">
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                            <i class="ri-star-fill group-hover:scale-110 transition-transform"></i>
                        </div>
                        <p class="text-xs sm:text-sm text-brownie/80 font-medium italic leading-relaxed">
                            "With NDS Security, our gated residential society of 800+ flats feels safe. Their guards are well-trained in fire emergencies, polite, and background-verified."
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-4 border-t border-cream">
                        <div class="w-10 h-10 rounded-full bg-caramel/20 text-caramel font-bold flex items-center justify-center text-sm shrink-0 group-hover:bg-caramel group-hover:text-white transition-colors">
                            VK
                        </div>
                        <div>
                            <div class="text-sm font-extrabold text-brownie">Vikram Kapoor</div>
                            <div class="text-[11px] text-brownie/60 font-semibold">RWA President, Noida Extension</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 10. FREQUENTLY ASKED QUESTIONS (Dramatic Slow Scroll Reveal Animation) -->
    <section x-data="{ shown: false }" 
             x-init="const obs = new IntersectionObserver(([e]) => { if (e.isIntersecting) { shown = true; obs.disconnect(); } }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }); obs.observe($el);"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-[0.97]'"
             class="py-16 lg:py-20 w-full bg-white transition-all duration-1000 ease-out">
        <div class="max-w-4xl mx-auto px-5 sm:px-6 md:px-12 w-full flex flex-col gap-10">
            
            <div class="text-center flex flex-col gap-2">
                <span class="text-xs font-extrabold tracking-widest text-caramel uppercase">Got Questions?</span>
                <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-brownie">
                    Frequently Asked Security Questions
                </h2>
            </div>

            <!-- FAQ Interactive Accordion -->
            <div x-data="{ activeFaq: 1 }" class="flex flex-col gap-4">
                
                <!-- FAQ 1 -->
                <div class="border border-cream rounded-2xl p-6 transition-all duration-300" :class="activeFaq === 1 ? 'bg-cream/20 border-caramel/40 shadow-sm' : 'bg-white hover:border-caramel/30'">
                    <button @click="activeFaq = (activeFaq === 1 ? null : 1)" class="w-full flex items-center justify-between text-left font-bold text-base text-brownie focus:outline-none">
                        <span>Are NDS security guards PSARA compliant and police verified?</span>
                        <i class="ri-add-line text-xl transition-transform duration-300" :class="activeFaq === 1 ? 'rotate-45 text-caramel' : ''"></i>
                    </button>
                    <div x-show="activeFaq === 1" class="pt-4 text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                        Yes, 100% of NDS security personnel undergo strict police record verification, address checking, and physical fitness certification in full compliance with the Private Security Agencies (Regulation) Act (PSARA).
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-cream rounded-2xl p-6 transition-all duration-300" :class="activeFaq === 2 ? 'bg-cream/20 border-caramel/40 shadow-sm' : 'bg-white hover:border-caramel/30'">
                    <button @click="activeFaq = (activeFaq === 2 ? null : 2)" class="w-full flex items-center justify-between text-left font-bold text-base text-brownie focus:outline-none">
                        <span>What is your emergency response SLA time in Noida?</span>
                        <i class="ri-add-line text-xl transition-transform duration-300" :class="activeFaq === 2 ? 'rotate-45 text-caramel' : ''"></i>
                    </button>
                    <div x-show="activeFaq === 2" class="pt-4 text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                        NDS operates a 24/7 Command Center in Noida with dedicated mobile rapid response units. We guarantee a maximum 15-minute emergency unit deployment SLA across all contract sites in Noida & Greater Noida.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-cream rounded-2xl p-6 transition-all duration-300" :class="activeFaq === 3 ? 'bg-cream/20 border-caramel/40 shadow-sm' : 'bg-white hover:border-caramel/30'">
                    <button @click="activeFaq = (activeFaq === 3 ? null : 3)" class="w-full flex items-center justify-between text-left font-bold text-base text-brownie focus:outline-none">
                        <span>Do you provide security guards for residential gated societies?</span>
                        <i class="ri-add-line text-xl transition-transform duration-300" :class="activeFaq === 3 ? 'rotate-45 text-caramel' : ''"></i>
                    </button>
                    <div x-show="activeFaq === 3" class="pt-4 text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                        Yes, we specialize in high-density township security. Our guards manage visitor access verification, boom barrier operation, perimeter night patrols, and resident safety.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-cream rounded-2xl p-6 transition-all duration-300" :class="activeFaq === 4 ? 'bg-cream/20 border-caramel/40 shadow-sm' : 'bg-white hover:border-caramel/30'">
                    <button @click="activeFaq = (activeFaq === 4 ? null : 4)" class="w-full flex items-center justify-between text-left font-bold text-base text-brownie focus:outline-none">
                        <span>How can I request a site security risk audit?</span>
                        <i class="ri-add-line text-xl transition-transform duration-300" :class="activeFaq === 4 ? 'rotate-45 text-caramel' : ''"></i>
                    </button>
                    <div x-show="activeFaq === 4" class="pt-4 text-xs sm:text-sm text-brownie/70 font-medium leading-relaxed">
                        You can fill out our online contact form or call our helpline (+91 99999 88888). An NDS security engineer will visit your Noida premises to evaluate vulnerabilities and formulate a tailored security model.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 11. PREMIUM CALL TO ACTION CARD (Dramatic Slow Scroll Reveal Animation) -->
    <section id="contact" 
             x-data="{ shown: false }" 
             x-init="const obs = new IntersectionObserver(([e]) => { if (e.isIntersecting) { shown = true; obs.disconnect(); } }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }); obs.observe($el);"
             :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-[0.97]'"
             class="py-14 w-full bg-white transition-all duration-1000 ease-out">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full">
            <div class="bg-gradient-to-r from-brownie via-coffee to-[#2A1B10] rounded-[32px] p-8 sm:p-12 text-white shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8">
                
                <div class="flex flex-col gap-3 max-w-xl relative z-10 text-center md:text-left">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1 bg-caramel/30 border border-caramel/50 text-cream text-xs font-bold uppercase tracking-wider rounded-full self-center md:self-start">
                        <i class="ri-shield-flash-line text-caramel"></i>
                        <span>Immediate Security Deployment</span>
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-white leading-tight">
                        Need Professional Security Guards for Your Noida Site?
                    </h2>
                    <p class="text-xs sm:text-sm text-cream/90 font-medium leading-relaxed">
                        Schedule a complimentary site security risk audit with an NDS Security engineer today.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-3.5 relative z-10 w-full md:w-auto shrink-0">
                    <a href="{{ route('contact') }}" 
                       class="w-full sm:w-auto bg-caramel hover:bg-white hover:text-brownie text-white text-xs sm:text-sm font-bold uppercase tracking-wider py-3.5 px-7 rounded-full shadow-xl transition-all duration-300 text-center cursor-pointer transform hover:-translate-y-0.5">
                        Get Custom Quote
                    </a>
                    
                    <a href="tel:+919999988888" 
                       class="w-full sm:w-auto bg-white/15 hover:bg-white/25 text-white text-xs sm:text-sm font-bold tracking-wider py-3.5 px-6 rounded-full border border-white/25 shadow-sm transition-all duration-300 inline-flex items-center justify-center gap-2 cursor-pointer text-center transform hover:-translate-y-0.5">
                        <i class="ri-phone-fill text-caramel"></i>
                        <span>Call +91 99999 88888</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

</div>