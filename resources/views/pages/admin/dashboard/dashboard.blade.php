<div class="space-y-8 font-sans">
    
    <!-- Welcome Header (Clean Typography) -->
    <div class="flex flex-col gap-1.5 sm:flex-row sm:items-center justify-between pb-3.5 border-b border-[#F3E9DC]/35">
        <div>
            <h2 class="text-xl font-extrabold text-brownie tracking-tight">Dashboard Overview</h2>
            <p class="text-xs text-brownie/45 font-medium mt-0.5">Control console for security deployments, rosters, and audit logs.</p>
        </div>
        <div class="self-start sm:self-center shrink-0 flex items-center">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-emerald-50 text-emerald-700 text-[10px] font-bold border border-emerald-100/60 uppercase tracking-wide">
                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-pulse"></span>
                <span>Systems Active</span>
            </span>
        </div>
    </div>

    <!-- Quick Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Stat Card 1 -->
        <div class="bg-white p-5 rounded-2xl border border-[#F3E9DC]/60 shadow-[0_4px_16px_-4px_rgba(94,48,35,0.02)] flex flex-col justify-between group">
            <div class="flex items-center justify-between">
                <span class="text-[10px] font-bold text-brownie/45 uppercase tracking-wider">Active Guards</span>
                <div class="w-8 h-8 rounded-lg bg-[#FAF9F5] border border-[#F3E9DC]/45 flex items-center justify-center text-brownie/60">
                    <i class="ri-user-shield-line text-sm"></i>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="text-2xl font-extrabold text-brownie">524</h3>
                <p class="text-[10px] text-emerald-600 mt-0.5 font-semibold flex items-center gap-0.5">
                    <i class="ri-arrow-up-line"></i>
                    <span>+18 this week</span>
                </p>
            </div>
        </div>

        <!-- Stat Card 2 -->
        <div class="bg-white p-5 rounded-2xl border border-[#F3E9DC]/60 shadow-[0_4px_16px_-4px_rgba(94,48,35,0.02)] flex flex-col justify-between group">
            <div class="flex items-center justify-between">
                <span class="text-[10px] font-bold text-brownie/45 uppercase tracking-wider">Secured Sites</span>
                <div class="w-8 h-8 rounded-lg bg-[#FAF9F5] border border-[#F3E9DC]/45 flex items-center justify-center text-brownie/60">
                    <i class="ri-map-pin-5-line text-sm"></i>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="text-2xl font-extrabold text-brownie">182</h3>
                <p class="text-[10px] text-emerald-600 mt-0.5 font-semibold flex items-center gap-0.5">
                    <i class="ri-arrow-up-line"></i>
                    <span>+4 new projects</span>
                </p>
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-white p-5 rounded-2xl border border-[#F3E9DC]/60 shadow-[0_4px_16px_-4px_rgba(94,48,35,0.02)] flex flex-col justify-between group">
            <div class="flex items-center justify-between">
                <span class="text-[10px] font-bold text-brownie/45 uppercase tracking-wider">Active Shifts</span>
                <div class="w-8 h-8 rounded-lg bg-[#FAF9F5] border border-[#F3E9DC]/45 flex items-center justify-center text-brownie/60">
                    <i class="ri-time-line text-sm"></i>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="text-2xl font-extrabold text-brownie">3 Shifts</h3>
                <p class="text-[10px] text-brownie/50 mt-0.5 font-semibold flex items-center gap-0.5">
                    <i class="ri-checkbox-circle-line text-[#C08552]"></i>
                    <span>Roster operational</span>
                </p>
            </div>
        </div>

        <!-- Stat Card 4 -->
        <div class="bg-white p-5 rounded-2xl border border-[#F3E9DC]/60 shadow-[0_4px_16px_-4px_rgba(94,48,35,0.02)] flex flex-col justify-between group">
            <div class="flex items-center justify-between">
                <span class="text-[10px] font-bold text-brownie/45 uppercase tracking-wider">Careers</span>
                <div class="w-8 h-8 rounded-lg bg-[#FAF9F5] border border-[#F3E9DC]/45 flex items-center justify-center text-brownie/60">
                    <i class="ri-briefcase-line text-sm"></i>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="text-2xl font-extrabold text-brownie">8 Posts</h3>
                <p class="text-[10px] text-amber-600 mt-0.5 font-semibold flex items-center gap-0.5">
                    <i class="ri-error-warning-line"></i>
                    <span>42 applicants pending</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Tables & Timelines -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Left: Deployments -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-[#F3E9DC]/60 p-6 shadow-[0_4px_16px_-4px_rgba(94,48,35,0.02)]">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h3 class="text-sm font-extrabold text-brownie">Active Deployments</h3>
                    <p class="text-[10px] text-brownie/45 mt-0.5">Currently assigned guarding divisions.</p>
                </div>
                <button class="text-[10px] font-bold text-[#C08552] hover:text-[#895737] transition-all flex items-center gap-0.5">
                    <span>View Roster</span>
                    <i class="ri-arrow-right-s-line text-xs"></i>
                </button>
            </div>

            <!-- Minimalist Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs divide-y divide-[#F3E9DC]/45">
                    <thead>
                        <tr class="text-[9px] text-brownie/40 font-bold uppercase tracking-wider">
                            <th class="pb-2.5 font-semibold">Location</th>
                            <th class="pb-2.5 font-semibold">Supervisor</th>
                            <th class="pb-2.5 font-semibold text-center">Staff Count</th>
                            <th class="pb-2.5 font-semibold text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F3E9DC]/25 font-semibold text-brownie/80">
                        <tr class="hover:bg-[#FAF9F5]/30 transition-colors">
                            <td class="py-3 pr-2">
                                <p class="font-extrabold text-brownie">Gold Valley Township, Sec-62</p>
                                <p class="text-[10px] text-brownie/45 font-medium mt-0.5">Residential</p>
                            </td>
                            <td class="py-3 pr-2 font-medium">Pawan Jaiswal</td>
                            <td class="py-3 pr-2 text-center">14 Guards</td>
                            <td class="py-3 text-right">
                                <span class="inline-block px-2 py-0.5 text-[9px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-100/50 rounded-md">Day Shift</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]/30 transition-colors">
                            <td class="py-3 pr-2">
                                <p class="font-extrabold text-brownie">Vibe Tech Towers, Sec-135</p>
                                <p class="text-[10px] text-brownie/45 font-medium mt-0.5">Corporate</p>
                            </td>
                            <td class="py-3 pr-2 font-medium">Deepak Panwar</td>
                            <td class="py-3 pr-2 text-center">22 Guards</td>
                            <td class="py-3 text-right">
                                <span class="inline-block px-2 py-0.5 text-[9px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-100/50 rounded-md">Day Shift</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]/30 transition-colors">
                            <td class="py-3 pr-2">
                                <p class="font-extrabold text-brownie">Metro Plaza Mall, Sec-18</p>
                                <p class="text-[10px] text-brownie/45 font-medium mt-0.5">Commercial</p>
                            </td>
                            <td class="py-3 pr-2 font-medium">Aditya Panwar</td>
                            <td class="py-3 pr-2 text-center">8 Guards</td>
                            <td class="py-3 text-right">
                                <span class="inline-block px-2 py-0.5 text-[9px] font-bold bg-amber-50 text-amber-700 border border-amber-100/50 rounded-md">Handover</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right: Activity Logs -->
        <div class="bg-white rounded-2xl border border-[#F3E9DC]/60 p-6 shadow-[0_4px_16px_-4px_rgba(94,48,35,0.02)] flex flex-col">
            <div class="mb-5">
                <h3 class="text-sm font-extrabold text-brownie">System Activity</h3>
                <p class="text-[10px] text-brownie/45 mt-0.5">Real-time alerts and audits.</p>
            </div>

            <!-- Minimalist Timeline -->
            <div class="relative pl-4 border-l border-[#F3E9DC]/60 space-y-5 flex-grow">
                <!-- Item 1 -->
                <div class="relative">
                    <span class="absolute -left-[21px] top-1 w-2.5 h-2.5 bg-emerald-500 border-2 border-white rounded-full"></span>
                    <p class="text-[11px] font-extrabold text-brownie">Patrol Audited</p>
                    <p class="text-[10px] text-brownie/55 mt-0.5">Gold Valley Checkpoints scanned successfully.</p>
                    <span class="text-[9px] text-brownie/35 mt-0.5 block">15 mins ago</span>
                </div>

                <!-- Item 2 -->
                <div class="relative">
                    <span class="absolute -left-[21px] top-1 w-2.5 h-2.5 bg-[#C08552] border-2 border-white rounded-full"></span>
                    <p class="text-[11px] font-extrabold text-brownie">Roster Rotation</p>
                    <p class="text-[10px] text-brownie/55 mt-0.5">Day Shift login verified for 36 units.</p>
                    <span class="text-[9px] text-brownie/35 mt-0.5 block">1 hour ago</span>
                </div>

                <!-- Item 3 -->
                <div class="relative">
                    <span class="absolute -left-[21px] top-1 w-2.5 h-2.5 bg-blue-400 border-2 border-white rounded-full"></span>
                    <p class="text-[11px] font-extrabold text-brownie">Log Archival</p>
                    <p class="text-[10px] text-brownie/55 mt-0.5">Weekly attendance backup completed.</p>
                    <span class="text-[9px] text-brownie/35 mt-0.5 block">3 hours ago</span>
                </div>
            </div>
        </div>

    </div>

</div>
