<div class="w-full bg-white flex flex-col font-sans" x-data="{ tab: 'physical' }">

    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">Training</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                NDS Training <span class="text-caramel underline decoration-caramel/40 underline-offset-8">Academy</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-2xl font-medium leading-relaxed mt-2">
                Every NDS security guard is trained, tested, and vetted at our dedicated tactical academy. We maintain compliance with national security guidelines.
            </p>
        </div>
    </section>

    <!-- Core Philosophy Section -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
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
                        <span class="text-xs sm:text-sm font-semibold text-coffee/90 leading-relaxed">100+ Hours of mandatory testing</span>
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
            <!-- Right Card (5 columns) -->
            <div class="lg:col-span-5 bg-gradient-to-br from-[#2d1e12] to-brownie p-8 rounded-[32px] border border-caramel/20 text-white shadow-lg relative overflow-hidden">
                <div class="absolute -top-12 -right-12 w-36 h-36 bg-caramel/10 rounded-full blur-xl pointer-events-none"></div>
                
                <h3 class="text-base sm:text-lg font-black text-caramel uppercase tracking-widest mb-4">PSARA Training Code</h3>
                <p class="text-xs sm:text-sm text-cream/70 leading-relaxed font-semibold mb-6">
                    In compliance with the Private Security Agencies (Regulation) Act, NDS enforces a strict 100-hour training regimen for new recruits covering security, physical defense, and fire hazard evacuation layouts.
                </p>
                <div class="flex flex-col gap-4 border-t border-caramel/25 pt-6">
                    <div class="flex justify-between items-center text-xs">
                        <span class="font-bold text-cream/60">PHYSICAL DRILLS</span>
                        <span class="font-black text-caramel">40 HOURS</span>
                    </div>
                    <div class="flex justify-between items-center text-xs">
                        <span class="font-bold text-cream/60">FIRE & SAFETY SYSTEMS</span>
                        <span class="font-black text-caramel">30 HOURS</span>
                    </div>
                    <div class="flex justify-between items-center text-xs">
                        <span class="font-bold text-cream/60">CUSTOMER SERVICE & CONDUCT</span>
                        <span class="font-black text-caramel">30 HOURS</span>
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
                    <div class="h-64 rounded-2xl overflow-hidden shadow-sm bg-cream">
                        <img src="https://images.unsplash.com/photo-1508873696983-2df515122519?auto=format&fit=crop&w=800&q=80" alt="Physical Training" class="w-full h-full object-cover" />
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
                    <div class="h-64 rounded-2xl overflow-hidden shadow-sm bg-cream">
                        <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=800&q=80" alt="Surveillance Tech Training" class="w-full h-full object-cover" />
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
                    <div class="h-64 rounded-2xl overflow-hidden shadow-sm bg-cream">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" alt="First Aid training" class="w-full h-full object-cover" />
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
                    <div class="h-64 rounded-2xl overflow-hidden shadow-sm bg-cream">
                        <img src="https://images.unsplash.com/photo-1521791136368-1a8682707636?auto=format&fit=crop&w=800&q=80" alt="Grooming and conduct" class="w-full h-full object-cover" />
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