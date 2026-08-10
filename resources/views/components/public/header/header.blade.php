<header class="relative w-full flex flex-col z-50 bg-white" x-data="{ mobileMenuOpen: false, servicesOpen: false }">
    <!-- Top Tier: Logo & Contact Info -->
    <div class="w-full border-b border-cream/50 py-3 bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center gap-4 w-full">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center shrink-0">
                <img src="{{ asset('logo.png') }}" alt="NDS Security Logo" class="h-10 md:h-14 w-auto object-contain" />
            </a>
 
            <!-- Contact Info (Desktop Only) -->
            <div class="hidden md:flex items-center gap-8 text-sm ml-auto">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-[4px] bg-cream flex items-center justify-center text-brownie">
                        <i class="ri-phone-line text-lg"></i>
                    </div>
                    <div>
                        <p class="text-[10px] text-coffee font-semibold uppercase tracking-wider">Call 24/7 Support</p>
                        <p class="text-brownie font-bold">+91 99999 88888</p>
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-[4px] bg-cream flex items-center justify-center text-brownie">
                        <i class="ri-mail-line text-lg"></i>
                    </div>
                    <div>
                        <p class="text-[10px] text-coffee font-semibold uppercase tracking-wider">Email Us</p>
                        <p class="text-brownie font-bold">info@ndssecurity.com</p>
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-[4px] bg-cream flex items-center justify-center text-brownie">
                        <i class="ri-map-pin-line text-lg"></i>
                    </div>
                    <div>
                        <p class="text-[10px] text-coffee font-semibold uppercase tracking-wider">Our Office</p>
                        <p class="text-brownie font-bold">Noida, Uttar Pradesh</p>
                    </div>
                </div>
            </div>
 
            <!-- Mobile Menu Toggle & Contact Button (Mobile Only) -->
            <div class="flex items-center gap-2 md:hidden">
                <a href="tel:+919999988888" class="w-9 h-9 rounded-full bg-cream text-brownie hover:bg-caramel/20 flex items-center justify-center transition-colors" title="Call Us">
                    <i class="ri-phone-fill"></i>
                </a>
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="w-9 h-9 rounded-full bg-cream text-brownie hover:bg-caramel/20 flex items-center justify-center transition-colors" title="Toggle Menu">
                    <i class="text-lg" :class="mobileMenuOpen ? 'ri-close-line' : 'ri-menu-line'"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Bottom Tier: Navigation Bar (Balanced Cream Background) -->
    <div class="w-full bg-cream text-brownie border-b border-caramel/30">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center relative py-0">
            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center">
                <a href="{{ route('home') }}" class="py-3 px-5 text-xs font-semibold tracking-wide uppercase hover:bg-caramel/20 hover:text-brownie transition-colors border-b-2 border-transparent hover:border-caramel bg-caramel/15">Home</a>
                <a href="#" class="py-3 px-5 text-xs font-semibold tracking-wide uppercase hover:bg-caramel/20 hover:text-brownie transition-colors border-b-2 border-transparent hover:border-caramel">About Us</a>

                <!-- Services Dropdown using Alpine.js (Supports hover/mouse over on desktop) -->
                <div class="relative" @click.away="servicesOpen = false" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    <button @click="servicesOpen = !servicesOpen" class="py-3 px-5 text-xs font-semibold tracking-wide uppercase hover:bg-caramel/20 hover:text-brownie transition-colors border-b-2 border-transparent hover:border-caramel flex items-center gap-0.5">
                        Services <i class="ri-arrow-down-s-line transition-transform duration-200" :class="servicesOpen ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="servicesOpen" x-cloak x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-0 w-64 bg-white text-brownie shadow-xl border-b-4 border-caramel z-50">
                        <a href="#" class="block px-5 py-3 text-xs font-semibold hover:bg-cream/50 transition-colors border-b border-cream/20">Security Guard Services</a>
                        <a href="#" class="block px-5 py-3 text-xs font-semibold hover:bg-cream/50 transition-colors border-b border-cream/20">Corporate Security</a>
                        <a href="#" class="block px-5 py-3 text-xs font-semibold hover:bg-cream/50 transition-colors border-b border-cream/20">CCTV & Surveillance</a>
                        <a href="#" class="block px-5 py-3 text-xs font-semibold hover:bg-cream/50 transition-colors border-b border-cream/20">Executive Escort Guard</a>
                        <a href="#" class="block px-5 py-3 text-xs font-semibold hover:bg-cream/50 transition-colors">Facility Management</a>
                    </div>
                </div>

                <a href="#" class="py-3 px-5 text-xs font-semibold tracking-wide uppercase hover:bg-caramel/20 hover:text-brownie transition-colors border-b-2 border-transparent hover:border-caramel">Solutions</a>
                <a href="#" class="py-3 px-5 text-xs font-semibold tracking-wide uppercase hover:bg-caramel/20 hover:text-brownie transition-colors border-b-2 border-transparent hover:border-caramel">Contact Page</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:block py-2">
                <a href="#" class="bg-gradient-to-r from-caramel to-coffee hover:from-coffee hover:to-brownie text-white font-bold text-xs uppercase tracking-wider py-2 px-6 rounded-full shadow-md shadow-caramel/15 transition-all inline-block hover:scale-[1.02] active:scale-[0.98]">
                    Get a Quote
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer (Balanced Cream Background) -->
    <div x-show="mobileMenuOpen" x-cloak class="md:hidden w-full bg-cream text-brownie border-t border-caramel/20 flex flex-col py-3 px-6 gap-2 z-40 transition-all duration-300">
        <a href="{{ route('home') }}" class="py-2 px-3 rounded-[4px] bg-caramel/25 text-brownie font-bold text-xs uppercase tracking-wide">Home</a>
        <a href="#" class="py-2 px-3 rounded-[4px] hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">About Us</a>

        <!-- Mobile Dropdown Services -->
        <div x-data="{ mobileServicesOpen: false }" class="flex flex-col">
            <button @click="mobileServicesOpen = !mobileServicesOpen" class="w-full flex justify-between items-center py-2 px-3 rounded-[4px] hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">
                <span>Services</span>
                <i class="ri-arrow-down-s-line transition-transform duration-200" :class="mobileServicesOpen ? 'rotate-180' : ''"></i>
            </button>
            <div x-show="mobileServicesOpen" x-cloak class="flex flex-col pl-5 mt-1 gap-1.5 border-l border-caramel/30 py-1">
                <a href="#" class="py-1 text-xs text-brownie/85 hover:text-brownie">Security Guard Services</a>
                <a href="#" class="py-1 text-xs text-brownie/85 hover:text-brownie">Corporate Security</a>
                <a href="#" class="py-1 text-xs text-brownie/85 hover:text-brownie">CCTV & Surveillance</a>
                <a href="#" class="py-1 text-xs text-brownie/85 hover:text-brownie">Executive Escort Guard</a>
                <a href="#" class="py-1 text-xs text-brownie/85 hover:text-brownie">Facility Management</a>
            </div>
        </div>

        <a href="#" class="py-2 px-3 rounded-[4px] hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">Solutions</a>
        <a href="#" class="py-2 px-3 rounded-[4px] hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">Contact Page</a>

        <div class="mt-3 pt-3 border-t border-caramel/20">
            <a href="#" class="w-full text-center bg-gradient-to-r from-caramel to-coffee hover:from-coffee hover:to-brownie text-white font-bold text-xs uppercase tracking-wider py-2.5 rounded-full transition-all block">
                Get a Quote
            </a>
        </div>
    </div>
</header>