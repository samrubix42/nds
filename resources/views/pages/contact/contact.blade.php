<div class="w-full bg-white flex flex-col font-sans">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">

        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">Contact Us</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                Connect <span class="text-caramel underline decoration-caramel/40 underline-offset-8">With Us</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                Have a security request or query? Our 24/7 Command Center dispatch and administrative support teams are ready to assist.
            </p>
        </div>
    </section>

    <!-- Main Content Section: Form + Contact Info -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Left Column: Info cards (5 columns) -->
            <div class="lg:col-span-5 flex flex-col gap-8">
                <div class="flex flex-col gap-3">
                    <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">OUR OFFICES</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                        Reach Noida's Trustworthy Force
                    </h2>
                    <div class="w-12 h-0.5 bg-caramel mt-1"></div>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold mt-3">
                        Whether you need corporate site guarding, residential patrols, VIP escorts, or security system setups, get in touch with our team today.
                    </p>
                </div>

                <div class="flex flex-col gap-6">
                    <!-- Address Info Card -->
                    <div class="flex gap-4 p-5 bg-[#FDFBF7] border border-cream rounded-3xl shadow-sm hover:border-caramel/25 transition-all">
                        <div class="w-11 h-11 shrink-0 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                            <i class="ri-map-pin-2-fill text-xl"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h4 class="text-xs font-black tracking-wider text-brownie uppercase">Registered Head Office</h4>
                            <p class="text-xs sm:text-sm text-coffee font-semibold leading-relaxed">
                                Gaur City Mall Road, Noida, Uttar Pradesh, 201301
                            </p>
                        </div>
                    </div>

                    <!-- Call Info Card -->
                    <div class="flex gap-4 p-5 bg-[#FDFBF7] border border-cream rounded-3xl shadow-sm hover:border-caramel/25 transition-all">
                        <div class="w-11 h-11 shrink-0 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                            <i class="ri-phone-fill text-xl"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h4 class="text-xs font-black tracking-wider text-brownie uppercase">24/7 Command Helpline</h4>
                            <a href="tel:+919999988888" class="text-xs sm:text-sm text-coffee font-bold hover:text-caramel transition-colors">
                                +91 99999 88888 (Emergency Support)
                            </a>
                            <a href="tel:+911204444333" class="text-xs sm:text-sm text-coffee/80 font-semibold hover:text-caramel transition-colors">
                                +91 120 4444333 (Corporate Desk)
                            </a>
                        </div>
                    </div>

                    <!-- Email Info Card -->
                    <div class="flex gap-4 p-5 bg-[#FDFBF7] border border-cream rounded-3xl shadow-sm hover:border-caramel/25 transition-all">
                        <div class="w-11 h-11 shrink-0 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                            <i class="ri-mail-fill text-xl"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h4 class="text-xs font-black tracking-wider text-brownie uppercase">Business Queries</h4>
                            <a href="mailto:info@ndssecurity.com" class="text-xs sm:text-sm text-coffee font-bold hover:text-caramel transition-colors">
                                info@ndssecurity.com
                            </a>
                            <a href="mailto:support@ndssecurity.com" class="text-xs sm:text-sm text-coffee/80 font-semibold hover:text-caramel transition-colors">
                                support@ndssecurity.com
                            </a>
                        </div>
                    </div>

                    <!-- Hours Card -->
                    <div class="flex gap-4 p-5 bg-[#FDFBF7] border border-cream rounded-3xl shadow-sm hover:border-caramel/25 transition-all">
                        <div class="w-11 h-11 shrink-0 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                            <i class="ri-time-fill text-xl"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h4 class="text-xs font-black tracking-wider text-brownie uppercase">Operation Hours</h4>
                            <p class="text-xs sm:text-sm text-coffee font-bold">
                                Emergency Line: 24/7/365 Active
                            </p>
                            <p class="text-xs text-coffee/85 font-semibold">
                                Corporate Office: Mon - Sat (9:30 AM - 6:30 PM)
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Form (7 columns) -->
            <div class="lg:col-span-7 bg-[#FAF7F2] p-8 md:p-12 rounded-[32px] border border-cream/90 shadow-md">
                
                <h3 class="text-xl sm:text-2xl font-black text-brownie uppercase tracking-wide mb-6">
                    Inquire Online
                </h3>

                <!-- Success Alert Block -->
                @if ($successMessage)
                    <div class="mb-6 p-5 bg-gradient-to-r from-coffee/10 to-caramel/10 border border-caramel/40 text-coffee rounded-2xl flex gap-4 items-start shadow-sm"
                         x-data="{ show: true }" x-show="show" x-cloak>
                        <i class="ri-checkbox-circle-fill text-caramel text-2xl shrink-0 mt-0.5"></i>
                        <div class="flex flex-col gap-1.5">
                            <span class="text-xs font-black uppercase tracking-wider text-brownie">Message Vetted & Vouched</span>
                            <p class="text-xs sm:text-sm font-semibold leading-relaxed">
                                {{ $successMessage }}
                            </p>
                        </div>
                    </div>
                @endif

                <form wire:submit.prevent="submitForm" class="flex flex-col gap-6">
                    
                    <!-- Grid input fields (Name + Email) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Full Name -->
                        <div class="flex flex-col">
                            <label for="name" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Full Name <span class="text-caramel">*</span></label>
                            <input type="text" id="name" wire:model.blur="name"
                                   placeholder="Enter your name"
                                   class="w-full px-4.5 py-3 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all" />
                            @error('name')
                                <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                    <i class="ri-error-warning-fill"></i> {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div class="flex flex-col">
                            <label for="email" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Email Address <span class="text-caramel">*</span></label>
                            <input type="email" id="email" wire:model.blur="email"
                                   placeholder="Enter your email"
                                   class="w-full px-4.5 py-3 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all" />
                            @error('email')
                                <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                    <i class="ri-error-warning-fill"></i> {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Phone Number -->
                        <div class="flex flex-col">
                            <label for="phone" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Phone Number <span class="text-caramel">*</span></label>
                            <input type="text" id="phone" wire:model.blur="phone"
                                   placeholder="Enter mobile number"
                                   class="w-full px-4.5 py-3 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all" />
                            @error('phone')
                                <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                    <i class="ri-error-warning-fill"></i> {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <!-- Subject -->
                        <div class="flex flex-col">
                            <label for="subject" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Subject <span class="text-caramel">*</span></label>
                            <input type="text" id="subject" wire:model.blur="subject"
                                   placeholder="Query category (e.g. Guard service)"
                                   class="w-full px-4.5 py-3 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all" />
                            @error('subject')
                                <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                    <i class="ri-error-warning-fill"></i> {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Query message -->
                    <div class="flex flex-col">
                        <label for="message" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Query Details <span class="text-caramel">*</span></label>
                        <textarea id="message" wire:model.blur="message" rows="5"
                                  placeholder="Describe your security requirements here..."
                                  class="w-full px-4.5 py-3 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all resize-none"></textarea>
                        @error('message')
                            <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                <i class="ri-error-warning-fill"></i> {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Submit Action Button -->
                    <button type="submit" wire:loading.attr="disabled"
                            class="bg-gradient-to-r from-caramel to-coffee hover:from-coffee hover:to-brownie text-white text-xs sm:text-sm font-extrabold uppercase tracking-wider py-4 rounded-xl shadow-md shadow-caramel/20 transition-all inline-flex items-center justify-center gap-2 cursor-pointer mt-2 group active:scale-98 disabled:opacity-85">
                        
                        <!-- Show normal text and icon when NOT loading -->
                        <span wire:loading.remove>
                            Submit Inquiry <i class="ri-send-plane-fill text-sm transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 ml-1"></i>
                        </span>

                        <!-- Show spinner and sending text when loading -->
                        <span wire:loading class="inline-flex items-center gap-2">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Dispatching Request...
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Google Maps Location Frame -->
    <section class="w-full px-6 md:px-12 pb-20 bg-white">
        <div class="max-w-7xl mx-auto w-full">
            <div class="w-full h-[400px] rounded-[32px] overflow-hidden border-2 border-cream shadow-md relative z-10">
                <!-- Noida Area Location Map Iframe -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14008.286377759604!2d77.412467!3d28.627622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef9012f5a6f9%3A0xe54e63bb70d58097!2sGaur%20City%20Mall!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                        class="w-full h-full border-0 select-none" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

</div>