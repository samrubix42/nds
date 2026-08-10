<header class="relative w-full flex flex-col z-50 bg-white/95 backdrop-blur-md shadow-sm" x-data="{ mobileMenuOpen: false, servicesOpen: false }">
    <!-- Top Tier: Logo & Contact Info -->
    <div class="w-full py-3.5 bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center gap-4 w-full">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center shrink-0 group">
                <img src="{{ asset('logo.png') }}" alt="NDS Security Logo" class="h-12 md:h-16 w-auto object-contain transition-transform duration-300 group-hover:scale-105" />
            </a>

            <!-- Contact Info (Desktop Only) -->
            <div class="hidden md:flex items-center gap-8 ml-auto">
                <a href="tel:+919999988888" class="flex items-center gap-3 group">
                    <div class="w-9 h-9 rounded-full bg-caramel/10 flex items-center justify-center text-caramel transition-all duration-300 group-hover:bg-caramel group-hover:text-white group-hover:rotate-12 shadow-sm">
                        <i class="ri-phone-fill text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs text-coffee/80 font-medium uppercase tracking-wider">Call 24/7 Support</p>
                        <p class="text-brownie font-bold text-xs sm:text-sm transition-colors group-hover:text-caramel">+91 99999 88888</p>
                    </div>
                </a>
                <a href="mailto:info@ndssecurity.com" class="flex items-center gap-3 group">
                    <div class="w-9 h-9 rounded-full bg-caramel/10 flex items-center justify-center text-caramel transition-all duration-300 group-hover:bg-caramel group-hover:text-white group-hover:-rotate-12 shadow-sm">
                        <i class="ri-mail-fill text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs text-coffee/80 font-medium uppercase tracking-wider">Email Us</p>
                        <p class="text-brownie font-bold text-xs sm:text-sm transition-colors group-hover:text-caramel">info@ndssecurity.com</p>
                    </div>
                </a>
                <div class="flex items-center gap-3 group">
                    <div class="w-9 h-9 rounded-full bg-caramel/10 flex items-center justify-center text-caramel transition-all duration-300 group-hover:bg-caramel group-hover:text-white group-hover:scale-110 shadow-sm">
                        <i class="ri-map-pin-fill text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs text-coffee/80 font-medium uppercase tracking-wider">Our Office</p>
                        <p class="text-brownie font-bold text-xs sm:text-sm">Noida, Uttar Pradesh</p>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Toggle & Contact Button (Mobile Only) -->
            <div class="flex items-center gap-2 md:hidden">
                <a href="tel:+919999988888" class="w-10 h-10 rounded-full bg-caramel/15 text-brownie hover:bg-caramel hover:text-white flex items-center justify-center transition-all duration-300 active:scale-95 shadow-sm" title="Call Us">
                    <i class="ri-phone-fill text-base"></i>
                </a>
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="w-10 h-10 rounded-full bg-caramel/15 text-brownie hover:bg-caramel hover:text-white flex items-center justify-center transition-all duration-300 active:scale-95 shadow-sm" title="Toggle Menu">
                    <i class="text-xl transition-transform duration-300" :class="mobileMenuOpen ? 'ri-close-line rotate-90' : 'ri-menu-line'"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Bottom Tier: Navigation Bar -->
    <div class="w-full bg-cream/80 backdrop-blur-sm text-brownie py-1">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center relative">
            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 sm:gap-1.5 py-1">
            
                <a href="#" class="relative group py-2 px-3 text-xs sm:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                    Who We Are
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </a>
                <a href="#" class="relative group py-2 px-3 text-xs sm:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                    Leadership
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </a>

                <!-- Services Dropdown -->
                <div class="relative" @click.away="servicesOpen = false" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    <button @click="servicesOpen = !servicesOpen" class="relative group py-2 px-3 text-xs sm:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie flex items-center gap-1">
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

                <a href="#" class="relative group py-2 px-3 text-xs sm:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                    Training
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </a>
                <a href="#" class="relative group py-2 px-3 text-xs sm:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                    Clientele
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </a>
                <a href="#" class="relative group py-2 px-3 text-xs sm:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                    Career
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </a>
                <a href="#" class="relative group py-2 px-3 text-xs sm:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                    Gallery
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </a>
                <a href="#" class="relative group py-2 px-3 text-xs sm:text-sm font-bold text-brownie/90 tracking-wider uppercase transition-all duration-300 rounded-full hover:bg-caramel/15 hover:text-brownie">
                    Contact Us
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-caramel rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden xl:block py-1.5">
                <a href="#" class="bg-gradient-to-r from-caramel via-[#c78b57] to-coffee hover:from-coffee hover:to-brownie text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider py-2 px-5 rounded-full shadow-md shadow-caramel/25 hover:shadow-caramel/40 transition-all duration-300 inline-flex items-center gap-1.5 hover:scale-105 active:scale-95 group">
                    <span>Get a Quote</span>
                    <i class="ri-arrow-right-up-line text-sm transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="mobileMenuOpen" x-cloak 
         x-transition:enter="transition ease-out duration-300 transform" 
         x-transition:enter-start="opacity-0 -translate-y-4" 
         x-transition:enter-end="opacity-100 translate-y-0" 
         x-transition:leave="transition ease-in duration-200 transform" 
         x-transition:leave-start="opacity-100 translate-y-0" 
         x-transition:leave-end="opacity-0 -translate-y-4" 
         class="md:hidden w-full bg-white/95 backdrop-blur-lg text-brownie shadow-xl flex flex-col py-4 px-6 gap-2 z-40">
        <a href="{{ route('home') }}" class="py-2.5 px-3.5 rounded-xl bg-caramel/20 text-brownie font-extrabold text-xs sm:text-sm uppercase tracking-wide flex items-center justify-between">
            <span>Home</span>
            <i class="ri-home-5-fill text-caramel"></i>
        </a>
        <a href="#" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs sm:text-sm uppercase tracking-wide hover:translate-x-1 transition-all">Who We Are</a>
        <a href="#" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs sm:text-sm uppercase tracking-wide hover:translate-x-1 transition-all">Leadership</a>

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
            <a href="#" class="w-full text-center bg-gradient-to-r from-caramel via-[#c78b57] to-coffee hover:from-coffee hover:to-brownie text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider py-2.5 rounded-xl shadow-md transition-all active:scale-95 block">
                Get a Quote
            </a>
        </div>
    </div>
</header>