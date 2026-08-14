<div class="w-full bg-white flex flex-col font-sans select-none">
    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute top-1/2 -right-12 w-80 h-80 bg-caramel/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">Services</span>
            </div>

            <div class="flex flex-wrap items-center gap-3 justify-center md:justify-start mt-1">
                <span class="px-3 py-1 bg-caramel/20 border border-caramel/40 text-caramel font-black text-[10px] uppercase tracking-widest rounded-full">
                    PSARA COMPLIANT
                </span>
                <span class="px-3 py-1 bg-caramel/20 border border-caramel/40 text-caramel font-black text-[10px] uppercase tracking-widest rounded-full">
                    ISO 9001:2015 CERTIFIED
                </span>
                <span class="px-3 py-1 bg-caramel/20 border border-caramel/40 text-caramel font-black text-[10px] uppercase tracking-widest rounded-full">
                    24/7 COMMAND CENTER
                </span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                Our Security & <span class="text-caramel underline decoration-caramel/40 underline-offset-8">Surveillance</span> Offerings
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-3xl font-medium leading-relaxed mt-2">
                Tailored, PSARA-compliant security modules engineered to safeguard corporate hubs, commercial landmarks, and high-value private assets across Noida & Delhi NCR.
            </p>
        </div>
    </section>

    <!-- Main Services Grid Section (Dynamic Cards with Image & Overlapping Circular Icon Badge) -->
    <section class="py-20 sm:py-24 bg-[#FDFBF7] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full">
            <!-- Section Header -->
            <div class="flex flex-col items-center text-center gap-3 mb-16">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">DYNAMIC SOLUTIONS</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Comprehensive Security Solutions
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <!-- Dynamic Services Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
                @foreach($services as $index => $service)
                    <div class="group bg-white rounded-3xl overflow-hidden border border-cream shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
                        <div class="relative w-full h-52 overflow-hidden bg-cream">
                            <img src="{{ $service->image_url }}"
                                alt="{{ $service->title }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div class="absolute inset-0 bg-gradient-to-t from-brownie/50 via-transparent to-transparent"></div>
                        </div>
                        <!-- Overlapping Center Circular Icon Badge -->
                        <div class="relative -mt-7 z-20 w-14 h-14 rounded-full bg-gradient-to-tr from-caramel to-coffee text-white border-4 border-white shadow-lg flex items-center justify-center text-2xl transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                            <i class="{{ $service->icon ?? 'ri-shield-check-fill' }}"></i>
                        </div>
                        <div class="p-6 pt-4 flex flex-col items-center text-center flex-grow w-full justify-between gap-4">
                            <div>
                                <span class="text-[10px] font-black text-caramel uppercase tracking-widest block mb-1">0{{ $index + 1 }}. SERVICE</span>
                                <h3 class="text-lg sm:text-xl font-black text-brownie tracking-tight mb-2.5 group-hover:text-caramel transition-colors">
                                    {{ $service->title }}
                                </h3>
                                <p class="text-xs sm:text-sm text-coffee/85 leading-relaxed font-medium mb-4">
                                    {{ $service->short_description ?? 'Professional PSARA compliant security operations for corporate and commercial sites.' }}
                                </p>
                            </div>
                            <a href="{{ route('service.detail', ['slug' => $service->slug]) }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-extrabold text-caramel hover:text-brownie transition-all group/btn">
                                <span>Discover More</span>
                                <div class="w-7 h-7 rounded-full bg-caramel text-white flex items-center justify-center transition-transform duration-300 group-hover/btn:translate-x-1 group-hover/btn:bg-brownie shadow-sm">
                                    <i class="ri-arrow-right-line text-sm"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Consultation Banner CTA -->
    <section class="relative bg-gradient-to-r from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-16 px-6 md:px-12 text-center border-t border-caramel/35 overflow-hidden">
        <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center gap-5">
            <div class="w-12 h-12 rounded-full bg-caramel/20 border border-caramel/40 flex items-center justify-center text-caramel shadow-inner">
                <i class="ri-shield-keyhole-line text-2xl"></i>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-white">Need Custom Security Deployment?</h2>
            <p class="text-sm sm:text-base text-cream/80 max-w-xl leading-relaxed font-medium">
                Consult with NDS Security engineers to audit your premises and design a tailored surveillance plan for your site in Noida.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 mt-2 w-full sm:w-auto">
                <a href="tel:{{ setting('phone_number', '+91 88005-93141') }}" class="bg-caramel hover:bg-[#c78b57] text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider py-3.5 px-7 rounded-full transition-all shadow-md flex items-center justify-center gap-2">
                    <i class="ri-phone-fill"></i> {{ setting('phone_number', '+91 88005-93141') }}
                </a>
                <a href="{{ route('contact') }}" class="border border-cream/40 hover:bg-white/10 text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider py-3.5 px-7 rounded-full transition-all flex items-center justify-center">
                    Request Security Audit
                </a>
            </div>
        </div>
    </section>
</div>

