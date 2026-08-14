<div 
    x-data="{ formOpen: false, deleteOpen: false }" 
    @close-modal.window="formOpen = false" 
    @close-delete-modal.window="deleteOpen = false" 
    class="space-y-6 font-sans">
    
    <!-- Header Section (Minimalist Typography) -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">Clientele Management</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Manage client logos and display status on the public portal.</p>
        </div>
        <div class="shrink-0">
            <button 
                @click="formOpen = true; $wire.resetForm()" 
                class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-md transition-all shadow-xs">
                <i class="ri-add-line text-sm"></i>
                <span>Add Client</span>
            </button>
        </div>
    </div>

    <!-- Controls Bar -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-3 border border-[#F3E9DC]/70 rounded-md">
        <!-- Search bar -->
        <div class="relative w-full sm:max-w-xs">
            <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/45 text-sm"></i>
            <input 
                wire:model.live="search" 
                type="search" 
                placeholder="Search logos..." 
                class="w-full pl-9 pr-3 py-2 text-xs rounded-sm bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
            />
        </div>
        
        <div class="text-[10px] text-brownie/60 font-bold uppercase tracking-wider">
            Total: {{ $clients->total() }} Clients
        </div>
    </div>

    <!-- Client Logo Grid -->
    @if($clients->isEmpty())
        <div class="bg-white rounded-md border border-[#F3E9DC] p-12 text-center flex flex-col items-center justify-center">
            <div class="w-10 h-10 rounded-sm bg-[#FAF9F5] flex items-center justify-center text-brownie/40 mb-3 border border-[#F3E9DC]">
                <i class="ri-team-line text-lg"></i>
            </div>
            <h4 class="font-bold text-sm text-brownie">No Clients Found</h4>
            <p class="text-xs text-brownie/50 mt-1">Try matching another search query or add a new client logo.</p>
        </div>
    @else
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach($clients as $client)
                <div class="relative bg-white border border-[#F3E9DC] hover:border-[#C08552]/40 rounded-md p-3 shadow-2xs hover:shadow-xs flex flex-col justify-between items-center group transition-all duration-200">
                    
                    <!-- Status Indicator Toggle -->
                    <button 
                        wire:click="toggleStatus({{ $client->id }})" 
                        class="absolute top-2.5 left-2.5 z-10" 
                        title="Toggle active status">
                        <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-sm text-[9px] font-bold border transition-colors cursor-pointer {{ $client->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200' }}">
                            <span class="w-1.5 h-1.5 rounded-full {{ $client->is_active ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                            <span>{{ $client->is_active ? 'Active' : 'Inactive' }}</span>
                        </span>
                    </button>

                    <!-- Image Preview Area -->
                    <div class="h-24 w-full flex items-center justify-center bg-[#FAF9F5]/40 rounded-sm overflow-hidden mt-5 mb-2 border border-[#F3E9DC]/40 relative">
                        <img 
                            src="{{ $client->image_url }}" 
                            alt="Client Logo" 
                            class="max-h-16 max-w-full object-contain p-2 select-none" 
                            loading="lazy"
                        />
                    </div>

                    <!-- Action toolbar -->
                    <div class="flex items-center gap-1.5 border-t border-[#F3E9DC]/50 pt-2 w-full justify-end">
                        <button 
                            wire:click="edit({{ $client->id }})" 
                            @click="formOpen = true" 
                            class="p-1 rounded-sm bg-[#FAF9F5] border border-[#F3E9DC] hover:border-[#C08552]/40 text-brownie/70 hover:text-[#C08552] transition-colors" 
                            title="Edit">
                            <i class="ri-edit-line text-xs"></i>
                        </button>
                        <button 
                            wire:click="confirmDelete({{ $client->id }})" 
                            @click="deleteOpen = true" 
                            class="p-1 rounded-sm bg-[#FAF9F5] border border-[#F3E9DC] hover:border-rose-300 text-brownie/70 hover:text-rose-600 transition-colors" 
                            title="Delete">
                            <i class="ri-delete-bin-line text-xs"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $clients->links() }}
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
                    {{ $editingClientId ? 'Edit Client Logo' : 'Add Client Logo' }}
                </h3>
                <button 
                    @click="formOpen = false; $wire.resetForm()" 
                    class="w-6 h-6 rounded-sm hover:bg-[#FAF9F5] border border-transparent hover:border-[#F3E9DC] flex items-center justify-center text-brownie/60 transition-colors">
                    <i class="ri-close-line text-sm"></i>
                </button>
            </div>

            <!-- Modal Form -->
            <form wire:submit.prevent="save" class="space-y-4 mt-4">
                <!-- Logo File Upload -->
                <div class="space-y-1.5">
                    <label class="block text-[10px] font-bold text-brownie/60 uppercase tracking-wider">Logo Image</label>
                    
                    <!-- Previews -->
                    @if ($image)
                        <div class="h-24 w-full rounded-sm bg-[#FAF9F5] border border-[#F3E9DC] flex items-center justify-center overflow-hidden relative">
                            <img src="{{ $image->temporaryUrl() }}" class="max-h-18 object-contain p-2" />
                            <button 
                                type="button" 
                                wire:click="$set('image', null)" 
                                class="absolute top-2 right-2 p-1 rounded-sm bg-white border border-rose-200 text-rose-600 hover:bg-rose-50 transition-colors">
                                <i class="ri-delete-bin-line text-xs"></i>
                            </button>
                        </div>
                    @elseif ($existingImage)
                        <div class="h-24 w-full rounded-sm bg-[#FAF9F5] border border-[#F3E9DC] flex items-center justify-center overflow-hidden relative">
                            <img src="{{ $existingImage }}" class="max-h-18 object-contain p-2" />
                        </div>
                    @endif

                    <!-- Upload Input -->
                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col items-center justify-center w-full h-20 border border-dashed border-[#F3E9DC] hover:border-[#C08552] rounded-sm cursor-pointer bg-[#FAF9F5]/30 hover:bg-[#FAF9F5] transition-colors">
                            <div class="flex flex-col items-center justify-center pt-3 pb-3">
                                <i class="ri-upload-cloud-2-line text-base text-brownie/50"></i>
                                <p class="text-[10px] text-brownie/70 mt-1 font-semibold">Select logo image</p>
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
                        <p class="text-[9px] text-brownie/50 mt-0.5">Active logos are displayed on public pages.</p>
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
                    <p class="text-[10px] text-brownie/50">This action cannot be undone.</p>
                </div>
            </div>

            <p class="text-xs text-brownie/80 font-medium mb-5">Are you sure you want to delete this client logo?</p>

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