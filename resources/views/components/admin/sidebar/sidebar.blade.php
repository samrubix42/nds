<aside 
    class="fixed inset-y-0 left-0 z-50 w-64 bg-white text-[#5E3023] flex flex-col transition-transform duration-300 ease-in-out transform md:translate-x-0 md:static md:h-screen md:sticky md:top-0 border-r border-[#F3E9DC]/45 select-none"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    x-cloak>
    
    <!-- Sidebar Header (Minimalist Branding) -->
    <div class="h-16 flex items-center justify-between px-6 border-b border-[#F3E9DC]/35">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
            <div class="w-8 h-8 rounded-lg bg-[#C08552]/10 flex items-center justify-center text-[#C08552] border border-[#C08552]/20">
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
                alt="NDS Admin" 
                class="w-8 h-8 rounded-full object-cover border border-[#F3E9DC]"
            />
            <div class="min-w-0">
                <p class="font-bold text-xs text-brownie truncate leading-tight">NDS Admin</p>
                <p class="text-[10px] text-brownie/50 font-medium truncate mt-0.5">Administrator</p>
            </div>
        </div>
    </div>

    <!-- Sidebar Navigation Links with Multi-Level Collapsible Menus (No border-l) -->
    <div 
        x-data="{ 
            openGroup: '{{ request()->routeIs('admin.services.*', 'admin.clientele', 'admin.gallery*', 'admin.faq-list', 'admin.testimonial-list') ? 'content' : (request()->routeIs('admin.job-posts*') ? 'jobs' : 'console') }}'
        }"
        class="flex-grow overflow-y-auto px-3 py-5 space-y-5 custom-scrollbar">
        
        <!-- Console Group -->
        <div class="space-y-1">
            <p class="px-3 text-[9px] font-bold text-brownie/35 tracking-widest uppercase mb-1.5">Console</p>
            
            <!-- Dashboard Link (No border-l) -->
            <a 
                href="{{ route('admin.dashboard') }}" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ request()->routeIs('admin.dashboard') ? 'bg-[#C08552]/10 text-[#C08552] shadow-xs' : 'text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                <i class="ri-dashboard-line text-base {{ request()->routeIs('admin.dashboard') ? 'text-[#C08552]' : 'text-brownie/45 group-hover:text-brownie' }}"></i>
                <span>Dashboard</span>
            </a>
        </div>

        <!-- Content & Media Group (Collapsible Multi-Menu) -->
        <div class="space-y-1">
            <button 
                @click="openGroup = (openGroup === 'content' ? '' : 'content')"
                class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg font-bold text-xs uppercase tracking-wider text-brownie/70 hover:bg-[#FAF9F5] hover:text-brownie transition-all duration-200">
                <span class="flex items-center gap-3">
                    <i class="ri-article-line text-base text-[#C08552]"></i>
                    <span>Content & Media</span>
                </span>
                <i class="ri-arrow-down-s-line text-sm transition-transform duration-200" :class="openGroup === 'content' ? 'rotate-180 text-[#C08552]' : 'text-brownie/40'"></i>
            </button>

            <!-- Collapsible Submenu Items (No border-l) -->
            <div x-show="openGroup === 'content'" x-collapse class="pl-4 pr-1 py-1 space-y-1">
                <!-- Home Sliders -->
                <a 
                    href="{{ route('admin.homeslider') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.homeslider') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-slideshow-line text-sm"></i>
                    <span>Home Sliders</span>
                </a>

                <!-- Services -->
                <a 
                    href="{{ route('admin.services.index') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.services.*') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-shield-star-line text-sm"></i>
                    <span>Services</span>
                </a>

                <!-- Clientele -->
                <a 
                    href="{{ route('admin.clientele') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.clientele') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-team-line text-sm"></i>
                    <span>Clientele</span>
                </a>

                <!-- Gallery -->
                <a 
                    href="{{ route('admin.gallery') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.gallery') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-image-line text-sm"></i>
                    <span>Gallery</span>
                </a>

                <!-- Gallery Categories -->
                <a 
                    href="{{ route('admin.gallery-category') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.gallery-category') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-price-tag-3-line text-sm"></i>
                    <span>Gallery Categories</span>
                </a>

                <!-- FAQ List -->
                <a 
                    href="{{ route('admin.faq-list') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.faq-list') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-questionnaire-line text-sm"></i>
                    <span>FAQ List</span>
                </a>

                <!-- Testimonials -->
                <a 
                    href="{{ route('admin.testimonial-list') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.testimonial-list') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-feedback-line text-sm"></i>
                    <span>Testimonials</span>
                </a>

                <!-- Contact Inquiries -->
                <a 
                    href="{{ route('admin.contact') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.contact') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-mail-open-line text-sm"></i>
                    <span>Contact Inquiries</span>
                </a>
            </div>
        </div>

        <!-- Recruitment & Careers Group (Collapsible Multi-Menu) -->
        <div class="space-y-1">
            <button 
                @click="openGroup = (openGroup === 'jobs' ? '' : 'jobs')"
                class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg font-bold text-xs uppercase tracking-wider text-brownie/70 hover:bg-[#FAF9F5] hover:text-brownie transition-all duration-200">
                <span class="flex items-center gap-3">
                    <i class="ri-briefcase-line text-base text-[#C08552]"></i>
                    <span>Careers & Jobs</span>
                </span>
                <i class="ri-arrow-down-s-line text-sm transition-transform duration-200" :class="openGroup === 'jobs' ? 'rotate-180 text-[#C08552]' : 'text-brownie/40'"></i>
            </button>

            <!-- Collapsible Submenu Items (No border-l) -->
            <div x-show="openGroup === 'jobs'" x-collapse class="pl-4 pr-1 py-1 space-y-1">
                <!-- Job Posts -->
                <a 
                    href="{{ route('admin.job-posts') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.job-posts') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-file-list-3-line text-sm"></i>
                    <span>Job Posts</span>
                </a>

                <!-- Career Applications -->
                <a 
                    href="{{ route('admin.job-applications') }}" 
                    class="flex items-center gap-2.5 px-3 py-2 rounded-md font-semibold text-xs transition-all duration-200 {{ request()->routeIs('admin.job-applications') ? 'bg-[#C08552] text-white shadow-xs' : 'text-brownie/75 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                    <i class="ri-user-shared-line text-sm"></i>
                    <span>Applications & Resumes</span>
                </a>
            </div>
        </div>

        <!-- Controls Group -->
        <div class="space-y-1">
            <p class="px-3 text-[9px] font-bold text-brownie/35 tracking-widest uppercase mb-1.5">Controls</p>

            <!-- Settings -->
            <a 
                href="{{ route('admin.settings') }}" 
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ request()->routeIs('admin.settings') ? 'bg-[#C08552]/10 text-[#C08552] shadow-xs' : 'text-brownie/65 hover:bg-[#FAF9F5] hover:text-brownie' }}">
                <i class="ri-settings-4-line text-base {{ request()->routeIs('admin.settings') ? 'text-[#C08552]' : 'text-brownie/45 group-hover:text-brownie' }}"></i>
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