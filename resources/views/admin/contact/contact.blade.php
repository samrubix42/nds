<div 
    x-data="{ viewOpen: false, deleteOpen: false }" 
    @close-view-modal.window="viewOpen = false" 
    @close-delete-modal.window="deleteOpen = false" 
    class="space-y-6 font-sans">

    <!-- Header Section -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">Contact Inquiries Management</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Review, read, and manage customer inquiries submitted via the website contact form.</p>
        </div>
        <div class="flex items-center gap-2">
            <span class="px-3 py-1 bg-amber-50 text-amber-800 border border-amber-200 text-xs font-extrabold rounded-sm flex items-center gap-1.5 uppercase tracking-wider">
                <i class="ri-mail-unread-fill text-amber-600 text-sm"></i>
                <span>{{ $unreadCount }} Unread {{ \Illuminate\Support\Str::plural('Inquiry', $unreadCount) }}</span>
            </span>
        </div>
    </div>

    <!-- Controls & Filters Bar -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-3 border border-[#F3E9DC]/70 rounded-sm">
        <div class="relative w-full sm:max-w-xs">
            <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-brownie/45 text-sm"></i>
            <input 
                wire:model.live="search" 
                type="search" 
                placeholder="Search by name, email, subject..." 
                class="w-full pl-9 pr-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium placeholder-brownie/40 transition-colors" 
            />
        </div>
        
        <div class="flex items-center gap-3">
            <select 
                wire:model.live="statusFilter"
                class="px-3 py-1.5 text-xs rounded-xs bg-[#FAF9F5]/60 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold">
                <option value="all">All Inquiries</option>
                <option value="unread">Unread Only</option>
                <option value="read">Read Only</option>
            </select>
            
            <div class="text-[10px] text-brownie/60 font-bold uppercase tracking-wider">
                Total: {{ $contacts->total() }} Inquiries
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white border border-[#F3E9DC] rounded-sm overflow-hidden shadow-2xs">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-[#FAF9F5]/60 border-b border-[#F3E9DC] text-[10px] font-bold text-brownie/60 uppercase tracking-wider">
                    <th class="py-3 px-4">Sender Details</th>
                    <th class="py-3 px-4">Subject / Service</th>
                    <th class="py-3 px-4">Received Date</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#F3E9DC]/40 text-xs text-brownie">
                @forelse($contacts as $contact)
                    <tr class="hover:bg-[#FAF9F5]/30 transition-colors {{ !$contact->is_read ? 'bg-amber-50/20 font-semibold' : '' }}">
                        <td class="py-3 px-4">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#C08552]/10 text-caramel flex items-center justify-center font-extrabold text-xs shrink-0 uppercase">
                                    {{ substr($contact->name, 0, 1) }}
                                </div>
                                <div class="min-w-0">
                                    <div class="font-bold text-brownie flex items-center gap-1.5">
                                        <span>{{ $contact->name }}</span>
                                        @if(!$contact->is_read)
                                            <span class="w-2 h-2 rounded-full bg-caramel animate-pulse"></span>
                                        @endif
                                    </div>
                                    <div class="text-[11px] text-brownie/60 font-normal flex flex-wrap items-center gap-x-2">
                                        <span><i class="ri-mail-line text-[10px]"></i> {{ $contact->email }}</span>
                                        @if($contact->phone)
                                            <span><i class="ri-phone-line text-[10px]"></i> {{ $contact->phone }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-4 max-w-xs">
                            <div class="font-semibold text-brownie truncate" title="{{ $contact->subject }}">
                                {{ $contact->subject ?: 'General Inquiry' }}
                            </div>
                            <p class="text-[11px] text-brownie/60 font-normal truncate mt-0.5" title="{{ $contact->message }}">
                                {{ \Illuminate\Support\Str::limit($contact->message, 60) }}
                            </p>
                        </td>
                        <td class="py-3 px-4 text-[11px] text-brownie/60 whitespace-nowrap">
                            {{ $contact->created_at ? $contact->created_at->format('M d, Y • g:i A') : 'N/A' }}
                        </td>
                        <td class="py-3 px-4">
                            <button 
                                wire:click="toggleReadStatus({{ $contact->id }})" 
                                title="Click to toggle read status">
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-xs text-[10px] font-bold border transition-colors cursor-pointer {{ $contact->is_read ? 'bg-stone-100 text-stone-700 border-stone-200' : 'bg-amber-50 text-amber-800 border-amber-200' }}">
                                    <i class="{{ $contact->is_read ? 'ri-mail-open-line' : 'ri-mail-unread-fill text-amber-600' }} text-[11px]"></i>
                                    <span>{{ $contact->is_read ? 'Read' : 'New / Unread' }}</span>
                                </span>
                            </button>
                        </td>
                        <td class="py-3 px-4 text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button 
                                    wire:click="viewMessage({{ $contact->id }})" 
                                    @click="viewOpen = true" 
                                    class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-[#C08552]/40 text-brownie/70 hover:text-[#C08552] transition-colors" 
                                    title="View Full Message">
                                    <i class="ri-eye-line text-xs"></i>
                                </button>
                                <button 
                                    wire:click="confirmDelete({{ $contact->id }})" 
                                    @click="deleteOpen = true" 
                                    class="p-1 rounded-xs bg-[#FAF9F5] border border-[#F3E9DC] hover:border-rose-300 text-brownie/70 hover:text-rose-600 transition-colors" 
                                    title="Delete Entry">
                                    <i class="ri-delete-bin-line text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 text-center text-brownie/50">
                            <i class="ri-inbox-line text-2xl block mb-1 text-brownie/30"></i>
                            <p class="font-semibold text-xs">No Contact Inquiries Found</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if($contacts->hasPages())
            <div class="p-3 border-t border-[#F3E9DC]">
                {{ $contacts->links() }}
            </div>
        @endif
    </div>

    <!-- View Full Message Modal -->
    <div 
        x-show="viewOpen" 
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
        style="display: none;"
        x-cloak>
        <div @click="viewOpen = false; $wire.closeViewModal()" class="fixed inset-0 bg-[#3E1B11]/50 backdrop-blur-xs"></div>
        <div class="bg-white rounded-md border border-[#F3E9DC] max-w-lg w-full p-6 shadow-xl relative z-10">
            @if($viewingContact)
                <div class="flex items-center justify-between pb-3 border-b border-[#F3E9DC]">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-[#C08552]/10 text-caramel flex items-center justify-center font-extrabold text-xs">
                            {{ substr($viewingContact->name, 0, 1) }}
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-brownie uppercase tracking-wider">{{ $viewingContact->name }}</h3>
                            <p class="text-[10px] text-brownie/50 font-medium">{{ $viewingContact->created_at ? $viewingContact->created_at->format('F j, Y • g:i A') : '' }}</p>
                        </div>
                    </div>
                    <button @click="viewOpen = false; $wire.closeViewModal()" class="w-6 h-6 rounded-xs hover:bg-[#FAF9F5] border border-transparent hover:border-[#F3E9DC] flex items-center justify-center text-brownie/60">
                        <i class="ri-close-line text-sm"></i>
                    </button>
                </div>

                <div class="space-y-4 py-4">
                    <div class="grid grid-cols-2 gap-3 text-xs bg-[#FAF9F5] p-3 rounded-xs border border-[#F3E9DC]">
                        <div>
                            <span class="text-[10px] font-bold text-brownie/50 uppercase block">Email Address:</span>
                            <a href="mailto:{{ $viewingContact->email }}" class="font-semibold text-caramel hover:underline">{{ $viewingContact->email }}</a>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-brownie/50 uppercase block">Phone Number:</span>
                            <a href="tel:{{ $viewingContact->phone }}" class="font-semibold text-brownie hover:text-caramel">{{ $viewingContact->phone ?: 'N/A' }}</a>
                        </div>
                    </div>

                    <div>
                        <span class="text-[10px] font-bold text-brownie/50 uppercase block mb-1">Subject / Service Category:</span>
                        <p class="text-xs font-bold text-brownie bg-cream/20 px-3 py-1.5 rounded-xs border border-cream">{{ $viewingContact->subject ?: 'General Query' }}</p>
                    </div>

                    <div>
                        <span class="text-[10px] font-bold text-brownie/50 uppercase block mb-1">Full Query Message:</span>
                        <div class="p-4 bg-[#FDFBF7] border border-[#F3E9DC] rounded-xs text-xs leading-relaxed text-brownie font-medium whitespace-pre-line">
                            {{ $viewingContact->message }}
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-2 border-t border-[#F3E9DC] pt-3">
                    <a href="mailto:{{ $viewingContact->email }}" class="px-3.5 py-1.5 bg-[#C08552] hover:bg-[#895737] text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs flex items-center gap-1.5">
                        <i class="ri-reply-fill"></i> Reply via Email
                    </a>
                    <button type="button" @click="viewOpen = false; $wire.closeViewModal()" class="px-3.5 py-1.5 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm">Close</button>
                </div>
            @endif
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
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
                    <p class="text-[10px] text-brownie/50">This inquiry entry will be permanently removed.</p>
                </div>
            </div>
            <p class="text-xs text-brownie/80 font-medium mb-5">Are you sure you want to delete this contact record?</p>
            <div class="flex items-center justify-end gap-2 border-t border-[#F3E9DC] pt-3">
                <button type="button" @click="deleteOpen = false" class="px-3.5 py-1.5 border border-[#F3E9DC] hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all">Cancel</button>
                <button type="button" wire:click="deleteConfirmed" @click="deleteOpen = false" class="px-4 py-1.5 bg-rose-600 hover:bg-rose-700 text-white font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs">Delete Record</button>
            </div>
        </div>
    </div>

</div>