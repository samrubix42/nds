<div class="space-y-6 font-sans">
    
    <!-- Header Section -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">System Settings & Configuration</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Manage company details, contact information, office hours, and social links across the platform.</p>
        </div>
        <div class="shrink-0">
            <button 
                wire:click="save" 
                wire:loading.attr="disabled"
                class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-md transition-all shadow-xs disabled:opacity-50">
                <i wire:loading.remove wire:target="save" class="ri-save-3-line text-sm"></i>
                <span wire:loading wire:target="save" class="w-3.5 h-3.5 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                <span>Save All Settings</span>
            </button>
        </div>
    </div>

    <!-- Session Flash Notification -->
    @if (session()->has('message'))
        <div class="p-3.5 rounded-md bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center justify-between shadow-xs">
            <div class="flex items-center gap-2">
                <i class="ri-checkbox-circle-fill text-emerald-600 text-base"></i>
                <span>{{ session('message') }}</span>
            </div>
            <button @click="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800 transition-colors">
                <i class="ri-close-line text-base"></i>
            </button>
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-6">

        <!-- 1. General & Branding Settings -->
        <div class="bg-white border border-[#F3E9DC] rounded-lg shadow-2xs overflow-hidden">
            <div class="px-5 py-4 bg-[#FAF9F5]/60 border-b border-[#F3E9DC] flex items-center gap-2.5">
                <div class="w-7 h-7 rounded-md bg-[#C08552]/10 flex items-center justify-center text-[#C08552] border border-[#C08552]/20">
                    <i class="ri-building-4-line text-sm"></i>
                </div>
                <div>
                    <h3 class="font-bold text-xs text-brownie uppercase tracking-wider">Branding & Company Profile</h3>
                    <p class="text-[10px] text-brownie/50 font-medium">Configure primary brand identity and icon assets.</p>
                </div>
            </div>

            <div class="p-5 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Company Name -->
                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Company Name <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <i class="ri-building-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/40 text-sm"></i>
                        <input 
                            wire:model="company_name" 
                            type="text" 
                            placeholder="e.g. NDS Security Services" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
                        />
                    </div>
                    @error('company_name') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Favicon Upload -->
                <div class="space-y-2 md:col-span-2">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Website Favicon
                    </label>

                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 p-4 rounded-md border border-[#F3E9DC] bg-[#FAF9F5]/30">
                        <!-- Favicon Preview Box -->
                        <div class="relative w-16 h-16 rounded-md bg-white border border-[#F3E9DC] flex items-center justify-center overflow-hidden shrink-0 shadow-2xs">
                            @if ($favicon)
                                <img src="{{ $favicon->temporaryUrl() }}" alt="Favicon Preview" class="w-10 h-10 object-contain" />
                            @elseif ($existing_favicon)
                                <img src="{{ asset('storage/' . $existing_favicon) }}" alt="Current Favicon" class="w-10 h-10 object-contain" />
                            @else
                                <i class="ri-image-line text-2xl text-brownie/30"></i>
                            @endif
                        </div>

                        <!-- Upload instructions & actions -->
                        <div class="flex-grow space-y-2">
                            <div class="flex items-center gap-2">
                                <label class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white border border-[#F3E9DC] hover:border-[#C08552] text-brownie font-semibold text-xs rounded-md cursor-pointer transition-colors shadow-2xs">
                                    <i class="ri-upload-2-line text-sm text-[#C08552]"></i>
                                    <span>Upload New Favicon</span>
                                    <input wire:model="favicon" type="file" class="hidden" accept="image/x-icon,image/png,image/jpeg,image/svg+xml,image/webp" />
                                </label>

                                @if ($existing_favicon || $favicon)
                                    <button 
                                        type="button" 
                                        wire:click="removeFavicon" 
                                        class="inline-flex items-center gap-1 px-3 py-1.5 border border-rose-200 hover:bg-rose-50 text-rose-600 font-semibold text-xs rounded-md transition-colors">
                                        <i class="ri-delete-bin-line text-xs"></i>
                                        <span>Remove</span>
                                    </button>
                                @endif
                            </div>
                            <p class="text-[10px] text-brownie/50 font-medium">
                                Recommended format: PNG, ICO, SVG, or WEBP (Max size: 2MB). Recommended dimensions: 32x32 or 64x64.
                            </p>
                        </div>
                    </div>
                    @error('favicon') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- 2. Contact & Location Information -->
        <div class="bg-white border border-[#F3E9DC] rounded-lg shadow-2xs overflow-hidden">
            <div class="px-5 py-4 bg-[#FAF9F5]/60 border-b border-[#F3E9DC] flex items-center gap-2.5">
                <div class="w-7 h-7 rounded-md bg-[#C08552]/10 flex items-center justify-center text-[#C08552] border border-[#C08552]/20">
                    <i class="ri-contacts-book-2-line text-sm"></i>
                </div>
                <div>
                    <h3 class="font-bold text-xs text-brownie uppercase tracking-wider">Contact & Office Information</h3>
                    <p class="text-[10px] text-brownie/50 font-medium">Set official contact channels, office address, and business operating hours.</p>
                </div>
            </div>

            <div class="p-5 grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Email Address -->
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Email Address <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <i class="ri-mail-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/40 text-sm"></i>
                        <input 
                            wire:model="email" 
                            type="email" 
                            placeholder="info@ndssecurity.com" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
                        />
                    </div>
                    @error('email') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Primary Phone Number -->
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Phone Number 1 <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <i class="ri-phone-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/40 text-sm"></i>
                        <input 
                            wire:model="phone_number" 
                            type="text" 
                            placeholder="+91 88005-93141" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
                        />
                    </div>
                    @error('phone_number') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Secondary Phone Number -->
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Phone Number 2 (Secondary)
                    </label>
                    <div class="relative">
                        <i class="ri-phone-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/40 text-sm"></i>
                        <input 
                            wire:model="phone_number_2" 
                            type="text" 
                            placeholder="+91 88105-67716" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
                        />
                    </div>
                    @error('phone_number_2') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- WhatsApp Number -->
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        WhatsApp Number
                    </label>
                    <div class="relative">
                        <i class="ri-whatsapp-line absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600 text-sm"></i>
                        <input 
                            wire:model="whatsapp_number" 
                            type="text" 
                            placeholder="+91 99999 88888" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
                        />
                    </div>
                    @error('whatsapp_number') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Office Operating Hours -->
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Office Time / Operating Hours <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <i class="ri-time-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/40 text-sm"></i>
                        <input 
                            wire:model="office_time" 
                            type="text" 
                            placeholder="Mon - Sat: 9:00 AM - 7:00 PM" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
                        />
                    </div>
                    @error('office_time') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Physical Office Address -->
                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Office Address <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <i class="ri-map-pin-line absolute left-3 top-3 text-brownie/40 text-sm"></i>
                        <textarea 
                            wire:model="address" 
                            rows="3" 
                            placeholder="Gaur City Mall Road, Noida, Uttar Pradesh, 201301" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors resize-none"></textarea>
                    </div>
                    @error('address') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- 3. Social Media Handles & Links -->
        <div class="bg-white border border-[#F3E9DC] rounded-lg shadow-2xs overflow-hidden">
            <div class="px-5 py-4 bg-[#FAF9F5]/60 border-b border-[#F3E9DC] flex items-center gap-2.5">
                <div class="w-7 h-7 rounded-md bg-[#C08552]/10 flex items-center justify-center text-[#C08552] border border-[#C08552]/20">
                    <i class="ri-share-line text-sm"></i>
                </div>
                <div>
                    <h3 class="font-bold text-xs text-brownie uppercase tracking-wider">Social Media Links</h3>
                    <p class="text-[10px] text-brownie/50 font-medium">Link your active social profiles (Instagram, X/Twitter, Facebook).</p>
                </div>
            </div>

            <div class="p-5 grid grid-cols-1 md:grid-cols-3 gap-5">
                <!-- Instagram -->
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Instagram URL
                    </label>
                    <div class="relative">
                        <i class="ri-instagram-line absolute left-3 top-1/2 -translate-y-1/2 text-pink-600 text-sm"></i>
                        <input 
                            wire:model="instagram" 
                            type="url" 
                            placeholder="https://instagram.com/ndssecurity" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
                        />
                    </div>
                    @error('instagram') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- X (Twitter) -->
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        X (Twitter) URL
                    </label>
                    <div class="relative">
                        <i class="ri-twitter-x-line absolute left-3 top-1/2 -translate-y-1/2 text-slate-800 text-sm"></i>
                        <input 
                            wire:model="x" 
                            type="url" 
                            placeholder="https://x.com/ndssecurity" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
                        />
                    </div>
                    @error('x') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Facebook -->
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Facebook URL
                    </label>
                    <div class="relative">
                        <i class="ri-facebook-fill absolute left-3 top-1/2 -translate-y-1/2 text-blue-600 text-sm"></i>
                        <input 
                            wire:model="facebook" 
                            type="url" 
                            placeholder="https://facebook.com/ndssecurity" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-md bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
                        />
                    </div>
                    @error('facebook') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- Submit Button Footer -->
        <div class="flex items-center justify-end gap-3 pt-2">
            <button 
                type="submit" 
                wire:loading.attr="disabled"
                class="inline-flex items-center gap-2 px-6 py-2.5 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-md transition-all shadow-xs disabled:opacity-50">
                <i wire:loading.remove wire:target="save" class="ri-save-3-line text-base"></i>
                <span wire:loading wire:target="save" class="w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                <span>Save All Settings</span>
            </button>
        </div>

    </form>
</div>