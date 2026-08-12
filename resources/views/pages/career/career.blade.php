<div class="w-full bg-white flex flex-col font-sans">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">Careers</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                Join <span class="text-caramel underline decoration-caramel/40 underline-offset-8">Our Force</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                Build a professional career with Noida's most respected private security guard agency. We offer stable pay, full benefits, and ongoing tactical training.
            </p>
        </div>
    </section>

    <!-- Why Join NDS Section -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                 class="flex flex-col items-center text-center gap-3 transition-all duration-[1200ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">EMPLOYEE CARE & GROWTH</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Why Build a Career at NDS?
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-[#FDFBF7] p-8 border border-cream rounded-3xl shadow-sm hover:border-caramel/25 transition-all duration-300 flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                        <i class="ri-wallet-3-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Stable Salary & Perks</h3>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                        We pay all security guards and staff on-time via direct bank transfer. Benefits include Provident Fund (PF), ESIC medical cover, and overtime allowances.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#FDFBF7] p-8 border border-cream rounded-3xl shadow-sm hover:border-caramel/25 transition-all duration-300 flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                        <i class="ri-sword-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">PSARA Certified Drills</h3>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                        Every NDS recruit undergoes mandatory state-authorized physical training, threat detection drills, fire safety, and emergency response operations.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-[#FDFBF7] p-8 border border-cream rounded-3xl shadow-sm hover:border-caramel/25 transition-all duration-300 flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                        <i class="ri-line-chart-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Clear Promotion Path</h3>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                        We promote talent. Start as a security guard, build experience, and advance to Senior Guard, Shift Supervisor, and Field operations coordinator.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Split Job Openings & Application Form Section -->
    <section id="career-portal" class="py-20 bg-cream/10 border-t border-cream/35">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Left Side: Job listings (7 columns) -->
            <div class="lg:col-span-7 flex flex-col gap-8">
                <div class="flex flex-col gap-3">
                    <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">ACTIVE VACANCIES</span>
                    <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-brownie">
                        Explore Open Positions
                    </h2>
                    <div class="w-12 h-0.5 bg-caramel mt-1"></div>
                    <p class="text-xs text-coffee font-semibold mt-2">Click on any vacancy card below to auto-select and start your application form.</p>
                </div>

                <div class="flex flex-col gap-5">
                    <!-- Opening 1 -->
                    <div wire:click="selectJob('security-guard')"
                         class="p-6 rounded-2xl border shadow-sm flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 cursor-pointer transition-all duration-300 group {{ $position === 'security-guard' ? 'border-caramel bg-caramel/5 ring-1 ring-caramel/30 shadow-md' : 'border-cream bg-white hover:border-caramel/25 hover:bg-[#FDFBF7]' }}">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <h4 class="text-sm sm:text-base font-black text-brownie uppercase">Security Guard</h4>
                                <span class="px-2 py-0.5 bg-caramel/10 text-caramel font-black text-[9px] uppercase rounded-full">PSARA</span>
                            </div>
                            <p class="text-xs text-coffee/90 font-semibold mt-1">Noida & Delhi NCR • 12-Hour shifts • 20 Positions Open</p>
                        </div>
                        @if ($position === 'security-guard')
                            <span class="px-3.5 py-1.5 bg-caramel text-white font-extrabold text-[10px] uppercase rounded-lg flex items-center gap-1 shadow-sm"><i class="ri-checkbox-circle-fill"></i> Selected</span>
                        @else
                            <span class="px-3.5 py-1.5 bg-[#FAF7F2] border border-cream text-brownie font-black text-[10px] uppercase rounded-lg group-hover:bg-caramel group-hover:text-white transition-all">Apply Now</span>
                        @endif
                    </div>

                    <!-- Opening 2 -->
                    <div wire:click="selectJob('field-supervisor')"
                         class="p-6 rounded-2xl border shadow-sm flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 cursor-pointer transition-all duration-300 group {{ $position === 'field-supervisor' ? 'border-caramel bg-caramel/5 ring-1 ring-caramel/30 shadow-md' : 'border-cream bg-white hover:border-caramel/25 hover:bg-[#FDFBF7]' }}">
                        <div class="flex flex-col gap-1">
                            <h4 class="text-sm sm:text-base font-black text-brownie uppercase">Field Supervisor</h4>
                            <p class="text-xs text-coffee/90 font-semibold mt-1">Greater Noida • 8-Hour shifts • 5 Positions Open</p>
                        </div>
                        @if ($position === 'field-supervisor')
                            <span class="px-3.5 py-1.5 bg-caramel text-white font-extrabold text-[10px] uppercase rounded-lg flex items-center gap-1 shadow-sm"><i class="ri-checkbox-circle-fill"></i> Selected</span>
                        @else
                            <span class="px-3.5 py-1.5 bg-[#FAF7F2] border border-cream text-brownie font-black text-[10px] uppercase rounded-lg group-hover:bg-caramel group-hover:text-white transition-all">Apply Now</span>
                        @endif
                    </div>

                    <!-- Opening 3 -->
                    <div wire:click="selectJob('cctv-analyst')"
                         class="p-6 rounded-2xl border shadow-sm flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 cursor-pointer transition-all duration-300 group {{ $position === 'cctv-analyst' ? 'border-caramel bg-caramel/5 ring-1 ring-caramel/30 shadow-md' : 'border-cream bg-white hover:border-caramel/25 hover:bg-[#FDFBF7]' }}">
                        <div class="flex flex-col gap-1">
                            <h4 class="text-sm sm:text-base font-black text-brownie uppercase">CCTV Command Analyst</h4>
                            <p class="text-xs text-coffee/90 font-semibold mt-1">Head Office Noida • 8-Hour shifts • 2 Positions Open</p>
                        </div>
                        @if ($position === 'cctv-analyst')
                            <span class="px-3.5 py-1.5 bg-caramel text-white font-extrabold text-[10px] uppercase rounded-lg flex items-center gap-1 shadow-sm"><i class="ri-checkbox-circle-fill"></i> Selected</span>
                        @else
                            <span class="px-3.5 py-1.5 bg-[#FAF7F2] border border-cream text-brownie font-black text-[10px] uppercase rounded-lg group-hover:bg-caramel group-hover:text-white transition-all">Apply Now</span>
                        @endif
                    </div>

                    <!-- Opening 4 -->
                    <div wire:click="selectJob('vip-guard-pso')"
                         class="p-6 rounded-2xl border shadow-sm flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 cursor-pointer transition-all duration-300 group {{ $position === 'vip-guard-pso' ? 'border-caramel bg-caramel/5 ring-1 ring-caramel/30 shadow-md' : 'border-cream bg-white hover:border-caramel/25 hover:bg-[#FDFBF7]' }}">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <h4 class="text-sm sm:text-base font-black text-brownie uppercase">VIP Guard / PSO</h4>
                                <span class="px-2 py-0.5 bg-coffee/10 text-coffee font-black text-[9px] uppercase rounded-full">Ex-Servicemen</span>
                            </div>
                            <p class="text-xs text-coffee/90 font-semibold mt-1">Delhi NCR Region • Flexible shifts • 10 Positions Open</p>
                        </div>
                        @if ($position === 'vip-guard-pso')
                            <span class="px-3.5 py-1.5 bg-caramel text-white font-extrabold text-[10px] uppercase rounded-lg flex items-center gap-1 shadow-sm"><i class="ri-checkbox-circle-fill"></i> Selected</span>
                        @else
                            <span class="px-3.5 py-1.5 bg-[#FAF7F2] border border-cream text-brownie font-black text-[10px] uppercase rounded-lg group-hover:bg-caramel group-hover:text-white transition-all">Apply Now</span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Form Column (5 columns) -->
            <div id="application-form" class="lg:col-span-5" x-data="{}" @job-selected.window="document.getElementById('application-form').scrollIntoView({ behavior: 'smooth' })">
                
                @if ($position === '')
                    <!-- Invitation Placeholder (UX friendly empty state) -->
                    <div class="flex flex-col items-center justify-center text-center p-10 border border-cream rounded-[32px] bg-white shadow-sm gap-4 min-h-[400px]">
                        <div class="w-16 h-16 rounded-full bg-caramel/10 flex items-center justify-center text-caramel shadow-inner">
                            <i class="ri-briefcase-line text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-black text-brownie uppercase tracking-wide">Ready to Apply?</h3>
                        <p class="text-xs sm:text-sm text-coffee/80 leading-relaxed font-semibold max-w-xs">
                            Select one of the open positions on the left to start filing your job application form.
                        </p>
                        <button type="button" wire:click="selectJob('security-guard')"
                                class="mt-2 bg-gradient-to-r from-caramel to-coffee hover:from-coffee hover:to-brownie text-white font-extrabold text-xs uppercase tracking-wider py-3 px-6 rounded-xl transition-all shadow-md active:scale-95">
                            General Application
                        </button>
                    </div>
                @else
                    <!-- Actual Application Form (Fades/renders once position is set) -->
                    <div class="bg-white p-8 md:p-10 border border-cream rounded-[32px] shadow-md flex flex-col">
                        
                        <!-- Selected Job Title Card Header -->
                        <div class="flex justify-between items-center pb-3 border-b border-cream mb-6 gap-4">
                            <div class="flex flex-col">
                                <span class="text-[10px] font-black text-caramel uppercase tracking-widest">Active Application</span>
                                <h3 class="text-sm sm:text-base font-black text-brownie uppercase tracking-wide leading-tight">
                                    {{ ucwords(str_replace('-', ' ', $position)) }}
                                </h3>
                            </div>
                            <button type="button" wire:click="$set('position', '')"
                                    class="text-[10px] font-black text-coffee/60 hover:text-caramel uppercase tracking-wider flex items-center gap-0.5 select-none">
                                <i class="ri-close-line text-sm"></i> Reset
                            </button>
                        </div>

                        <!-- Success Alert Block -->
                        @if ($successMessage)
                            <div class="mb-6 p-5 bg-gradient-to-r from-coffee/10 to-caramel/10 border border-caramel/40 text-coffee rounded-2xl flex gap-3.5 items-start shadow-sm">
                                <i class="ri-checkbox-circle-fill text-caramel text-2xl shrink-0 mt-0.5"></i>
                                <div class="flex flex-col gap-1">
                                    <span class="text-xs font-black uppercase tracking-wider text-brownie">Application Logged</span>
                                    <p class="text-xs sm:text-sm font-semibold leading-relaxed">
                                        {{ $successMessage }}
                                    </p>
                                </div>
                            </div>
                        @endif

                        <form wire:submit.prevent="submitApplication" class="flex flex-col gap-5.5">
                            
                            <!-- Full Name -->
                            <div class="flex flex-col">
                                <label for="name" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Full Name <span class="text-caramel">*</span></label>
                                <input type="text" id="name" wire:model.blur="name"
                                       placeholder="Enter your name"
                                       class="w-full px-4 py-2.5 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all" />
                                @error('name')
                                    <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                        <i class="ri-error-warning-fill"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Email & Phone -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                    <label for="email" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Email Address <span class="text-caramel">*</span></label>
                                    <input type="email" id="email" wire:model.blur="email"
                                           placeholder="Enter email"
                                           class="w-full px-4 py-2.5 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all" />
                                    @error('email')
                                        <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                            <i class="ri-error-warning-fill"></i> {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="flex flex-col">
                                    <label for="phone" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Contact No <span class="text-caramel">*</span></label>
                                    <input type="text" id="phone" wire:model.blur="phone"
                                           placeholder="Mobile number"
                                           class="w-full px-4 py-2.5 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all" />
                                    @error('phone')
                                        <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                            <i class="ri-error-warning-fill"></i> {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Position Hidden dropdown & Experience -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                    <label for="position" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Apply Position <span class="text-caramel">*</span></label>
                                    <select id="position" wire:model.blur="position" disabled
                                            class="w-full px-3 py-2.5 border border-cream rounded-xl bg-[#FAF7F2] text-xs sm:text-sm font-black text-brownie cursor-not-allowed">
                                        <option value="security-guard">Security Guard</option>
                                        <option value="field-supervisor">Field Supervisor</option>
                                        <option value="cctv-analyst">CCTV Analyst</option>
                                        <option value="vip-guard-pso">VIP Guard / PSO</option>
                                    </select>
                                    @error('position')
                                        <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                            <i class="ri-error-warning-fill"></i> {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="flex flex-col">
                                    <label for="experience" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Experience (Yrs) <span class="text-caramel">*</span></label>
                                    <input type="number" id="experience" wire:model.blur="experience"
                                           placeholder="Years"
                                           class="w-full px-4 py-2.5 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all" />
                                    @error('experience')
                                        <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                            <i class="ri-error-warning-fill"></i> {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Experience Message -->
                            <div class="flex flex-col">
                                <label for="message" class="text-xs font-bold text-coffee uppercase tracking-wider mb-2">Applicant Note <span class="text-caramel">*</span></label>
                                <textarea id="message" wire:model.blur="message" rows="4"
                                          placeholder="Vouch for your fitness, background, and previous guard experience..."
                                          class="w-full px-4 py-2.5 border border-cream rounded-xl bg-white text-xs sm:text-sm font-semibold text-brownie focus:outline-none focus:border-caramel focus:ring-1 focus:ring-caramel/50 shadow-sm transition-all resize-none"></textarea>
                                @error('message')
                                    <span class="text-[11px] font-bold text-caramel mt-1.5 flex items-center gap-1">
                                        <i class="ri-error-warning-fill"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" wire:loading.attr="disabled"
                                    class="bg-gradient-to-r from-caramel to-coffee hover:from-coffee hover:to-brownie text-white text-xs sm:text-sm font-extrabold uppercase tracking-wider py-3.5 rounded-xl shadow-md transition-all inline-flex items-center justify-center gap-2 cursor-pointer mt-2 group active:scale-98 disabled:opacity-85">
                                <span wire:loading.remove>
                                    Submit Application <i class="ri-briefcase-fill text-sm ml-1"></i>
                                </span>
                                <span wire:loading class="inline-flex items-center gap-2">
                                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Submitting...
                                </span>
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>

</div>