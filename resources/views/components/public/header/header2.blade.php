<header class="absolute top-4 sm:top-6 left-0 right-0 z-50 px-4 sm:px-6 md:px-12 w-full" x-data="{ mobileMenuOpen: false, servicesOpen: false }">
    <!-- Floating White Pill Bar Header -->
    <div class="max-w-7xl mx-auto w-full bg-white/95 backdrop-blur-md rounded-full shadow-2xl border border-cream/70 py-2.5 px-5 sm:px-8 flex justify-between items-center relative gap-4">
        <!-- Logo -->
        <a href="{{ route('home2') }}" class="flex items-center shrink-0 group">
            <img src="{{ asset('logo.png') }}" alt="NDS Security Logo" class="h-9 sm:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105" />
        </a>

        <!-- Navigation Links (Center) -->
        <nav class="hidden lg:flex items-center gap-1 xl:gap-2 py-1">
            <a href="{{ route('home2') }}" class="relative group py-2 px-3 text-xs xl:text-sm font-bold tracking-wider uppercase transition-all duration-300 rounded-full bg-caramel/20 text-brownie hover:bg-caramel/30">
                Home
                <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-3.5 h-0.5 bg-caramel rounded-full transition-all duration-300"></span>
            </a>

            <!-- Services Dropdown -->
            <div class="relative" @click.away="servicesOpen = false" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                <button @click="servicesOpen = !servicesOpen" class="relative group py-2 px-3 text-xs xl:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie flex items-center gap-1">
                    <span>Services</span>
                    <i class="ri-arrow-down-s-line text-base transition-transform duration-300" :class="servicesOpen ? 'rotate-180 text-caramel' : ''"></i>
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </button>

                <!-- Animated Dropdown -->
                <div x-show="servicesOpen" x-cloak 
                     x-transition:enter="transition ease-out duration-250 transform" 
                     x-transition:enter-start="opacity-0 -translate-y-2 scale-95" 
                     x-transition:enter-end="opacity-100 translate-y-0 scale-100" 
                     x-transition:leave="transition ease-in duration-150 transform" 
                     x-transition:leave-start="opacity-100 translate-y-0 scale-100" 
                     x-transition:leave-end="opacity-0 -translate-y-2 scale-95" 
                     class="absolute left-0 mt-2 w-64 bg-white/95 backdrop-blur-md text-brownie shadow-2xl rounded-2xl p-2 ring-1 ring-caramel/20 z-50">
                    <a href="{{ route('services') }}" class="group/item flex items-center justify-between px-3.5 py-2.5 text-xs sm:text-[13px] font-bold text-brownie rounded-xl hover:bg-caramel/10 transition-all duration-200">
                        <span>Security Guard Services</span>
                        <i class="ri-arrow-right-s-line text-caramel opacity-0 -translate-x-2 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all duration-200"></i>
                    </a>
                    <a href="{{ route('services') }}" class="group/item flex items-center justify-between px-3.5 py-2.5 text-xs sm:text-[13px] font-bold text-brownie rounded-xl hover:bg-caramel/10 transition-all duration-200">
                        <span>Corporate Security</span>
                        <i class="ri-arrow-right-s-line text-caramel opacity-0 -translate-x-2 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all duration-200"></i>
                    </a>
                    <a href="{{ route('services') }}" class="group/item flex items-center justify-between px-3.5 py-2.5 text-xs sm:text-[13px] font-bold text-brownie rounded-xl hover:bg-caramel/10 transition-all duration-200">
                        <span>CCTV & Surveillance</span>
                        <i class="ri-arrow-right-s-line text-caramel opacity-0 -translate-x-2 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all duration-200"></i>
                    </a>
                    <a href="{{ route('services') }}" class="group/item flex items-center justify-between px-3.5 py-2.5 text-xs sm:text-[13px] font-bold text-brownie rounded-xl hover:bg-caramel/10 transition-all duration-200">
                        <span>Executive Escort Guard</span>
                        <i class="ri-arrow-right-s-line text-caramel opacity-0 -translate-x-2 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all duration-200"></i>
                    </a>
                    <a href="{{ route('services') }}" class="group/item flex items-center justify-between px-3.5 py-2.5 text-xs sm:text-[13px] font-bold text-brownie rounded-xl hover:bg-caramel/10 transition-all duration-200">
                        <span>Facility Management</span>
                        <i class="ri-arrow-right-s-line text-caramel opacity-0 -translate-x-2 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all duration-200"></i>
                    </a>
                </div>
            </div>

            <a href="#" class="relative group py-2 px-3 text-xs xl:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                Training
                <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
            </a>
            <a href="#" class="relative group py-2 px-3 text-xs xl:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                Clientele
                <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
            </a>
            <a href="#" class="relative group py-2 px-3 text-xs xl:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                Career
                <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
            </a>
            <a href="#" class="relative group py-2 px-3 text-xs xl:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                Gallery
                <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
            </a>
            <a href="#" class="relative group py-2 px-3 text-xs xl:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                Contact Us
                <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
            </a>
        </nav>

        <!-- Right: Rounded Pill CTA Button (Desktop) -->
        <div class="hidden lg:block shrink-0">
            <a href="#" class="bg-gradient-to-r from-caramel via-[#c78b57] to-coffee hover:from-coffee hover:to-brownie text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider py-2.5 px-6 rounded-full shadow-md shadow-caramel/25 hover:shadow-caramel/40 transition-all duration-300 inline-flex items-center gap-2 hover:scale-105 active:scale-95 group">
                <span>Get a Quote</span>
                <i class="ri-arrow-right-line text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <div class="flex items-center gap-2 lg:hidden">
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="w-9 h-9 rounded-full bg-caramel/15 text-brownie hover:bg-caramel hover:text-white flex items-center justify-center transition-all duration-300 active:scale-95 shadow-sm" title="Toggle Menu">
                <i class="text-xl transition-transform duration-300" :class="mobileMenuOpen ? 'ri-close-line rotate-90' : 'ri-menu-line'"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="mobileMenuOpen" x-cloak 
         x-transition:enter="transition ease-out duration-300 transform" 
         x-transition:enter-start="opacity-0 -translate-y-4 scale-95" 
         x-transition:enter-end="opacity-100 translate-y-0 scale-100" 
         x-transition:leave="transition ease-in duration-200 transform" 
         x-transition:leave-start="opacity-100 translate-y-0 scale-100" 
         x-transition:leave-end="opacity-0 -translate-y-4 scale-95" 
         class="lg:hidden max-w-7xl mx-auto mt-2 w-full bg-white/95 backdrop-blur-lg text-brownie rounded-3xl shadow-2xl border border-cream/70 flex flex-col py-4 px-6 gap-2 z-40">
        <a href="{{ route('home2') }}" class="py-2.5 px-3.5 rounded-xl bg-caramel/20 text-brownie font-extrabold text-xs sm:text-sm uppercase tracking-wide flex items-center justify-between">
            <span>Home</span>
            <i class="ri-home-5-fill text-caramel"></i>
        </a>

        <!-- Mobile Dropdown Services -->
        <div x-data="{ mobileServicesOpen: false }" class="flex flex-col">
            <button @click="mobileServicesOpen = !mobileServicesOpen" class="w-full flex justify-between items-center py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs sm:text-sm uppercase tracking-wide transition-all">
                <span>Services</span>
                <i class="ri-arrow-down-s-line text-base transition-transform duration-300" :class="mobileServicesOpen ? 'rotate-180 text-caramel' : ''"></i>
            </button>
            <div x-show="mobileServicesOpen" x-cloak class="flex flex-col pl-4 mt-1 gap-1 border-l-2 border-caramel/40 py-2">
                <a href="{{ route('services') }}" class="py-1.5 px-3 text-xs font-semibold text-brownie/90 hover:text-brownie hover:bg-caramel/10 rounded-lg transition-all">Security Guard Services</a>
                <a href="{{ route('services') }}" class="py-1.5 px-3 text-xs font-semibold text-brownie/90 hover:text-brownie hover:bg-caramel/10 rounded-lg transition-all">Corporate Security</a>
                <a href="{{ route('services') }}" class="py-1.5 px-3 text-xs font-semibold text-brownie/90 hover:text-brownie hover:bg-caramel/10 rounded-lg transition-all">CCTV & Surveillance</a>
                <a href="{{ route('services') }}" class="py-1.5 px-3 text-xs font-semibold text-brownie/90 hover:text-brownie hover:bg-caramel/10 rounded-lg transition-all">Executive Escort Guard</a>
                <a href="{{ route('services') }}" class="py-1.5 px-3 text-xs font-semibold text-brownie/90 hover:text-brownie hover:bg-caramel/10 rounded-lg transition-all">Facility Management</a>
            </div>
        </div>

        <a href="#" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs sm:text-sm uppercase tracking-wide hover:translate-x-1 transition-all">Training</a>
        <a href="#" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs sm:text-sm uppercase tracking-wide hover:translate-x-1 transition-all">Clientele</a>
        <a href="#" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs sm:text-sm uppercase tracking-wide hover:translate-x-1 transition-all">Career</a>
        <a href="#" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs sm:text-sm uppercase tracking-wide hover:translate-x-1 transition-all">Gallery</a>
        <a href="#" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs sm:text-sm uppercase tracking-wide hover:translate-x-1 transition-all">Contact Us</a>

        <div class="mt-3 pt-3 border-t border-cream">
            <a href="#" class="w-full text-center bg-gradient-to-r from-caramel via-[#c78b57] to-coffee hover:from-coffee hover:to-brownie text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider py-3 rounded-full shadow-md transition-all active:scale-95 block">
                Get a Quote
            </a>
        </div>
    </div>
</header>
