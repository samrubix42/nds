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
            <div class="lg:col-span-5 relative flex items-center justify-center p-4">
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
            <div class="lg:col-span-7 flex flex-col gap-6">
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
                    <i class="ri-user-shield-fill text-cream text-sm"></i>
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
                    <i class="ri-user-shield-fill text-cream text-sm"></i>
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


    <!-- Our Strengths Section (Interactive Running Numbers on Scroll - Premium Cards) -->
    <section class="bg-gradient-to-b from-cream/25 to-cream/60 py-12 sm:py-16 lg:py-20 border-b border-cream relative overflow-hidden">

        <!-- Background Grid -->
        <div class="absolute inset-0 z-0 opacity-45 pointer-events-none select-none">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path
                            d="M 40 0 L 0 0 0 40"
                            fill="none"
                            stroke="rgba(192,133,82,0.08)"
                            stroke-width="1" />
                    </pattern>
                </defs>

                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>


        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 relative z-10">

            <!-- Section Heading -->
            <div class="flex flex-col items-center text-center gap-2 sm:gap-3 mb-10 sm:mb-12 lg:mb-16">

                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">
                    NDS Global Impact
                </span>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Our Strengths
                </h2>

                <div class="w-10 sm:w-12 h-0.5 bg-caramel mt-1"></div>

            </div>


            <!-- Stats Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-5 lg:gap-8">


                <!-- STAT 1 -->
                <div
                    x-data="{ 
                    count: 0,
                    target: 30,
                    duration: 1500,

                    startCounter() {
                        let start = null;

                        const step = (timestamp) => {
                            if (!start) start = timestamp;

                            const progress = Math.min(
                                (timestamp - start) / this.duration,
                                1
                            );

                            this.count = Math.floor(
                                progress * this.target
                            );

                            if (progress < 1) {
                                window.requestAnimationFrame(step);
                            } else {
                                this.count = this.target;
                            }
                        };

                        window.requestAnimationFrame(step);
                    },

                    init() {
                        let obs = new IntersectionObserver((entries) => {
                            entries.forEach(e => {
                                if (e.isIntersecting) {
                                    this.startCounter();
                                    obs.disconnect();
                                }
                            });
                        }, { threshold: 0.1 });

                        obs.observe(this.$el);
                    }
                }"
                    class="group w-full bg-white/90 backdrop-blur-sm
                       border border-cream/80 rounded-xl
                       p-4 sm:p-6 lg:p-8
                       flex flex-col items-center text-center
                       gap-3 sm:gap-5 lg:gap-6
                       transition-all duration-300
                       hover:-translate-y-1.5
                       hover:shadow-xl
                       hover:shadow-caramel/5
                       hover:border-caramel/40">

                    <div class="w-10 h-10 sm:w-12 sm:h-12
                            rounded-full bg-caramel/10
                            flex items-center justify-center
                            text-caramel
                            group-hover:bg-caramel
                            group-hover:text-white
                            transition-all duration-300
                            group-hover:scale-105">

                        <i class="ri-award-line text-xl sm:text-2xl"></i>

                    </div>

                    <div class="w-full">

                        <h3 class="text-3xl sm:text-4xl lg:text-5xl
                               font-black
                               bg-clip-text text-transparent
                               bg-gradient-to-r from-brownie to-caramel
                               tracking-tight">

                            <span x-text="count">0</span>+

                        </h3>

                        <p class="text-[9px] sm:text-[10px] md:text-xs
                              font-bold tracking-wider
                              text-coffee uppercase
                              mt-1 sm:mt-2
                              leading-relaxed">

                            Years of<br>experience

                        </p>

                    </div>

                </div>


                <!-- STAT 2 -->
                <div
                    x-data="{ 
                    count: 0,
                    target: 19000,
                    duration: 1800,

                    startCounter() {
                        let start = null;

                        const step = (timestamp) => {
                            if (!start) start = timestamp;

                            const progress = Math.min(
                                (timestamp - start) / this.duration,
                                1
                            );

                            this.count = Math.floor(
                                progress * this.target
                            );

                            if (progress < 1) {
                                window.requestAnimationFrame(step);
                            } else {
                                this.count = this.target;
                            }
                        };

                        window.requestAnimationFrame(step);
                    },

                    init() {
                        let obs = new IntersectionObserver((entries) => {
                            entries.forEach(e => {
                                if (e.isIntersecting) {
                                    this.startCounter();
                                    obs.disconnect();
                                }
                            });
                        }, { threshold: 0.1 });

                        obs.observe(this.$el);
                    }
                }"
                    class="group w-full bg-white/90 backdrop-blur-sm
                       border border-cream/80 rounded-xl
                       p-4 sm:p-6 lg:p-8
                       flex flex-col items-center text-center
                       gap-3 sm:gap-5 lg:gap-6
                       transition-all duration-300
                       hover:-translate-y-1.5
                       hover:shadow-xl
                       hover:shadow-caramel/5
                       hover:border-caramel/40">

                    <div class="w-10 h-10 sm:w-12 sm:h-12
                            rounded-full bg-caramel/10
                            flex items-center justify-center
                            text-caramel
                            group-hover:bg-caramel
                            group-hover:text-white
                            transition-all duration-300
                            group-hover:scale-105">

                        <i class="ri-global-line text-xl sm:text-2xl"></i>

                    </div>

                    <div class="w-full">

                        <h3 class="text-3xl sm:text-4xl lg:text-5xl
                               font-black
                               bg-clip-text text-transparent
                               bg-gradient-to-r from-brownie to-caramel
                               tracking-tight">

                            <span x-text="count.toLocaleString()">0</span>+

                        </h3>

                        <p class="text-[9px] sm:text-[10px] md:text-xs
                              font-bold tracking-wider
                              text-coffee uppercase
                              mt-1 sm:mt-2
                              leading-relaxed">

                            Sites served<br>worldwide

                        </p>

                    </div>

                </div>


                <!-- STAT 3 -->
                <div
                    x-data="{ 
                    count: 0,
                    target: 100000,
                    duration: 2000,

                    startCounter() {
                        let start = null;

                        const step = (timestamp) => {
                            if (!start) start = timestamp;

                            const progress = Math.min(
                                (timestamp - start) / this.duration,
                                1
                            );

                            this.count = Math.floor(
                                progress * this.target
                            );

                            if (progress < 1) {
                                window.requestAnimationFrame(step);
                            } else {
                                this.count = this.target;
                            }
                        };

                        window.requestAnimationFrame(step);
                    },

                    init() {
                        let obs = new IntersectionObserver((entries) => {
                            entries.forEach(e => {
                                if (e.isIntersecting) {
                                    this.startCounter();
                                    obs.disconnect();
                                }
                            });
                        }, { threshold: 0.1 });

                        obs.observe(this.$el);
                    }
                }"
                    class="group w-full bg-white/90 backdrop-blur-sm
                       border border-cream/80 rounded-xl
                       p-4 sm:p-6 lg:p-8
                       flex flex-col items-center text-center
                       gap-3 sm:gap-5 lg:gap-6
                       transition-all duration-300
                       hover:-translate-y-1.5
                       hover:shadow-xl
                       hover:shadow-caramel/5
                       hover:border-caramel/40">

                    <div class="w-10 h-10 sm:w-12 sm:h-12
                            rounded-full bg-caramel/10
                            flex items-center justify-center
                            text-caramel
                            group-hover:bg-caramel
                            group-hover:text-white
                            transition-all duration-300
                            group-hover:scale-105">

                        <i class="ri-group-line text-xl sm:text-2xl"></i>

                    </div>

                    <div class="w-full">

                        <h3 class="text-3xl sm:text-4xl lg:text-5xl
                               font-black
                               bg-clip-text text-transparent
                               bg-gradient-to-r from-brownie to-caramel
                               tracking-tight">

                            <span x-text="count.toLocaleString()">0</span>+

                        </h3>

                        <p class="text-[9px] sm:text-[10px] md:text-xs
                              font-bold tracking-wider
                              text-coffee uppercase
                              mt-1 sm:mt-2
                              leading-relaxed">

                            Professionals<br>deployed

                        </p>

                    </div>

                </div>


                <!-- STAT 4 -->
                <div
                    x-data="{ 
                    count: 0,
                    target: 78,
                    duration: 1500,

                    startCounter() {
                        let start = null;

                        const step = (timestamp) => {
                            if (!start) start = timestamp;

                            const progress = Math.min(
                                (timestamp - start) / this.duration,
                                1
                            );

                            this.count = Math.floor(
                                progress * this.target
                            );

                            if (progress < 1) {
                                window.requestAnimationFrame(step);
                            } else {
                                this.count = this.target;
                            }
                        };

                        window.requestAnimationFrame(step);
                    },

                    init() {
                        let obs = new IntersectionObserver((entries) => {
                            entries.forEach(e => {
                                if (e.isIntersecting) {
                                    this.startCounter();
                                    obs.disconnect();
                                }
                            });
                        }, { threshold: 0.1 });

                        obs.observe(this.$el);
                    }
                }"
                    class="group w-full bg-white/90 backdrop-blur-sm
                       border border-cream/80 rounded-xl
                       p-4 sm:p-6 lg:p-8
                       flex flex-col items-center text-center
                       gap-3 sm:gap-5 lg:gap-6
                       transition-all duration-300
                       hover:-translate-y-1.5
                       hover:shadow-xl
                       hover:shadow-caramel/5
                       hover:border-caramel/40">

                    <div class="w-10 h-10 sm:w-12 sm:h-12
                            rounded-full bg-caramel/10
                            flex items-center justify-center
                            text-caramel
                            group-hover:bg-caramel
                            group-hover:text-white
                            transition-all duration-300
                            group-hover:scale-105">

                        <i class="ri-building-4-line text-xl sm:text-2xl"></i>

                    </div>

                    <div class="w-full">

                        <h3 class="text-3xl sm:text-4xl lg:text-5xl
                               font-black
                               bg-clip-text text-transparent
                               bg-gradient-to-r from-brownie to-caramel
                               tracking-tight">

                            <span x-text="count">0</span>+

                        </h3>

                        <p class="text-[9px] sm:text-[10px] md:text-xs
                              font-bold tracking-wider
                              text-coffee uppercase
                              mt-1 sm:mt-2
                              leading-relaxed">

                            Offices<br>globally

                        </p>

                    </div>

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
            <div class="flex flex-col items-center text-center gap-3 mb-16">
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
            <div class="flex flex-col items-center text-center gap-3 mb-16">
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
                <div class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
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
                <div class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
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
                <div class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
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
                <div class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
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
                <div class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
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
                <div class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
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

    <!-- Testimonial Slider Section (Multiple Card Slider) -->
    <section class="bg-gradient-to-b from-cream/25 to-cream/60 py-20 border-t border-cream relative overflow-hidden"
        x-data="{ 
                 activeIndex: 0, 
                 totalCards: 5,
                 getVisibleCards() {
                     if (window.innerWidth >= 1024) return 3;
                     if (window.innerWidth >= 768) return 2;
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
                 }
             }"
        @resize.window="if (activeIndex > totalCards - getVisibleCards()) activeIndex = totalCards - getVisibleCards()">
        <!-- Faint background accent pattern -->
        <div class="absolute inset-0 z-0 opacity-30 pointer-events-none select-none">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                <defs>
                    <pattern id="testi-dots" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="2" cy="2" r="1.5" fill="rgba(192,133,82,0.15)" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#testi-dots)" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full relative z-10">
            <div class="flex flex-col items-center text-center gap-3 mb-16">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">Client Reviews</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    What Our Clients Say
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <!-- Card Slider Viewport -->
            <div class="relative w-full">
                <!-- Slider Wrapper with overflow-hidden -->
                <div class="overflow-hidden py-4 -mx-3">
                    <div class="flex transition-transform duration-500 ease-out"
                        :style="'width: ' + (totalCards / getVisibleCards() * 100) + '%; transform: translateX(-' + (activeIndex * (100 / totalCards)) + '%)'">
                        <!-- Card 1: Amit Sharma -->
                        <div :style="'width: ' + (100 / totalCards) + '%'" class="shrink-0 px-3">
                            <div class="bg-white border border-cream rounded-[16px] p-8 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full min-h-[300px]">
                                <div>
                                    <!-- Star Rating -->
                                    <div class="flex gap-1 text-caramel mb-5">
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                    </div>
                                    <!-- Quote Text -->
                                    <p class="text-sm sm:text-base text-coffee/95 font-medium leading-relaxed italic">
                                        "NDS has been managing our manned guarding and command center operations for over 3 years. Their discipline, regular operations audits, and rapid command responsiveness are unmatched in Delhi NCR. They run like mathematical clockwork."
                                    </p>
                                </div>
                                <!-- Author Meta -->
                                <div class="flex items-center gap-4 mt-8 pt-6 border-t border-cream/50">
                                    <div class="w-10 h-10 rounded-full bg-caramel/10 border border-caramel/20 flex items-center justify-center text-caramel font-extrabold text-xs shadow-inner">
                                        AS
                                    </div>
                                    <div>
                                        <h4 class="text-xs sm:text-sm font-bold text-brownie uppercase tracking-wide">Amit Sharma</h4>
                                        <p class="text-xs text-coffee/70 font-semibold uppercase tracking-wider mt-0.5">DLF Tech Park Noida</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Priya Goel -->
                        <div :style="'width: ' + (100 / totalCards) + '%'" class="shrink-0 px-3">
                            <div class="bg-white border border-cream rounded-[16px] p-8 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full min-h-[300px]">
                                <div>
                                    <!-- Star Rating -->
                                    <div class="flex gap-1 text-caramel mb-5">
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                    </div>
                                    <!-- Quote Text -->
                                    <p class="text-sm sm:text-base text-coffee/95 font-medium leading-relaxed italic">
                                        "Securing a high-footfall mall requires swift coordination. NDS deployed a highly disciplined crowd control squad and optimized our parking patrol loop. They have significantly improved our operational security standards."
                                    </p>
                                </div>
                                <!-- Author Meta -->
                                <div class="flex items-center gap-4 mt-8 pt-6 border-t border-cream/50">
                                    <div class="w-10 h-10 rounded-full bg-caramel/10 border border-caramel/20 flex items-center justify-center text-caramel font-extrabold text-xs shadow-inner">
                                        PG
                                    </div>
                                    <div>
                                        <h4 class="text-xs sm:text-sm font-bold text-brownie uppercase tracking-wide">Priya Goel</h4>
                                        <p class="text-xs text-coffee/70 font-semibold uppercase tracking-wider mt-0.5">Gaur City Mall Noida</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: Rohan Mehta -->
                        <div :style="'width: ' + (100 / totalCards) + '%'" class="shrink-0 px-3">
                            <div class="bg-white border border-cream rounded-[16px] p-8 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full min-h-[300px]">
                                <div>
                                    <!-- Star Rating -->
                                    <div class="flex gap-1 text-caramel mb-5">
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                    </div>
                                    <!-- Quote Text -->
                                    <p class="text-sm sm:text-base text-coffee/95 font-medium leading-relaxed italic">
                                        "With NDS, our residents feel completely secure. Their app-integrated visitor verification protocols at access gates and polite, background-verified guards are highly professional. The best security partner we have had."
                                    </p>
                                </div>
                                <!-- Author Meta -->
                                <div class="flex items-center gap-4 mt-8 pt-6 border-t border-cream/50">
                                    <div class="w-10 h-10 rounded-full bg-caramel/10 border border-caramel/20 flex items-center justify-center text-caramel font-extrabold text-xs shadow-inner">
                                        RM
                                    </div>
                                    <div>
                                        <h4 class="text-xs sm:text-sm font-bold text-brownie uppercase tracking-wide">Rohan Mehta</h4>
                                        <p class="text-xs text-coffee/70 font-semibold uppercase tracking-wider mt-0.5">Emerald Heights Noida</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4: Vikram Singh -->
                        <div :style="'width: ' + (100 / totalCards) + '%'" class="shrink-0 px-3">
                            <div class="bg-white border border-cream rounded-[16px] p-8 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full min-h-[300px]">
                                <div>
                                    <!-- Star Rating -->
                                    <div class="flex gap-1 text-caramel mb-5">
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                    </div>
                                    <!-- Quote Text -->
                                    <p class="text-sm sm:text-base text-coffee/95 font-medium leading-relaxed italic">
                                        "The electronic surveillance and access control solutions deployed by NDS have streamlined our visitor tracking. Their 24/7 command center integration has made security management seamless for us."
                                    </p>
                                </div>
                                <!-- Author Meta -->
                                <div class="flex items-center gap-4 mt-8 pt-6 border-t border-cream/50">
                                    <div class="w-10 h-10 rounded-full bg-caramel/10 border border-caramel/20 flex items-center justify-center text-caramel font-extrabold text-xs shadow-inner">
                                        VS
                                    </div>
                                    <div>
                                        <h4 class="text-xs sm:text-sm font-bold text-brownie uppercase tracking-wide">Vikram Singh</h4>
                                        <p class="text-xs text-coffee/70 font-semibold uppercase tracking-wider mt-0.5">Tech Mahindra Noida</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5: Ananya Sen -->
                        <div :style="'width: ' + (100 / totalCards) + '%'" class="shrink-0 px-3">
                            <div class="bg-white border border-cream rounded-[16px] p-8 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full min-h-[300px]">
                                <div>
                                    <!-- Star Rating -->
                                    <div class="flex gap-1 text-caramel mb-5">
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                        <i class="ri-star-fill text-sm"></i>
                                    </div>
                                    <!-- Quote Text -->
                                    <p class="text-sm sm:text-base text-coffee/95 font-medium leading-relaxed italic">
                                        "We rely on NDS for our VIP escort guarding and major events security. Their guards are immaculate, polite, and exceptionally alert. Their threat assessments are highly detailed and helpful."
                                    </p>
                                </div>
                                <!-- Author Meta -->
                                <div class="flex items-center gap-4 mt-8 pt-6 border-t border-cream/50">
                                    <div class="w-10 h-10 rounded-full bg-caramel/10 border border-caramel/20 flex items-center justify-center text-caramel font-extrabold text-xs shadow-inner">
                                        AS
                                    </div>
                                    <div>
                                        <h4 class="text-xs sm:text-sm font-bold text-brownie uppercase tracking-wide">Ananya Sen</h4>
                                        <p class="text-xs text-coffee/70 font-semibold uppercase tracking-wider mt-0.5">Radisson Blu Noida</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Absolute Arrow Controls -->
                <button @click="prev()"
                    class="absolute -left-4 lg:-left-16 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white border border-cream shadow-md hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all z-20 cursor-pointer">
                    <i class="ri-arrow-left-s-line text-xl"></i>
                </button>
                <button @click="next()"
                    class="absolute -right-4 lg:-right-16 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white border border-cream shadow-md hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all z-20 cursor-pointer">
                    <i class="ri-arrow-right-s-line text-xl"></i>
                </button>
            </div>

            <!-- Dynamic Dot Indicators (Centered Below) -->
            <div class="flex justify-center gap-2 mt-8">
                <template x-for="i in (totalCards - getVisibleCards() + 1)" :key="i">
                    <button @click="activeIndex = i - 1"
                        class="w-2 h-2 rounded-full transition-all duration-300 cursor-pointer"
                        :class="activeIndex === (i - 1) ? 'bg-caramel w-5' : 'bg-cream'"></button>
                </template>
            </div>
        </div>
    </section>

    <!-- FAQ Section (SIS & Securitas Interactive Accordion Pattern) -->
    <section class="bg-white py-16 border-t border-cream/50" x-data="{ activeFaq: null }">
        <div class="w-full px-6 md:px-12">
            <div class="flex flex-col items-center text-center gap-3 mb-12">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">Common Queries</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight text-brownie">
                    Frequently Asked Questions
                </h2>
                <div class="w-12 h-1 bg-caramel mt-1"></div>
            </div>

            <div class="max-w-3xl mx-auto flex flex-col gap-3">
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

    <!-- Consultation Call Section (Balanced Cream Theme - Full Screen Width) -->
    <section class="bg-cream text-brownie py-14 px-6 md:px-12 text-center border-t border-b border-caramel/30 relative overflow-hidden">
        <!-- Accent circles -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-coffee/5 rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-caramel/10 rounded-full -translate-x-1/2 translate-y-1/2"></div>

        <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center gap-5">
            <div class="text-brownie">
                <i class="ri-shield-keyhole-line text-4xl"></i>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight">Need Immediate Security Audits?</h2>
            <p class="text-sm sm:text-base md:text-lg text-coffee max-w-xl leading-relaxed font-medium">
                Talk to our security engineers today. We conduct physical site audits and provide PSARA compliant deployment plans for commercial and residential sites in Noida.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 mt-2 w-full sm:w-auto">
                <a href="tel:+919999988888" class="bg-brownie hover:bg-coffee text-white font-bold text-xs sm:text-sm uppercase tracking-wider py-3.5 px-6 rounded-[4px] transition-all shadow-md flex items-center justify-center gap-2">
                    <i class="ri-phone-fill"></i> +91 99999 88888
                </a>
                <a href="#" class="border border-brownie/35 hover:bg-cream/65 text-brownie font-bold text-xs sm:text-sm uppercase tracking-wider py-3.5 px-6 rounded-[4px] transition-all flex items-center justify-center">
                    Request Site Audit
                </a>
            </div>
        </div>
    </section>
</div>