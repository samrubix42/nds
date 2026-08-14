<div 
    x-data="{ formOpen: false, deleteOpen: false }" 
    @close-modal.window="formOpen = false" 
    @close-delete-modal.window="deleteOpen = false" 
    class="space-y-6 font-sans">

    <!-- Header Section -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">Gallery Categories</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Manage gallery classifications for organziing showcase images.</p>
        </div>
        <div class="flex items-center gap-2">
            <a 
                href="{{ route('admin.gallery') }}" 
                class="inline-flex items-center gap-1.5 px-3.5 py-2 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all">
                <i class="ri-image-line text-sm"></i>
                <span>Manage Gallery</span>
            </a>
            <button 
                @click="formOpen = true; $wire.resetForm()" 
                class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs">
                <i class="ri-add-line text-sm"></i>
                <span>Add Category</span>
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
                placeholder="Search categories..." 
                class="w-full pl-9 pr-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
            />
        </div>
        
        <div class="text-[10px] text-brownie/60 font-bold uppercase tracking-wider">
            Total: {{ $categories->total() }} Categories
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white border border-[#F3E9DC] rounded-sm overflow-hidden shadow-2xs">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-[#FAF9F5]/60 border-b border-[#F3E9DC] text-[10px] font-bold text-brownie/60 uppercase tracking-wider">
                    <th class="py-3 px-4">Category Name</th>
                    <th class="py-3 px-4">Linked Images</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#F3E9DC]/40 text-xs text-brownie">
                @forelse($categories as $category)
                    <tr class="hover:bg-[#FAF9F5]/30 transition-colors">
                        <td class="py-3 px-4 font-semibold text-brownie">
                            {{ $category->name }}
                        </td>
                        <td class="py-3 px-4">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-xs text-[10px] font-bold bg-stone-100 text-stone-700 border border-stone-200">
                                <i class="ri-image-line text-stone-500"></i>
                                <span>{{ $category->galleries_count }} items</span>
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <button 
                                wire:click="toggleStatus({{ $category->id }})" 
                                title="Toggle status">
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-xs text-[10px] font-bold border transition-colors cursor-pointer {{ $category->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $category->is_active ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                                    <span>{{ $category->is_active ? 'Active' : 'Inactive' }}</span>
                                </span>
                            </button>
                        </td>
                        <td class="py-3 px-4 text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button 
                                    wire:click="edit({{ $category->id }})" 
                                    @click="formOpen = true" 
                                    class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-[#C08552]/40 text-brownie/70 hover:text-[#C08552] transition-colors" 
                                    title="Edit">
                                    <i class="ri-edit-line text-xs"></i>
                                </button>
                                <button 
                                    wire:click="confirmDelete({{ $category->id }})" 
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
                        <td colspan="4" class="py-8 text-center text-brownie/50">
                            <i class="ri-folder-open-line text-2xl block mb-1 text-brownie/30"></i>
                            <p class="font-semibold text-xs">No categories found</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if($categories->hasPages())
            <div class="p-3 border-t border-[#F3E9DC]">
                {{ $categories->links() }}
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
            class="bg-white rounded-md border border-[#F3E9DC] max-w-md w-full p-5 shadow-xl relative z-10">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between pb-3 border-b border-[#F3E9DC]">
                <h3 class="font-bold text-sm text-brownie uppercase tracking-wider">
                    {{ $editingCategoryId ? 'Edit Category' : 'Add Category' }}
                </h3>
                <button 
                    @click="formOpen = false; $wire.resetForm()" 
                    class="w-6 h-6 rounded-xs hover:bg-[#FAF9F5] border border-transparent hover:border-[#F3E9DC] flex items-center justify-center text-brownie/60 transition-colors">
                    <i class="ri-close-line text-sm"></i>
                </button>
            </div>

            <!-- Modal Form -->
            <form wire:submit.prevent="save" class="space-y-4 mt-4">
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Category Name</label>
                    <input 
                        wire:model="name" 
                        type="text" 
                        placeholder="e.g. Armed Guards, CCTV Monitoring..." 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
                    />
                    @error('name') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Active Status Toggle -->
                <div class="flex items-center justify-between py-2 border-t border-b border-[#F3E9DC]/40">
                    <div>
                        <label class="block text-[10px] font-bold text-brownie uppercase tracking-wider">Active Status</label>
                        <p class="text-[9px] text-brownie/50 mt-0.5">Active categories can be assigned to gallery images.</p>
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
                    <p class="text-[10px] text-brownie/50">This category will be permanently removed.</p>
                </div>
            </div>

            <p class="text-xs text-brownie/80 font-medium mb-5">Are you sure you want to delete this category?</p>

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