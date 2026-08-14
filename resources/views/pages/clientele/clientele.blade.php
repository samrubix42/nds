<div class="w-full bg-white flex flex-col font-sans">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">Clientele</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                Our <span class="text-caramel underline decoration-caramel/40 underline-offset-8">Clientele</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                Providing institutional trust and premium safety systems to Noida's premier malls, commercial centers, corporate parks, and townships.
            </p>
        </div>
    </section>

    <!-- Partners Showcase Section -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                 class="flex flex-col items-center text-center gap-3 transition-all duration-[1200ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">NDS ELITE PORTFOLIO</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Trusted by Noida's Leading Landmarks
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <!-- Client Logos Grid (Bigger Client Logos & Pure Hover Scale) -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-5 gap-8 sm:gap-12 items-center justify-items-center">
                @foreach($clients as $client)
                    <div class="flex items-center justify-center p-3 group cursor-pointer w-full h-32 sm:h-40 md:h-44">
                        <img src="{{ $client->image_url }}" alt="Client Logo" class="max-h-full max-w-full h-28 sm:h-36 md:h-40 w-auto object-contain transition-transform duration-300 ease-out transform group-hover:scale-130 select-none" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

   
</div>