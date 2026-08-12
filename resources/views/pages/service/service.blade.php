<div class="w-full bg-white flex flex-col font-sans">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <a href="{{ route('services') }}" class="hover:text-caramel transition-colors">Services</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">{{ $service['title'] }}</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                {{ $service['title'] }}
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                {{ $service['subtitle'] }}
            </p>
        </div>
    </section>

    <!-- Main Detail Section (Split Grid) -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Left Column: Details (7 columns) -->
            <div class="lg:col-span-7 flex flex-col gap-10">
                
                <!-- Main Cover Image -->
                <div class="relative w-full h-80 sm:h-96 rounded-[32px] overflow-hidden border border-cream shadow-md z-10">
                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover object-center" />
                </div>

                <!-- Description Paragraph -->
                <div class="flex flex-col gap-4">
                    <h3 class="text-xl sm:text-2xl font-black text-brownie uppercase tracking-wide">Service Overview</h3>
                    <p class="text-sm sm:text-base text-coffee/95 leading-relaxed font-medium">
                        {{ $service['description'] }}
                    </p>
                </div>

                <!-- Key Benefits List -->
                <div class="flex flex-col gap-4 p-6 sm:p-8 bg-[#FDFBF7] border border-cream rounded-3xl">
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase tracking-wide mb-2 flex items-center gap-2">
                        <i class="ri-shield-check-fill text-caramel"></i> Key Highlights & Benefits
                    </h3>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm font-semibold text-coffee/90">
                        @foreach ($service['benefits'] as $benefit)
                            <li class="flex items-start gap-2.5">
                                <i class="ri-checkbox-circle-fill text-caramel text-base shrink-0 mt-0.5"></i>
                                <span class="leading-relaxed">{{ $benefit }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Technical Specifications Table -->
                <div class="flex flex-col gap-4">
                    <h3 class="text-xl sm:text-2xl font-black text-brownie uppercase tracking-wide">Technical Specifications</h3>
                    <div class="w-full overflow-hidden border border-cream rounded-2xl shadow-sm">
                        <table class="w-full text-left text-xs sm:text-sm font-medium text-coffee/90">
                            <tbody>
                                @foreach ($service['specs'] as $label => $val)
                                    <tr class="border-b border-cream bg-white last:border-0">
                                        <td class="px-5 py-4 bg-[#FAF7F2] font-black text-brownie uppercase tracking-wider w-1/3 border-r border-cream">
                                            {{ $label }}
                                        </td>
                                        <td class="px-5 py-4 font-semibold">
                                            {{ $val }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Frequently Asked Questions (Alpine Accordion) -->
                <div class="flex flex-col gap-5" x-data="{ active: null }">
                    <h3 class="text-xl sm:text-2xl font-black text-brownie uppercase tracking-wide">FAQs & Information</h3>
                    <div class="flex flex-col gap-3">
                        @foreach ($service['faqs'] as $index => $faq)
                            <div class="border border-cream rounded-2xl overflow-hidden transition-all duration-300 bg-white"
                                 :class="active === {{ $index }} ? 'border-caramel/40 shadow-sm' : 'hover:border-caramel/25'">
                                <button @click="active = (active === {{ $index }} ? null : {{ $index }})"
                                        class="w-full px-6 py-4 flex justify-between items-center text-left text-xs sm:text-sm font-black text-brownie uppercase tracking-wide focus:outline-none">
                                    <span>{{ $faq['q'] }}</span>
                                    <i class="text-base text-caramel transition-transform duration-300"
                                       :class="active === {{ $index }} ? 'ri-subtract-line' : 'ri-add-line'"></i>
                                </button>
                                <div x-show="active === {{ $index }}" x-cloak
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 max-h-0"
                                     x-transition:enter-end="opacity-100 max-h-40"
                                     class="px-6 pb-4 text-xs sm:text-sm text-coffee/85 leading-relaxed font-semibold">
                                    {{ $faq['a'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- Right Column: Sidebar (5 columns) -->
            <div class="lg:col-span-5 flex flex-col gap-8 sticky top-6">
                
                <!-- Services Menu Card -->
                <div class="bg-[#FDFBF7] p-6 border border-cream rounded-3xl shadow-sm flex flex-col gap-4">
                    <h4 class="text-xs font-black tracking-widest text-brownie uppercase pb-3 border-b border-cream">Our Solutions</h4>
                    <div class="flex flex-col gap-2.5">
                        <a href="{{ route('service.detail', ['slug' => 'monitoring-services']) }}"
                           class="flex justify-between items-center px-4 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-200 {{ $slug === 'monitoring-services' ? 'bg-caramel/15 border border-caramel/30 text-brownie font-black shadow-sm' : 'hover:bg-cream/40 text-coffee hover:translate-x-1' }}">
                            <span>24/7 Guard Command</span>
                            <i class="ri-arrow-right-s-line text-caramel"></i>
                        </a>
                        <a href="{{ route('service.detail', ['slug' => 'cctv-installation']) }}"
                           class="flex justify-between items-center px-4 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-200 {{ $slug === 'cctv-installation' ? 'bg-caramel/15 border border-caramel/30 text-brownie font-black shadow-sm' : 'hover:bg-cream/40 text-coffee hover:translate-x-1' }}">
                            <span>CCTV & Surveillance</span>
                            <i class="ri-arrow-right-s-line text-caramel"></i>
                        </a>
                        <a href="{{ route('service.detail', ['slug' => 'access-control-systems']) }}"
                           class="flex justify-between items-center px-4 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-200 {{ $slug === 'access-control-systems' ? 'bg-caramel/15 border border-caramel/30 text-brownie font-black shadow-sm' : 'hover:bg-cream/40 text-coffee hover:translate-x-1' }}">
                            <span>Corporate Access Control</span>
                            <i class="ri-arrow-right-s-line text-caramel"></i>
                        </a>
                        <a href="{{ route('service.detail', ['slug' => 'alarm-systems-installation']) }}"
                           class="flex justify-between items-center px-4 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-200 {{ $slug === 'alarm-systems-installation' ? 'bg-caramel/15 border border-caramel/30 text-brownie font-black shadow-sm' : 'hover:bg-cream/40 text-coffee hover:translate-x-1' }}">
                            <span>Alarm Systems</span>
                            <i class="ri-arrow-right-s-line text-caramel"></i>
                        </a>
                        <a href="{{ route('service.detail', ['slug' => 'home-security-systems']) }}"
                           class="flex justify-between items-center px-4 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-200 {{ $slug === 'home-security-systems' ? 'bg-caramel/15 border border-caramel/30 text-brownie font-black shadow-sm' : 'hover:bg-cream/40 text-coffee hover:translate-x-1' }}">
                            <span>Home Security</span>
                            <i class="ri-arrow-right-s-line text-caramel"></i>
                        </a>
                        <a href="{{ route('service.detail', ['slug' => 'smart-home-integration']) }}"
                           class="flex justify-between items-center px-4 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-200 {{ $slug === 'smart-home-integration' ? 'bg-caramel/15 border border-caramel/30 text-brownie font-black shadow-sm' : 'hover:bg-cream/40 text-coffee hover:translate-x-1' }}">
                            <span>Building Automation BMS</span>
                            <i class="ri-arrow-right-s-line text-caramel"></i>
                        </a>
                    </div>
                </div>

                <!-- Call To Action Box -->
                <div class="bg-gradient-to-br from-caramel to-coffee text-white p-8 rounded-3xl shadow-md flex flex-col gap-5 relative overflow-hidden">
                    <!-- Overlay decorative glow circle -->
                    <div class="absolute -top-12 -right-12 w-32 h-32 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
                    
                    <div class="w-11 h-11 rounded-2xl bg-white/15 flex items-center justify-center text-white">
                        <i class="ri-customer-service-2-fill text-2xl"></i>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <h4 class="text-lg font-black uppercase tracking-wide leading-tight">Request Site Consultation</h4>
                        <p class="text-xs text-white/80 leading-relaxed font-semibold">
                            Ask for an NDS engineer to audit your Noida premises and formulate a custom security model.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3.5 mt-2">
                        <a href="tel:+919999988888" class="w-full py-3 bg-white text-brownie font-extrabold text-xs sm:text-sm uppercase tracking-wider rounded-xl shadow-sm text-center block transition-all hover:bg-cream active:scale-98">
                            <i class="ri-phone-fill mr-1"></i> Call Command Helpline
                        </a>
                        <a href="{{ route('contact') }}" class="w-full py-3 border border-white/40 hover:bg-white/10 text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider rounded-xl text-center block transition-all active:scale-98">
                            Inquire Online
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

</div>
