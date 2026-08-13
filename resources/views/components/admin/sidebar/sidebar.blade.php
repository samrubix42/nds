<aside 
    class="fixed inset-y-0 left-0 z-50 w-60 bg-white text-[#5E3023] flex flex-col transition-transform duration-300 ease-in-out transform md:translate-x-0 md:static md:h-screen md:sticky md:top-0 border-r border-[#F3E9DC]/45"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    x-cloak>
    
    <!-- Sidebar Header (Minimalist Branding) -->
    <div class="h-16 flex items-center justify-between px-6 border-b border-[#F3E9DC]/35">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
            <div class="w-8 h-8 rounded-lg bg-[#C08552]/8 flex items-center justify-center text-[#C08552] border border-[#C08552]/15">
                <i class="ri-shield-fill text-base"></i>
            </div>
            <div>
                <span class="font-extrabold text-sm tracking-tight text-brownie uppercase">NDS <span class="text-[#C08552]">Security</span></span>
            </div>
        </a>

        <!-- Mobile Close Button -->
        <button 
            @click="sidebarOpen = false" 
            class="md:hidden w-7 h-7 rounded-md bg-[#FAF9F5] hover:bg-[#F3E9DC] border border-[#F3E9DC] flex items-center justify-center text-brownie transition-all duration-200"
            aria-label="Close sidebar">
            <i class="ri-close-line text-base"></i>
        </button>
    </div>

    <!-- Active User Section (Compact) -->
    <div class="px-6 py-4 border-b border-[#F3E9DC]/35 bg-[#FAF9F5]/30">
        <div class="flex items-center gap-3">
            <img 
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=100&q=80" 
                alt="Alex Carter" 
                class="w-8 h-8 rounded-full object-cover border border-[#F3E9DC]"
            />
            <div class="min-w-0">
                <p class="font-bold text-xs text-brownie truncate leading-tight">Alex Carter</p>
                <p class="text-[10px] text-brownie/50 font-medium truncate mt-0.5">Administrator</p>
            </div>
        </div>
    </div>

    <!-- Sidebar Navigation Links -->
    <div class="flex-grow overflow-y-auto px-3 py-6 space-y-6 custom-scrollbar">
        
        <!-- Navigation Group -->
        <div class="space-y-1">
            <p class="px-3 text-[9px] font-bold text-brownie/35 tracking-widest uppercase mb-2">Console</p>
            
            <!-- Dashboard Link -->
            <a 
                href="{{ route('admin.dashboard') }}" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg border-l-2 font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ request()->routeIs('admin.dashboard') ? 'border-[#C08552] bg-[#C08552]/8 text-[#C08552]' : 'border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                <i class="ri-dashboard-line text-sm {{ request()->routeIs('admin.dashboard') ? 'text-[#C08552]' : 'text-brownie/45 group-hover:text-brownie' }}"></i>
                <span>Dashboard</span>
            </a>
        </div>

        <!-- Management Group -->
        <div class="space-y-1">
            <p class="px-3 text-[9px] font-bold text-brownie/35 tracking-widest uppercase mb-2">Management</p>

            <!-- Services -->
            <a 
                href="#" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg border-l-2 border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie font-bold text-xs uppercase tracking-wider transition-all duration-200 group">
                <i class="ri-shield-flash-line text-sm text-brownie/45 group-hover:text-brownie"></i>
                <span>Services</span>
            </a>

            <!-- Clientele -->
            <a 
                href="{{ route('admin.clientele') }}" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg border-l-2 font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ request()->routeIs('admin.clientele') ? 'border-[#C08552] bg-[#C08552]/8 text-[#C08552]' : 'border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                <i class="ri-team-line text-sm {{ request()->routeIs('admin.clientele') ? 'text-[#C08552]' : 'text-brownie/45 group-hover:text-brownie' }}"></i>
                <span>Clientele</span>
            </a>

            <!-- Training -->
            <a 
                href="#" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg border-l-2 border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie font-bold text-xs uppercase tracking-wider transition-all duration-200 group">
                <i class="ri-book-open-line text-sm text-brownie/45 group-hover:text-brownie"></i>
                <span>Training</span>
            </a>

            <!-- Gallery -->
            <a 
                href="{{ route('admin.gallery') }}" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm border-l-2 font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ request()->routeIs('admin.gallery') ? 'border-[#C08552] bg-[#C08552]/8 text-[#C08552]' : 'border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                <i class="ri-image-line text-sm {{ request()->routeIs('admin.gallery') ? 'text-[#C08552]' : 'text-brownie/45 group-hover:text-brownie' }}"></i>
                <span>Gallery</span>
            </a>

            <!-- Gallery Categories -->
            <a 
                href="{{ route('admin.gallery-category') }}" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm border-l-2 font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ request()->routeIs('admin.gallery-category') ? 'border-[#C08552] bg-[#C08552]/8 text-[#C08552]' : 'border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                <i class="ri-price-tag-3-line text-sm {{ request()->routeIs('admin.gallery-category') ? 'text-[#C08552]' : 'text-brownie/45 group-hover:text-brownie' }}"></i>
                <span>Gallery Categories</span>
            </a>

            <!-- FAQ List -->
            <a 
                href="{{ route('admin.faq-list') }}" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm border-l-2 font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ request()->routeIs('admin.faq-list') ? 'border-[#C08552] bg-[#C08552]/8 text-[#C08552]' : 'border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                <i class="ri-questionnaire-line text-sm {{ request()->routeIs('admin.faq-list') ? 'text-[#C08552]' : 'text-brownie/45 group-hover:text-brownie' }}"></i>
                <span>FAQ List</span>
            </a>

            <!-- Testimonials -->
            <a 
                href="{{ route('admin.testimonial-list') }}" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm border-l-2 font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ request()->routeIs('admin.testimonial-list') ? 'border-[#C08552] bg-[#C08552]/8 text-[#C08552]' : 'border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                <i class="ri-feedback-line text-sm {{ request()->routeIs('admin.testimonial-list') ? 'text-[#C08552]' : 'text-brownie/45 group-hover:text-brownie' }}"></i>
                <span>Testimonials</span>
            </a>

            <!-- Career -->
            <a 
                href="#" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg border-l-2 border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie font-bold text-xs uppercase tracking-wider transition-all duration-200 group">
                <i class="ri-briefcase-line text-sm text-brownie/45 group-hover:text-brownie"></i>
                <span>Career Roster</span>
            </a>
        </div>

        <!-- Controls Group -->
        <div class="space-y-1">
            <p class="px-3 text-[9px] font-bold text-brownie/35 tracking-widest uppercase mb-2">Controls</p>

            <!-- Settings -->
            <a 
                href="#" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg border-l-2 border-transparent text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie font-bold text-xs uppercase tracking-wider transition-all duration-200 group">
                <i class="ri-settings-4-line text-sm text-brownie/45 group-hover:text-brownie"></i>
                <span>Settings</span>
            </a>
        </div>
    </div>

    <!-- Sidebar Footer -->
    <div class="p-3 border-t border-[#F3E9DC]/35 bg-[#FAF9F5]/20">
        <a 
            href="{{ route('home') }}" 
            class="flex items-center justify-center gap-1.5 w-full px-3 py-2 rounded-lg border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie/85 font-semibold text-xs transition-all duration-200">
            <i class="ri-arrow-left-line"></i>
            <span>Public Website</span>
        </a>
    </div>
</aside>