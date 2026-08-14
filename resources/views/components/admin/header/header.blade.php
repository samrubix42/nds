<header class="h-16 bg-white/90 backdrop-blur-md border-b border-[#F3E9DC]/35 sticky top-0 z-40 px-6 flex items-center justify-between shadow-xs">
    
    <!-- Left Section: Mobile Toggle & Breadcrumbs -->
    <div class="flex items-center gap-4">
        <!-- Mobile Toggle Button -->
        <button 
            @click="sidebarOpen = true" 
            class="md:hidden w-8 h-8 rounded-lg bg-[#FAF9F5] hover:bg-[#F3E9DC] border border-[#F3E9DC] flex items-center justify-center text-brownie transition-all duration-200"
            aria-label="Open sidebar">
            <i class="ri-menu-2-line text-sm"></i>
        </button>

        <!-- Breadcrumbs -->
        <div class="hidden sm:flex items-center gap-2 text-[10px] font-bold text-brownie/50 tracking-wider uppercase">
            <span class="hover:text-brownie transition-colors duration-150">Admin</span>
            <i class="ri-arrow-right-s-line text-xs text-[#C08552]"></i>
            <span class="text-brownie">Dashboard</span>
        </div>
    </div>

    <!-- Middle Section: Search Bar -->
    <div class="hidden md:flex items-center max-w-xs w-full relative mx-4">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <i class="ri-search-2-line text-brownie/35 text-sm"></i>
        </span>
        <input 
            type="search" 
            placeholder="Search console..." 
            class="w-full bg-[#FAF9F5]/50 text-xs text-brownie placeholder-brownie/35 pl-9 pr-3 py-1.5 rounded-lg border border-[#F3E9DC] focus:border-[#C08552] focus:ring-0 focus:outline-none transition-all duration-150"
        />
    </div>

    <!-- Right Section: Actions -->
    <div class="flex items-center gap-3">
        
        <!-- Notifications Bell -->
        <div class="relative" x-data="{ notifyOpen: false }">
            <button 
                @click="notifyOpen = !notifyOpen"
                class="w-8 h-8 rounded-lg bg-[#FAF9F5] hover:bg-[#F3E9DC] border border-[#F3E9DC] flex items-center justify-center text-brownie transition-all duration-150 relative group"
                aria-label="Notifications">
                <i class="ri-notification-3-line text-sm group-hover:scale-102 transition-transform"></i>
                
                <!-- Simple small indicator -->
                <span class="absolute top-1.5 right-2 w-1.5 h-1.5 bg-[#C08552] rounded-full"></span>
            </button>

            <!-- Mock Notifications Dropdown -->
            <div 
                x-show="notifyOpen" 
                @click.outside="notifyOpen = false"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 scale-98 translate-y-0.5"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-98 translate-y-0.5"
                class="absolute right-0 mt-2 w-72 bg-white rounded-xl shadow-lg border border-[#F3E9DC]/60 py-3 z-50 overflow-hidden"
                x-cloak>
                <div class="px-4 pb-2 border-b border-[#F3E9DC]/35 flex justify-between items-center">
                    <span class="font-extrabold text-xs text-brownie">Notifications</span>
                    <span class="text-[9px] bg-[#C08552]/10 text-[#C08552] px-2 py-0.5 rounded-full font-bold">2 New</span>
                </div>
                <div class="divide-y divide-[#F3E9DC]/25">
                    <a href="#" class="block px-4 py-2.5 hover:bg-[#FAF9F5]/50 transition-colors">
                        <p class="text-[11px] font-bold text-brownie">System Status Check</p>
                        <p class="text-[10px] text-brownie/60 mt-0.5">All servers and firewalls are running smoothly.</p>
                        <span class="text-[8px] text-brownie/35 block mt-1">5 mins ago</span>
                    </a>
                    <a href="#" class="block px-4 py-2.5 hover:bg-[#FAF9F5]/50 transition-colors">
                        <p class="text-[11px] font-bold text-brownie">New Security Report</p>
                        <p class="text-[10px] text-brownie/60 mt-0.5">Weekly backup was successfully created.</p>
                        <span class="text-[8px] text-brownie/35 block mt-1">2 hours ago</span>
                    </a>
                </div>
                <div class="px-4 pt-2 border-t border-[#F3E9DC]/35 text-center">
                    <a href="#" class="text-[10px] font-bold text-[#C08552] hover:text-[#895737] transition-colors">View all notifications</a>
                </div>
            </div>
        </div>

        <!-- Vertical Divider -->
        <span class="h-5 w-px bg-[#F3E9DC] hidden xs:block"></span>

        <!-- User Profile Dropdown -->
        <div class="relative" x-data="{ userMenuOpen: false }">
            <button 
                @click="userMenuOpen = !userMenuOpen"
                class="flex items-center gap-2 p-1 rounded-lg hover:bg-[#FAF9F5] border border-transparent hover:border-[#F3E9DC]/60 transition-all duration-150 group"
                aria-label="User profile">
                <img 
                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=100&q=80" 
                    alt="NDS Admin" 
                    class="w-6 h-6 rounded-md object-cover"
                />
                <span class="hidden sm:inline font-bold text-xs text-brownie group-hover:text-[#895737] transition-colors">NDS Admin</span>
                <i class="ri-arrow-down-s-line text-xs text-brownie/45 group-hover:text-brownie"></i>
            </button>

            <!-- Dropdown Options -->
            <div 
                x-show="userMenuOpen" 
                @click.outside="userMenuOpen = false"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 scale-98 translate-y-0.5"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-98 translate-y-0.5"
                class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-[#F3E9DC]/60 py-1.5 z-50 overflow-hidden"
                x-cloak>
                
                <a href="#" class="flex items-center gap-3 px-4 py-2 text-xs text-brownie hover:bg-[#FAF9F5] transition-colors font-semibold">
                    <i class="ri-user-line text-sm text-[#C08552]"></i>
                    <span>My Profile</span>
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-2 text-xs text-brownie hover:bg-[#FAF9F5] transition-colors font-semibold">
                    <i class="ri-settings-3-line text-sm text-[#C08552]"></i>
                    <span>Settings</span>
                </a>

                <div class="h-px bg-[#F3E9DC]/25 my-1"></div>

                <a href="#" class="flex items-center gap-3 px-4 py-2 text-xs text-red-600 hover:bg-red-50 transition-colors font-bold">
                    <i class="ri-logout-box-r-line text-sm"></i>
                    <span>Sign Out</span>
                </a>
            </div>
        </div>

    </div>
</header>