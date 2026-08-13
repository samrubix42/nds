<div 
    x-data="{ 
        formOpen: false, 
        deleteOpen: false,
        initTinyMCE() {
            if (typeof tinymce === 'undefined') return;
            tinymce.remove('#job-description-editor');
            tinymce.init({
                selector: '#job-description-editor',
                height: 280,
                menubar: false,
                plugins: 'advlist autolink lists link charmap preview searchreplace visualblocks code table help wordcount',
                toolbar: 'undo redo | blocks | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code',
                skin: 'oxide',
                content_style: 'body { font-family: Instrument Sans, sans-serif; font-size: 13px; color: #5E3023; }',
                setup: (editor) => {
                    editor.on('init', () => {
                        editor.setContent($wire.get('description') || '');
                    });
                    editor.on('change keyup undo redo', () => {
                        $wire.set('description', editor.getContent(), false);
                    });
                }
            });
        }
    }" 
    @close-modal.window="formOpen = false; if (typeof tinymce !== 'undefined') tinymce.remove('#job-description-editor')" 
    @close-delete-modal.window="deleteOpen = false" 
    @load-tinymce.window="setTimeout(() => initTinyMCE(), 100)"
    class="space-y-6 font-sans">

    <!-- Header Section -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">Job Posts Management</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Manage security career openings and job listings for candidates.</p>
        </div>
        <div class="flex items-center gap-2">
            <button 
                @click="formOpen = true; $wire.resetForm(); setTimeout(() => initTinyMCE(), 100)" 
                class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs">
                <i class="ri-add-line text-sm"></i>
                <span>Add Job Post</span>
            </button>
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
                placeholder="Search job titles, locations..." 
                class="w-full pl-9 pr-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
            />
        </div>
        
        <div class="text-[10px] text-brownie/60 font-bold uppercase tracking-wider">
            Total: {{ $jobPosts->total() }} Job Listings
        </div>
    </div>

    <!-- Data Table -->
    <div class="bg-white border border-[#F3E9DC] rounded-sm overflow-hidden shadow-2xs">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-[#FAF9F5]/60 border-b border-[#F3E9DC] text-[10px] font-bold text-brownie/60 uppercase tracking-wider">
                    <th class="py-3 px-4">Job Title</th>
                    <th class="py-3 px-4">Location</th>
                    <th class="py-3 px-4">Shift</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#F3E9DC]/40 text-xs text-brownie">
                @forelse($jobPosts as $job)
                    <tr class="hover:bg-[#FAF9F5]/30 transition-colors">
                        <td class="py-3 px-4 font-semibold text-brownie">
                            {{ $job->title }}
                        </td>
                        <td class="py-3 px-4 text-brownie/70 font-medium">
                            <span class="inline-flex items-center gap-1">
                                <i class="ri-map-pin-line text-[#C08552]"></i>
                                <span>{{ $job->location }}</span>
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-xs text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                <i class="ri-time-line text-amber-600"></i>
                                <span>{{ $job->shift }} Shift</span>
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <button 
                                wire:click="toggleStatus({{ $job->id }})" 
                                title="Toggle status">
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-xs text-[10px] font-bold border transition-colors cursor-pointer {{ $job->status === 'open' ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $job->status === 'open' ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                                    <span class="capitalize">{{ $job->status }}</span>
                                </span>
                            </button>
                        </td>
                        <td class="py-3 px-4 text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button 
                                    wire:click="edit({{ $job->id }})" 
                                    @click="formOpen = true" 
                                    class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-[#C08552]/40 text-brownie/70 hover:text-[#C08552] transition-colors" 
                                    title="Edit">
                                    <i class="ri-edit-line text-xs"></i>
                                </button>
                                <button 
                                    wire:click="confirmDelete({{ $job->id }})" 
                                    @click="deleteOpen = true" 
                                    class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-rose-300 text-brownie/70 hover:text-rose-600 transition-colors" 
                                    title="Delete">
                                    <i class="ri-delete-bin-line text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 text-center text-brownie/50">
                            <i class="ri-briefcase-line text-2xl block mb-1 text-brownie/30"></i>
                            <p class="font-semibold text-xs">No job listings found</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if($jobPosts->hasPages())
            <div class="p-3 border-t border-[#F3E9DC]">
                {{ $jobPosts->links() }}
            </div>
        @endif
    </div>

    <!-- Alpine.js Add/Edit Form Modal with TinyMCE Integration -->
    <div 
        x-show="formOpen" 
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
        style="display: none;"
        x-cloak>
        
        <!-- Backdrop -->
        <div 
            x-show="formOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="formOpen = false; $wire.resetForm(); if (typeof tinymce !== 'undefined') tinymce.remove('#job-description-editor')" 
            class="fixed inset-0 bg-[#3E1B11]/50 backdrop-blur-xs">
        </div>

        <!-- Modal Box -->
        <div 
            x-show="formOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="bg-white rounded-md border border-[#F3E9DC] max-w-2xl w-full p-6 shadow-xl relative z-10 max-h-[90vh] overflow-y-auto custom-scrollbar">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between pb-3 border-b border-[#F3E9DC]">
                <h3 class="font-bold text-sm text-brownie uppercase tracking-wider">
                    {{ $editingJobPostId ? 'Edit Job Post' : 'Add Job Post' }}
                </h3>
                <button 
                    @click="formOpen = false; $wire.resetForm(); if (typeof tinymce !== 'undefined') tinymce.remove('#job-description-editor')" 
                    class="w-6 h-6 rounded-xs hover:bg-[#FAF9F5] border border-transparent hover:border-[#F3E9DC] flex items-center justify-center text-brownie/60 transition-colors">
                    <i class="ri-close-line text-sm"></i>
                </button>
            </div>

            <!-- Modal Form -->
            <form wire:submit.prevent="save" class="space-y-4 mt-4">
                
                <!-- Job Title -->
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Job Title</label>
                    <input 
                        wire:model="title" 
                        type="text" 
                        placeholder="e.g. Senior Security Guard Officer, CCTV Specialist..." 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
                    />
                    @error('title') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Grid for Location & Shift -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Location</label>
                        <input 
                            wire:model="location" 
                            type="text" 
                            placeholder="e.g. Noida Sector 62, Greater Noida" 
                            class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
                        />
                        @error('location') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="space-y-1.5">
                        <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Work Shift</label>
                        <select 
                            wire:model="shift" 
                            class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium transition-colors">
                            <option value="Day">Day Shift</option>
                            <option value="Night">Night Shift</option>
                            <option value="Rotational">Rotational Shift</option>
                        </select>
                        @error('shift') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Job Status Dropdown -->
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Status</label>
                    <select 
                        wire:model="status" 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium transition-colors">
                        <option value="open">Open (Accepting Applications)</option>
                        <option value="closed">Closed (Positions Filled)</option>
                    </select>
                    @error('status') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- TinyMCE Rich Text Editor for Content / Description -->
                <div class="space-y-1.5" wire:ignore>
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Job Description & Requirements (Rich Text)</label>
                    <textarea 
                        id="job-description-editor" 
                        placeholder="Write detailed responsibilities, qualifications, salary info..."
                    ></textarea>
                </div>
                @error('description') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror

                <!-- Action Buttons -->
                <div class="flex items-center justify-end gap-2 pt-3 border-t border-[#F3E9DC]">
                    <button 
                        type="button" 
                        @click="formOpen = false; $wire.resetForm(); if (typeof tinymce !== 'undefined') tinymce.remove('#job-description-editor')" 
                        class="px-3.5 py-1.5 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all">
                        Cancel
                    </button>
                    <button 
                        type="submit" 
                        wire:loading.attr="disabled" 
                        class="px-4 py-1.5 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs flex items-center gap-1.5">
                        <span wire:loading.remove wire:target="save">Save Job Post</span>
                        <span wire:loading wire:target="save" class="w-3 h-3 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                        <span wire:loading wire:target="save">Saving...</span>
                    </button>
                </div>
            </form>
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
                    <p class="text-[10px] text-brownie/50">This job listing will be permanently removed.</p>
                </div>
            </div>

            <p class="text-xs text-brownie/80 font-medium mb-5">Are you sure you want to delete this job post?</p>

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
