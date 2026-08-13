<div class="w-full max-w-md">
    
    <!-- Branding Header -->
    <div class="flex flex-col items-center mb-8 text-center">
        <a href="{{ route('home') }}" class="flex flex-col items-center gap-3 group">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-[#C08552] to-[#895737] flex items-center justify-center shadow-lg shadow-[#3E1B11]/25 group-hover:scale-105 transition-all duration-300">
                <i class="ri-shield-fill text-2xl text-white"></i>
            </div>
            <div>
                <h1 class="font-extrabold text-2xl tracking-tight text-brownie">NDS Security</h1>
                <p class="text-xs text-[#C08552] font-semibold tracking-widest uppercase mt-0.5">Admin Portal Console</p>
            </div>
        </a>
    </div>

    <!-- Login Card -->
    <div class="bg-white rounded-[32px] border border-[#F3E9DC] p-8 md:p-10 shadow-[0_10px_40px_-10px_rgba(94,48,35,0.06)]">
        
        <div class="mb-6">
            <h2 class="text-xl font-extrabold text-brownie">Sign In</h2>
            <p class="text-xs text-brownie/60 mt-1 font-medium">Please enter your admin credentials to proceed.</p>
        </div>

        <form wire:submit="login" class="space-y-5">
            <!-- Email Field -->
            <div class="space-y-1.5">
                <label for="email" class="text-xs font-bold text-brownie/70 uppercase tracking-wide">Email Address</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <i class="ri-mail-line text-brownie/45 text-base"></i>
                    </span>
                    <input 
                        type="email" 
                        id="email" 
                        wire:model="email" 
                        placeholder="name@example.com" 
                        class="w-full bg-[#FAF9F5] text-sm text-brownie placeholder-brownie/45 pl-10 pr-4 py-3 rounded-xl border border-[#F3E9DC] focus:border-[#C08552] focus:ring-1 focus:ring-[#C08552] focus:outline-none transition-all duration-200"
                        required 
                        autocomplete="email"
                    />
                </div>
                @error('email')
                    <p class="text-xs font-semibold text-red-600 mt-1 flex items-center gap-1">
                        <i class="ri-error-warning-line"></i>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="space-y-1.5">
                <div class="flex justify-between items-center">
                    <label for="password" class="text-xs font-bold text-brownie/70 uppercase tracking-wide">Password</label>
                    <a href="#" class="text-xs font-bold text-[#C08552] hover:text-[#895737] transition-all">Forgot?</a>
                </div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <i class="ri-lock-line text-brownie/45 text-base"></i>
                    </span>
                    <input 
                        type="password" 
                        id="password" 
                        wire:model="password" 
                        placeholder="••••••••" 
                        class="w-full bg-[#FAF9F5] text-sm text-brownie placeholder-brownie/45 pl-10 pr-4 py-3 rounded-xl border border-[#F3E9DC] focus:border-[#C08552] focus:ring-1 focus:ring-[#C08552] focus:outline-none transition-all duration-200"
                        required
                    />
                </div>
                @error('password')
                    <p class="text-xs font-semibold text-red-600 mt-1 flex items-center gap-1">
                        <i class="ri-error-warning-line"></i>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <!-- Remember Me & Status Row -->
            <div class="flex items-center justify-between py-1">
                <label class="flex items-center gap-2 cursor-pointer select-none">
                    <input 
                        type="checkbox" 
                        wire:model="remember" 
                        class="w-4 h-4 rounded text-[#C08552] border-[#F3E9DC] bg-[#FAF9F5] focus:ring-[#C08552]"
                    />
                    <span class="text-xs font-semibold text-brownie/70">Remember this session</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="bg-gradient-to-r from-[#C08552] to-[#895737] hover:shadow-lg hover:shadow-[#C08552]/20 hover:scale-[1.01] transition-all duration-200 font-bold text-white py-3.5 rounded-xl w-full flex items-center justify-center gap-2 group cursor-pointer">
                <span wire:loading.remove wire:target="login">Sign In to Dashboard</span>
                <span wire:loading wire:target="login" class="flex items-center gap-2">
                    <i class="ri-loader-4-line animate-spin text-base"></i>
                    <span>Verifying credentials...</span>
                </span>
                <i class="ri-arrow-right-line group-hover:translate-x-0.5 transition-transform" wire:loading.remove wire:target="login"></i>
            </button>
        </form>

    </div>

    <!-- Public Site Return Button -->
    <div class="text-center mt-6">
        <a 
            href="{{ route('home') }}" 
            class="inline-flex items-center gap-1.5 text-xs font-extrabold text-brownie/60 hover:text-brownie transition-colors duration-150">
            <i class="ri-arrow-left-line"></i>
            <span>Return to public website</span>
        </a>
    </div>

</div>
