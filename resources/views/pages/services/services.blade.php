<div class="w-full bg-white flex flex-col font-sans select-none">
    <!-- Hero Banner Section -->
    <section class="relative w-full py-16 sm:py-24 bg-gradient-to-b from-cream to-white overflow-hidden border-b border-cream">
        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 text-center flex flex-col items-center gap-4">
            <!-- Breadcrumb Pill -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-caramel/10 border border-caramel/20 rounded-full text-xs font-bold text-caramel uppercase tracking-wider">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <i class="ri-arrow-right-s-line text-sm"></i>
                <span class="text-brownie">Services</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-brownie max-w-3xl leading-tight">
                Our Security & <span class="text-caramel">Surveillance</span> Offerings
            </h1>

            <p class="text-sm sm:text-base md:text-lg text-coffee/85 max-w-2xl leading-relaxed font-medium">
                Tailored, PSARA-compliant security modules engineered to safeguard corporate hubs, commercial landmarks, and high-value private assets across Noida & Delhi NCR.
            </p>
        </div>
    </section>

    <!-- Main Services Grid Section (Dynamic Cards with Image & Overlapping Circular Icon Badge) -->
    <section class="py-20 sm:py-24 bg-cream/10 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full">
            <!-- Section Header -->
            <div class="flex flex-col items-center text-center gap-3 mb-16">
                <span class="inline-flex items-center gap-1.5 px-4 py-1.5 bg-caramel/10 border border-caramel/25 text-caramel text-xs font-extrabold tracking-widest uppercase rounded-full shadow-sm">
                    <i class="ri-shield-star-fill text-sm"></i> Dynamic Solutions
                </span>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black tracking-tight text-brownie max-w-2xl leading-tight">
                    Comprehensive <span class="text-caramel">security</span> solutions
                </h2>

                <div class="w-12 h-1 bg-caramel mt-2 rounded-full"></div>
            </div>

            <!-- Dynamic Services Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
                @foreach($services as $index => $service)
                    <div class="group bg-white rounded-3xl overflow-hidden border border-cream/90 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center">
                        <div class="relative w-full h-52 overflow-hidden bg-cream">
                            <img src="{{ $service->image_url }}"
                                alt="{{ $service->title }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div class="absolute inset-0 bg-gradient-to-t from-brownie/40 via-transparent to-transparent"></div>
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
    <section class="bg-cream text-brownie py-16 px-6 md:px-12 text-center border-t border-caramel/30 relative overflow-hidden">
        <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center gap-5">
            <div class="w-12 h-12 rounded-full bg-caramel/15 flex items-center justify-center text-brownie">
                <i class="ri-shield-keyhole-line text-3xl"></i>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">Need Custom Security Deployment?</h2>
            <p class="text-sm sm:text-base text-coffee max-w-xl leading-relaxed font-medium">
                Consult with NDS Security engineers to audit your premises and design a tailored surveillance plan for your site in Noida.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 mt-2 w-full sm:w-auto">
                <a href="tel:{{ setting('phone_number', '+91 88005-93141') }}" class="bg-brownie hover:bg-coffee text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider py-3.5 px-7 rounded-full transition-all shadow-md flex items-center justify-center gap-2">
                    <i class="ri-phone-fill"></i> {{ setting('phone_number', '+91 88005-93141') }}
                </a>
                <a href="{{ route('contact') }}" class="border border-brownie/35 hover:bg-cream/65 text-brownie font-extrabold text-xs sm:text-sm uppercase tracking-wider py-3.5 px-7 rounded-full transition-all flex items-center justify-center">
                    Request Security Audit
                </a>
            </div>
        </div>
    </section>
</div>
