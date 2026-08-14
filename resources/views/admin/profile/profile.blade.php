<div class="space-y-8 select-none">
    
    <!-- Header Page Title Strip -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-2xl border border-[#F3E9DC] shadow-xs">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-[#C08552]/10 border border-[#C08552]/20 flex items-center justify-center text-[#C08552]">
                <i class="ri-user-settings-fill text-2xl"></i>
            </div>
            <div>
                <h1 class="text-xl font-extrabold text-brownie tracking-tight uppercase">Account Profile & Security</h1>
                <p class="text-xs text-brownie/60 font-semibold mt-0.5">Manage administrator account credentials and update security password.</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Left Side: Profile Details Card (6 columns) -->
        <div class="lg:col-span-6 bg-white p-6 sm:p-8 rounded-2xl border border-[#F3E9DC] shadow-xs flex flex-col gap-6">
            <div class="flex items-center gap-3 pb-4 border-b border-[#F3E9DC]">
                <div class="w-9 h-9 rounded-lg bg-[#C08552]/10 text-[#C08552] flex items-center justify-center text-lg">
                    <i class="ri-user-3-line"></i>
                </div>
                <div>
                    <h3 class="text-sm font-extrabold text-brownie uppercase">Administrator Account</h3>
                    <p class="text-[11px] text-brownie/60 font-semibold">Update your administrator display name and contact email.</p>
                </div>
            </div>

            <form wire:submit.prevent="updateProfile" class="flex flex-col gap-5">
                <!-- Name Field -->
                <div class="flex flex-col gap-1.5">
                    <label for="name" class="text-xs font-bold text-brownie uppercase tracking-wider">Full Name <span class="text-[#C08552]">*</span></label>
                    <input type="text" id="name" wire:model.blur="name"
                           placeholder="Administrator Name"
                           class="w-full px-4 py-2.5 bg-[#FAF9F5] border border-[#F3E9DC] rounded-xl text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-[#C08552] focus:bg-white transition-all" />
                    @error('name')
                        <span class="text-[11px] font-bold text-rose-600 flex items-center gap-1"><i class="ri-error-warning-line"></i> {{ $message }}</span>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="flex flex-col gap-1.5">
                    <label for="email" class="text-xs font-bold text-brownie uppercase tracking-wider">Login Email <span class="text-[#C08552]">*</span></label>
                    <input type="email" id="email" wire:model.blur="email"
                           placeholder="admin@ndssecurityservices.com"
                           class="w-full px-4 py-2.5 bg-[#FAF9F5] border border-[#F3E9DC] rounded-xl text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-[#C08552] focus:bg-white transition-all" />
                    @error('email')
                        <span class="text-[11px] font-bold text-rose-600 flex items-center gap-1"><i class="ri-error-warning-line"></i> {{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" wire:loading.attr="disabled"
                        class="mt-2 bg-[#C08552] hover:bg-[#895737] text-white font-extrabold text-xs uppercase tracking-wider py-3 px-6 rounded-xl shadow-xs transition-all duration-200 inline-flex items-center justify-center gap-2 cursor-pointer active:scale-98 disabled:opacity-75">
                    <span wire:loading.remove wire:target="updateProfile" class="inline-flex items-center gap-2">
                        <i class="ri-save-line text-sm"></i> Save Profile Details
                    </span>
                    <span wire:loading wire:target="updateProfile" class="inline-flex items-center gap-2">
                        <i class="ri-loader-4-line animate-spin text-sm"></i> Saving Changes...
                    </span>
                </button>
            </form>
        </div>

        <!-- Right Side: Change Password Form Card (6 columns) -->
        <div class="lg:col-span-6 bg-white p-6 sm:p-8 rounded-2xl border border-[#F3E9DC] shadow-xs flex flex-col gap-6">
            <div class="flex items-center gap-3 pb-4 border-b border-[#F3E9DC]">
                <div class="w-9 h-9 rounded-lg bg-[#C08552]/10 text-[#C08552] flex items-center justify-center text-lg">
                    <i class="ri-lock-password-line"></i>
                </div>
                <div>
                    <h3 class="text-sm font-extrabold text-brownie uppercase">Security Password Update</h3>
                    <p class="text-[11px] text-brownie/60 font-semibold">Ensure your account uses a strong password (minimum 8 characters).</p>
                </div>
            </div>

            <form wire:submit.prevent="updatePassword" class="flex flex-col gap-5">
                <!-- Current Password -->
                <div class="flex flex-col gap-1.5">
                    <label for="current_password" class="text-xs font-bold text-brownie uppercase tracking-wider">Current Password <span class="text-[#C08552]">*</span></label>
                    <input type="password" id="current_password" wire:model.blur="current_password"
                           placeholder="Enter current password"
                           class="w-full px-4 py-2.5 bg-[#FAF9F5] border border-[#F3E9DC] rounded-xl text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-[#C08552] focus:bg-white transition-all" />
                    @error('current_password')
                        <span class="text-[11px] font-bold text-rose-600 flex items-center gap-1"><i class="ri-error-warning-line"></i> {{ $message }}</span>
                    @enderror
                </div>

                <!-- New Password -->
                <div class="flex flex-col gap-1.5">
                    <label for="new_password" class="text-xs font-bold text-brownie uppercase tracking-wider">New Password <span class="text-[#C08552]">*</span></label>
                    <input type="password" id="new_password" wire:model.blur="new_password"
                           placeholder="Enter new password (min. 8 chars)"
                           class="w-full px-4 py-2.5 bg-[#FAF9F5] border border-[#F3E9DC] rounded-xl text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-[#C08552] focus:bg-white transition-all" />
                    @error('new_password')
                        <span class="text-[11px] font-bold text-rose-600 flex items-center gap-1"><i class="ri-error-warning-line"></i> {{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm New Password -->
                <div class="flex flex-col gap-1.5">
                    <label for="new_password_confirmation" class="text-xs font-bold text-brownie uppercase tracking-wider">Confirm New Password <span class="text-[#C08552]">*</span></label>
                    <input type="password" id="new_password_confirmation" wire:model.blur="new_password_confirmation"
                           placeholder="Re-enter new password"
                           class="w-full px-4 py-2.5 bg-[#FAF9F5] border border-[#F3E9DC] rounded-xl text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-[#C08552] focus:bg-white transition-all" />
                    @error('new_password_confirmation')
                        <span class="text-[11px] font-bold text-rose-600 flex items-center gap-1"><i class="ri-error-warning-line"></i> {{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" wire:loading.attr="disabled"
                        class="mt-2 bg-[#C08552] hover:bg-[#895737] text-white font-extrabold text-xs uppercase tracking-wider py-3 px-6 rounded-xl shadow-xs transition-all duration-200 inline-flex items-center justify-center gap-2 cursor-pointer active:scale-98 disabled:opacity-75">
                    <span wire:loading.remove wire:target="updatePassword" class="inline-flex items-center gap-2">
                        <i class="ri-shield-keyhole-line text-sm"></i> Update Password
                    </span>
                    <span wire:loading wire:target="updatePassword" class="inline-flex items-center gap-2">
                        <i class="ri-loader-4-line animate-spin text-sm"></i> Updating Security...
                    </span>
                </button>
            </form>
        </div>

    </div>
</div>
