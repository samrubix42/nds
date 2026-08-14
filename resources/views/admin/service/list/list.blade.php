<div class="p-6 font-sans">
    <!-- Page Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
        <div>
            <h1 class="text-xl font-bold text-brownie flex items-center gap-2">
                <i class="ri-shield-star-line text-[#C08552]"></i>
                Services Management
            </h1>
            <p class="text-xs text-brownie/60 mt-0.5 font-medium">Manage dynamic services, descriptions, cover images, and detailed HTML content.</p>
        </div>
        <a 
            href="{{ route('admin.services.add') }}" 
            class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-[#C08552] hover:bg-[#a66f41] text-white text-xs font-bold uppercase tracking-wider transition-all shadow-xs cursor-pointer active:scale-95">
            <i class="ri-add-line text-sm"></i>
            <span>Add New Service</span>
        </a>
    </div>

    <!-- Search & Filter Bar -->
    <div class="bg-white border border-[#F3E9DC] rounded-xl p-4 mb-6 shadow-2xs">
        <div class="relative max-w-xs">
            <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/40 text-sm"></i>
            <input 
                wire:model.live.debounce.300ms="search" 
                type="text" 
                placeholder="Search services..." 
                class="w-full pl-9 pr-3 py-2 text-xs rounded-lg bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold placeholder-brownie/40 transition-colors"
            />
        </div>
    </div>

    <!-- Services Table Card -->
    <div class="bg-white border border-[#F3E9DC] rounded-xl shadow-2xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#FAF9F5]/80 border-b border-[#F3E9DC] text-[10px] font-bold text-brownie/60 uppercase tracking-wider">
                        <th class="py-3 px-4">Service</th>
                        <th class="py-3 px-4">Slug</th>
                        <th class="py-3 px-4 text-center">Sort Order</th>
                        <th class="py-3 px-4 text-center">Status</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#F3E9DC] text-xs">
                    @forelse($services as $service)
                        <tr class="hover:bg-[#FAF9F5]/40 transition-colors">
                            <td class="py-3.5 px-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-lg bg-[#FAF9F5] border border-[#F3E9DC] overflow-hidden shrink-0 flex items-center justify-center">
                                        <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="w-full h-full object-cover" />
                                    </div>
                                    <div>
                                        <div class="font-bold text-brownie flex items-center gap-1.5">
                                            <i class="{{ $service->icon ?? 'ri-shield-check-line' }} text-[#C08552]"></i>
                                            <span>{{ $service->title }}</span>
                                        </div>
                                        <p class="text-[11px] text-brownie/50 line-clamp-1 font-medium mt-0.5 max-w-sm">
                                            {{ $service->short_description ?? 'No brief description set.' }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3.5 px-4 font-mono text-[11px] text-brownie/70 font-semibold">
                                {{ $service->slug }}
                            </td>
                            <td class="py-3.5 px-4 text-center font-semibold text-brownie">
                                <span class="px-2 py-0.5 rounded bg-[#FAF9F5] border border-[#F3E9DC] text-[11px]">
                                    {{ $service->sort_order }}
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-center">
                                <button 
                                    wire:click="toggleStatus({{ $service->id }})" 
                                    type="button" 
                                    class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider transition-all cursor-pointer {{ $service->is_active ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $service->is_active ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                                    {{ $service->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </td>
                            <td class="py-3.5 px-4 text-right">
                                <div class="flex items-center justify-end gap-1.5">
                                    <a 
                                        href="{{ route('service.detail', ['slug' => $service->slug]) }}" 
                                        target="_blank" 
                                        class="w-7 h-7 rounded-md bg-[#FAF9F5] hover:bg-[#F3E9DC] text-brownie/70 hover:text-brownie flex items-center justify-center transition-colors" 
                                        title="View Public Page">
                                        <i class="ri-external-link-line text-sm"></i>
                                    </a>
                                    <a 
                                        href="{{ route('admin.services.edit', ['id' => $service->id]) }}" 
                                        class="w-7 h-7 rounded-md bg-[#C08552]/10 hover:bg-[#C08552] text-[#C08552] hover:text-white flex items-center justify-center transition-colors cursor-pointer" 
                                        title="Edit Service">
                                        <i class="ri-edit-line text-sm"></i>
                                    </a>
                                    <button 
                                        wire:click="confirmDelete({{ $service->id }})" 
                                        type="button" 
                                        class="w-7 h-7 rounded-md bg-rose-50 hover:bg-rose-600 text-rose-600 hover:text-white flex items-center justify-center transition-colors cursor-pointer" 
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
        <div class="px-4 py-3 border-t border-[#F3E9DC] bg-[#FAF9F5]/40">
            {{ $services->links() }}
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    @if($deletingServiceId)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-xs">
            <div class="bg-white border border-[#F3E9DC] rounded-2xl shadow-xl w-full max-w-sm p-6 text-center space-y-4">
                <div class="w-12 h-12 rounded-full bg-rose-50 text-rose-600 flex items-center justify-center mx-auto text-xl">
                    <i class="ri-alert-line"></i>
                </div>
                <div>
                    <h3 class="font-bold text-sm text-brownie uppercase tracking-wider">Confirm Deletion</h3>
                    <p class="text-xs text-brownie/60 mt-1 font-medium">Are you sure you want to delete this service? This action cannot be undone.</p>
                </div>
                <div class="flex items-center justify-center gap-2 pt-2">
                    <button 
                        wire:click="$set('deletingServiceId', null)" 
                        type="button" 
                        class="px-4 py-2 rounded-lg border border-[#F3E9DC] text-brownie/70 hover:bg-[#FAF9F5] text-xs font-bold uppercase tracking-wider transition-all">
                        Cancel
                    </button>
                    <button 
                        wire:click="deleteConfirmed" 
                        type="button" 
                        class="px-4 py-2 rounded-lg bg-rose-600 hover:bg-rose-700 text-white text-xs font-bold uppercase tracking-wider transition-all shadow-xs cursor-pointer">
                        Yes, Delete
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>