<div class="w-full max-w-md select-none py-6">
    
    <!-- Official Logo & Branding Header -->
    <div class="flex flex-col items-center mb-8 text-center">
        <a href="{{ route('home') }}" class="flex flex-col items-center gap-3 group">
            <div class="p-3 bg-white rounded-2xl border border-cream shadow-sm group-hover:scale-105 transition-all duration-300">
                <img src="{{ asset('logo.png') }}" alt="{{ setting('company_name', 'NDS Security Services') }}" class="h-14 w-auto object-contain" />
            </div>
            <div class="flex flex-col items-center">
                <h1 class="font-black text-xl tracking-tight text-brownie uppercase mt-1">
                    {{ setting('company_name', 'NDS Security Services') }}
                </h1>
                <span class="text-[10px] font-black text-[#C08552] tracking-widest uppercase mt-0.5 px-3 py-0.5 rounded-full bg-[#C08552]/10 border border-[#C08552]/20">
                    Admin Command Console
                </span>
            </div>
        </a>
    </div>

    <!-- Login Card -->
    <div class="bg-white rounded-[32px] border border-[#F3E9DC] p-8 md:p-10 shadow-[0_15px_40px_-15px_rgba(94,48,35,0.08)]">
        
        <div class="mb-6 border-b border-[#F3E9DC]/60 pb-5">
            <h2 class="text-xl font-extrabold text-brownie">Administrator Sign In</h2>
            <p class="text-xs text-brownie/60 mt-1 font-medium leading-relaxed">Enter your registered administrator email and password to access the command console.</p>
        </div>

        <form wire:submit="login" class="space-y-5">
            <!-- Email Field -->
            <div class="space-y-1.5">
                <label for="email" class="text-[11px] font-extrabold text-brownie uppercase tracking-wider">Email Address <span class="text-[#C08552]">*</span></label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <i class="ri-mail-line text-brownie/40 text-base"></i>
                    </span>
                    <input 
                        type="email" 
                        id="email" 
                        wire:model="email" 
                        placeholder="admin@ndssecurityservices.com" 
                        class="w-full bg-[#FAF9F5] text-xs sm:text-sm font-semibold text-brownie placeholder:text-brownie/35 pl-10 pr-4 py-3 rounded-xl border border-[#F3E9DC] focus:bg-white focus:border-[#C08552] focus:ring-2 focus:ring-[#C08552]/20 focus:outline-none transition-all duration-200"
                        required 
                        autocomplete="email"
                    />
                </div>
                @error('email')
                    <p class="text-[11px] font-bold text-rose-600 mt-1 flex items-center gap-1">
                        <i class="ri-error-warning-line"></i>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="space-y-1.5">
                <div class="flex justify-between items-center">
                    <label for="password" class="text-[11px] font-extrabold text-brownie uppercase tracking-wider">Security Password <span class="text-[#C08552]">*</span></label>
                </div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <i class="ri-lock-line text-brownie/40 text-base"></i>
                    </span>
                    <input 
                        type="password" 
                        id="password" 
                        wire:model="password" 
                        placeholder="••••••••" 
                        class="w-full bg-[#FAF9F5] text-xs sm:text-sm font-semibold text-brownie placeholder:text-brownie/35 pl-10 pr-4 py-3 rounded-xl border border-[#F3E9DC] focus:bg-white focus:border-[#C08552] focus:ring-2 focus:ring-[#C08552]/20 focus:outline-none transition-all duration-200"
                        required
                    />
                </div>
                @error('password')
                    <p class="text-[11px] font-bold text-rose-600 mt-1 flex items-center gap-1">
                        <i class="ri-error-warning-line"></i>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <!-- Remember Me Row -->
            <div class="flex items-center justify-between py-1">
                <label class="flex items-center gap-2 cursor-pointer select-none">
                    <input 
                        type="checkbox" 
                        wire:model="remember" 
                        class="w-4 h-4 rounded text-[#C08552] border-[#F3E9DC] bg-[#FAF9F5] focus:ring-[#C08552]"
                    />
                    <span class="text-xs font-bold text-brownie/70">Keep session active</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                wire:loading.attr="disabled"
                class="bg-gradient-to-r from-[#C08552] to-[#895737] hover:from-[#895737] hover:to-[#5E3023] shadow-md shadow-[#C08552]/20 hover:scale-[1.01] active:scale-95 transition-all duration-200 font-extrabold text-white text-xs sm:text-sm uppercase tracking-wider py-3.5 rounded-xl w-full flex items-center justify-center gap-2 group cursor-pointer border border-[#C08552]/30 disabled:opacity-80">
                <span wire:loading.remove wire:target="login" class="inline-flex items-center gap-2">
                    <span>Sign In to Dashboard</span>
                    <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                </span>
                <span wire:loading wire:target="login" class="inline-flex items-center gap-2">
                    <i class="ri-loader-4-line animate-spin text-base"></i>
                    <span>Verifying Credentials...</span>
                </span>
            </button>
        </form>

    </div>

    <!-- Public Site Return Link -->
    <div class="text-center mt-6">
        <a 
            href="{{ route('home') }}" 
            wire:navigate
            class="inline-flex items-center gap-1.5 text-xs font-bold text-brownie/60 hover:text-brownie transition-colors duration-150">
            <i class="ri-arrow-left-line"></i>
            <span>Return to Public Website</span>
        </a>
    </div>

</div>
