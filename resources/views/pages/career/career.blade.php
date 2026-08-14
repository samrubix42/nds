<div class="w-full bg-white flex flex-col font-sans select-none">

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

    <!-- Recruitment Eligibility Criteria Section -->
    <section class="py-16 bg-[#FDFBF7] border-t border-cream/50 w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-10">
            
            <div class="flex flex-col items-center text-center gap-3">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">ELIGIBILITY CRITERIA & REQUIREMENTS</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Recruitment Standards Matrix
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
                <p class="text-xs sm:text-sm text-coffee/80 max-w-2xl font-semibold mt-1">
                    Review our minimum educational qualifications, experience levels, age brackets, and physical height requirements across security roles.
                </p>
            </div>

            <!-- Desktop & Tablet Table View -->
            <div class="hidden md:block overflow-hidden bg-white border border-cream rounded-3xl shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-cream/40 border-b border-cream text-brownie uppercase text-xs font-black tracking-wider">
                            <th class="py-4 px-6">Category</th>
                            <th class="py-4 px-6"><div class="flex items-center gap-2"><i class="ri-graduation-cap-line text-caramel text-base"></i><span>Min. Education</span></div></th>
                            <th class="py-4 px-6"><div class="flex items-center gap-2"><i class="ri-time-line text-caramel text-base"></i><span>Min. Experience</span></div></th>
                            <th class="py-4 px-6"><div class="flex items-center gap-2"><i class="ri-user-3-line text-caramel text-base"></i><span>Age Criteria</span></div></th>
                            <th class="py-4 px-6"><div class="flex items-center gap-2"><i class="ri-ruler-line text-caramel text-base"></i><span>Min. Height</span></div></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-cream/60 text-xs sm:text-sm font-semibold text-coffee">
                        <!-- Security Guard -->
                        <tr class="hover:bg-caramel/5 transition-colors">
                            <td class="py-4 px-6 font-black text-brownie flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-caramel"></span>
                                <span>Security Guard</span>
                            </td>
                            <td class="py-4 px-6">Matriculate (10<sup>th</sup> Pass)</td>
                            <td class="py-4 px-6">1+ Years Guarding</td>
                            <td class="py-4 px-6">20 – 28 Years</td>
                            <td class="py-4 px-6 font-bold text-brownie">5' 7"</td>
                        </tr>

                        <!-- Supervisor -->
                        <tr class="hover:bg-caramel/5 transition-colors">
                            <td class="py-4 px-6 font-black text-brownie flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-caramel"></span>
                                <span>Supervisor</span>
                            </td>
                            <td class="py-4 px-6">Intermediate (12<sup>th</sup> Pass)</td>
                            <td class="py-4 px-6">2+ Years Supervisory</td>
                            <td class="py-4 px-6">35 – 45 Years</td>
                            <td class="py-4 px-6 font-bold text-brownie">5' 7"</td>
                        </tr>

                        <!-- Security Officer -->
                        <tr class="hover:bg-caramel/5 transition-colors">
                            <td class="py-4 px-6 font-black text-brownie flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-caramel"></span>
                                <span>Security Officer</span>
                            </td>
                            <td class="py-4 px-6">Graduate Degree</td>
                            <td class="py-4 px-6">5 – 10 Years Security</td>
                            <td class="py-4 px-6">35 – 45 Years</td>
                            <td class="py-4 px-6 font-bold text-brownie">5' 7"</td>
                        </tr>

                        <!-- Security Manager -->
                        <tr class="hover:bg-caramel/5 transition-colors">
                            <td class="py-4 px-6 font-black text-brownie flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-caramel"></span>
                                <span>Security Manager</span>
                            </td>
                            <td class="py-4 px-6">Graduate Degree</td>
                            <td class="py-4 px-6">10 – 15 Years Security</td>
                            <td class="py-4 px-6">35 – 45 Years</td>
                            <td class="py-4 px-6 font-bold text-brownie">5' 7"</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile Card Layout View -->
            <div class="grid grid-cols-1 gap-4 md:hidden">
                <!-- Security Guard -->
                <div class="bg-white p-5 border border-cream rounded-2xl shadow-sm space-y-3">
                    <div class="flex items-center justify-between border-b border-cream/60 pb-2.5">
                        <h4 class="font-black text-sm text-brownie uppercase">Security Guard</h4>
                        <span class="px-2.5 py-0.5 rounded-full bg-caramel/10 text-caramel font-bold text-[10px]">Min. 5' 7"</span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div>
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Education</span>
                            <span class="font-semibold text-brownie">Matriculate (10<sup>th</sup> Pass)</span>
                        </div>
                        <div>
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Experience</span>
                            <span class="font-semibold text-brownie">1+ Years Guarding</span>
                        </div>
                        <div class="col-span-2 pt-1">
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Age Criteria</span>
                            <span class="font-semibold text-brownie">20 – 28 Years</span>
                        </div>
                    </div>
                </div>

                <!-- Supervisor -->
                <div class="bg-white p-5 border border-cream rounded-2xl shadow-sm space-y-3">
                    <div class="flex items-center justify-between border-b border-cream/60 pb-2.5">
                        <h4 class="font-black text-sm text-brownie uppercase">Supervisor</h4>
                        <span class="px-2.5 py-0.5 rounded-full bg-caramel/10 text-caramel font-bold text-[10px]">Min. 5' 7"</span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div>
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Education</span>
                            <span class="font-semibold text-brownie">Intermediate (12<sup>th</sup> Pass)</span>
                        </div>
                        <div>
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Experience</span>
                            <span class="font-semibold text-brownie">2+ Years Supervisory</span>
                        </div>
                        <div class="col-span-2 pt-1">
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Age Criteria</span>
                            <span class="font-semibold text-brownie">35 – 45 Years</span>
                        </div>
                    </div>
                </div>

                <!-- Security Officer -->
                <div class="bg-white p-5 border border-cream rounded-2xl shadow-sm space-y-3">
                    <div class="flex items-center justify-between border-b border-cream/60 pb-2.5">
                        <h4 class="font-black text-sm text-brownie uppercase">Security Officer</h4>
                        <span class="px-2.5 py-0.5 rounded-full bg-caramel/10 text-caramel font-bold text-[10px]">Min. 5' 7"</span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div>
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Education</span>
                            <span class="font-semibold text-brownie">Graduate Degree</span>
                        </div>
                        <div>
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Experience</span>
                            <span class="font-semibold text-brownie">5 – 10 Years Security</span>
                        </div>
                        <div class="col-span-2 pt-1">
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Age Criteria</span>
                            <span class="font-semibold text-brownie">35 – 45 Years</span>
                        </div>
                    </div>
                </div>

                <!-- Security Manager -->
                <div class="bg-white p-5 border border-cream rounded-2xl shadow-sm space-y-3">
                    <div class="flex items-center justify-between border-b border-cream/60 pb-2.5">
                        <h4 class="font-black text-sm text-brownie uppercase">Security Manager</h4>
                        <span class="px-2.5 py-0.5 rounded-full bg-caramel/10 text-caramel font-bold text-[10px]">Min. 5' 7"</span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div>
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Education</span>
                            <span class="font-semibold text-brownie">Graduate Degree</span>
                        </div>
                        <div>
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Experience</span>
                            <span class="font-semibold text-brownie">10 – 15 Years Security</span>
                        </div>
                        <div class="col-span-2 pt-1">
                            <span class="text-[10px] text-coffee/60 font-bold uppercase block">Age Criteria</span>
                            <span class="font-semibold text-brownie">35 – 45 Years</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Split Job Openings & Application Form Section -->
    <section id="career-portal" class="py-20 bg-cream/10 border-t border-cream/35 w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Left Side: Compact Vacancy List (5 columns) -->
            <div class="lg:col-span-5 flex flex-col gap-6">
                <div class="flex flex-col gap-2">
                    <span class="text-xs font-extrabold tracking-widest text-caramel uppercase">ACTIVE VACANCIES</span>
                    <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-brownie">
                        Open Positions
                    </h2>
                    <div class="w-10 h-0.5 bg-caramel mt-0.5"></div>
                    <p class="text-xs text-coffee/80 font-semibold mt-1">Select a vacancy below to auto-populate the application form.</p>
                </div>

                <div class="flex flex-col gap-4">
                    @forelse($jobs as $job)
                        <div wire:click="selectJob({{ $job->id }})"
                             class="p-5 rounded-2xl border shadow-2xs flex flex-col gap-3 cursor-pointer transition-all duration-300 group {{ $position === $job->title ? 'border-caramel bg-caramel/5 ring-1 ring-caramel/30 shadow-sm' : 'border-cream bg-white hover:border-caramel/30 hover:bg-[#FDFBF7]' }}">
                            <div class="flex items-center justify-between gap-2">
                                <h4 class="text-sm font-black text-brownie uppercase tracking-tight">{{ $job->title }}</h4>
                                @if ($position === $job->title)
                                    <span class="px-2.5 py-1 bg-caramel text-white font-extrabold text-[9px] uppercase rounded-md flex items-center gap-1 shrink-0"><i class="ri-checkbox-circle-fill"></i> Selected</span>
                                @else
                                    <span class="px-2.5 py-1 bg-[#FAF7F2] border border-cream text-brownie font-black text-[9px] uppercase rounded-md group-hover:bg-caramel group-hover:text-white transition-all shrink-0">Apply Now</span>
                                @endif
                            </div>
                            <div class="flex items-center gap-3 text-xs font-semibold text-coffee/80">
                                <span><i class="ri-map-pin-line text-caramel mr-1"></i>{{ $job->location }}</span>
                                <span>•</span>
                                <span><i class="ri-time-line text-caramel mr-1"></i>{{ $job->shift }} Shift</span>
                            </div>
                        </div>
                    @empty
                        <div class="p-6 border border-cream rounded-2xl bg-white text-center flex flex-col items-center justify-center gap-3">
                            <i class="ri-briefcase-line text-2xl text-caramel"></i>
                            <h3 class="text-sm font-black text-brownie">No Active Openings Currently</h3>
                            <p class="text-xs text-coffee/80">Submit a general application to register your resume.</p>
                            <button type="button" wire:click="selectJob('General Security Application')" class="px-3.5 py-1.5 bg-caramel text-white font-black text-xs uppercase rounded-lg">General Application</button>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Right Column: Spacious Application Form (7 columns) -->
            <div id="application-form" class="lg:col-span-7" x-data="{}" @job-selected.window="document.getElementById('application-form').scrollIntoView({ behavior: 'smooth' })">
                
                @if ($position === '')
                    <!-- Invitation Placeholder -->
                    <div class="flex flex-col items-center justify-center text-center p-10 border border-cream rounded-[32px] bg-white shadow-xs gap-4 min-h-[420px]">
                        <div class="w-16 h-16 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel shadow-inner">
                            <i class="ri-briefcase-line text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-black text-brownie uppercase tracking-wide">Select Position to Apply</h3>
                        <p class="text-xs sm:text-sm text-coffee/80 leading-relaxed font-semibold max-w-sm">
                            Click on any open vacancy card on the left to activate your application form and submit your resume.
                        </p>
                        <button type="button" wire:click="selectJob('General Security Application')"
                                class="mt-2 bg-gradient-to-r from-caramel to-coffee hover:from-coffee hover:to-brownie text-white font-extrabold text-xs uppercase tracking-wider py-3 px-6 rounded-xl transition-all shadow-md active:scale-98">
                            Submit General Application
                        </button>
                    </div>
                @else
                    <!-- Actual Application Form (Wide, Clean, Balanced) -->
                    <div class="bg-white p-7 sm:p-10 border border-cream rounded-[32px] shadow-xl shadow-caramel/5 flex flex-col">
                        
                        <!-- Selected Job Title Card Header -->
                        <div class="flex justify-between items-center pb-5 border-b border-cream mb-6 gap-4">
                            <div class="flex flex-col gap-0.5">
                                <span class="text-[10px] font-black text-caramel uppercase tracking-widest flex items-center gap-1">
                                    <i class="ri-checkbox-circle-fill"></i> Selected Vacancy
                                </span>
                                <h3 class="text-base sm:text-xl font-black text-brownie tracking-tight leading-tight">
                                    {{ $position }}
                                </h3>
                            </div>
                            <button type="button" wire:click="$set('position', '')"
                                    class="text-xs font-bold text-coffee/60 hover:text-caramel transition-colors uppercase tracking-wider flex items-center gap-1 select-none py-1.5 px-3 rounded-lg bg-cream/40 hover:bg-cream/70">
                                <i class="ri-refresh-line"></i> Change Position
                            </button>
                        </div>

                        <!-- Success Alert Block -->
                        @if ($successMessage)
                            <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex gap-3 items-start shadow-2xs">
                                <i class="ri-checkbox-circle-fill text-emerald-600 text-xl shrink-0 mt-0.5"></i>
                                <div class="flex flex-col gap-0.5">
                                    <span class="text-xs font-black uppercase tracking-wider text-emerald-950">Application Received</span>
                                    <p class="text-xs font-semibold leading-relaxed">
                                        {{ $successMessage }}
                                    </p>
                                </div>
                            </div>
                        @endif

                        <form wire:submit.prevent="submitApplication" class="flex flex-col gap-5">
                            
                            <!-- Full Name -->
                            <div class="flex flex-col">
                                <label for="name" class="text-[11px] font-extrabold text-brownie uppercase tracking-wider mb-1.5 flex items-center gap-1">
                                    <span>Full Name</span>
                                    <span class="text-caramel font-black">*</span>
                                </label>
                                <input type="text" id="name" wire:model.blur="name"
                                       placeholder="Enter your full name"
                                       class="w-full px-4 py-3 bg-[#FAF8F5] border border-cream rounded-xl text-xs sm:text-sm font-semibold text-brownie placeholder:text-coffee/40 focus:bg-white focus:border-caramel focus:ring-2 focus:ring-caramel/20 shadow-2xs transition-all duration-200" />
                                @error('name')
                                    <span class="text-[11px] font-bold text-rose-600 mt-1 flex items-center gap-1">
                                        <i class="ri-error-warning-line"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Email & Phone Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div class="flex flex-col">
                                    <label for="email" class="text-[11px] font-extrabold text-brownie uppercase tracking-wider mb-1.5 flex items-center gap-1">
                                        <span>Email Address</span>
                                        <span class="text-caramel font-black">*</span>
                                    </label>
                                    <input type="email" id="email" wire:model.blur="email"
                                           placeholder="yourname@gmail.com"
                                           class="w-full px-4 py-3 bg-[#FAF8F5] border border-cream rounded-xl text-xs sm:text-sm font-semibold text-brownie placeholder:text-coffee/40 focus:bg-white focus:border-caramel focus:ring-2 focus:ring-caramel/20 shadow-2xs transition-all duration-200" />
                                    @error('email')
                                        <span class="text-[11px] font-bold text-rose-600 mt-1 flex items-center gap-1">
                                            <i class="ri-error-warning-line"></i> {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="flex flex-col">
                                    <label for="phone" class="text-[11px] font-extrabold text-brownie uppercase tracking-wider mb-1.5 flex items-center gap-1">
                                        <span>Mobile Phone</span>
                                        <span class="text-caramel font-black">*</span>
                                    </label>
                                    <input type="text" id="phone" wire:model.blur="phone"
                                           placeholder="10-digit mobile number"
                                           class="w-full px-4 py-3 bg-[#FAF8F5] border border-cream rounded-xl text-xs sm:text-sm font-semibold text-brownie placeholder:text-coffee/40 focus:bg-white focus:border-caramel focus:ring-2 focus:ring-caramel/20 shadow-2xs transition-all duration-200" />
                                    @error('phone')
                                        <span class="text-[11px] font-bold text-rose-600 mt-1 flex items-center gap-1">
                                            <i class="ri-error-warning-line"></i> {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Position & Experience Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div class="flex flex-col">
                                    <label for="position" class="text-[11px] font-extrabold text-brownie uppercase tracking-wider mb-1.5 flex items-center gap-1">
                                        <span>Applying For</span>
                                    </label>
                                    <input type="text" id="position" wire:model="position" readonly
                                           class="w-full px-4 py-3 border border-cream rounded-xl bg-cream/30 text-xs sm:text-sm font-black text-brownie cursor-not-allowed select-none" />
                                </div>

                                <div class="flex flex-col">
                                    <label for="experience" class="text-[11px] font-extrabold text-brownie uppercase tracking-wider mb-1.5 flex items-center gap-1">
                                        <span>Experience (Years)</span>
                                        <span class="text-caramel font-black">*</span>
                                    </label>
                                    <input type="number" id="experience" wire:model.blur="experience"
                                           placeholder="e.g. 2"
                                           min="0" max="50"
                                           class="w-full px-4 py-3 bg-[#FAF8F5] border border-cream rounded-xl text-xs sm:text-sm font-semibold text-brownie placeholder:text-coffee/40 focus:bg-white focus:border-caramel focus:ring-2 focus:ring-caramel/20 shadow-2xs transition-all duration-200" />
                                    @error('experience')
                                        <span class="text-[11px] font-bold text-rose-600 mt-1 flex items-center gap-1">
                                            <i class="ri-error-warning-line"></i> {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Residential Address -->
                            <div class="flex flex-col">
                                <label for="address" class="text-[11px] font-extrabold text-brownie uppercase tracking-wider mb-1.5 flex items-center gap-1">
                                    <span>Residential Address</span>
                                    <span class="text-caramel font-black">*</span>
                                </label>
                                <input type="text" id="address" wire:model.blur="address"
                                       placeholder="Locality, Sector, City, State"
                                       class="w-full px-4 py-3 bg-[#FAF8F5] border border-cream rounded-xl text-xs sm:text-sm font-semibold text-brownie placeholder:text-coffee/40 focus:bg-white focus:border-caramel focus:ring-2 focus:ring-caramel/20 shadow-2xs transition-all duration-200" />
                                @error('address')
                                    <span class="text-[11px] font-bold text-rose-600 mt-1 flex items-center gap-1">
                                        <i class="ri-error-warning-line"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- RESUME UPLOAD CONTAINER -->
                            <div class="flex flex-col mt-1">
                                <label class="text-[11px] font-extrabold text-brownie uppercase tracking-wider mb-1.5 flex items-center gap-1">
                                    <span>Attach Resume / CV Document</span>
                                    <span class="text-caramel font-black">*</span>
                                </label>
                                
                                <div class="relative border-2 border-dashed border-caramel/35 hover:border-caramel bg-caramel/[0.03] hover:bg-caramel/[0.08] rounded-2xl p-5 text-center transition-all duration-300 cursor-pointer group">
                                    <input type="file" 
                                           wire:model="resume" 
                                           accept=".pdf,.doc,.docx" 
                                           class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" />

                                    <div class="flex flex-col items-center justify-center gap-2">
                                        <div class="w-11 h-11 rounded-xl bg-caramel/15 text-caramel group-hover:bg-caramel group-hover:text-white flex items-center justify-center text-xl transition-all duration-300 shadow-2xs">
                                            <i class="ri-file-pdf-2-fill"></i>
                                        </div>

                                        @if($resume)
                                            <div class="flex items-center gap-2 text-xs font-black text-emerald-800 bg-emerald-50 border border-emerald-200 px-4 py-1.5 rounded-full shadow-2xs">
                                                <i class="ri-checkbox-circle-fill text-emerald-600 text-sm"></i>
                                                <span>{{ $resume->getClientOriginalName() }}</span>
                                            </div>
                                        @else
                                            <span class="text-xs sm:text-sm font-extrabold text-brownie group-hover:text-caramel transition-colors">
                                                Click or Drag Resume PDF / DOC Here
                                            </span>
                                            <span class="text-[10px] text-coffee/60 font-semibold">
                                                Supports PDF, DOC, DOCX formats (Maximum 10MB)
                                            </span>
                                        @endif

                                        <div wire:loading wire:target="resume" class="text-xs font-bold text-caramel flex items-center gap-1 mt-1">
                                            <i class="ri-loader-4-line animate-spin text-sm"></i>
                                            <span>Uploading document...</span>
                                        </div>
                                    </div>
                                </div>
                                @error('resume')
                                    <span class="text-[11px] font-bold text-rose-600 mt-1 flex items-center gap-1">
                                        <i class="ri-error-warning-line"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" wire:loading.attr="disabled"
                                    class="w-full bg-gradient-to-r from-caramel via-[#c78b57] to-coffee hover:from-coffee hover:to-brownie text-white text-xs sm:text-sm font-extrabold uppercase tracking-wider py-4 px-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 inline-flex items-center justify-center gap-2 cursor-pointer mt-2 border border-caramel/30 hover:scale-[1.01] active:scale-95 disabled:opacity-80">
                                <span wire:loading.remove wire:target="submitApplication" class="inline-flex items-center gap-2">
                                    <span>Submit Application & Resume</span>
                                    <i class="ri-arrow-right-line text-base"></i>
                                </span>
                                <span wire:loading wire:target="submitApplication" class="inline-flex items-center gap-2">
                                    <i class="ri-loader-4-line animate-spin text-base"></i>
                                    <span>Submitting Application...</span>
                                </span>
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>