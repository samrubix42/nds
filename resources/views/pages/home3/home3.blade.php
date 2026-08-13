<div class="w-full bg-white flex flex-col">
    <!-- Hero Banner: Full Screen Top Auto Slider Banner (Optimized Phone & Desktop Typography) -->
    <section x-data="{ 
        activeSlide: 0, 
        fallbackImage: '{{ asset('image/PIC_3766.webp') }}',
        slides: [
            {
                title: 'PSARA Certified Manned Guarding Solutions',
                subtitle: 'Rigorously trained, background-verified security personnel providing round-the-clock defense for commercial, industrial, and residential premises.',
                badge: 'PSARA COMPLIANT GUARDING',
                badgeIcon: 'ri-shield-user-line',
                image: '{{ asset('image/PIC_3766.webp') }}',
                primaryBtnText: 'Hire Security Guards',
                primaryBtnLink: '#contact',
                secondaryBtnText: 'Our Guarding Services',
                secondaryBtnLink: '/services'
            },
            {
                title: 'Commercial & Industrial Asset Protection',
                subtitle: 'Advanced access control, automated visitor tracking, perimeter security, and site risk management for 150+ corporate sites.',
                badge: '150+ SITES PROTECTED',
                badgeIcon: 'ri-building-2-line',
                image: '{{ asset('image/PIC_3788.webp') }}',
                primaryBtnText: 'Consult Experts',
                primaryBtnLink: '#contact',
                secondaryBtnText: 'About Us',
                secondaryBtnLink: '/about'
            },
            {
                title: '24/7 Perimeter Patrol & Radio Dispatch',
                subtitle: 'Vigilant guard patrols, synchronized radio dispatch, and rapid inspection units ensuring zero perimeter breach across corporate facilities.',
                badge: 'PERIMETER PATROL & DISPATCH',
                badgeIcon: 'ri-walk-line',
                image: '{{ asset('image/PIC_3792.webp') }}',
                primaryBtnText: 'Hire Patrol Squad',
                primaryBtnLink: '#contact',
                secondaryBtnText: 'Our Services',
                secondaryBtnLink: '/services'
            },
            {
                title: 'Event Security & Crowd Control Logistics',
                subtitle: 'Tactical crowd management squads, entry screening, and VIP stage protection for corporate galas, exhibitions, and public gatherings.',
                badge: 'EVENT & CROWD CONTROL',
                badgeIcon: 'ri-group-line',
                image: '{{ asset('image/PIC_3861.webp') }}',
                primaryBtnText: 'Book Event Security',
                primaryBtnLink: '#contact',
                secondaryBtnText: 'Contact NDS',
                secondaryBtnLink: '#contact'
            },
            {
                title: 'Tactical Guard Training & Physical Readiness',
                subtitle: 'Every NDS security officer undergoes mandatory 100-hour PSARA physical training, threat detection drills, and fire hazard evacuation layouts.',
                badge: 'STATE-AUTHORIZED ACADEMY',
                badgeIcon: 'ri-medal-line',
                image: '{{ asset('image/PIC_4855.webp') }}',
                primaryBtnText: 'Explore Training',
                primaryBtnLink: '/training',
                secondaryBtnText: 'View Gallery',
                secondaryBtnLink: '/gallery'
            },
            {
                title: 'Smart Electronic CCTV & Access Integration',
                subtitle: 'State-of-the-art IP surveillance cameras, AI perimeter threat detection, automated boom barriers, and integrated security logs.',
                badge: 'SMART SURVEILLANCE',
                badgeIcon: 'ri-eye-line',
                image: '{{ asset('image/PIC_3845.webp') }}',
                primaryBtnText: 'CCTV Integration',
                primaryBtnLink: '/services',
                secondaryBtnText: 'Contact Us',
                secondaryBtnLink: '#contact'
            }
        ],
        timer: null,
        startAutoSlide() {
            this.stopAutoSlide();
            this.timer = setInterval(() => {
                this.nextSlide();
            }, 5500);
        },
        stopAutoSlide() {
            if(this.timer) clearInterval(this.timer);
        },
        nextSlide() {
            this.activeSlide = (this.activeSlide + 1) % this.slides.length;
        },
        prevSlide() {
            this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
        },
        goToSlide(index) {
            this.activeSlide = index;
            this.startAutoSlide();
        },
        handleImageError(event) {
            event.target.onerror = null;
            event.target.src = this.fallbackImage;
        }
    }" 
    x-init="startAutoSlide()" 
    @mouseenter="stopAutoSlide()" 
    @mouseleave="startAutoSlide()" 
    class="relative w-full min-h-[580px] h-screen sm:h-screen pt-20 sm:pt-28 md:pt-32 pb-16 bg-gradient-to-r from-[#2a1b10] via-brownie to-[#1a120b] overflow-hidden group select-none flex items-center">
        
        <!-- Background Image Slides with Automatic Fallback Handling -->
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="activeSlide === index"
                 x-transition:enter="transition ease-out duration-1000"
                 x-transition:enter-start="opacity-0 scale-105"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-700"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute inset-0 w-full h-full bg-gradient-to-r from-[#2a1b10] via-brownie to-[#1a120b]">
                <!-- Main Image with Error Fallback -->
                <img :src="slide.image" 
                     :alt="slide.title" 
                     x-on:error="handleImageError($event)"
                     class="w-full h-full object-cover object-top transform scale-105 transition-transform duration-[7000ms] ease-out" />
                
                <!-- Enhanced Vignette Overlays for Maximum Contrast on Phones -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/65 to-black/35 sm:from-black/75 sm:via-black/45 sm:to-black/20"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-black/50 sm:from-black/70 sm:to-black/30"></div>
            </div>
        </template>

        <!-- Slide Content Overlay Container (Flawless Mobile Phone & Desktop Alignment) -->
        <div class="relative z-20 max-w-7xl mx-auto w-full px-5 sm:px-6 md:px-12 flex flex-col justify-center">
            <div class="max-w-xl lg:max-w-2xl flex flex-col gap-3 sm:gap-4">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index"
                         x-transition:enter="transition ease-out duration-600 delay-200"
                         x-transition:enter-start="opacity-0 translate-y-6"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-4"
                         class="flex flex-col gap-3.5 sm:gap-4">
                        
                        <!-- Balanced Pill Chip Tag -->
                        <div class="self-start">
                            <span class="inline-flex items-center gap-1.5 sm:gap-2 px-3 sm:px-3.5 py-1 bg-caramel/30 border border-caramel/50 backdrop-blur-md text-cream text-[11px] sm:text-xs font-bold tracking-wider uppercase rounded-full shadow-sm">
                                <i :class="slide.badgeIcon" class="text-caramel text-xs sm:text-sm"></i>
                                <span x-text="slide.badge"></span>
                            </span>
                        </div>

                        <!-- Fully Responsive & Harmonized Title -->
                        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight drop-shadow-sm" x-text="slide.title"></h1>

                        <!-- Fully Responsive Subtitle -->
                        <p class="text-xs sm:text-base md:text-lg text-cream/90 font-medium leading-relaxed max-w-xl drop-shadow-sm" x-text="slide.subtitle"></p>

                        <!-- Mobile & Desktop Responsive Buttons -->
                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2.5 sm:gap-3 mt-2">
                            <!-- Primary Button -->
                            <a :href="slide.primaryBtnLink" 
                               class="bg-gradient-to-r from-caramel to-coffee hover:from-coffee hover:to-brownie text-white text-xs sm:text-sm font-bold uppercase tracking-wider py-3 px-6 rounded-full shadow-md transition-all duration-200 inline-flex items-center justify-center gap-2 cursor-pointer border border-caramel/40 active:scale-95 text-center">
                                <span x-text="slide.primaryBtnText"></span>
                                <i class="ri-arrow-right-line text-sm"></i>
                            </a>
                            
                            <!-- Secondary Button -->
                            <a :href="slide.secondaryBtnLink" 
                               class="bg-white/15 hover:bg-white/25 backdrop-blur-sm text-white text-xs sm:text-sm font-medium tracking-wider py-3 px-6 rounded-full border border-white/25 shadow-sm transition-all duration-200 inline-flex items-center justify-center gap-1.5 cursor-pointer active:scale-95 text-center">
                                <span x-text="slide.secondaryBtnText"></span>
                                <i class="ri-arrow-right-s-line text-sm opacity-70"></i>
                            </a>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Slider Controls: Arrows -->
        <button @click="prevSlide()" 
                type="button"
                aria-label="Previous Slide"
                class="hidden sm:flex absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-black/40 hover:bg-caramel border border-white/30 text-white backdrop-blur-md items-center justify-center text-xl transition-all duration-200 hover:scale-105 focus:outline-none">
            <i class="ri-arrow-left-s-line"></i>
        </button>

        <button @click="nextSlide()" 
                type="button"
                aria-label="Next Slide"
                class="hidden sm:flex absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-black/40 hover:bg-caramel border border-white/30 text-white backdrop-blur-md items-center justify-center text-xl transition-all duration-200 hover:scale-105 focus:outline-none">
            <i class="ri-arrow-right-s-line"></i>
        </button>

        <!-- Bottom Controls Bar (Bullets) -->
        <div class="absolute bottom-4 sm:bottom-6 inset-x-0 z-30 flex items-center justify-center pointer-events-none">
            <div class="flex items-center gap-2 sm:gap-2.5 pointer-events-auto bg-black/40 px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full backdrop-blur-md border border-white/15">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="goToSlide(index)"
                            type="button"
                            :aria-label="'Go to slide ' + (index + 1)"
                            class="h-2 sm:h-2.5 rounded-full transition-all duration-300 focus:outline-none"
                            :class="activeSlide === index ? 'w-6 sm:w-8 bg-caramel shadow-md' : 'w-2 sm:w-2.5 bg-white/40 hover:bg-white/70'">
                    </button>
                </template>
            </div>
        </div>
    </section>

    <!-- Client Logo Grid Section -->
    <section class="bg-white py-14 sm:py-20 border-b border-cream/30 relative z-10 select-none">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-12 w-full">
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-14'"
                 class="flex flex-col items-center text-center gap-2.5 sm:gap-3 mb-10 sm:mb-12 transition-all duration-[1000ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">Elite Partners</span>
                <h2 class="text-xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Trusted by Noida's Leading Landmarks
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <!-- Dynamic Clients Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3.5 sm:gap-6">
                @foreach($clients as $client)
                    <div class="h-18 sm:h-24 p-3 sm:p-3.5 bg-white rounded-xl border border-cream/90 shadow-2xs hover:shadow-md hover:border-caramel/50 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group">
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
</div>
