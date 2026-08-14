<div class="w-full bg-white flex flex-col font-sans select-none">
    
    <!-- Hero Banner Section -->
    <section class="relative bg-gradient-to-br from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-20 overflow-hidden border-b border-caramel/35">
        <div class="absolute -top-12 -left-12 w-64 h-64 bg-caramel/20 rounded-full blur-[100px] pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full flex flex-col gap-4 text-center md:text-left">
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-black uppercase tracking-wider text-cream/70">
                <a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a>
                <span class="text-caramel/50">•</span>
                <span class="text-cream">About NDS Group</span>
            </div>
            
            <div class="flex flex-wrap items-center gap-3 justify-center md:justify-start mt-1">
                <span class="px-3 py-1 bg-caramel/20 border border-caramel/40 text-caramel font-black text-[10px] uppercase tracking-widest rounded-full">
                    ISO 9001:2015 CERTIFIED
                </span>
                <span class="px-3 py-1 bg-caramel/20 border border-caramel/40 text-caramel font-black text-[10px] uppercase tracking-widest rounded-full">
                    PSARA REGISTERED
                </span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-tight">
                NDS GROUP OF <span class="text-caramel underline decoration-caramel/40 underline-offset-8">COMPANIES</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-cream/80 max-w-3xl font-medium leading-relaxed mt-2">
                "We Protect So You Can Live Safe" — Your Trusted Partner in Safeguarding Life, Property & Assets Across India.
            </p>
        </div>
    </section>

    <!-- Key Highlights Stats Strip -->
    <section class="relative w-full bg-gradient-to-r from-[#2a1b10] via-brownie to-[#2a1b10] text-white py-12 border-b border-caramel/35">
        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center text-center">
                <div class="flex flex-col items-center justify-center border-r-0 sm:border-r border-cream/15 pr-0 sm:pr-4">
                    <h4 class="text-3xl sm:text-4xl font-black text-caramel tracking-tight">15+ Years</h4>
                    <p class="text-[10px] sm:text-xs font-bold text-cream/85 uppercase tracking-wider mt-1">Established in 2009</p>
                </div>
                <div class="flex flex-col items-center justify-center border-r-0 md:border-r border-cream/15 pr-0 md:pr-4">
                    <h4 class="text-3xl sm:text-4xl font-black text-caramel tracking-tight">24/7</h4>
                    <p class="text-[10px] sm:text-xs font-bold text-cream/85 uppercase tracking-wider mt-1">Command Center Ops</p>
                </div>
                <div class="flex flex-col items-center justify-center border-r-0 sm:border-r border-cream/15 pr-0 sm:pr-4">
                    <h4 class="text-3xl sm:text-4xl font-black text-caramel tracking-tight">100%</h4>
                    <p class="text-[10px] sm:text-xs font-bold text-cream/85 uppercase tracking-wider mt-1">Statutory Compliance</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <h4 class="text-3xl sm:text-4xl font-black text-caramel tracking-tight">Pan-India</h4>
                    <p class="text-[10px] sm:text-xs font-bold text-cream/85 uppercase tracking-wider mt-1">Operational Reach</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview Section -->
    <section class="py-20 w-full bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center w-full">
            <div class="lg:col-span-5 relative flex items-center justify-center p-4">
                <div class="relative z-10 w-full h-[420px] rounded-[28px] overflow-hidden border border-cream shadow-md">
                    <img src="{{ asset('image/image1.webp') }}"
                        alt="NDS Security Guard Operations"
                        class="w-full h-full object-cover object-center transition-transform duration-700 hover:scale-105" />
                </div>
            </div>

            <div class="lg:col-span-7 flex flex-col gap-6">
                <div class="self-start">
                    <span class="inline-block px-5 py-2 bg-[#FAF7F2] text-caramel font-extrabold text-xs sm:text-sm tracking-wider uppercase rounded-full shadow-sm border border-cream">
                        COMPANY OVERVIEW & HIGHLIGHTS
                    </span>
                </div>

                <h2 class="text-2xl sm:text-4xl font-black tracking-tight text-brownie leading-tight">
                    15+ Years of Uncompromising <span class="text-caramel">Protection & Trust</span>
                </h2>

                <ul class="flex flex-col gap-3 text-xs sm:text-sm text-coffee font-semibold leading-relaxed">
                    <li class="flex items-start gap-3">
                        <i class="ri-checkbox-circle-fill text-caramel text-base mt-0.5 shrink-0"></i>
                        <span><strong>Established in 2009:</strong> Over 15 years of proven excellence in delivering comprehensive, tailored security solutions.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ri-checkbox-circle-fill text-caramel text-base mt-0.5 shrink-0"></i>
                        <span><strong>PSARA & ISO Certified:</strong> Fully registered under the PSARA Act and ISO 9001:2015 certified for supreme quality assurance.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ri-checkbox-circle-fill text-caramel text-base mt-0.5 shrink-0"></i>
                        <span><strong>Multi-Sector Footprint:</strong> Protecting high-profile corporate hubs, industrial sites, retail centers, and government institutions.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ri-checkbox-circle-fill text-caramel text-base mt-0.5 shrink-0"></i>
                        <span><strong>Client Centricity:</strong> Fostering long-lasting client partnerships built on transparency, integrity, and result-oriented execution.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Vision, Ambition & Proactive Innovation -->
    <section class="py-20 bg-[#FDFBF7] border-y border-cream/50 w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            <div class="flex flex-col items-center text-center gap-3">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">OUR PHILOSOPHY</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Corporate Vision & Ambition
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl border border-cream shadow-sm flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                        <i class="ri-eye-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Corporate Vision</h3>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                        To remain an undisputed market leader across security segments in India by rendering dedicated, result-oriented, and reliable services backed by skilled managers.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-cream shadow-sm flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                        <i class="ri-[#target-line] text-2xl"></i>
                        <i class="ri-compass-3-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Our Ambition</h3>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                        "Securing Your World!" — Striving to be the premier single-window provider for end-to-end security and tower management requirements globally.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-cream shadow-sm flex flex-col gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-caramel/10 flex items-center justify-center text-caramel">
                        <i class="ri-lightbulb-fill text-2xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Proactive Innovation</h3>
                    <p class="text-xs sm:text-sm text-coffee/90 leading-relaxed font-semibold">
                        Anticipating evolving safety challenges before they arise, integrating smart technology with seasoned personnel to exceed client expectations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Security Solutions -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            <div class="flex flex-col items-center text-center gap-3">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">PORTFOLIO</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Core Security Solutions
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 bg-[#FAF7F2] border border-cream rounded-2xl flex flex-col gap-3">
                    <span class="text-xs font-black text-caramel">01.</span>
                    <h4 class="text-sm font-black text-brownie uppercase">Essential Services</h4>
                    <p class="text-xs text-coffee font-semibold leading-relaxed">
                        Professional Manned Guarding for corporate and industrial sites, structured gate access control, and secure transport security operations.
                    </p>
                </div>

                <div class="p-6 bg-[#FAF7F2] border border-cream rounded-2xl flex flex-col gap-3">
                    <span class="text-xs font-black text-caramel">02.</span>
                    <h4 class="text-sm font-black text-brownie uppercase">Specialised Services</h4>
                    <p class="text-xs text-coffee font-semibold leading-relaxed">
                        Mobile Guarding patrols, integrated tech solutions, help desk management, and round-the-clock Command Centre Operations.
                    </p>
                </div>

                <div class="p-6 bg-[#FAF7F2] border border-cream rounded-2xl flex flex-col gap-3">
                    <span class="text-xs font-black text-caramel">03.</span>
                    <h4 class="text-sm font-black text-brownie uppercase">Threat Mitigation</h4>
                    <p class="text-xs text-coffee font-semibold leading-relaxed">
                        Comprehensive risk assessments, loss prevention strategies, and physical security compliance audits tailored to site vulnerabilities.
                    </p>
                </div>

                <div class="p-6 bg-[#FAF7F2] border border-cream rounded-2xl flex flex-col gap-3">
                    <span class="text-xs font-black text-caramel">04.</span>
                    <h4 class="text-sm font-black text-brownie uppercase">On-Demand Services</h4>
                    <p class="text-xs text-coffee font-semibold leading-relaxed">
                        High-profile event security management, VIP Executive Protection (Bouncers), and Rapid Response Teams (RRT) for emergency dispatch.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5-Step Continuous Training Pipeline -->
    <section class="py-20 bg-cream/10 border-y border-cream/40 w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-12">
            <div class="flex flex-col items-center text-center gap-3">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">TACTICAL PREPAREDNESS</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    5-Step Continuous Training Pipeline
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
                <p class="text-xs sm:text-sm text-coffee/80 max-w-2xl font-semibold mt-1">
                    Digital Learning Platform: Tab & Mobile-based AV training modules with real-time customer reports via ROCC.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="bg-white p-5 rounded-2xl border border-cream shadow-2xs flex flex-col gap-2">
                    <span class="px-2.5 py-1 bg-caramel/10 text-caramel font-black text-[10px] uppercase rounded-md self-start">STEP 1</span>
                    <h4 class="text-xs font-black text-brownie uppercase">Basic Intro</h4>
                    <p class="text-[11px] text-coffee font-semibold leading-normal">NDS standards, PSARA legal compliance, conduct & professional behavior.</p>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-cream shadow-2xs flex flex-col gap-2">
                    <span class="px-2.5 py-1 bg-caramel/10 text-caramel font-black text-[10px] uppercase rounded-md self-start">STEP 2</span>
                    <h4 class="text-xs font-black text-brownie uppercase">Pre-Assign</h4>
                    <p class="text-[11px] text-coffee font-semibold leading-normal">Client-specific SOPs, post duties, and site access requirements.</p>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-cream shadow-2xs flex flex-col gap-2">
                    <span class="px-2.5 py-1 bg-caramel/10 text-caramel font-black text-[10px] uppercase rounded-md self-start">STEP 3</span>
                    <h4 class="text-xs font-black text-brownie uppercase">On-Site</h4>
                    <p class="text-[11px] text-coffee font-semibold leading-normal">Hands-on practical training as per the site security manual.</p>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-cream shadow-2xs flex flex-col gap-2">
                    <span class="px-2.5 py-1 bg-caramel/10 text-caramel font-black text-[10px] uppercase rounded-md self-start">STEP 4</span>
                    <h4 class="text-xs font-black text-brownie uppercase">Refresher</h4>
                    <p class="text-[11px] text-coffee font-semibold leading-normal">First Aid, Fire Prevention, Traffic Control & Emergency Drills.</p>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-cream shadow-2xs flex flex-col gap-2">
                    <span class="px-2.5 py-1 bg-caramel/10 text-caramel font-black text-[10px] uppercase rounded-md self-start">STEP 5</span>
                    <h4 class="text-xs font-black text-brownie uppercase">Specialized</h4>
                    <p class="text-[11px] text-coffee font-semibold leading-normal">Control room ops, tech integration, help desk & mailroom management.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rapid Response System & Employee Welfare -->
    <section class="py-20 bg-white w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Dual-Layered Quick Response System -->
            <div class="p-8 rounded-3xl border border-cream bg-[#FAF7F2] flex flex-col gap-5">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-caramel/15 flex items-center justify-center text-caramel">
                        <i class="ri-alarm-warning-fill text-xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Dual-Layered Quick Response System</h3>
                </div>
                <ul class="flex flex-col gap-3 text-xs sm:text-sm text-coffee font-semibold leading-relaxed">
                    <li class="flex items-start gap-2.5">
                        <i class="ri-shield-flash-line text-caramel text-base shrink-0 mt-0.5"></i>
                        <span><strong>Internal Action Team:</strong> Site Security Managers, Main Gate Security Officers, and EHS Managers.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="ri-car-line text-caramel text-base shrink-0 mt-0.5"></i>
                        <span><strong>External Action Network:</strong> Mobile NDS QRT vehicles dispatched in coordination with local police (SHO).</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="ri-hospital-line text-caramel text-base shrink-0 mt-0.5"></i>
                        <span><strong>Emergency Sync:</strong> Direct protocols with nearest hospitals, ambulance services, and fire stations.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="ri-time-line text-caramel text-base shrink-0 mt-0.5"></i>
                        <span><strong>24/7 Readiness:</strong> Ensuring immediate incident containment and minimal response downtime.</span>
                    </li>
                </ul>
            </div>

            <!-- Employee Welfare & Retention Model -->
            <div class="p-8 rounded-3xl border border-cream bg-[#FAF7F2] flex flex-col gap-5">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-caramel/15 flex items-center justify-center text-caramel">
                        <i class="ri-heart-pulse-fill text-xl"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-brownie uppercase">Employee Welfare & Retention Model</h3>
                </div>
                <ul class="flex flex-col gap-3 text-xs sm:text-sm text-coffee font-semibold leading-relaxed">
                    <li class="flex items-start gap-2.5">
                        <i class="ri-bank-card-line text-caramel text-base shrink-0 mt-0.5"></i>
                        <span><strong>Financial Assurance:</strong> Guaranteed timely disbursement of salaries alongside Welfare Sewa Trust emergency relief.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="ri-health-book-line text-caramel text-base shrink-0 mt-0.5"></i>
                        <span><strong>Health & Insurance:</strong> Group Insurance up to Rs 3 Lacs for standard guards and Rs 5 Lacs for high-risk personnel + Practo consultations.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="ri-trophy-line text-caramel text-base shrink-0 mt-0.5"></i>
                        <span><strong>Growth & Recognition:</strong> Quarterly "Guard of the Quarter" cash rewards, structured promotion pathways, and formal grievance redressal.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Key Corporate Clients Safeguarded Section -->
    <section class="py-20 bg-[#FDFBF7] border-t border-cream/50 w-full">
        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full flex flex-col gap-10">
            <div class="flex flex-col items-center text-center gap-3">
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-caramel uppercase">CLIENT PORTFOLIO BY SECTOR</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black tracking-tight text-brownie">
                    Key Corporate Clients Safeguarded
                </h2>
                <div class="w-12 h-0.5 bg-caramel mt-1"></div>
            </div>

            <div class="overflow-hidden bg-white border border-cream rounded-3xl shadow-sm">
                <div class="divide-y divide-cream/70 text-xs sm:text-sm">
                    <div class="p-6 flex flex-col md:flex-row gap-4 items-start md:items-center">
                        <span class="px-3.5 py-1 bg-caramel/10 text-caramel font-black text-xs uppercase rounded-lg w-full md:w-56 shrink-0">Real Estate & Commercial</span>
                        <p class="font-semibold text-coffee leading-relaxed">CBRE, JLL, Gaurs Group, ATS, Bhutani Infra, Jaypee Group, Arihant Group, Sikka Group, Purvanchal</p>
                    </div>

                    <div class="p-6 flex flex-col md:flex-row gap-4 items-start md:items-center">
                        <span class="px-3.5 py-1 bg-caramel/10 text-caramel font-black text-xs uppercase rounded-lg w-full md:w-56 shrink-0">Automotive & Tech</span>
                        <p class="font-semibold text-coffee leading-relaxed">Kia Motors, Smiths Detection, Allied Motors, Autonix</p>
                    </div>

                    <div class="p-6 flex flex-col md:flex-row gap-4 items-start md:items-center">
                        <span class="px-3.5 py-1 bg-caramel/10 text-caramel font-black text-xs uppercase rounded-lg w-full md:w-56 shrink-0">Retail & E-Commerce</span>
                        <p class="font-semibold text-coffee leading-relaxed">BigBasket, FreshToHome, Kalyan Jewellers, Gaur City Mall, Spectrum Metro</p>
                    </div>

                    <div class="p-6 flex flex-col md:flex-row gap-4 items-start md:items-center">
                        <span class="px-3.5 py-1 bg-caramel/10 text-caramel font-black text-xs uppercase rounded-lg w-full md:w-56 shrink-0">Healthcare & Pharma</span>
                        <p class="font-semibold text-coffee leading-relaxed">Sun Pharma, Asian Hospital, Siddhi Multispecialty Hospital, Healing Tree Hospital</p>
                    </div>

                    <div class="p-6 flex flex-col md:flex-row gap-4 items-start md:items-center">
                        <span class="px-3.5 py-1 bg-caramel/10 text-caramel font-black text-xs uppercase rounded-lg w-full md:w-56 shrink-0">Media & Education</span>
                        <p class="font-semibold text-coffee leading-relaxed">Marwah Studios, Asian School of Media Studies (ASMS), IMS International</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>