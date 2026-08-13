<div x-data="{ isOpen: false }" @close-modal.window="isOpen = false" class="space-y-8 font-sans">
    
    <!-- Header Section (Clean Typography) -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-3.5 border-b border-[#F3E9DC]/35">
        <div>
            <h2 class="text-xl font-extrabold text-brownie tracking-tight">Clientele Management</h2>
            <p class="text-xs text-brownie/45 font-medium mt-0.5">Add, edit, or remove client logos displayed on the public website.</p>
        </div>
        <div class="shrink-0">
            <button @click="isOpen = true; $wire.resetForm()" class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#C08552] hover:bg-[#895737] text-white font-bold text-xs uppercase tracking-wider rounded-xl transition-all shadow-[0_4px_12px_-3px_rgba(192,133,82,0.25)]">
                <i class="ri-add-line text-sm"></i>
                <span>Add Client</span>
            </button>
        </div>
    </div>

    <!-- Session Messages -->
    @if (session()->has('message'))
        <div class="p-3.5 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-800 text-xs font-bold flex items-center justify-between shadow-xs">
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
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <!-- Search bar -->
        <div class="relative w-full sm:max-w-xs">
            <i class="ri-search-line absolute left-3.5 top-1/2 -translate-y-1/2 text-brownie/45 text-sm"></i>
            <input 
                wire:model.live="search" 
                type="search" 
                placeholder="Search logos..." 
                class="w-full pl-9 pr-4 py-2.5 text-xs rounded-xl bg-white border border-[#F3E9DC]/60 focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
            />
        </div>
        
        <div class="text-[10px] text-brownie/45 font-bold uppercase tracking-wider">
            Total: {{ $clients->total() }} Clients
        </div>
    </div>

    <!-- Client Logo Grid -->
    @if($clients->isEmpty())
        <div class="bg-white rounded-2xl border border-[#F3E9DC]/60 p-12 text-center flex flex-col items-center justify-center shadow-[0_4px_16px_-4px_rgba(94,48,35,0.02)]">
            <div class="w-12 h-12 rounded-full bg-[#FAF9F5] flex items-center justify-center text-brownie/40 mb-3 border border-[#F3E9DC]/40">
                <i class="ri-team-line text-lg"></i>
            </div>
            <h4 class="font-extrabold text-sm text-brownie">No Clients Found</h4>
            <p class="text-xs text-brownie/45 mt-1">Try matching another search query or add a new client.</p>
        </div>
    @else
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            @foreach($clients as $client)
                <div class="relative bg-white border border-[#F3E9DC]/60 hover:border-[#C08552]/40 rounded-2xl p-4 shadow-[0_4px_16px_-4px_rgba(94,48,35,0.02)] hover:shadow-[0_8px_24px_-6px_rgba(94,48,35,0.06)] flex flex-col justify-between items-center group transition-all duration-300">
                    
                    <!-- Status Indicator Toggle -->
                    <button 
                        wire:click="toggleStatus({{ $client->id }})" 
                        class="absolute top-3 left-3 z-10" 
                        title="Toggle active status">
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[9px] font-bold border transition-colors cursor-pointer {{ $client->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-100/60' : 'bg-rose-50 text-rose-700 border-rose-100/60' }}">
                            <span class="w-1 h-1 rounded-full {{ $client->is_active ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                            <span>{{ $client->is_active ? 'Active' : 'Inactive' }}</span>
                        </span>
                    </button>

                    <!-- Image Preview Area -->
                    <div class="h-28 w-full flex items-center justify-center bg-[#FAF9F5]/30 rounded-xl overflow-hidden mt-4 mb-3 border border-[#F3E9DC]/25 relative">
                        <img 
                            src="{{ $client->image_url }}" 
                            alt="Client Logo" 
                            class="max-h-20 max-w-full object-contain p-2 select-none transition-transform duration-300 group-hover:scale-105" 
                            loading="lazy"
                        />
                    </div>

                    <!-- Action toolbar -->
                    <div class="flex items-center gap-2 border-t border-[#F3E9DC]/35 pt-3 w-full justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                        <button 
                            wire:click="edit({{ $client->id }})" 
                            @click="isOpen = true" 
                            class="p-1.5 rounded-lg bg-[#FAF9F5] border border-[#F3E9DC] hover:border-[#C08552]/30 text-brownie/60 hover:text-[#C08552] transition-colors" 
                            title="Edit">
                            <i class="ri-edit-line text-xs"></i>
                        </button>
                        <button 
                            wire:click="delete({{ $client->id }})" 
                            wire:confirm="Are you sure you want to delete this client?" 
                            class="p-1.5 rounded-lg bg-[#FAF9F5] border border-[#F3E9DC] hover:border-rose-200 text-brownie/60 hover:text-rose-600 transition-colors" 
                            title="Delete">
                            <i class="ri-delete-bin-line text-xs"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $clients->links() }}
        </div>
    @endif

    <!-- Alpine.js Modals Container (Triggered client-side only) -->
    <div 
        x-show="isOpen" 
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
        style="display: none;"
        x-cloak>
        
        <!-- Backdrop with Blur -->
        <div 
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="isOpen = false; $wire.resetForm()" 
            class="fixed inset-0 bg-[#3E1B11]/45 backdrop-blur-xs">
        </div>

        <!-- Modal Content Card -->
        <div 
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-4"
            class="bg-white rounded-3xl border border-[#F3E9DC]/60 max-w-md w-full p-6 shadow-2xl relative z-10 overflow-hidden">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between pb-3.5 border-b border-[#F3E9DC]/35">
                <h3 class="font-extrabold text-sm text-brownie uppercase tracking-wide">
                    {{ $editingClientId ? 'Edit Client Logo' : 'Add Client Logo' }}
                </h3>
                <button 
                    @click="isOpen = false; $wire.resetForm()" 
                    class="w-6 h-6 rounded-md hover:bg-[#FAF9F5] border border-transparent hover:border-[#F3E9DC] flex items-center justify-center text-brownie/50 hover:text-brownie transition-colors">
                    <i class="ri-close-line text-sm"></i>
                </button>
            </div>

            <!-- Modal Form -->
            <form wire:submit.prevent="save" class="space-y-5 mt-5">
                <!-- Logo File Upload -->
                <div class="space-y-2">
                    <label class="block text-[10px] font-bold text-brownie/45 uppercase tracking-wider">Logo Image</label>
                    
                    <!-- Previews -->
                    @if ($image)
                        <div class="h-28 w-full rounded-xl bg-[#FAF9F5]/30 border border-[#F3E9DC] flex items-center justify-center overflow-hidden relative group">
                            <img src="{{ $image->temporaryUrl() }}" class="max-h-20 object-contain p-2" />
                            <button 
                                type="button" 
                                wire:click="$set('image', null)" 
                                class="absolute top-2 right-2 w-6 h-6 rounded-md bg-white border border-rose-100 text-rose-500 flex items-center justify-center shadow-xs hover:bg-rose-50 transition-colors">
                                <i class="ri-delete-bin-line text-xs"></i>
                            </button>
                        </div>
                    @elseif ($existingImage)
                        <div class="h-28 w-full rounded-xl bg-[#FAF9F5]/30 border border-[#F3E9DC] flex items-center justify-center overflow-hidden relative">
                            <img src="{{ $existingImage }}" class="max-h-20 object-contain p-2" />
                        </div>
                    @endif

                    <!-- Drag & Drop / File Input -->
                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col items-center justify-center w-full h-24 border-2 border-dashed border-[#F3E9DC] hover:border-[#C08552] rounded-xl cursor-pointer bg-[#FAF9F5]/20 hover:bg-[#FAF9F5]/45 transition-colors">
                            <div class="flex flex-col items-center justify-center pt-4 pb-4">
                                <i class="ri-upload-cloud-2-line text-lg text-brownie/40"></i>
                                <p class="text-[10px] text-brownie/60 mt-1 font-bold">Click to select logo</p>
                                <p class="text-[9px] text-brownie/35 font-medium mt-0.5">PNG, JPG, WEBP (Max. 2MB)</p>
                            </div>
                            <input wire:model="image" type="file" class="hidden" accept="image/*" />
                        </label>
                    </div>
                    @error('image') <span class="text-[10px] text-rose-600 font-bold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Active Status Toggle -->
                <div class="flex items-center justify-between py-2 border-b border-[#FAF9F5]">
                    <div>
                        <label class="block text-[10px] font-bold text-brownie uppercase tracking-wider">Active Status</label>
                        <p class="text-[9px] text-brownie/45 mt-0.5">Active logos are shown on the website.</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input wire:model="is_active" type="checkbox" class="sr-only peer" />
                        <div class="w-9 h-5 bg-stone-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-[#C08552]"></div>
                    </label>
                </div>

                <!-- Form Action Buttons -->
                <div class="flex items-center justify-end gap-2 border-t border-[#F3E9DC]/35 pt-4">
                    <button 
                        type="button" 
                        @click="isOpen = false; $wire.resetForm()" 
                        class="px-4 py-2 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-bold text-xs uppercase tracking-wider rounded-xl transition-all">
                        Cancel
                    </button>
                    <button 
                        type="submit" 
                        wire:loading.attr="disabled" 
                        class="px-4 py-2 bg-[#C08552] hover:bg-[#895737] text-white font-bold text-xs uppercase tracking-wider rounded-xl transition-all shadow-[0_4px_12px_-3px_rgba(192,133,82,0.25)] flex items-center gap-1.5">
                        <span wire:loading.remove wire:target="save">Save</span>
                        <span wire:loading wire:target="save" class="w-3.5 h-3.5 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                        <span wire:loading wire:target="save">Saving...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>