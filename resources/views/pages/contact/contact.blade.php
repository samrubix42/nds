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

    <!-- Prominent Contact Info Section (Increased Size, 3 Cards: Phone, Email, Address) -->
    <section class="py-16 bg-[#FAF9F5] border-b border-cream/40">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Phone Helpline Card -->
                <a href="tel:{{ setting('phone_number', '+91 88005-93141') }}" class="group p-8 bg-white rounded-[32px] border border-cream/60 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col gap-4 text-center items-center">
                    <div class="w-16 h-16 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-3xl shrink-0 group-hover:bg-caramel group-hover:text-white transition-all duration-300">
                        <i class="ri-phone-fill"></i>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <span class="text-[11px] font-black tracking-widest text-caramel uppercase">24/7 Command Helpline</span>
                        <span class="text-base sm:text-lg font-black text-brownie group-hover:text-caramel transition-colors duration-300">
                            {{ setting('phone_number', '+91 88005-93141') }}
                        </span>
                        @if(setting('phone_number_2'))
                            <span class="text-xs sm:text-sm font-bold text-coffee/70">
                                {{ setting('phone_number_2') }}
                            </span>
                        @endif
                    </div>
                </a>

                <!-- Email Desk Card -->
                <a href="mailto:{{ setting('email', 'info@ndssecurityservices.com') }}" class="group p-8 bg-white rounded-[32px] border border-cream/60 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col gap-4 text-center items-center">
                    <div class="w-16 h-16 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-3xl shrink-0 group-hover:bg-caramel group-hover:text-white transition-all duration-300">
                        <i class="ri-mail-fill"></i>
                    </div>
                    <div class="flex flex-col gap-1.5 w-full">
                        <span class="text-[11px] font-black tracking-widest text-caramel uppercase">Official Email Desk</span>
                        <span class="text-base sm:text-lg font-black text-brownie group-hover:text-caramel transition-colors duration-300 truncate w-full px-2" title="{{ setting('email', 'info@ndssecurityservices.com') }}">
                            {{ setting('email', 'info@ndssecurityservices.com') }}
                        </span>
                    </div>
                </a>

                <!-- Head Office Address Card -->
                <div class="group p-8 bg-white rounded-[32px] border border-cream/60 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col gap-4 text-center items-center">
                    <div class="w-16 h-16 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-3xl shrink-0">
                        <i class="ri-map-pin-2-fill"></i>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <span class="text-[11px] font-black tracking-widest text-caramel uppercase">Registered Head Office</span>
                        <span class="text-xs sm:text-sm font-bold text-brownie leading-relaxed px-4">
                            {!! nl2br(e(setting('address', 'Plot No. 128, Haibatpur, Near Gaur City Mall, Greater Noida - 201318 (U.P.)'))) !!}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Main Content Section: Information & Form -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Left Column: Google Map Location (5 columns) -->
            <div class="lg:col-span-5 flex flex-col gap-6 w-full h-full lg:sticky lg:top-8">
                <div class="flex flex-col gap-2">
                    <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">OUR LOCATION</span>
                    <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-brownie">
                        Command Center Map
                    </h2>
                    <div class="w-12 h-0.5 bg-caramel mt-1"></div>
                </div>
                <div class="w-full h-[350px] lg:h-[450px] rounded-[32px] overflow-hidden border border-cream shadow-md relative z-10">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.655923218129!2d77.4276549!3d28.610097299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5900b942d4f%3A0xcb8eeabb60fb701f!2sNDS%20Security%20Services%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1786968203226!5m2!1sen!2sin" 
                            class="w-full h-full border-0 select-none" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="strict-origin-when-cross-origin">
                    </iframe>
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
                            <span class="text-xs font-black uppercase tracking-wider text-emerald-900">Inquiry Received</span>
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
                            <label for="email" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Email Address</label>
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
                    <button type="submit" wire:loading.attr="disabled" wire:target="submitForm"
                            class="bg-gradient-to-r from-caramel via-[#c78b57] to-coffee hover:from-coffee hover:to-brownie text-white text-xs sm:text-sm font-extrabold uppercase tracking-wider py-4 px-8 rounded-2xl shadow-md shadow-caramel/25 hover:shadow-lg transition-all duration-300 inline-flex items-center justify-center gap-2 cursor-pointer mt-2 group active:scale-98 disabled:opacity-75 disabled:cursor-not-allowed">
                        
                        <!-- Show normal text and icon when NOT loading submitForm -->
                        <span wire:loading.remove wire:target="submitForm" class="inline-flex items-center gap-2">
                            <span>Submit Inquiry</span>
                            <i class="ri-send-plane-fill text-sm transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-0.5"></i>
                        </span>

                        <!-- Show spinner and sending text ONLY when loading submitForm -->
                        <span wire:loading wire:target="submitForm" class="inline-flex items-center gap-2">
                            <i class="ri-loader-4-line text-lg animate-spin"></i>
                            <span>Sending Inquiry & Email...</span>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- NDS Branch Offices Section (In place of the map) -->
    <section class="w-full px-6 md:px-12 pb-24 bg-white">
        <div class="max-w-7xl mx-auto w-full flex flex-col gap-10">
            <div class="flex flex-col items-center text-center gap-3">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">OUR NETWORK</span>
                <h3 class="text-2xl sm:text-3xl md:text-4xl font-black text-brownie uppercase">NDS Branch Offices</h3>
                <div class="w-12 h-1 bg-caramel rounded-full mt-1"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Branch 1: Noida Branch Office -->
                <div class="bg-[#FAF9F5] p-8 rounded-[32px] border border-cream shadow-xs hover:border-caramel/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-6">
                    <div class="flex flex-col gap-4 text-left">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl font-bold">
                            01
                        </div>
                        <div class="flex flex-col gap-1 text-left">
                            <h4 class="text-base font-black text-brownie uppercase">Noida Headquarter</h4>
                        </div>
                        <p class="text-xs sm:text-sm text-coffee font-semibold leading-relaxed text-left">
                            Plot No. 128, New Haibatpur, Near Gaur City Mall, Greater Noida West, U.P. - 201318 
                        </p>
                    </div>
                    <!-- <div class="border-t border-cream pt-4 flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-phone-line text-caramel text-sm"></i>
                            <span>+91 88005-93141</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-mail-line text-caramel text-sm"></i>
                            <span>info@ndssecurityservices.com</span>
                        </div>
                    </div> -->
                </div>

                <!-- Branch 2: Greater Noida Branch Office -->
                <div class="bg-[#FAF9F5] p-8 rounded-[32px] border border-cream shadow-xs hover:border-caramel/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-6">
                    <div class="flex flex-col gap-4 text-left">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl font-bold">
                            02
                        </div>
                        <div class="flex flex-col gap-1 text-left">
                            <h4 class="text-base font-black text-brownie uppercase">Greater Noida Branch Office</h4>
                        </div>
                        <p class="text-xs sm:text-sm text-coffee font-semibold leading-relaxed text-left">
                            Office No-16, 3rd Floor, Delta City Center, Delta-1, Greater Noida, Gautam Buddha Nagar, U.P. - 201306 
                        </p>
                    </div>
                    <!-- <div class="border-t border-cream pt-4 flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-phone-line text-caramel text-sm"></i>
                            <span>+91 88005-93141</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-mail-line text-caramel text-sm"></i>
                            <span>info@ndssecurityservices.com</span>
                        </div>
                    </div> -->
                </div>

                <!-- Branch 3: Delhi Branch Office -->
                <div class="bg-[#FAF9F5] p-8 rounded-[32px] border border-cream shadow-xs hover:border-caramel/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-6">
                    <div class="flex flex-col gap-4 text-left">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl font-bold">
                            03
                        </div>
                        <div class="flex flex-col gap-1 text-left">
                            <h4 class="text-base font-black text-brownie uppercase">Delhi Branch Office</h4>
                        </div>
                        <p class="text-xs sm:text-sm text-coffee font-semibold leading-relaxed text-left">
                            KH NO 250, H NO. 66, Village Kondli, Near Main Road, New Delhi - 110096
                        </p>
                    </div>
                    <!-- <div class="border-t border-cream pt-4 flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-phone-line text-caramel text-sm"></i>
                            <span>+91 88005-93141</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-mail-line text-caramel text-sm"></i>
                            <span>info@ndssecurityservices.com</span>
                        </div>
                    </div> -->
                </div>

                <!-- Branch 4: Haryana Branch Office -->
                <div class="bg-[#FAF9F5] p-8 rounded-[32px] border border-cream shadow-xs hover:border-caramel/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-6">
                    <div class="flex flex-col gap-4 text-left">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl font-bold">
                            04
                        </div>
                        <div class="flex flex-col gap-1 text-left">
                            <h4 class="text-base font-black text-brownie uppercase">Haryana Branch Office</h4>
                        </div>
                        <p class="text-xs sm:text-sm text-coffee font-semibold leading-relaxed text-left">
                            418, 1st Floor, Ganpati Arcade, Gurugram, Haryana - 122001
                        </p>
                    </div>
                    <!-- <div class="border-t border-cream pt-4 flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-phone-line text-caramel text-sm"></i>
                            <span>+91 88005-93141</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-mail-line text-caramel text-sm"></i>
                            <span>info@ndssecurityservices.com</span>
                        </div>
                    </div> -->
                </div>

                <!-- Branch 5: Rajasthan Branch Office -->
                <div class="bg-[#FAF9F5] p-8 rounded-[32px] border border-cream shadow-xs hover:border-caramel/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-6">
                    <div class="flex flex-col gap-4 text-left">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl font-bold">
                            05
                        </div>
                        <div class="flex flex-col gap-1 text-left">
                            <h4 class="text-base font-black text-brownie uppercase">Rajasthan Branch Office</h4>
                        </div>
                        <p class="text-xs sm:text-sm text-coffee font-semibold leading-relaxed text-left">
                            B-17, Sindhi Colony, Bani Park, Jaipur Rajasthan - 302016
                        </p>
                    </div>
                    <!-- <div class="border-t border-cream pt-4 flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-phone-line text-caramel text-sm"></i>
                            <span>+91 88005-93141</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-mail-line text-caramel text-sm"></i>
                            <span>info@ndssecurityservices.com</span>
                        </div>
                    </div> -->
                </div>

                <!-- Branch 6: Maharashtra Branch Office -->
                <div class="bg-[#FAF9F5] p-8 rounded-[32px] border border-cream shadow-xs hover:border-caramel/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-6">
                    <div class="flex flex-col gap-4 text-left">
                        <div class="w-12 h-12 rounded-2xl bg-caramel/10 text-caramel flex items-center justify-center text-xl font-bold">
                            06
                        </div>
                        <div class="flex flex-col gap-1 text-left">
                            <h4 class="text-base font-black text-brownie uppercase">Maharashtra Branch Office</h4>
                        </div>
                        <p class="text-xs sm:text-sm text-coffee font-semibold leading-relaxed text-left">
                            Flat No. 205, Rachana Mathura Apartment, Mankapur Chowk, Nagpur, Maharashtra - 440030
                        </p>
                    </div>
                    <!-- <div class="border-t border-cream pt-4 flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-phone-line text-caramel text-sm"></i>
                            <span>+91 88005-93141</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-coffee">
                            <i class="ri-mail-line text-caramel text-sm"></i>
                            <span>info@ndssecurityservices.com</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

</div>