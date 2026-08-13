<div 
    x-data="{ viewOpen: false, deleteOpen: false }" 
    @close-modal.window="viewOpen = false" 
    @close-delete-modal.window="deleteOpen = false" 
    class="space-y-6 font-sans">

    <!-- Header Section -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">Job Applications & Resumes</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Review candidate submissions, experience details, and inspect applicant resumes.</p>
        </div>
        <div class="flex items-center gap-2">
            <a 
                href="{{ route('admin.job-posts') }}" 
                class="inline-flex items-center gap-1.5 px-3.5 py-2 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all">
                <i class="ri-file-list-3-line text-sm"></i>
                <span>Manage Job Posts</span>
            </a>
        </div>
    </div>

    <!-- Session Messages -->
    @if (session()->has('message'))
        <div class="p-3 rounded-sm bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center justify-between shadow-xs">
            <div class="flex items-center gap-2">
                <i class="ri-checkbox-circle-fill text-emerald-600 text-sm"></i>
                <span>{{ session('message') }}</span>
            </div>
            <button @click="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800">
                <i class="ri-close-line"></i>
            </button>
        </div>
    @endif

    <!-- Controls Bar -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-3 border border-[#F3E9DC]/70 rounded-sm">
        <div class="relative w-full sm:max-w-xs">
            <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/45 text-sm"></i>
            <input 
                wire:model.live="search" 
                type="search" 
                placeholder="Search candidates, emails, experience..." 
                class="w-full pl-9 pr-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
            />
        </div>
        
        <div class="text-[10px] text-brownie/60 font-bold uppercase tracking-wider">
            Total: {{ $applications->total() }} Applications
        </div>
    </div>

    <!-- Data Table -->
    <div class="bg-white border border-[#F3E9DC] rounded-sm overflow-hidden shadow-2xs">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-[#FAF9F5]/60 border-b border-[#F3E9DC] text-[10px] font-bold text-brownie/60 uppercase tracking-wider">
                    <th class="py-3 px-4">Applicant</th>
                    <th class="py-3 px-4">Contact Info</th>
                    <th class="py-3 px-4">Experience</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Applied Date</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#F3E9DC]/40 text-xs text-brownie">
                @forelse($applications as $app)
                    <tr class="hover:bg-[#FAF9F5]/30 transition-colors">
                        <td class="py-3 px-4">
                            <div class="font-semibold text-brownie">{{ $app->name }}</div>
                            <div class="text-[11px] text-brownie/60 font-medium">{{ $app->email }}</div>
                        </td>
                        <td class="py-3 px-4 text-brownie/80 font-medium">
                            <div class="flex items-center gap-1">
                                <i class="ri-phone-line text-[#C08552] text-xs"></i>
                                <span>{{ $app->phone }}</span>
                            </div>
                            <div class="text-[10px] text-brownie/50 truncate max-w-xs" title="{{ $app->address }}">{{ $app->address }}</div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-xs text-[10px] font-bold bg-stone-100 text-stone-700 border border-stone-200">
                                <i class="ri-history-line text-stone-500"></i>
                                <span>{{ $app->experience }}</span>
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <button 
                                wire:click="toggleStatus({{ $app->id }})" 
                                title="Toggle status">
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-xs text-[10px] font-bold border transition-colors cursor-pointer {{ $app->status === 'open' ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $app->status === 'open' ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                                    <span class="capitalize">{{ $app->status }}</span>
                                </span>
                            </button>
                        </td>
                        <td class="py-3 px-4 text-brownie/60 text-[11px] font-medium">
                            {{ $app->created_at ? $app->created_at->format('M d, Y') : 'N/A' }}
                        </td>
                        <td class="py-3 px-4 text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button 
                                    wire:click="viewApplication({{ $app->id }})" 
                                    @click="viewOpen = true" 
                                    class="p-1 px-2 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-[#C08552] text-brownie/80 hover:text-[#C08552] font-semibold text-[11px] inline-flex items-center gap-1 transition-colors" 
                                    title="View Resume & Details">
                                    <i class="ri-file-text-line text-xs"></i>
                                    <span>Resume</span>
                                </button>
                                
                                @if($app->resume_url)
                                    <a 
                                        href="{{ $app->resume_url }}" 
                                        target="_blank" 
                                        download
                                        class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-[#C08552]/40 text-brownie/70 hover:text-[#C08552] transition-colors" 
                                        title="Download Resume">
                                        <i class="ri-download-2-line text-xs"></i>
                                    </a>
                                @endif

                                <button 
                                    wire:click="confirmDelete({{ $app->id }})" 
                                    @click="deleteOpen = true" 
                                    class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-rose-300 text-brownie/70 hover:text-rose-600 transition-colors" 
                                    title="Delete Record">
                                    <i class="ri-delete-bin-line text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-brownie/50">
                            <i class="ri-user-search-line text-2xl block mb-1 text-brownie/30"></i>
                            <p class="font-semibold text-xs">No job applications found</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if($applications->hasPages())
            <div class="p-3 border-t border-[#F3E9DC]">
                {{ $applications->links() }}
            </div>
        @endif
    </div>

    <!-- Alpine.js Resume & Application View Modal -->
    <div 
        x-show="viewOpen" 
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
        style="display: none;"
        x-cloak>
        
        <!-- Backdrop -->
        <div 
            x-show="viewOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="viewOpen = false; $wire.resetState()" 
            class="fixed inset-0 bg-[#3E1B11]/50 backdrop-blur-xs">
        </div>

        <!-- Modal Box -->
        <div 
            x-show="viewOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="bg-white rounded-md border border-[#F3E9DC] max-w-3xl w-full p-6 shadow-xl relative z-10 max-h-[90vh] overflow-y-auto custom-scrollbar">
            
            @if($selectedApplication)
                <!-- Modal Header -->
                <div class="flex items-center justify-between pb-3 border-b border-[#F3E9DC]">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#C08552]/15 text-[#C08552] font-bold flex items-center justify-center text-sm border border-[#C08552]/20">
                            <i class="ri-user-star-line text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-brownie uppercase tracking-wider">{{ $selectedApplication->name }}</h3>
                            <p class="text-[11px] text-brownie/60 font-medium">Applied on {{ $selectedApplication->created_at ? $selectedApplication->created_at->format('M d, Y \a\t h:i A') : 'N/A' }}</p>
                        </div>
                    </div>
                    <button 
                        @click="viewOpen = false; $wire.resetState()" 
                        class="w-6 h-6 rounded-xs hover:bg-[#FAF9F5] border border-transparent hover:border-[#F3E9DC] flex items-center justify-center text-brownie/60 transition-colors">
                        <i class="ri-close-line text-sm"></i>
                    </button>
                </div>

                <!-- Applicant Summary Details Card -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 my-4 p-4 rounded-sm bg-[#FAF9F5]/70 border border-[#F3E9DC]">
                    <div>
                        <div class="text-[10px] font-bold text-brownie/50 uppercase tracking-wider">Email Address</div>
                        <div class="text-xs font-semibold text-brownie mt-0.5">{{ $selectedApplication->email }}</div>
                    </div>

                    <div>
                        <div class="text-[10px] font-bold text-brownie/50 uppercase tracking-wider">Phone Number</div>
                        <div class="text-xs font-semibold text-brownie mt-0.5">{{ $selectedApplication->phone }}</div>
                    </div>

                    <div>
                        <div class="text-[10px] font-bold text-brownie/50 uppercase tracking-wider">Experience</div>
                        <div class="text-xs font-semibold text-brownie mt-0.5">{{ $selectedApplication->experience }}</div>
                    </div>

                    <div class="sm:col-span-2">
                        <div class="text-[10px] font-bold text-brownie/50 uppercase tracking-wider">Address / Location</div>
                        <div class="text-xs font-semibold text-brownie mt-0.5">{{ $selectedApplication->address }}</div>
                    </div>

                    <div>
                        <div class="text-[10px] font-bold text-brownie/50 uppercase tracking-wider">Application Status</div>
                        <div class="mt-0.5">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-xs text-[10px] font-bold uppercase border {{ $selectedApplication->status === 'open' ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200' }}">
                                <span>{{ $selectedApplication->status }}</span>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Resume Viewer Section -->
                <div class="space-y-2 mt-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold text-brownie uppercase tracking-wider flex items-center gap-1.5">
                            <i class="ri-file-pdf-2-line text-rose-600 text-base"></i>
                            <span>Applicant Resume Document</span>
                        </span>

                        @if($selectedApplication->resume_url)
                            <div class="flex items-center gap-2">
                                <a 
                                    href="{{ $selectedApplication->resume_url }}" 
                                    target="_blank" 
                                    class="text-xs text-[#C08552] hover:text-[#895737] font-semibold inline-flex items-center gap-1">
                                    <span>Open in New Tab</span>
                                    <i class="ri-external-link-line"></i>
                                </a>
                                <a 
                                    href="{{ $selectedApplication->resume_url }}" 
                                    target="_blank" 
                                    download
                                    class="px-2.5 py-1 bg-[#C08552] hover:bg-[#895737] text-white text-xs font-semibold rounded-xs inline-flex items-center gap-1">
                                    <i class="ri-download-2-line"></i>
                                    <span>Download</span>
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Embedded PDF / Resume Viewer Frame -->
                    @if($selectedApplication->resume_url)
                        <div class="w-full h-96 rounded-sm border border-[#F3E9DC] overflow-hidden bg-stone-100 relative">
                            <iframe 
                                src="{{ $selectedApplication->resume_url }}" 
                                class="w-full h-full border-0" 
                                title="Applicant Resume Document">
                            </iframe>
                        </div>
                    @else
                        <div class="p-8 text-center text-brownie/50 bg-[#FAF9F5] border border-[#F3E9DC] rounded-sm">
                            <i class="ri-file-warning-line text-2xl block mb-1"></i>
                            <p class="text-xs font-semibold">No resume document file found for this applicant.</p>
                        </div>
                    @endif
                </div>

                <!-- Modal Footer -->
                <div class="flex items-center justify-end gap-2 pt-4 border-t border-[#F3E9DC] mt-6">
                    <button 
                        type="button" 
                        @click="viewOpen = false; $wire.resetState()" 
                        class="px-4 py-2 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all">
                        Close
                    </button>
                </div>
            @endif
        </div>
    </div>

    <!-- Alpine.js Delete Confirmation Modal -->
    <div 
        x-show="deleteOpen" 
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
        style="display: none;"
        x-cloak>
        
        <!-- Backdrop -->
        <div 
            x-show="deleteOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="deleteOpen = false" 
            class="fixed inset-0 bg-[#3E1B11]/50 backdrop-blur-xs">
        </div>

        <!-- Modal Box -->
        <div 
            x-show="deleteOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="bg-white rounded-md border border-[#F3E9DC] max-w-sm w-full p-5 shadow-xl relative z-10">
            
            <div class="flex items-center gap-3 text-rose-600 mb-3">
                <div class="w-8 h-8 rounded-sm bg-rose-50 border border-rose-100 flex items-center justify-center">
                    <i class="ri-delete-bin-line text-base"></i>
                </div>
                <div>
                    <h3 class="font-bold text-sm text-brownie uppercase tracking-wider">Confirm Delete</h3>
                    <p class="text-[10px] text-brownie/50">This candidate record will be permanently deleted.</p>
                </div>
            </div>

            <p class="text-xs text-brownie/80 font-medium mb-5">Are you sure you want to delete this applicant record?</p>

            <div class="flex items-center justify-end gap-2 border-t border-[#F3E9DC] pt-3">
                <button 
                    type="button" 
                    @click="deleteOpen = false" 
                    class="px-3.5 py-1.5 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all">
                    Cancel
                </button>
                <button 
                    type="button" 
                    wire:click="deleteConfirmed" 
                    wire:loading.attr="disabled"
                    @click="deleteOpen = false"
                    class="px-4 py-1.5 bg-rose-600 hover:bg-rose-700 text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs flex items-center gap-1.5">
                    <span wire:loading.remove wire:target="deleteConfirmed">Delete</span>
                    <span wire:loading wire:target="deleteConfirmed" class="w-3 h-3 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                </button>
            </div>
        </div>
    </div>
</div>
