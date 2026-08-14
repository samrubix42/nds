<div class="w-full bg-white flex flex-col font-sans select-none">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <a href="{{ route('services') }}" wire:navigate class="hover:text-caramel transition-colors">Services</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">{{ $service ? $service->title : 'Service Detail' }}</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                {{ $service ? $service->title : 'Service Detail' }}
            </h1>
            @if($service && $service->short_description)
                <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-3xl font-medium leading-relaxed mt-2">
                    {{ $service->short_description }}
                </p>
            @endif
        </div>
    </section>

    <!-- Main Detail Section (Split Grid) -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Left Column: Dynamic Content (7 columns) -->
            <div class="lg:col-span-7 flex flex-col gap-10">
                
                @if($service && $service->image_url)
                    <!-- Main Cover Image -->
                    <div class="relative w-full h-80 sm:h-96 rounded-[32px] overflow-hidden border border-cream shadow-md z-10">
                        <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="w-full h-full object-cover object-center" />
                    </div>
                @endif

                <!-- Dynamic Rich Text HTML Content (Managed via TinyMCE Editor in Admin) -->
                @if($service && $service->content)
                    <div class="prose prose-brown max-w-none text-coffee leading-relaxed text-sm sm:text-base font-medium space-y-4">
                        {!! $service->content !!}
                    </div>
                @else
                    <div class="p-6 bg-[#FAF7F2] border border-cream rounded-2xl text-coffee/80 text-sm font-semibold">
                        Detailed specifications and content for this service are being updated.
                    </div>
                @endif

            </div>

            <!-- Right Column: Dynamic Sidebar Menu (5 columns) -->
            <div class="lg:col-span-5 flex flex-col gap-8 sticky top-6">
                
                <!-- Services Menu Card -->
                <div class="bg-[#FDFBF7] p-6 border border-cream rounded-3xl shadow-sm flex flex-col gap-4">
                    <h4 class="text-xs font-black tracking-widest text-brownie uppercase pb-3 border-b border-cream">Our Security Solutions</h4>
                    <div class="flex flex-col gap-2.5">
                        @foreach($allServices as $item)
                            <a href="{{ route('service.detail', ['slug' => $item->slug]) }}"
                               wire:navigate
                               class="flex justify-between items-center px-4 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-200 {{ $slug === $item->slug ? 'bg-caramel/15 border border-caramel/30 text-brownie font-black shadow-sm' : 'hover:bg-cream/40 text-coffee hover:translate-x-1' }}">
                                <div class="flex items-center gap-2">
                                    <i class="{{ $item->icon ?? 'ri-shield-check-line' }} text-caramel"></i>
                                    <span>{{ $item->title }}</span>
                                </div>
                                <i class="ri-arrow-right-s-line text-caramel"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Call To Action Box -->
                <div class="bg-gradient-to-br from-caramel to-coffee text-white p-8 rounded-3xl shadow-md flex flex-col gap-5 relative overflow-hidden">
                    <div class="absolute -top-12 -right-12 w-32 h-32 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
                    
                    <div class="w-11 h-11 rounded-2xl bg-white/15 flex items-center justify-center text-white">
                        <i class="ri-customer-service-2-fill text-2xl"></i>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <h4 class="text-lg font-black uppercase tracking-wide leading-tight">Request Site Audit</h4>
                        <p class="text-xs text-white/80 leading-relaxed font-semibold">
                            Consult with an NDS Security officer to audit your premises and design a tailored security deployment.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3.5 mt-2">
                        <a href="tel:{{ setting('phone_number', '+91 88005-93141') }}" class="w-full py-3 bg-white text-brownie font-extrabold text-xs sm:text-sm uppercase tracking-wider rounded-xl shadow-sm text-center block transition-all hover:bg-cream active:scale-98">
                            <i class="ri-phone-fill mr-1"></i> Call {{ setting('phone_number', '+91 88005-93141') }}
                        </a>
                        <a href="{{ route('contact') }}" wire:navigate class="w-full py-3 border border-white/40 hover:bg-white/10 text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider rounded-xl text-center block transition-all active:scale-98">
                            Inquire Online
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

</div>
