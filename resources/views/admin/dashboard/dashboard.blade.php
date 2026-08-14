<div class="space-y-8 select-none">

    <!-- 5 Metric KPI Stat Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5">
        
        <!-- Card 1: Contact Inquiries -->
        <a href="{{ route('admin.contact') }}" wire:navigate class="group bg-white p-5 rounded-2xl border border-[#F3E9DC] shadow-2xs hover:border-[#C08552]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-4">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-[#C08552]/10 text-[#C08552] group-hover:bg-[#C08552] group-hover:text-white flex items-center justify-center text-xl transition-all">
                    <i class="ri-mail-open-line"></i>
                </div>
                <span class="text-[10px] font-bold text-brownie/40 uppercase tracking-wider">Inquiries</span>
            </div>
            <div>
                <span class="text-2xl sm:text-3xl font-black text-brownie tracking-tight block">{{ $totalInquiries }}</span>
                <span class="text-[11px] font-bold text-brownie/60 mt-1 block">Customer Messages</span>
            </div>
        </a>

        <!-- Card 2: Applications -->
        <a href="{{ route('admin.job-applications') }}" wire:navigate class="group bg-white p-5 rounded-2xl border border-[#F3E9DC] shadow-2xs hover:border-[#C08552]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-4">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-[#C08552]/10 text-[#C08552] group-hover:bg-[#C08552] group-hover:text-white flex items-center justify-center text-xl transition-all">
                    <i class="ri-user-shared-line"></i>
                </div>
                <span class="text-[10px] font-bold text-brownie/40 uppercase tracking-wider">Applications</span>
            </div>
            <div>
                <span class="text-2xl sm:text-3xl font-black text-brownie tracking-tight block">{{ $totalApplications }}</span>
                <span class="text-[11px] font-bold text-brownie/60 mt-1 block">Job Resumes Received</span>
            </div>
        </a>

        <!-- Card 3: Security Services -->
        <a href="{{ route('admin.services.index') }}" wire:navigate class="group bg-white p-5 rounded-2xl border border-[#F3E9DC] shadow-2xs hover:border-[#C08552]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-4">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-[#C08552]/10 text-[#C08552] group-hover:bg-[#C08552] group-hover:text-white flex items-center justify-center text-xl transition-all">
                    <i class="ri-shield-star-line"></i>
                </div>
                <span class="text-[10px] font-bold text-brownie/40 uppercase tracking-wider">Services</span>
            </div>
            <div>
                <span class="text-2xl sm:text-3xl font-black text-brownie tracking-tight block">{{ $totalServices }}</span>
                <span class="text-[11px] font-bold text-brownie/60 mt-1 block">Active Offerings</span>
            </div>
        </a>

        <!-- Card 4: Active Job Posts -->
        <a href="{{ route('admin.job-posts') }}" wire:navigate class="group bg-white p-5 rounded-2xl border border-[#F3E9DC] shadow-2xs hover:border-[#C08552]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-4">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-[#C08552]/10 text-[#C08552] group-hover:bg-[#C08552] group-hover:text-white flex items-center justify-center text-xl transition-all">
                    <i class="ri-briefcase-line"></i>
                </div>
                <span class="text-[10px] font-bold text-brownie/40 uppercase tracking-wider">Vacancies</span>
            </div>
            <div>
                <span class="text-2xl sm:text-3xl font-black text-brownie tracking-tight block">{{ $totalJobPosts }}</span>
                <span class="text-[11px] font-bold text-brownie/60 mt-1 block">Open Vacancies</span>
            </div>
        </a>

        <!-- Card 5: Corporate Clients -->
        <a href="{{ route('admin.clientele') }}" wire:navigate class="group bg-white p-5 rounded-2xl border border-[#F3E9DC] shadow-2xs hover:border-[#C08552]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-4">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-[#C08552]/10 text-[#C08552] group-hover:bg-[#C08552] group-hover:text-white flex items-center justify-center text-xl transition-all">
                    <i class="ri-team-line"></i>
                </div>
                <span class="text-[10px] font-bold text-brownie/40 uppercase tracking-wider">Clientele</span>
            </div>
            <div>
                <span class="text-2xl sm:text-3xl font-black text-brownie tracking-tight block">{{ $totalClients }}</span>
                <span class="text-[11px] font-bold text-brownie/60 mt-1 block">Client Logos</span>
            </div>
        </a>

    </div>

    <!-- Quick Shortcuts Bar -->
    <div class="bg-white p-6 rounded-2xl border border-[#F3E9DC] shadow-2xs flex flex-col gap-4">
        <h3 class="text-xs font-black tracking-widest text-brownie uppercase">Quick Management Shortcuts</h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-3">
            
            <a href="{{ route('admin.services.add') }}" wire:navigate class="p-3.5 rounded-xl bg-[#FAF9F5] hover:bg-[#C08552]/10 border border-[#F3E9DC] hover:border-[#C08552]/30 flex flex-col items-center text-center gap-2 group transition-all">
                <i class="ri-add-circle-fill text-xl text-[#C08552] group-hover:scale-110 transition-transform"></i>
                <span class="text-xs font-bold text-brownie">Add Service</span>
            </a>

            <a href="{{ route('admin.homeslider') }}" wire:navigate class="p-3.5 rounded-xl bg-[#FAF9F5] hover:bg-[#C08552]/10 border border-[#F3E9DC] hover:border-[#C08552]/30 flex flex-col items-center text-center gap-2 group transition-all">
                <i class="ri-slideshow-line text-xl text-[#C08552] group-hover:scale-110 transition-transform"></i>
                <span class="text-xs font-bold text-brownie">Hero Sliders</span>
            </a>

            <a href="{{ route('admin.job-posts') }}" wire:navigate class="p-3.5 rounded-xl bg-[#FAF9F5] hover:bg-[#C08552]/10 border border-[#F3E9DC] hover:border-[#C08552]/30 flex flex-col items-center text-center gap-2 group transition-all">
                <i class="ri-file-add-line text-xl text-[#C08552] group-hover:scale-110 transition-transform"></i>
                <span class="text-xs font-bold text-brownie">Post Job</span>
            </a>

            <a href="{{ route('admin.gallery') }}" wire:navigate class="p-3.5 rounded-xl bg-[#FAF9F5] hover:bg-[#C08552]/10 border border-[#F3E9DC] hover:border-[#C08552]/30 flex flex-col items-center text-center gap-2 group transition-all">
                <i class="ri-image-add-line text-xl text-[#C08552] group-hover:scale-110 transition-transform"></i>
                <span class="text-xs font-bold text-brownie">Upload Gallery</span>
            </a>

            <a href="{{ route('admin.profile') }}" wire:navigate class="p-3.5 rounded-xl bg-[#FAF9F5] hover:bg-[#C08552]/10 border border-[#F3E9DC] hover:border-[#C08552]/30 flex flex-col items-center text-center gap-2 group transition-all">
                <i class="ri-user-key-line text-xl text-[#C08552] group-hover:scale-110 transition-transform"></i>
                <span class="text-xs font-bold text-brownie">Security Profile</span>
            </a>

            <a href="{{ route('admin.settings') }}" wire:navigate class="p-3.5 rounded-xl bg-[#FAF9F5] hover:bg-[#C08552]/10 border border-[#F3E9DC] hover:border-[#C08552]/30 flex flex-col items-center text-center gap-2 group transition-all">
                <i class="ri-[#C08552] ri-settings-3-line text-xl text-[#C08552] group-hover:scale-110 transition-transform"></i>
                <span class="text-xs font-bold text-brownie">Site Settings</span>
            </a>

        </div>
    </div>

    <!-- Data Tables Grid Section (2 columns) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Left Table: Recent Contact Inquiries (6 columns) -->
        <div class="lg:col-span-6 bg-white rounded-2xl border border-[#F3E9DC] p-6 shadow-2xs flex flex-col gap-5">
            <div class="flex items-center justify-between pb-3 border-b border-[#F3E9DC]">
                <div class="flex items-center gap-2">
                    <i class="ri-mail-send-line text-lg text-[#C08552]"></i>
                    <h3 class="text-sm font-extrabold text-brownie uppercase">Recent Contact Inquiries</h3>
                </div>
                <a href="{{ route('admin.contact') }}" wire:navigate class="text-[11px] font-bold text-[#C08552] hover:underline uppercase">View All</a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-[10px] font-black uppercase tracking-wider text-brownie/45 border-b border-[#F3E9DC]">
                            <th class="py-2.5 px-3">Name</th>
                            <th class="py-2.5 px-3">Subject</th>
                            <th class="py-2.5 px-3">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F3E9DC]/60 text-xs font-semibold text-brownie">
                        @forelse($recentInquiries as $inquiry)
                            <tr class="hover:bg-[#FAF9F5] transition-colors">
                                <td class="py-3 px-3">
                                    <span class="font-bold text-brownie block">{{ $inquiry->name }}</span>
                                    <span class="text-[10px] text-brownie/50 font-medium block truncate max-w-[140px]">{{ $inquiry->email }}</span>
                                </td>
                                <td class="py-3 px-3 text-brownie/80">
                                    <span class="truncate block max-w-[150px]">{{ $inquiry->subject }}</span>
                                </td>
                                <td class="py-3 px-3 text-[10px] text-brownie/50 whitespace-nowrap">
                                    {{ $inquiry->created_at ? $inquiry->created_at->format('M d, Y') : 'Recent' }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-6 text-center text-xs text-brownie/50 font-medium">No contact inquiries received yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right Table: Recent Job Applications (6 columns) -->
        <div class="lg:col-span-6 bg-white rounded-2xl border border-[#F3E9DC] p-6 shadow-2xs flex flex-col gap-5">
            <div class="flex items-center justify-between pb-3 border-b border-[#F3E9DC]">
                <div class="flex items-center gap-2">
                    <i class="ri-user-shared-line text-lg text-[#C08552]"></i>
                    <h3 class="text-sm font-extrabold text-brownie uppercase">Recent Career Applications</h3>
                </div>
                <a href="{{ route('admin.job-applications') }}" wire:navigate class="text-[11px] font-bold text-[#C08552] hover:underline uppercase">View All</a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-[10px] font-black uppercase tracking-wider text-brownie/45 border-b border-[#F3E9DC]">
                            <th class="py-2.5 px-3">Candidate</th>
                            <th class="py-2.5 px-3">Email</th>
                            <th class="py-2.5 px-3">Exp.</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F3E9DC]/60 text-xs font-semibold text-brownie">
                        @forelse($recentApplications as $app)
                            <tr class="hover:bg-[#FAF9F5] transition-colors">
                                <td class="py-3 px-3">
                                    <span class="font-bold text-brownie block">{{ $app->name }}</span>
                                    <span class="text-[10px] text-brownie/50 font-medium block truncate max-w-[140px]">{{ $app->phone }}</span>
                                </td>
                                <td class="py-3 px-3 text-brownie/80">
                                    <span class="truncate block max-w-[150px] font-bold text-[#C08552]">{{ $app->email }}</span>
                                </td>
                                <td class="py-3 px-3 text-xs font-bold text-brownie/70 whitespace-nowrap">
                                    {{ $app->experience }} Yrs
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-6 text-center text-xs text-brownie/50 font-medium">No job applications submitted yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>