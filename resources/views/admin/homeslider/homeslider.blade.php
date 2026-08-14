<div 
    x-data="{ formOpen: false, deleteOpen: false }" 
    @close-modal.window="formOpen = false" 
    @close-delete-modal.window="deleteOpen = false" 
    class="space-y-6 font-sans">

    <!-- Header Section -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">Homepage Slider Management</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Manage hero banner slides, titles, subtitles, CTAs, and background images on the public homepage.</p>
        </div>
        <div class="flex items-center gap-2">
            <button 
                @click="formOpen = true; $wire.resetForm()" 
                class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs">
                <i class="ri-add-line text-sm"></i>
                <span>Add Hero Slide</span>
            </button>
        </div>
    </div>

    <!-- Controls Bar -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-3 border border-[#F3E9DC]/70 rounded-sm">
        <div class="relative w-full sm:max-w-xs">
            <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/45 text-sm"></i>
            <input 
                wire:model.live="search" 
                type="search" 
                placeholder="Search Hero Slides..." 
                class="w-full pl-9 pr-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
            />
        </div>
        
        <div class="text-[10px] text-brownie/60 font-bold uppercase tracking-wider">
            Total: {{ $sliders->total() }} Slides
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white border border-[#F3E9DC] rounded-sm overflow-hidden shadow-2xs">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-[#FAF9F5]/60 border-b border-[#F3E9DC] text-[10px] font-bold text-brownie/60 uppercase tracking-wider">
                    <th class="py-3 px-4">Preview</th>
                    <th class="py-3 px-4">Title & Subtitle</th>
                    <th class="py-3 px-4">CTA Buttons</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#F3E9DC]/40 text-xs text-brownie">
                @forelse($sliders as $slider)
                    <tr class="hover:bg-[#FAF9F5]/30 transition-colors">
                        <td class="py-3 px-4">
                            <div class="w-16 h-10 rounded-sm bg-stone-100 border border-[#F3E9DC] overflow-hidden shrink-0">
                                @if($slider->image)
                                    <img src="{{ str_starts_with($slider->image, 'http') ? $slider->image : (str_starts_with($slider->image, 'image/') ? asset($slider->image) : asset('storage/' . $slider->image)) }}" 
                                         alt="{{ $slider->title }}" 
                                         class="w-full h-full object-cover" />
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-brownie/30">
                                        <i class="ri-landscape-line text-lg"></i>
                                    </div>
                                @endif
                            </div>
                        </td>
                        <td class="py-3 px-4 max-w-xs">
                            <div class="font-bold text-brownie truncate" title="{{ $slider->title }}">
                                {{ $slider->title }}
                            </div>
                            <p class="text-[11px] text-brownie/60 truncate mt-0.5" title="{{ $slider->description }}">
                                {{ \Illuminate\Support\Str::limit($slider->description, 70) }}
                            </p>
                        </td>
                        <td class="py-3 px-4 text-[11px] text-brownie/70">
                            @if($slider->button_text1)
                                <span class="inline-block px-1.5 py-0.5 bg-caramel/10 text-caramel font-semibold rounded-xs border border-caramel/20 mr-1 mb-1">
                                    {{ $slider->button_text1 }}
                                </span>
                            @endif
                            @if($slider->button_text2)
                                <span class="inline-block px-1.5 py-0.5 bg-brownie/10 text-brownie font-semibold rounded-xs border border-brownie/20">
                                    {{ $slider->button_text2 }}
                                </span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <button 
                                wire:click="toggleStatus({{ $slider->id }})" 
                                title="Toggle status">
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-xs text-[10px] font-bold border transition-colors cursor-pointer {{ $slider->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $slider->is_active ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                                    <span>{{ $slider->is_active ? 'Active' : 'Inactive' }}</span>
                                </span>
                            </button>
                        </td>
                        <td class="py-3 px-4 text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button 
                                    wire:click="edit({{ $slider->id }})" 
                                    @click="formOpen = true" 
                                    class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-[#C08552]/40 text-brownie/70 hover:text-[#C08552] transition-colors" 
                                    title="Edit">
                                    <i class="ri-edit-line text-xs"></i>
                                </button>
                                <button 
                                    wire:click="confirmDelete({{ $slider->id }})" 
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
                            <i class="ri-slideshow-line text-2xl block mb-1 text-brownie/30"></i>
                            <p class="font-semibold text-xs">No Homepage Slides Found</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if($sliders->hasPages())
            <div class="p-3 border-t border-[#F3E9DC]">
                {{ $sliders->links() }}
            </div>
        @endif
    </div>

    <!-- Alpine.js Add/Edit Form Modal -->
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
            @click="formOpen = false; $wire.resetForm()" 
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
            class="bg-white rounded-md border border-[#F3E9DC] max-w-xl w-full p-6 shadow-xl relative z-10 max-h-[90vh] overflow-y-auto">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between pb-3 border-b border-[#F3E9DC]">
                <h3 class="font-bold text-sm text-brownie uppercase tracking-wider">
                    {{ $editingSliderId ? 'Edit Hero Slide' : 'Add Hero Slide' }}
                </h3>
                <button 
                    @click="formOpen = false; $wire.resetForm()" 
                    class="w-6 h-6 rounded-xs hover:bg-[#FAF9F5] border border-transparent hover:border-[#F3E9DC] flex items-center justify-center text-brownie/60 transition-colors">
                    <i class="ri-close-line text-sm"></i>
                </button>
            </div>

            <!-- Modal Form -->
            <form wire:submit.prevent="save" class="space-y-4 mt-4">
                
                <!-- Title -->
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Main Headline Title <span class="text-caramel">*</span></label>
                    <input 
                        wire:model="title" 
                        type="text" 
                        placeholder="e.g. Noida's Premier Manned Guarding & Protection" 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
                    />
                    @error('title') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Description -->
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Subtitle Description <span class="text-caramel">*</span></label>
                    <textarea 
                        wire:model="description" 
                        rows="3" 
                        placeholder="e.g. Delivering 24/7 command center monitoring, background-verified security guards..." 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors"
                    ></textarea>
                    @error('description') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Image Upload / Image URL -->
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Background Hero Image</label>
                    <input 
                        wire:model="image" 
                        type="file" 
                        accept="image/*"
                        class="w-full px-3 py-1.5 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium" 
                    />
                    @if ($image && is_object($image))
                        <div class="mt-2 text-[10px] font-semibold text-emerald-700 flex items-center gap-1">
                            <i class="ri-checkbox-circle-fill"></i> New Image Selected
                        </div>
                    @elseif($existingImage)
                        <div class="mt-2 flex items-center gap-2">
                            <span class="text-[10px] text-brownie/60 font-semibold">Current Image:</span>
                            <img src="{{ str_starts_with($existingImage, 'http') ? $existingImage : asset('storage/' . $existingImage) }}" class="w-16 h-10 object-cover rounded-xs border border-[#F3E9DC]" />
                        </div>
                    @endif
                    @error('image') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- CTA Button 1 -->
                <div class="grid grid-cols-2 gap-3 pt-2 border-t border-[#F3E9DC]/40">
                    <div class="space-y-1.5">
                        <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Button 1 Text</label>
                        <input 
                            wire:model="button_text1" 
                            type="text" 
                            placeholder="e.g. Explore Services" 
                            class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium" 
                        />
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Button 1 Link</label>
                        <input 
                            wire:model="button_link1" 
                            type="text" 
                            placeholder="e.g. /services" 
                            class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium" 
                        />
                    </div>
                </div>

                <!-- CTA Button 2 -->
                <div class="grid grid-cols-2 gap-3">
                    <div class="space-y-1.5">
                        <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Button 2 Text</label>
                        <input 
                            wire:model="button_text2" 
                            type="text" 
                            placeholder="e.g. Get a Quote" 
                            class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium" 
                        />
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Button 2 Link</label>
                        <input 
                            wire:model="button_link2" 
                            type="text" 
                            placeholder="e.g. /contact" 
                            class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium" 
                        />
                    </div>
                </div>

                <!-- Active Status Toggle -->
                <div class="flex items-center justify-between py-2 border-t border-b border-[#F3E9DC]/40">
                    <div>
                        <label class="block text-[10px] font-bold text-brownie uppercase tracking-wider">Active Status</label>
                        <p class="text-[9px] text-brownie/50 mt-0.5">Active slides are displayed in the hero banner on the homepage.</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input wire:model="is_active" type="checkbox" class="sr-only peer" />
                        <div class="w-8 h-4 bg-stone-200 peer-focus:outline-none rounded-sm peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-xs after:h-3 after:w-3.5 after:transition-all peer-checked:bg-[#C08552]"></div>
                    </label>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-end gap-2 pt-2">
                    <button 
                        type="button" 
                        @click="formOpen = false; $wire.resetForm()" 
                        class="px-3.5 py-1.5 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all">
                        Cancel
                    </button>
                    <button 
                        type="submit" 
                        wire:loading.attr="disabled" 
                        class="px-4 py-1.5 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs flex items-center gap-1.5">
                        <span wire:loading.remove wire:target="save">Save Slide</span>
                        <span wire:loading wire:target="save" class="w-3 h-3 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                        <span wire:loading wire:target="save">Saving...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div 
        x-show="deleteOpen" 
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
        style="display: none;"
        x-cloak>
        <div @click="deleteOpen = false" class="fixed inset-0 bg-[#3E1B11]/50 backdrop-blur-xs"></div>
        <div class="bg-white rounded-md border border-[#F3E9DC] max-w-sm w-full p-5 shadow-xl relative z-10">
            <div class="flex items-center gap-3 text-rose-600 mb-3">
                <div class="w-8 h-8 rounded-sm bg-rose-50 border border-rose-100 flex items-center justify-center">
                    <i class="ri-delete-bin-line text-base"></i>
                </div>
                <div>
                    <h3 class="font-bold text-sm text-brownie uppercase tracking-wider">Confirm Delete</h3>
                    <p class="text-[10px] text-brownie/50">This hero slide will be permanently removed.</p>
                </div>
            </div>
            <p class="text-xs text-brownie/80 font-medium mb-5">Are you sure you want to delete this home slide?</p>
            <div class="flex items-center justify-end gap-2 border-t border-[#F3E9DC] pt-3">
                <button type="button" @click="deleteOpen = false" class="px-3.5 py-1.5 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all">Cancel</button>
                <button type="button" wire:click="deleteConfirmed" @click="deleteOpen = false" class="px-4 py-1.5 bg-rose-600 hover:bg-rose-700 text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs">Delete</button>
            </div>
        </div>
    </div>

</div>