<div class="w-full bg-white flex flex-col font-sans" 
     x-data="{ 
         filter: 'all', 
         modalOpen: false, 
         activeImg: '', 
         activeTitle: '',
         activeDesc: '',
         openLightbox(img, title, desc) {
             this.activeImg = img;
             this.activeTitle = title;
             this.activeDesc = desc;
             this.modalOpen = true;
         }
     }">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">Gallery</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                Operations <span class="text-caramel underline decoration-caramel/40 underline-offset-8">Gallery</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                A visual showcase of NDS Security operations: physical training drills, command center technology, corporate deployments, and VIP escorts.
            </p>
        </div>
    </section>

    <!-- Gallery Main Section -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            
            <!-- Category Filter Bar (UX friendly) -->
            <div class="flex flex-wrap justify-center items-center gap-3">
                <button @click="filter = 'all'" 
                        :class="filter === 'all' ? 'bg-caramel text-white shadow-md' : 'bg-cream/40 text-coffee hover:bg-caramel/15'"
                        class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all duration-300">
                    Show All
                </button>
                <button @click="filter = 'drills'" 
                        :class="filter === 'drills' ? 'bg-caramel text-white shadow-md' : 'bg-cream/40 text-coffee hover:bg-caramel/15'"
                        class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all duration-300">
                    Guard Drills
                </button>
                <button @click="filter = 'tech'" 
                        :class="filter === 'tech' ? 'bg-caramel text-white shadow-md' : 'bg-cream/40 text-coffee hover:bg-caramel/15'"
                        class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all duration-300">
                    Command & Tech
                </button>
                <button @click="filter = 'corp'" 
                        :class="filter === 'corp' ? 'bg-caramel text-white shadow-md' : 'bg-cream/40 text-coffee hover:bg-caramel/15'"
                        class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all duration-300">
                    Corporate Sites
                </button>
                <button @click="filter = 'vip'" 
                        :class="filter === 'vip' ? 'bg-caramel text-white shadow-md' : 'bg-cream/40 text-coffee hover:bg-caramel/15'"
                        class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all duration-300">
                    VIP Protection
                </button>
            </div>

            <!-- Photos Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                
                <!-- Image 1 -->
                <div x-show="filter === 'all' || filter === 'tech'" x-cloak
                     @click="openLightbox('{{ asset('command_center.png') }}', 'NDS Central Command Center', 'Our state-of-the-art Noida head office command center operating 24/7 with redundant networks.')"
                     class="group relative overflow-hidden rounded-[24px] border border-cream shadow-sm hover:shadow-md cursor-pointer aspect-video sm:aspect-square transition-all duration-300">
                    <img src="{{ asset('command_center.png') }}" alt="Command Center" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/90 via-brownie/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <span class="text-[9px] font-black text-caramel uppercase tracking-widest mb-1">Command & Tech</span>
                        <h4 class="text-xs sm:text-sm font-black text-white uppercase">Central Command Center</h4>
                    </div>
                </div>

                <!-- Image 2 -->
                <div x-show="filter === 'all' || filter === 'drills'" x-cloak
                     @click="openLightbox('https://images.unsplash.com/photo-1508873696983-2df515122519?auto=format&fit=crop&w=800&q=80', 'Tactical Fire safety Drills', 'Guards undergoing fire hydrant and high-pressure chemical extinguisher testing training.')"
                     class="group relative overflow-hidden rounded-[24px] border border-cream shadow-sm hover:shadow-md cursor-pointer aspect-video sm:aspect-square transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1508873696983-2df515122519?auto=format&fit=crop&w=800&q=80" alt="Fire Safety" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/90 via-brownie/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <span class="text-[9px] font-black text-caramel uppercase tracking-widest mb-1">Guard Drills</span>
                        <h4 class="text-xs sm:text-sm font-black text-white uppercase">Fire Safety Training</h4>
                    </div>
                </div>

                <!-- Image 3 -->
                <div x-show="filter === 'all' || filter === 'corp'" x-cloak
                     @click="openLightbox('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80', 'Commercial Lobby Guarding', 'NDS officers managing main lobby access verification logs at Gaur City, Noida.')"
                     class="group relative overflow-hidden rounded-[24px] border border-cream shadow-sm hover:shadow-md cursor-pointer aspect-video sm:aspect-square transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Lobby Security" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/90 via-brownie/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <span class="text-[9px] font-black text-caramel uppercase tracking-widest mb-1">Corporate Sites</span>
                        <h4 class="text-xs sm:text-sm font-black text-white uppercase">Commercial Lobby Guarding</h4>
                    </div>
                </div>

                <!-- Image 4 -->
                <div x-show="filter === 'all' || filter === 'vip'" x-cloak
                     @click="openLightbox('https://images.unsplash.com/photo-1521791136368-1a8682707636?auto=format&fit=crop&w=800&q=80', 'Executive VIP Protection Escort', 'Our certified Personal Security Officers (PSO) ensuring safety during high-profile corporate board operations.')"
                     class="group relative overflow-hidden rounded-[24px] border border-cream shadow-sm hover:shadow-md cursor-pointer aspect-video sm:aspect-square transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1521791136368-1a8682707636?auto=format&fit=crop&w=800&q=80" alt="VIP Escort" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/90 via-brownie/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <span class="text-[9px] font-black text-caramel uppercase tracking-widest mb-1">VIP Protection</span>
                        <h4 class="text-xs sm:text-sm font-black text-white uppercase">Executive VIP Protection</h4>
                    </div>
                </div>

                <!-- Image 5 -->
                <div x-show="filter === 'all' || filter === 'drills'" x-cloak
                     @click="openLightbox('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80', 'Classroom Threat & Security Theory', 'Our classroom training room sessions for theoretical security codes, emergency logs, and first-aid lessons.')"
                     class="group relative overflow-hidden rounded-[24px] border border-cream shadow-sm hover:shadow-md cursor-pointer aspect-video sm:aspect-square transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" alt="Classroom Training" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/90 via-brownie/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <span class="text-[9px] font-black text-caramel uppercase tracking-widest mb-1">Guard Drills</span>
                        <h4 class="text-xs sm:text-sm font-black text-white uppercase">Classroom Theory Drills</h4>
                    </div>
                </div>

                <!-- Image 6 -->
                <div x-show="filter === 'all' || filter === 'tech'" x-cloak
                     @click="openLightbox('https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=800&q=80', 'IP Dome Surveillance Testing', 'Installing and testing motorized optical zoom 4K IP cameras for premium boundary control.')"
                     class="group relative overflow-hidden rounded-[24px] border border-cream shadow-sm hover:shadow-md cursor-pointer aspect-video sm:aspect-square transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=800&q=80" alt="CCTV installation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/90 via-brownie/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <span class="text-[9px] font-black text-caramel uppercase tracking-widest mb-1">Command & Tech</span>
                        <h4 class="text-xs sm:text-sm font-black text-white uppercase">Surveillance Installation</h4>
                    </div>
                </div>

                <!-- Image 7 -->
                <div x-show="filter === 'all' || filter === 'corp'" x-cloak
                     @click="openLightbox('https://images.unsplash.com/photo-1614064641938-3bbee52942c7?auto=format&fit=crop&w=800&q=80', 'Biometric Turnstiles Integration', 'Secure entrance turnstiles configured with RFID readers for Noida office parks.')"
                     class="group relative overflow-hidden rounded-[24px] border border-cream shadow-sm hover:shadow-md cursor-pointer aspect-video sm:aspect-square transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7?auto=format&fit=crop&w=800&q=80" alt="Access Gates" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/90 via-brownie/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <span class="text-[9px] font-black text-caramel uppercase tracking-widest mb-1">Corporate Sites</span>
                        <h4 class="text-xs sm:text-sm font-black text-white uppercase">Biometric Access Gates</h4>
                    </div>
                </div>

                <!-- Image 8 -->
                <div x-show="filter === 'all' || filter === 'vip'" x-cloak
                     @click="openLightbox('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80', 'Secured Diplomatic Fleet Escort', 'Premium black SUV convoy transit management for delegates and executive figures in Noida.')"
                     class="group relative overflow-hidden rounded-[24px] border border-cream shadow-sm hover:shadow-md cursor-pointer aspect-video sm:aspect-square transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80" alt="Transit Escort" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/90 via-brownie/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <span class="text-[9px] font-black text-caramel uppercase tracking-widest mb-1">VIP Protection</span>
                        <h4 class="text-xs sm:text-sm font-black text-white uppercase">Secure Vehicle Escort</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Overlay Lightbox Modal (Premium modal popup) -->
    <div x-show="modalOpen" x-cloak 
         class="fixed inset-0 z-50 flex items-center justify-center p-6 bg-black/90 backdrop-blur-sm transition-all duration-300">
        
        <!-- Close trigger overlay -->
        <div class="absolute inset-0 cursor-zoom-out" @click="modalOpen = false"></div>
        
        <!-- Close Button -->
        <button @click="modalOpen = false" class="absolute top-6 right-6 text-white hover:text-caramel text-3xl focus:outline-none z-50">
            <i class="ri-close-line"></i>
        </button>

        <!-- Modal content block -->
        <div x-show="modalOpen" 
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="relative max-w-4xl w-full bg-[#1b120a] rounded-3xl border border-caramel/25 overflow-hidden flex flex-col md:flex-row z-40 shadow-2xl">
            
            <!-- Image Panel -->
            <div class="w-full md:w-3/5 bg-black flex items-center justify-center aspect-video md:aspect-auto md:min-h-[400px]">
                <img :src="activeImg" :alt="activeTitle" class="w-full h-full object-cover" />
            </div>

            <!-- Content Details Panel -->
            <div class="w-full md:w-2/5 p-8 flex flex-col justify-between gap-6 text-left">
                <div class="flex flex-col gap-3">
                    <span class="text-[10px] font-black text-caramel uppercase tracking-widest">NDS Operations Log</span>
                    <h3 class="text-lg sm:text-xl font-black text-white uppercase tracking-wide leading-tight" x-text="activeTitle"></h3>
                    <div class="w-10 h-0.5 bg-caramel"></div>
                    <p class="text-xs sm:text-sm text-cream/70 leading-relaxed font-semibold mt-2" x-text="activeDesc"></p>
                </div>

                <div class="flex items-center gap-2 pt-4 border-t border-caramel/20">
                    <img src="{{ asset('logo.png') }}" class="h-6 w-auto object-contain brightness-0 invert" />
                    <span class="text-[10px] font-bold text-cream/40 uppercase tracking-widest">Institutional Trust</span>
                </div>
            </div>

        </div>
    </div>

</div>