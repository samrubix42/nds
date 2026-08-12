<div class="w-full bg-white flex flex-col font-sans">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">Clientele</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                Our <span class="text-caramel underline decoration-caramel/40 underline-offset-8">Clientele</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                Providing institutional trust and premium safety systems to Noida's premier malls, commercial centers, corporate parks, and townships.
            </p>
        </div>
    </section>

    <!-- Partners Showcase Section -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                 class="flex flex-col items-center text-center gap-3 transition-all duration-[1200ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">NDS ELITE PORTFOLIO</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Trusted by Noida's Leading Landmarks
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <!-- Client Logos Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">
                <!-- Group of 12 standard clients + L01-L07 clients -->
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/01-1-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/02-1-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/04-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/05-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/06-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/08-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/09-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/10-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/11-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/12-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/L01-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/L02-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/L03-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/L04-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/L05-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/L06-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <img src="{{ asset('clients/L07-150x150.jpg') }}" alt="Client Logo" class="h-16 w-auto object-contain select-none pointer-events-none" />
                </div>
                <div class="bg-white p-4 rounded-2xl border border-cream shadow-sm flex items-center justify-center hover:border-caramel/25 hover:shadow-md transition-all">
                    <div class="text-[10px] font-black text-caramel tracking-wider text-center uppercase">NDS Premium Partner</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="py-20 bg-cream/10 border-t border-b border-cream/35">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                 class="flex flex-col items-center text-center gap-3 transition-all duration-[1200ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">LANDMARK DEPLOYMENTS</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Major Noida Operations
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Case 1 -->
                <div class="bg-white rounded-3xl overflow-hidden border border-cream shadow-sm flex flex-col hover:border-caramel/20 hover:shadow-md transition-all">
                    <div class="h-44 bg-cream overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555529669-e69e7aa0bc9a?auto=format&fit=crop&w=800&q=80" alt="Gaur City Mall" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <span class="text-[10px] font-black text-caramel uppercase tracking-widest">Commercial Center</span>
                        <h4 class="text-base sm:text-lg font-black text-brownie uppercase">Gaur City Mall Noida</h4>
                        <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium">
                            Managing high-density parking security, optical turnstiles gate access control, and 150+ CCTV surveillance camera sync with live NDS Command Center logs.
                        </p>
                    </div>
                </div>

                <!-- Case 2 -->
                <div class="bg-white rounded-3xl overflow-hidden border border-cream shadow-sm flex flex-col hover:border-caramel/20 hover:shadow-md transition-all">
                    <div class="h-44 bg-cream overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="IT Park Security" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <span class="text-[10px] font-black text-caramel uppercase tracking-widest">IT Park / Tech Hub</span>
                        <h4 class="text-base sm:text-lg font-black text-brownie uppercase">Sector-62 Corporate Hub</h4>
                        <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium">
                            Full biometric fingerprint and card access deployment for an IT park serving over 10,000+ employees. Outfitted with anti-passback rule matrices.
                        </p>
                    </div>
                </div>

                <!-- Case 3 -->
                <div class="bg-white rounded-3xl overflow-hidden border border-cream shadow-sm flex flex-col hover:border-caramel/20 hover:shadow-md transition-all">
                    <div class="h-44 bg-cream overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=800&q=80" alt="Township Security" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <span class="text-[10px] font-black text-caramel uppercase tracking-widest">Residential Township</span>
                        <h4 class="text-base sm:text-lg font-black text-brownie uppercase">Noida Extension Societies</h4>
                        <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium">
                            Securing large multi-story residential towers. Automated visitor logs at main gates and QR code scanning for supervisor route patrols.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 w-full bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                 class="flex flex-col items-center text-center gap-3 transition-all duration-[1200ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">CLIENT FEEDBACK</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Vouched by Facility Managers
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-[#FDFBF7] p-8 border border-cream rounded-3xl relative flex flex-col justify-between">
                    <i class="ri-double-quotes-l text-4xl text-caramel/15 absolute top-6 right-6"></i>
                    <p class="text-xs sm:text-sm text-coffee/95 leading-relaxed font-medium mb-6 relative z-10">
                        "We have contracted NDS Security for our commercial plaza in Noida Extension. Their response team is exceptionally alert. Their 24/7 command center monitors alarms, and we have experienced zero security incidents since they took over."
                    </p>
                    <div class="flex flex-col">
                        <span class="text-sm font-black text-brownie uppercase">Rajesh Sharma</span>
                        <span class="text-[10px] font-bold text-caramel uppercase tracking-widest mt-0.5">Commercial Facility Manager</span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-[#FDFBF7] p-8 border border-cream rounded-3xl relative flex flex-col justify-between">
                    <i class="ri-double-quotes-l text-4xl text-caramel/15 absolute top-6 right-6"></i>
                    <p class="text-xs sm:text-sm text-coffee/95 leading-relaxed font-medium mb-6 relative z-10">
                        "Vetted guards, PSARA compliance, and highly disciplined staff. NDS coordinates access control and security logs for our Noida Sector-62 office. Their biometric gate installation works seamlessly with our HR payroll database."
                    </p>
                    <div class="flex flex-col">
                        <span class="text-sm font-black text-brownie uppercase">Sunita Goel</span>
                        <span class="text-[10px] font-bold text-caramel uppercase tracking-widest mt-0.5">HR Operations Director</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-[#FDFBF7] p-8 border border-cream rounded-3xl relative flex flex-col justify-between">
                    <i class="ri-double-quotes-l text-4xl text-caramel/15 absolute top-6 right-6"></i>
                    <p class="text-xs sm:text-sm text-coffee/95 leading-relaxed font-medium mb-6 relative z-10">
                        "NDS protects our residential society of over 800 flats. Their guards are well-trained in fire emergencies, polite to residents, and highly disciplined. Their GPS-tracked supervisor patrols give us peace of mind."
                    </p>
                    <div class="flex flex-col">
                        <span class="text-sm font-black text-brownie uppercase">Amit Kapur</span>
                        <span class="text-[10px] font-bold text-caramel uppercase tracking-widest mt-0.5">RWA President Noida</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>