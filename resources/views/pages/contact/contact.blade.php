<div class="w-full bg-white flex flex-col font-sans select-none">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute top-1/2 -right-12 w-80 h-80 bg-caramel/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">Contact Us</span>
            </div>

            <div class="flex flex-wrap items-center gap-3 justify-center md:justify-start mt-1">
                <span class="px-3 py-1 bg-caramel/20 border border-caramel/40 text-caramel font-black text-[10px] uppercase tracking-widest rounded-full">
                    24/7 COMMAND DESK
                </span>
                <span class="px-3 py-1 bg-caramel/20 border border-caramel/40 text-caramel font-black text-[10px] uppercase tracking-widest rounded-full">
                    PSARA REGISTERED
                </span>
                <span class="px-3 py-1 bg-caramel/20 border border-caramel/40 text-caramel font-black text-[10px] uppercase tracking-widest rounded-full">
                    RAPID DISPATCH
                </span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                Connect <span class="text-caramel underline decoration-caramel/40 underline-offset-8">With Us</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                Have a security request, audit query, or manned guarding need? Our 24/7 Command Center dispatch and administrative support teams are ready to assist.
            </p>
        </div>
    </section>

    <!-- Quick Contact Cards Strip -->
    <section class="py-12 bg-[#FDFBF7] border-b border-cream/50">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Helpline -->
                <a href="tel:{{ setting('phone_number', '+91 88005-93141') }}" class="group p-6 bg-white rounded-3xl border border-cream shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl shrink-0 group-hover:bg-caramel group-hover:text-white transition-all">
                        <i class="ri-phone-fill"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[10px] font-black tracking-wider text-caramel uppercase">24/7 HELPLINE</span>
                        <span class="text-xs sm:text-sm font-bold text-brownie group-hover:text-caramel transition-colors">
                            {{ setting('phone_number', '+91 88005-93141') }}
                        </span>
                    </div>
                </a>

                <!-- Card 2: Email -->
                <a href="mailto:{{ setting('email', 'info@ndssecurityservices.com') }}" class="group p-6 bg-white rounded-3xl border border-cream shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl shrink-0 group-hover:bg-caramel group-hover:text-white transition-all">
                        <i class="ri-mail-fill"></i>
                    </div>
                    <div class="flex flex-col truncate">
                        <span class="text-[10px] font-black tracking-wider text-caramel uppercase">OFFICIAL EMAIL</span>
                        <span class="text-xs sm:text-sm font-bold text-brownie group-hover:text-caramel transition-colors truncate">
                            {{ setting('email', 'info@ndssecurityservices.com') }}
                        </span>
                    </div>
                </a>

                <!-- Card 3: Location -->
                <div class="p-6 bg-white rounded-3xl border border-cream shadow-sm flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl shrink-0">
                        <i class="ri-map-pin-2-fill"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[10px] font-black tracking-wider text-caramel uppercase">HEADQUARTERS</span>
                        <span class="text-xs font-bold text-brownie truncate max-w-[170px]" title="{{ setting('address', 'Greater Noida, U.P.') }}">
                            {{ setting('address', 'Greater Noida, U.P.') }}
                        </span>
                    </div>
                </div>

                <!-- Card 4: Hours -->
                <div class="p-6 bg-white rounded-3xl border border-cream shadow-sm flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl shrink-0">
                        <i class="ri-time-fill"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[10px] font-black tracking-wider text-caramel uppercase">WORKING HOURS</span>
                        <span class="text-xs font-bold text-brownie">
                            {{ setting('office_time', 'Mon - Sat: 9 AM - 7 PM') }}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Main Content Section: Information & Form -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Left Column: Company Info Details (5 columns) -->
            <div class="lg:col-span-5 flex flex-col gap-8">
                <div class="flex flex-col gap-3">
                    <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">OUR OFFICES</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                        Reach {{ setting('company_name', 'NDS Security Services') }}
                    </h2>
                    <div class="w-12 h-0.5 bg-caramel mt-1"></div>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold mt-3">
                        Whether you need corporate site guarding, residential patrols, VIP escorts, or security system setups, get in touch with our team today.
                    </p>
                </div>

                <div class="flex flex-col gap-5">
                    <!-- Address Info Card -->
                    <div class="flex gap-4 p-5 bg-[#FDFBF7] border border-cream rounded-3xl shadow-sm hover:border-caramel/30 transition-all">
                        <div class="w-11 h-11 shrink-0 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                            <i class="ri-building-4-fill text-xl"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h4 class="text-xs font-black tracking-wider text-brownie uppercase">Registered Head Office</h4>
                            <p class="text-xs sm:text-sm text-coffee font-semibold leading-relaxed">
                                {!! nl2br(e(setting('address', 'Plot No. 128, Haibatpur, Near Gaur City Mall, Greater Noida - 201318 (U.P.)'))) !!}
                            </p>
                        </div>
                    </div>

                    <!-- Phone Helpline Card -->
                    <div class="flex gap-4 p-5 bg-[#FDFBF7] border border-cream rounded-3xl shadow-sm hover:border-caramel/30 transition-all">
                        <div class="w-11 h-11 shrink-0 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                            <i class="ri-phone-fill text-xl"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h4 class="text-xs font-black tracking-wider text-brownie uppercase">24/7 Command Helpline</h4>
                            <a href="tel:{{ setting('phone_number', '+91 88005-93141') }}" class="text-xs sm:text-sm text-coffee font-bold hover:text-caramel transition-colors">
                                {{ setting('phone_number', '+91 88005-93141') }}
                            </a>
                            @if(setting('phone_number_2'))
                                <a href="tel:{{ setting('phone_number_2') }}" class="text-xs sm:text-sm text-coffee/90 font-semibold hover:text-caramel transition-colors">
                                    {{ setting('phone_number_2') }}
                                </a>
                            @endif
                            @if(setting('whatsapp_number'))
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', setting('whatsapp_number')) }}?text=Hello%20NDS%20Security%20Team%2C%20I%20would%20like%20to%20inquire%20about%20your%20services." target="_blank" class="text-xs sm:text-sm text-emerald-700 font-bold hover:text-emerald-800 transition-colors flex items-center gap-1.5 mt-1">
                                    <i class="ri-whatsapp-line text-base"></i> WhatsApp: {{ setting('whatsapp_number') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Email Business Card -->
                    <div class="flex gap-4 p-5 bg-[#FDFBF7] border border-cream rounded-3xl shadow-sm hover:border-caramel/30 transition-all">
                        <div class="w-11 h-11 shrink-0 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                            <i class="ri-mail-send-fill text-xl"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h4 class="text-xs font-black tracking-wider text-brownie uppercase">Official Email Desk</h4>
                            <a href="mailto:{{ setting('email', 'info@ndssecurityservices.com') }}" class="text-xs sm:text-sm text-coffee font-bold hover:text-caramel transition-colors">
                                {{ setting('email', 'info@ndssecurityservices.com') }}
                            </a>
                        </div>
                    </div>

                    <!-- Social Media Links Block -->
                    @if(setting('facebook') || setting('instagram') || setting('x'))
                        <div class="flex items-center gap-3 pt-2">
                            <span class="text-xs font-black text-brownie uppercase tracking-wider">Follow Us:</span>
                            <div class="flex items-center gap-2">
                                @if(setting('facebook'))
                                    <a href="{{ setting('facebook') }}" target="_blank" class="w-9 h-9 rounded-xl bg-cream/40 border border-cream text-coffee hover:bg-caramel hover:text-white flex items-center justify-center transition-all">
                                        <i class="ri-facebook-fill text-base"></i>
                                    </a>
                                @endif
                                @if(setting('instagram'))
                                    <a href="{{ setting('instagram') }}" target="_blank" class="w-9 h-9 rounded-xl bg-cream/40 border border-cream text-coffee hover:bg-caramel hover:text-white flex items-center justify-center transition-all">
                                        <i class="ri-instagram-line text-base"></i>
                                    </a>
                                @endif
                                @if(setting('x'))
                                    <a href="{{ setting('x') }}" target="_blank" class="w-9 h-9 rounded-xl bg-cream/40 border border-cream text-coffee hover:bg-caramel hover:text-white flex items-center justify-center transition-all">
                                        <i class="ri-twitter-x-line text-base"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endif

                </div>
            </div>

            <!-- Right Column: Clean Interactive Form (7 columns) -->
            <div class="lg:col-span-7 bg-[#FAF7F2] p-8 md:p-12 rounded-[32px] border border-cream shadow-sm relative">
                
                <div class="flex items-center justify-between mb-8 pb-4 border-b border-cream">
                    <div>
                        <span class="text-[10px] font-black text-caramel uppercase tracking-widest block">ONLINE INQUIRY</span>
                        <h3 class="text-xl sm:text-2xl font-black text-brownie tracking-tight">
                            Send Us a Message
                        </h3>
                    </div>
                    <div class="w-10 h-10 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-lg">
                        <i class="ri-question-answer-fill"></i>
                    </div>
                </div>

                <!-- Success Alert Block -->
                @if ($successMessage)
                    <div class="mb-6 p-5 bg-gradient-to-r from-emerald-900/10 via-emerald-800/10 to-caramel/10 border border-emerald-500/30 text-emerald-950 rounded-2xl flex gap-4 items-start shadow-sm"
                         x-data="{ show: true }" x-show="show" x-cloak>
                        <i class="ri-checkbox-circle-fill text-emerald-600 text-2xl shrink-0 mt-0.5"></i>
                        <div class="flex flex-col gap-1">
                            <span class="text-xs font-black uppercase tracking-wider text-emerald-900">Inquiry Received & Emailed</span>
                            <p class="text-xs sm:text-sm font-semibold leading-relaxed text-emerald-950">
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
                                   class="w-full px-4.5 py-3.5 border border-cream rounded-2xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-2 focus:ring-caramel/30 shadow-xs transition-all" />
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
                                   class="w-full px-4.5 py-3.5 border border-cream rounded-2xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-2 focus:ring-caramel/30 shadow-xs transition-all" />
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
                                   class="w-full px-4.5 py-3.5 border border-cream rounded-2xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-2 focus:ring-caramel/30 shadow-xs transition-all" />
                            @error('phone')
                                <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                    <i class="ri-error-warning-fill"></i> {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <!-- Subject -->
                        <div class="flex flex-col">
                            <label for="subject" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Subject / Category <span class="text-caramel">*</span></label>
                            <input type="text" id="subject" wire:model.blur="subject"
                                   placeholder="e.g. Guard Services / CCTV Setup"
                                   class="w-full px-4.5 py-3.5 border border-cream rounded-2xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-2 focus:ring-caramel/30 shadow-xs transition-all" />
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
                                  placeholder="Describe your security & site requirements..."
                                  class="w-full px-4.5 py-3.5 border border-cream rounded-2xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-2 focus:ring-caramel/30 shadow-xs transition-all resize-none"></textarea>
                        @error('message')
                            <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                <i class="ri-error-warning-fill"></i> {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Submit Action Button -->
                    <button type="submit" wire:loading.attr="disabled"
                            class="bg-gradient-to-r from-caramel via-[#c78b57] to-coffee hover:from-coffee hover:to-brownie text-white text-xs sm:text-sm font-extrabold uppercase tracking-wider py-4 px-8 rounded-2xl shadow-md shadow-caramel/25 transition-all inline-flex items-center justify-center gap-2 cursor-pointer mt-2 group active:scale-98 disabled:opacity-85">
                        
                        <!-- Show normal text and icon when NOT loading -->
                        <span wire:loading.remove class="inline-flex items-center gap-2">
                            Submit Inquiry <i class="ri-send-plane-fill text-sm transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-0.5"></i>
                        </span>

                        <!-- Show spinner and sending text when loading -->
                        <span wire:loading class="inline-flex items-center gap-2">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Sending Inquiry...
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Google Maps Location Frame -->
    <section class="w-full px-6 md:px-12 pb-20 bg-white">
        <div class="max-w-7xl mx-auto w-full flex flex-col gap-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-caramel/10 flex items-center justify-center text-caramel">
                        <i class="ri-map-pin-line text-lg"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Command Center Map Location</h3>
                </div>
                <span class="text-xs font-bold text-coffee/80 hidden sm:inline">Greater Noida, Uttar Pradesh</span>
            </div>
            <div class="w-full h-[420px] rounded-[32px] overflow-hidden border-2 border-cream shadow-md relative z-10">
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