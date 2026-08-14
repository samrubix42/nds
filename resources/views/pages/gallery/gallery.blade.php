<div class="w-full bg-white flex flex-col font-sans select-none" 
     x-data="{ 
         modalOpen: false, 
         activeImg: '', 
         activeTitle: '',
         activeCategory: '',
         openLightbox(img, title, category) {
             this.activeImg = img;
             this.activeTitle = title;
             this.activeCategory = category;
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
                A visual showcase of NDS Security operations: physical training drills, command center technology, corporate site deployments, and VIP escorts.
            </p>
        </div>
    </section>

    <!-- Gallery Main Section -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            
            <!-- Category Filter Bar -->
            <div class="flex flex-wrap justify-center items-center gap-3">
                <button wire:click="selectCategory(null)" 
                        type="button"
                        class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all duration-300 cursor-pointer {{ is_null($selectedCategory) ? 'bg-caramel text-white shadow-md' : 'bg-cream/40 text-coffee hover:bg-caramel/15' }}">
                    Show All
                </button>
                @foreach($categories as $category)
                    <button wire:click="selectCategory({{ $category->id }})" 
                            type="button"
                            class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all duration-300 cursor-pointer {{ $selectedCategory === $category->id ? 'bg-caramel text-white shadow-md' : 'bg-cream/40 text-coffee hover:bg-caramel/15' }}">
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>

            <!-- Dynamic Photos Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @forelse($galleries as $item)
                    <div @click="openLightbox('{{ $item->image_url }}', '{{ addslashes($item->title) }}', '{{ addslashes($item->category ? $item->category->name : 'NDS Operations') }}')"
                         class="group relative overflow-hidden rounded-[24px] border border-cream shadow-sm hover:shadow-md cursor-pointer aspect-square transition-all duration-300">
                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-brownie/90 via-brownie/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                            <span class="text-[9px] font-black text-caramel uppercase tracking-widest mb-1">{{ $item->category ? $item->category->name : 'NDS Operations' }}</span>
                            <h4 class="text-xs sm:text-sm font-black text-white uppercase">{{ $item->title }}</h4>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16 text-coffee/60 font-semibold">
                        No photos found for this category.
                    </div>
                @endforelse
            </div>

            <!-- Pagination Bar -->
            <div class="mt-6 flex justify-center">
                {{ $galleries->links() }}
            </div>

        </div>
    </section>

    <!-- Overlay Lightbox Modal -->
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
                    <span class="text-[10px] font-black text-caramel uppercase tracking-widest" x-text="activeCategory"></span>
                    <h3 class="text-lg sm:text-xl font-black text-white uppercase tracking-wide leading-tight" x-text="activeTitle"></h3>
                    <div class="w-10 h-0.5 bg-caramel"></div>
                    <p class="text-xs sm:text-sm text-cream/70 leading-relaxed font-semibold mt-2">
                        Official site operational photo from NDS Security Services deployments across corporate hubs, industrial sites, and command centers.
                    </p>
                </div>

                <div class="flex items-center gap-2 pt-4 border-t border-caramel/20">
                    <img src="{{ asset('logo.png') }}" class="h-6 w-auto object-contain brightness-0 invert" />
                    <span class="text-[10px] font-bold text-cream/40 uppercase tracking-widest">Institutional Trust</span>
                </div>
            </div>

        </div>
    </div>

</div>