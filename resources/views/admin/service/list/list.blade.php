<div class="space-y-6 font-sans">
    <!-- Header Section -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">Services Management</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Manage dynamic security services, cover images, icons, and detailed specifications.</p>
        </div>
        <div class="flex items-center gap-2">
            <a 
                href="{{ route('admin.services.add') }}" 
                class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs cursor-pointer">
                <i class="ri-add-line text-sm"></i>
                <span>Add New Service</span>
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
                wire:model.live.debounce.300ms="search" 
                type="search" 
                placeholder="Search service title, overview..." 
                class="w-full pl-9 pr-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
            />
        </div>
        
        <div class="text-[10px] text-brownie/60 font-bold uppercase tracking-wider">
            Total: {{ $services->total() }} Services
        </div>
    </div>

    <!-- Data Table -->
    <div class="bg-white border border-[#F3E9DC] rounded-sm overflow-hidden shadow-2xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#FAF9F5]/60 border-b border-[#F3E9DC] text-[10px] font-bold text-brownie/60 uppercase tracking-wider">
                        <th class="py-3 px-4">Service Details</th>
                        <th class="py-3 px-4">URL Slug</th>
                        <th class="py-3 px-4 text-center">Sort Order</th>
                        <th class="py-3 px-4 text-center">Status</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#F3E9DC]/40 text-xs text-brownie">
                    @forelse($services as $service)
                        <tr class="hover:bg-[#FAF9F5]/30 transition-colors">
                            <td class="py-3 px-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] overflow-hidden shrink-0 flex items-center justify-center">
                                        <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="w-full h-full object-cover" />
                                    </div>
                                    <div>
                                        <div class="font-bold text-brownie flex items-center gap-1.5">
                                            <i class="{{ $service->icon ?? 'ri-shield-check-line' }} text-[#C08552]"></i>
                                            <span>{{ $service->title }}</span>
                                        </div>
                                        <p class="text-[11px] text-brownie/50 line-clamp-1 font-medium mt-0.5 max-w-sm">
                                            {{ $service->short_description ?? 'No brief summary set.' }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-4 font-mono text-[11px] text-brownie/70 font-semibold">
                                {{ $service->slug }}
                            </td>
                            <td class="py-3 px-4 text-center font-semibold text-brownie">
                                <span class="px-2 py-0.5 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] text-[10px] font-bold">
                                    {{ $service->sort_order }}
                                </span>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <button 
                                    wire:click="toggleStatus({{ $service->id }})" 
                                    type="button" 
                                    class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-xs text-[10px] font-bold uppercase tracking-wider transition-all cursor-pointer {{ $service->is_active ? 'bg-emerald-50 text-emerald-800 border border-emerald-200' : 'bg-rose-50 text-rose-800 border border-rose-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $service->is_active ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                                    {{ $service->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </td>
                            <td class="py-3 px-4 text-right">
                                <div class="flex items-center justify-end gap-1.5">
                                    <a 
                                        href="{{ route('service.detail', ['slug' => $service->slug]) }}" 
                                        target="_blank" 
                                        class="p-1.5 text-brownie/60 hover:text-brownie hover:bg-[#FAF9F5] rounded-xs border border-transparent hover:border-[#F3E9DC] transition-colors" 
                                        title="View Public Page">
                                        <i class="ri-external-link-line text-sm"></i>
                                    </a>
                                    <a 
                                        href="{{ route('admin.services.edit', ['id' => $service->id]) }}" 
                                        class="p-1.5 text-[#C08552] hover:text-white hover:bg-[#C08552] rounded-xs transition-colors cursor-pointer" 
                                        title="Edit Service">
                                        <i class="ri-edit-line text-sm"></i>
                                    </a>
                                    <button 
                                        wire:click="confirmDelete({{ $service->id }})" 
                                        type="button" 
                                        class="p-1.5 text-rose-600 hover:text-white hover:bg-rose-600 rounded-xs transition-colors cursor-pointer" 
                                        title="Delete Service">
                                        <i class="ri-delete-bin-line text-sm"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 text-center text-brownie/50 font-medium">
                                No services found. Click "Add New Service" to create one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-3 border-t border-[#F3E9DC]/50 bg-[#FAF9F5]/20">
            {{ $services->links() }}
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    @if($deletingServiceId)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40 backdrop-blur-xs">
            <div class="bg-white border border-[#F3E9DC] rounded-xs shadow-lg w-full max-w-sm p-6 text-center space-y-4">
                <div class="w-10 h-10 rounded-full bg-rose-50 text-rose-600 flex items-center justify-center mx-auto text-lg">
                    <i class="ri-alert-line"></i>
                </div>
                <div>
                    <h3 class="font-bold text-xs text-brownie uppercase tracking-wider">Confirm Service Deletion</h3>
                    <p class="text-xs text-brownie/60 mt-1 font-medium">Are you sure you want to delete this service? This action cannot be undone.</p>
                </div>
                <div class="flex items-center justify-center gap-2 pt-2">
                    <button 
                        wire:click="$set('deletingServiceId', null)" 
                        type="button" 
                        class="px-4 py-2 rounded-xs border border-[#F3E9DC] text-brownie/70 hover:bg-[#FAF9F5] text-xs font-bold uppercase tracking-wider transition-all">
                        Cancel
                    </button>
                    <button 
                        wire:click="deleteConfirmed" 
                        type="button" 
                        class="px-4 py-2 rounded-xs bg-rose-600 hover:bg-rose-700 text-white text-xs font-bold uppercase tracking-wider transition-all shadow-xs cursor-pointer">
                        Yes, Delete
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>