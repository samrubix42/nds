<div class="w-full bg-white flex flex-col font-sans" x-data="{ tab: 'physical' }">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-24 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">Training</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                NDS Training <span class="text-caramel underline decoration-caramel/40 underline-offset-8">Academy</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                Every NDS security guard is trained, tested, and vetted at our dedicated tactical academy. We maintain strict compliance with PSARA national security standards.
            </p>
        </div>
    </section>

    <!-- Core Philosophy Section with Featured Training Photo -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Text (7 columns) -->
            <div class="lg:col-span-7 flex flex-col gap-6">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">ACADEMY OBJECTIVE</span>
                <h2 class="text-2xl sm:text-4xl font-black tracking-tight text-brownie uppercase leading-tight">
                    Building Vetted, Skilled, & Alert Officers
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
                <p class="text-sm sm:text-base text-coffee/95 leading-relaxed font-medium">
                    We believe that a security guard is only as alert as their training allows. At the NDS Training Academy, we go beyond simple physical drills. Our guards study advanced access control databases, learn to operate heavy-duty fire panels, practice Red Cross first-aid standards, and receive grooming instruction to represent your organization with pride.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2">
                    <div class="flex items-start gap-2.5">
                        <i class="ri-checkbox-circle-fill text-caramel text-base shrink-0 mt-0.5"></i>
                        <span class="text-xs sm:text-sm font-semibold text-coffee/90 leading-relaxed">Fully PSARA compliant syllabus</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <i class="ri-checkbox-circle-fill text-caramel text-base shrink-0 mt-0.5"></i>
                        <span class="text-xs sm:text-sm font-semibold text-coffee/90 leading-relaxed">72+ Hours of mandatory testing</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <i class="ri-checkbox-circle-fill text-caramel text-base shrink-0 mt-0.5"></i>
                        <span class="text-xs sm:text-sm font-semibold text-coffee/90 leading-relaxed">Red Cross Certified First Aid</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <i class="ri-checkbox-circle-fill text-caramel text-base shrink-0 mt-0.5"></i>
                        <span class="text-xs sm:text-sm font-semibold text-coffee/90 leading-relaxed">Crisis de-escalation drills</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Column with Featured Training Photo & Stats Card (5 columns) -->
            <div class="lg:col-span-5 flex flex-col gap-6">
                <!-- Training Photo Badge -->
                <div class="relative rounded-[28px] overflow-hidden shadow-lg border-2 border-[#F3E9DC] group">
                    <img src="{{ asset('image/PIC_4855.webp') }}" 
                         alt="NDS Guard Physical & Tactical Readiness Training" 
                         class="w-full h-64 object-cover transform transition-transform duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/85 via-transparent to-transparent flex items-end p-5">
                        <span class="text-white text-xs font-bold uppercase tracking-wider bg-caramel/90 px-3 py-1.5 rounded-full shadow-sm">
                            <i class="ri-medal-line mr-1"></i> State-Authorized Academy
                        </span>
                    </div>
                </div>

                <!-- PSARA Training Code Card -->
                <div class="bg-gradient-to-br from-[#2d1e12] to-brownie p-6 sm:p-8 rounded-[28px] border border-caramel/20 text-white shadow-lg relative overflow-hidden">
                    <div class="absolute -top-12 -right-12 w-36 h-36 bg-caramel/10 rounded-full blur-xl pointer-events-none"></div>
                    
                    <h3 class="text-base sm:text-lg font-black text-caramel uppercase tracking-widest mb-3">PSARA Training Code</h3>
                    <p class="text-xs sm:text-sm text-cream/70 leading-relaxed font-semibold mb-5">
                        In compliance with the Private Security Agencies (Regulation) Act, NDS enforces a strict 72-hour training regimen for new recruits covering physical defense, access tech, and hazard drills.
                    </p>
                    <div class="flex flex-col gap-3.5 border-t border-caramel/25 pt-5">
                        <div class="flex justify-between items-center text-xs">
                            <span class="font-bold text-cream/60 uppercase">Physical Drills</span>
                            <span class="font-black text-caramel">30 Hours</span>
                        </div>
                        <div class="flex justify-between items-center text-xs">
                            <span class="font-bold text-cream/60 uppercase">Fire & Safety Systems</span>
                            <span class="font-black text-caramel">17 Hours</span>
                        </div>
                        <div class="flex justify-between items-center text-xs">
                            <span class="font-bold text-cream/60 uppercase">Customer Conduct & Services</span>
                            <span class="font-black text-caramel">25 Hours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Syllabus Tabs Section (UX friendly) -->
    <section class="py-20 bg-cream/10 border-t border-b border-cream/35 w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            
            <div x-data="{ shown: false, init() { let obs = new IntersectionObserver(([e]) => { if(e.isIntersecting) { this.shown = true; obs.disconnect(); } }, { threshold: 0.15 }); obs.observe(this.$el); } }"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                 class="flex flex-col items-center text-center gap-3 transition-all duration-[1200ms] ease-out">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">ACADEMY SYLLABUS</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Explore Our Training Modules
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <!-- Tab Buttons -->
            <div class="flex flex-wrap justify-center items-center gap-3">
                <button @click="tab = 'physical'" 
                        :class="tab === 'physical' ? 'bg-caramel text-white shadow-sm' : 'bg-white border border-cream text-coffee hover:bg-caramel/10'"
                        class="px-5 py-3 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all">
                    Physical & Self-Defense
                </button>
                <button @click="tab = 'tech'" 
                        :class="tab === 'tech' ? 'bg-caramel text-white shadow-sm' : 'bg-white border border-cream text-coffee hover:bg-caramel/10'"
                        class="px-5 py-3 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all">
                    Surveillance & Alarm Tech
                </button>
                <button @click="tab = 'medical'" 
                        :class="tab === 'medical' ? 'bg-caramel text-white shadow-sm' : 'bg-white border border-cream text-coffee hover:bg-caramel/10'"
                        class="px-5 py-3 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all">
                    First-Aid & Emergency
                </button>
                <button @click="tab = 'conduct'" 
                        :class="tab === 'conduct' ? 'bg-caramel text-white shadow-sm' : 'bg-white border border-cream text-coffee hover:bg-caramel/10'"
                        class="px-5 py-3 rounded-xl text-xs sm:text-sm font-black uppercase tracking-wider transition-all">
                    Soft Skills & Conduct
                </button>
            </div>

            <!-- Tab Panels -->
            <div class="w-full bg-white border border-cream p-8 md:p-10 rounded-[32px] shadow-sm min-h-[300px]">
                
                <!-- Physical Tab Panel -->
                <div x-show="tab === 'physical'" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <div class="flex flex-col gap-4">
                        <h3 class="text-xl font-black text-brownie uppercase">Stamina, Agility, & Self-Defense</h3>
                        <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                            Physical readiness is the cornerstone of NDS protection officers. We run daily endurance drills, barrier courses, and martial defense training to prepare our guards to manage physical intrusions or perimeter line threats.
                        </p>
                        <ul class="flex flex-col gap-2.5 text-xs sm:text-sm font-semibold text-coffee/85">
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> Hand-to-hand self-defense techniques</li>
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> Perimeter fence patrol cardio training</li>
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> Crowd control and evacuation shielding</li>
                        </ul>
                    </div>
                    <div class="h-64 sm:h-72 rounded-2xl overflow-hidden shadow-md bg-cream border border-[#F3E9DC] group">
                        <img src="{{ asset('image/PIC_4880.webp') }}" alt="NDS Physical Training Drills" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105" />
                    </div>
                </div>

                <!-- Tech Tab Panel -->
                <div x-show="tab === 'tech'" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <div class="flex flex-col gap-4">
                        <h3 class="text-xl font-black text-brownie uppercase">CCTV & Hazard Safety Panels</h3>
                        <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                            Modern security relies on smart devices. NDS academy candidates practice setting intrusion alarm boundaries, reading video analytics logs, and operating standard fire alarm control panels to minimize response delay.
                        </p>
                        <ul class="flex flex-col gap-2.5 text-xs sm:text-sm font-semibold text-coffee/85">
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> Fire alarm system zone resets</li>
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> CCTV command monitoring drills</li>
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> QR check point supervisor patrols</li>
                        </ul>
                    </div>
                    <div class="h-64 sm:h-72 rounded-2xl overflow-hidden shadow-md bg-cream border border-[#F3E9DC] group">
                        <img src="{{ asset('image/PIC_3845.webp') }}" alt="Surveillance Tech Training" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105" />
                    </div>
                </div>

                <!-- Medical Tab Panel -->
                <div x-show="tab === 'medical'" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <div class="flex flex-col gap-4">
                        <h3 class="text-xl font-black text-brownie uppercase">First-Aid & Evacuation</h3>
                        <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                            Security officers are often the first responders in health emergencies. Our candidates study CPR, emergency bleeding management, and building evacuation layout coordination under Noida state authority codes.
                        </p>
                        <ul class="flex flex-col gap-2.5 text-xs sm:text-sm font-semibold text-coffee/85">
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> Red Cross guideline cardiopulmonary resuscitation (CPR)</li>
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> Stretcher transit and first-aid kits</li>
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> High-rise tower smoke evacuation protocols</li>
                        </ul>
                    </div>
                    <div class="h-64 sm:h-72 rounded-2xl overflow-hidden shadow-md bg-cream border border-[#F3E9DC] group">
                        <img src="{{ asset('image/PIC_3792.webp') }}" alt="First Aid & Emergency Drill" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105" />
                    </div>
                </div>

                <!-- Conduct Tab Panel -->
                <div x-show="tab === 'conduct'" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <div class="flex flex-col gap-4">
                        <h3 class="text-xl font-black text-brownie uppercase">Grooming & Client Relations</h3>
                        <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                            Guards represent the professional standards of our clients. We teach candidates visitor log entry discipline, conflict resolution, polite communication, and uniform grooming codes.
                        </p>
                        <ul class="flex flex-col gap-2.5 text-xs sm:text-sm font-semibold text-coffee/85">
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> Polite gate entry protocols</li>
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> Conflict de-escalation communication</li>
                            <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-caramel"></i> Daily uniform grooming inspections</li>
                        </ul>
                    </div>
                    <div class="h-64 sm:h-72 rounded-2xl overflow-hidden shadow-md bg-cream border border-[#F3E9DC] group">
                        <img src="{{ asset('image/PIC_3766.webp') }}" alt="Grooming and Squad Parade Inspection" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Academy Live Drill Photo Showcase Gallery -->
    <section class="py-20 bg-white border-b border-cream/35 w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            <div class="flex flex-col items-center text-center gap-3">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">ACADEMY PHOTO GALLERY</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Live Tactical Training & Parade Squads
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Gallery Image 1 -->
                <div class="group relative h-64 rounded-2xl overflow-hidden shadow-sm border border-[#F3E9DC]">
                    <img src="{{ asset('image/PIC_4855.webp') }}" alt="Mandatory PSARA Physical Training" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/85 via-brownie/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5 text-white">
                        <span class="text-xs font-bold text-caramel uppercase">Tactical Drills</span>
                        <h4 class="text-sm font-bold text-white mt-1">PSARA Physical Readiness</h4>
                    </div>
                </div>

                <!-- Gallery Image 2 -->
                <div class="group relative h-64 rounded-2xl overflow-hidden shadow-sm border border-[#F3E9DC]">
                    <img src="{{ asset('image/PIC_3766.webp') }}" alt="Morning Guard Inspection & Lineup" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/85 via-brownie/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5 text-white">
                        <span class="text-xs font-bold text-caramel uppercase">Squad Discipline</span>
                        <h4 class="text-sm font-bold text-white mt-1">Grooming & Parade Inspection</h4>
                    </div>
                </div>

                <!-- Gallery Image 3 -->
                <div class="group relative h-64 rounded-2xl overflow-hidden shadow-sm border border-[#F3E9DC]">
                    <img src="{{ asset('image/PIC_3788.webp') }}" alt="Commercial Asset Defense Briefing" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/85 via-brownie/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5 text-white">
                        <span class="text-xs font-bold text-caramel uppercase">Asset Defense</span>
                        <h4 class="text-sm font-bold text-white mt-1">Corporate Facility Training</h4>
                    </div>
                </div>

                <!-- Gallery Image 4 -->
                <div class="group relative h-64 rounded-2xl overflow-hidden shadow-sm border border-[#F3E9DC]">
                    <img src="{{ asset('image/PIC_3861.webp') }}" alt="Crowd Control & Screening Drills" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-brownie/85 via-brownie/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5 text-white">
                        <span class="text-xs font-bold text-caramel uppercase">Event Tactics</span>
                        <h4 class="text-sm font-bold text-white mt-1">Crowd Control & Stage Safety</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fire Drill Consultation CTA -->
    <section class="py-20 w-full bg-white">
        <div class="max-w-4xl mx-auto px-6 text-center flex flex-col items-center gap-6">
            <div class="w-14 h-14 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel shadow-sm">
                <i class="ri-fire-fill text-3xl"></i>
            </div>
            <h3 class="text-2xl sm:text-3xl font-black text-brownie uppercase tracking-tight">
                Corporate Fire Safety Audits
            </h3>
            <p class="text-xs sm:text-sm text-coffee/95 leading-relaxed font-medium max-w-2xl">
                Does your Noida commercial office or residential complex need a mock fire drill audit? NDS Security engineers can coordinate complete hazard drills, test high-rise fire pumps, and check safety escape compliance templates.
            </p>
            <a href="{{ route('contact') }}" class="mt-2 bg-gradient-to-r from-caramel via-[#c78b57] to-coffee hover:from-coffee hover:to-brownie text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider py-3.5 px-8 rounded-xl shadow-md transition-all hover:scale-105 active:scale-95">
                Schedule Drill Consultation
            </a>
        </div>
    </section>

</div>