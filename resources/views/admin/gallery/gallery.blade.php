<div 
    x-data="{ formOpen: false, deleteOpen: false }" 
    @close-modal.window="formOpen = false" 
    @close-delete-modal.window="deleteOpen = false" 
    class="space-y-6 font-sans">

    <!-- Header Section -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">Gallery Management</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Manage showcase photo gallery images and category assignments.</p>
        </div>
        <div class="flex items-center gap-2">
            <a 
                href="{{ route('admin.gallery-category') }}" 
                class="inline-flex items-center gap-1.5 px-3.5 py-2 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all">
                <i class="ri-price-tag-3-line text-sm"></i>
                <span>Categories</span>
            </a>
            <button 
                @click="formOpen = true; $wire.resetForm()" 
                class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs">
                <i class="ri-add-line text-sm"></i>
                <span>Add Image</span>
            </button>
        </div>
    </div>

    <!-- Controls Bar -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-3 border border-[#F3E9DC]/70 rounded-sm">
        <div class="flex flex-col sm:flex-row items-center gap-3 w-full sm:w-auto">
            <!-- Search bar -->
            <div class="relative w-full sm:w-64">
                <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/45 text-sm"></i>
                <input 
                    wire:model.live="search" 
                    type="search" 
                    placeholder="Search gallery..." 
                    class="w-full pl-9 pr-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
                />
            </div>

            <!-- Category Filter -->
            <div class="w-full sm:w-48">
                <select 
                    wire:model.live="category_filter" 
                    class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium transition-colors">
                    <option value="">All Categories</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="text-[10px] text-brownie/60 font-bold uppercase tracking-wider">
            Total: {{ $galleries->total() }} Images
        </div>
    </div>

    <!-- Gallery Grid -->
    @if($galleries->isEmpty())
        <div class="bg-white rounded-sm border border-[#F3E9DC] p-12 text-center flex flex-col items-center justify-center">
            <div class="w-10 h-10 rounded-sm bg-[#FAF9F5] flex items-center justify-center text-brownie/40 mb-3 border border-[#F3E9DC]">
                <i class="ri-image-line text-lg"></i>
            </div>
            <h4 class="font-bold text-sm text-brownie">No Gallery Images Found</h4>
            <p class="text-xs text-brownie/50 mt-1">Try selecting another filter or upload a new photo.</p>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($galleries as $item)
                <div class="relative bg-white border border-[#F3E9DC] hover:border-[#C08552]/40 rounded-sm p-3 shadow-2xs hover:shadow-xs flex flex-col justify-between group transition-all duration-200">
                    
                    <!-- Status Toggle & Category Badge Header -->
                    <div class="flex items-center justify-between mb-2">
                        <button 
                            wire:click="toggleStatus({{ $item->id }})" 
                            title="Toggle status">
                            <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-xs text-[9px] font-bold border transition-colors cursor-pointer {{ $item->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200' }}">
                                <span class="w-1.5 h-1.5 rounded-full {{ $item->is_active ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                                <span>{{ $item->is_active ? 'Active' : 'Inactive' }}</span>
                            </span>
                        </button>

                        @if($item->category)
                            <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-xs text-[9px] font-bold bg-[#FAF9F5] text-brownie/70 border border-[#F3E9DC]">
                                {{ $item->category->name }}
                            </span>
                        @else
                            <span class="text-[9px] text-brownie/40 italic">Uncategorized</span>
                        @endif
                    </div>

                    <!-- Image Thumbnail -->
                    <div class="h-40 w-full bg-[#FAF9F5] rounded-xs overflow-hidden border border-[#F3E9DC]/60 relative mb-3">
                        <img 
                            src="{{ $item->image_url }}" 
                            alt="{{ $item->title }}" 
                            class="w-full h-full object-cover select-none transition-transform duration-300 group-hover:scale-105" 
                            loading="lazy"
                        />
                    </div>

                    <!-- Title & Footer Controls -->
                    <div class="space-y-2">
                        <h4 class="font-bold text-xs text-brownie truncate" title="{{ $item->title }}">
                            {{ $item->title }}
                        </h4>

                        <div class="flex items-center justify-end gap-1.5 border-t border-[#F3E9DC]/50 pt-2">
                            <button 
                                wire:click="edit({{ $item->id }})" 
                                @click="formOpen = true" 
                                class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-[#C08552]/40 text-brownie/70 hover:text-[#C08552] transition-colors" 
                                title="Edit">
                                <i class="ri-edit-line text-xs"></i>
                            </button>
                            <button 
                                wire:click="confirmDelete({{ $item->id }})" 
                                @click="deleteOpen = true" 
                                class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-rose-300 text-brownie/70 hover:text-rose-600 transition-colors" 
                                title="Delete">
                                <i class="ri-delete-bin-line text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $galleries->links() }}
        </div>
    @endif

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
            class="bg-white rounded-md border border-[#F3E9DC] max-w-md w-full p-5 shadow-xl relative z-10">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between pb-3 border-b border-[#F3E9DC]">
                <h3 class="font-bold text-sm text-brownie uppercase tracking-wider">
                    {{ $editingGalleryId ? 'Edit Gallery Image' : 'Add Gallery Image' }}
                </h3>
                <button 
                    @click="formOpen = false; $wire.resetForm()" 
                    class="w-6 h-6 rounded-xs hover:bg-[#FAF9F5] border border-transparent hover:border-[#F3E9DC] flex items-center justify-center text-brownie/60 transition-colors">
                    <i class="ri-close-line text-sm"></i>
                </button>
            </div>

            <!-- Modal Form -->
            <form wire:submit.prevent="save" class="space-y-4 mt-4">
                <!-- Title Field -->
                <div class="space-y-1">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Image Title</label>
                    <input 
                        wire:model="title" 
                        type="text" 
                        placeholder="e.g. VIP Protection Drill, Event Control..." 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
                    />
                    @error('title') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Category Field -->
                <div class="space-y-1">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Category</label>
                    <select 
                        wire:model="gallery_category_id" 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium transition-colors">
                        <option value="">-- Select Category (Optional) --</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('gallery_category_id') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Image File Upload -->
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Photo</label>
                    
                    <!-- Image Previews -->
                    @if ($image)
                        <div class="h-32 w-full rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] flex items-center justify-center overflow-hidden relative">
                            <img src="{{ $image->temporaryUrl() }}" class="h-full w-full object-cover" />
                            <button 
                                type="button" 
                                wire:click="$set('image', null)" 
                                class="absolute top-2 right-2 p-1 rounded-xs bg-white border border-rose-200 text-rose-600 hover:bg-rose-50 transition-colors shadow-xs">
                                <i class="ri-delete-bin-line text-xs"></i>
                            </button>
                        </div>
                    @elseif ($existingImage)
                        <div class="h-32 w-full rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] flex items-center justify-center overflow-hidden relative">
                            <img src="{{ $existingImage }}" class="h-full w-full object-cover" />
                        </div>
                    @endif

                    <!-- Upload Box -->
                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col items-center justify-center w-full h-20 border border-dashed border-[#F3E9DC] hover:border-[#C08552] rounded-xs cursor-pointer bg-[#FAF9F5]/30 hover:bg-[#FAF9F5] transition-colors">
                            <div class="flex flex-col items-center justify-center pt-3 pb-3">
                                <i class="ri-upload-cloud-2-line text-base text-brownie/50"></i>
                                <p class="text-[10px] text-brownie/70 mt-1 font-semibold">Select image file</p>
                                <p class="text-[9px] text-brownie/40 font-medium mt-0.5">PNG, JPG, WEBP (Max 2MB)</p>
                            </div>
                            <input wire:model="image" type="file" class="hidden" accept="image/*" />
                        </label>
                    </div>
                    @error('image') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Active Status Toggle -->
                <div class="flex items-center justify-between py-2 border-t border-b border-[#F3E9DC]/40">
                    <div>
                        <label class="block text-[10px] font-bold text-brownie uppercase tracking-wider">Active Status</label>
                        <p class="text-[9px] text-brownie/50 mt-0.5">Active images are displayed in the showcase gallery.</p>
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
                        <span wire:loading.remove wire:target="save">Save</span>
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
                    <p class="text-[10px] text-brownie/50">This image will be permanently removed.</p>
                </div>
            </div>

            <p class="text-xs text-brownie/80 font-medium mb-5">Are you sure you want to delete this gallery item?</p>

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