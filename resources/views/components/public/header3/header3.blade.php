<header 
    x-data="{ 
        scrolled: false, 
        mobileMenuOpen: false, 
        servicesOpen: false 
    }" 
    @scroll.window="scrolled = (window.pageYOffset > 20)" 
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 w-full select-none"
    :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md py-2.5 sm:py-3 border-b border-cream/50' : 'bg-transparent py-3.5 sm:py-5'">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 flex items-center justify-between gap-2 sm:gap-4">
        <!-- Left Side: Logo (White when top over hero, Dark when scrolled) -->
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 sm:gap-3 shrink-0 group">
            <!-- Shield Logo Icon Badge -->
            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl flex items-center justify-center font-bold transition-all duration-500 shadow-sm"
                 :class="scrolled ? 'bg-[#C08552] text-white border border-[#C08552]/30' : 'bg-white/20 backdrop-blur-md text-white border border-white/40'">
                <i class="ri-shield-fill text-base sm:text-xl"></i>
            </div>

            <!-- Logo Text -->
            <div class="flex flex-col">
                <span class="font-black text-sm sm:text-lg tracking-tight uppercase transition-colors duration-500"
                      :class="scrolled ? 'text-brownie' : 'text-white drop-shadow-sm'">
                    NDS <span :class="scrolled ? 'text-[#C08552]' : 'text-caramel font-extrabold'">SECURITY</span>
                </span>
                <span class="text-[8px] sm:text-[9px] font-extrabold tracking-widest uppercase transition-colors duration-500"
                      :class="scrolled ? 'text-brownie/60' : 'text-white/85'">
                    SERVICES NOIDA
                </span>
            </div>
        </a>

        <!-- Right Side: Navigation Links (Adjusted & Fits All Screen Widths) -->
        <nav class="hidden lg:flex items-center gap-1 xl:gap-1.5">
            <a href="{{ route('home') }}" 
               class="py-1.5 px-2.5 text-[11px] xl:text-xs font-bold tracking-wider uppercase transition-all duration-300 rounded-full shrink-0"
               :class="scrolled ? 'text-brownie hover:bg-caramel/10 hover:text-caramel' : 'text-white hover:bg-white/20 text-white drop-shadow-xs'">
                Home
            </a>

            <a href="{{ route('home2') }}" 
               class="py-1.5 px-2.5 text-[11px] xl:text-xs font-bold tracking-wider uppercase transition-all duration-300 rounded-full shrink-0"
               :class="scrolled ? 'text-brownie/90 hover:bg-caramel/10 hover:text-caramel' : 'text-white/90 hover:bg-white/20 hover:text-white drop-shadow-xs'">
                Home 2
            </a>

            <a href="{{ route('about') }}" 
               class="py-1.5 px-2.5 text-[11px] xl:text-xs font-bold tracking-wider uppercase transition-all duration-300 rounded-full shrink-0"
               :class="scrolled ? 'text-brownie/90 hover:bg-caramel/10 hover:text-caramel' : 'text-white/90 hover:bg-white/20 hover:text-white drop-shadow-xs'">
                About Us
            </a>

            <!-- Services Dropdown -->
            <div class="relative shrink-0" @click.away="servicesOpen = false" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                <button @click="servicesOpen = !servicesOpen" 
                        class="py-1.5 px-2.5 text-[11px] xl:text-xs font-bold tracking-wider uppercase transition-all duration-300 rounded-full flex items-center gap-1 shrink-0"
                        :class="scrolled ? 'text-brownie/90 hover:bg-caramel/10 hover:text-caramel' : 'text-white/90 hover:bg-white/20 hover:text-white drop-shadow-xs'">
                    <span>Services</span>
                    <i class="ri-arrow-down-s-line text-sm transition-transform duration-300" :class="servicesOpen ? 'rotate-180' : ''"></i>
                </button>

                <!-- Dropdown Menu Card -->
                <div x-show="servicesOpen" x-cloak 
                     x-transition:enter="transition ease-out duration-250 transform" 
                     x-transition:enter-start="opacity-0 -translate-y-2 scale-95" 
                     x-transition:enter-end="opacity-100 translate-y-0 scale-100" 
                     x-transition:leave="transition ease-in duration-150 transform" 
                     x-transition:leave-start="opacity-100 translate-y-0 scale-100" 
                     x-transition:leave-end="opacity-0 -translate-y-2 scale-95" 
                     class="absolute left-0 mt-2 w-60 bg-white text-brownie shadow-2xl rounded-2xl p-2 ring-1 ring-caramel/20 z-50">
                    <a href="{{ route('services') }}" class="group/item flex items-center justify-between px-3.5 py-2 text-xs font-bold text-brownie rounded-xl hover:bg-caramel/10 transition-all duration-200">
                        <span>All Security Services</span>
                        <i class="ri-arrow-right-s-line text-caramel opacity-0 group-hover/item:opacity-100 transition-opacity"></i>
                    </a>
                </div>
            </div>

            <a href="{{ route('clientele') }}" 
               class="py-1.5 px-2.5 text-[11px] xl:text-xs font-bold tracking-wider uppercase transition-all duration-300 rounded-full shrink-0"
               :class="scrolled ? 'text-brownie/90 hover:bg-caramel/10 hover:text-caramel' : 'text-white/90 hover:bg-white/20 hover:text-white drop-shadow-xs'">
                Clientele
            </a>
            
            <a href="{{ route('gallery') }}" 
               class="py-1.5 px-2.5 text-[11px] xl:text-xs font-bold tracking-wider uppercase transition-all duration-300 rounded-full shrink-0"
               :class="scrolled ? 'text-brownie/90 hover:bg-caramel/10 hover:text-caramel' : 'text-white/90 hover:bg-white/20 hover:text-white drop-shadow-xs'">
                Gallery
            </a>

            <a href="{{ route('training') }}" 
               class="py-1.5 px-2.5 text-[11px] xl:text-xs font-bold tracking-wider uppercase transition-all duration-300 rounded-full shrink-0"
               :class="scrolled ? 'text-brownie/90 hover:bg-caramel/10 hover:text-caramel' : 'text-white/90 hover:bg-white/20 hover:text-white drop-shadow-xs'">
                Training
            </a>

            <a href="{{ route('career') }}" 
               class="py-1.5 px-2.5 text-[11px] xl:text-xs font-bold tracking-wider uppercase transition-all duration-300 rounded-full shrink-0"
               :class="scrolled ? 'text-brownie/90 hover:bg-caramel/10 hover:text-caramel' : 'text-white/90 hover:bg-white/20 hover:text-white drop-shadow-xs'">
                Career
            </a>

            <a href="{{ route('contact') }}" 
               class="py-1.5 px-2.5 text-[11px] xl:text-xs font-bold tracking-wider uppercase transition-all duration-300 rounded-full shrink-0"
               :class="scrolled ? 'text-brownie/90 hover:bg-caramel/10 hover:text-caramel' : 'text-white/90 hover:bg-white/20 hover:text-white drop-shadow-xs'">
                Contact Us
            </a>
        </nav>

        <!-- Right Side: CTA Button (Desktop) -->
        <div class="hidden lg:flex items-center gap-3 shrink-0">
            <a href="{{ route('contact') }}" 
               class="bg-gradient-to-r from-caramel via-[#c78b57] to-coffee hover:from-coffee hover:to-brownie text-white font-extrabold text-[11px] xl:text-xs uppercase tracking-wider py-2 px-4.5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 inline-flex items-center gap-1.5 hover:scale-105 active:scale-95 group shrink-0">
                <span>Get a Quote</span>
                <i class="ri-arrow-right-line text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
        </div>

        <!-- Mobile Menu Toggle Button (Phone View) -->
        <div class="flex items-center gap-2 lg:hidden">
            <button @click="mobileMenuOpen = !mobileMenuOpen" 
                    class="w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center transition-all duration-300 active:scale-95 shadow-sm"
                    :class="scrolled ? 'bg-caramel/15 text-brownie hover:bg-caramel hover:text-white' : 'bg-white/20 text-white hover:bg-white/30 backdrop-blur-md'" 
                    title="Toggle Menu">
                <i class="text-lg sm:text-xl transition-transform duration-300" :class="mobileMenuOpen ? 'ri-close-line rotate-90' : 'ri-menu-line'"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileMenuOpen" x-cloak 
         x-transition:enter="transition ease-out duration-300 transform" 
         x-transition:enter-start="opacity-0 -translate-y-4 scale-95" 
         x-transition:enter-end="opacity-100 translate-y-0 scale-100" 
         x-transition:leave="transition ease-in duration-200 transform" 
         x-transition:leave-start="opacity-100 translate-y-0 scale-100" 
         x-transition:leave-end="opacity-0 -translate-y-4 scale-95" 
         class="lg:hidden max-w-7xl mx-auto mt-2 sm:mt-3 w-full bg-white/95 backdrop-blur-lg text-brownie rounded-3xl shadow-2xl border border-cream/70 flex flex-col py-4 px-5 sm:px-6 gap-1.5 z-40">
        <a href="{{ route('home') }}" class="py-2.5 px-3.5 rounded-xl bg-caramel/20 text-brownie font-extrabold text-xs uppercase tracking-wide flex items-center justify-between">
            <span>Home</span>
            <i class="ri-home-5-fill text-caramel"></i>
        </a>
        <a href="{{ route('home2') }}" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">Home 2</a>
        <a href="{{ route('about') }}" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">About Us</a>
        <a href="{{ route('services') }}" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">Services</a>
        <a href="{{ route('clientele') }}" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">Clientele</a>
        <a href="{{ route('gallery') }}" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">Gallery</a>
        <a href="{{ route('training') }}" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">Training</a>
        <a href="{{ route('career') }}" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">Career</a>
        <a href="{{ route('contact') }}" class="py-2.5 px-3.5 rounded-xl hover:bg-caramel/10 text-brownie font-bold text-xs uppercase tracking-wide">Contact Us</a>

        <div class="mt-2 pt-2 border-t border-cream">
            <a href="{{ route('contact') }}" class="w-full text-center bg-gradient-to-r from-caramel via-[#c78b57] to-coffee text-white font-extrabold text-xs uppercase tracking-wider py-2.5 rounded-full shadow-md block">
                Get a Quote
            </a>
        </div>
    </div>
</header>
