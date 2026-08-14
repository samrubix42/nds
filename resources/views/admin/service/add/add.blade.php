<div class="space-y-6 font-sans">
    <!-- Header Section -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between pb-4 border-b border-[#F3E9DC]/60">
        <div>
            <h2 class="text-lg font-bold text-brownie tracking-tight uppercase">Add New Service</h2>
            <p class="text-xs text-brownie/60 font-medium mt-0.5">Create a new security service with cover image and TinyMCE rich text editor.</p>
        </div>
        <div class="flex items-center gap-2">
            <a 
                href="{{ route('admin.services.index') }}" 
                class="inline-flex items-center gap-1.5 px-4 py-2 border border-[#F3E9DC] bg-white hover:bg-[#FAF9F5] text-brownie font-semibold text-xs uppercase tracking-wider rounded-sm transition-all shadow-xs">
                <i class="ri-arrow-left-line text-sm"></i>
                <span>Back to List</span>
            </a>
        </div>
    </div>

    <!-- Form Container Card -->
    <div 
        x-data="{
            content: @entangle('content'),
            initTinyMCE() {
                if (typeof tinymce === 'undefined') return;
                tinymce.remove('#service-add-content-editor');
                tinymce.init({
                    selector: '#service-add-content-editor',
                    height: 340,
                    menubar: false,
                    plugins: 'advlist autolink lists link image charmap preview searchreplace visualblocks code table help wordcount',
                    toolbar: 'undo redo | blocks | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code',
                    skin: 'oxide',
                    content_style: 'body { font-family: Instrument Sans, sans-serif; font-size: 13px; color: #5E3023; }',
                    setup: (editor) => {
                        editor.on('init', () => {
                            editor.setContent(this.content || '');
                        });
                        editor.on('change keyup undo redo', () => {
                            this.content = editor.getContent();
                        });
                    }
                });
            }
        }"
        x-init="
            $nextTick(() => {
                setTimeout(() => initTinyMCE(), 150);
            });
        "
        class="bg-white border border-[#F3E9DC] rounded-sm p-6 shadow-2xs max-w-4xl">
        
        <form wire:submit.prevent="save" class="space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Service Title -->
                <div class="space-y-1">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Service Title <span class="text-rose-500">*</span>
                    </label>
                    <input 
                        wire:model.live.debounce.300ms="title" 
                        type="text" 
                        placeholder="e.g. Manned Guarding" 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium"
                    />
                    @error('title') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- URL Slug -->
                <div class="space-y-1">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        URL Slug <span class="text-rose-500">*</span>
                    </label>
                    <input 
                        wire:model="slug" 
                        type="text" 
                        placeholder="e.g. manned-guarding" 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-mono font-medium"
                    />
                    @error('slug') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Icon Class -->
                <div class="space-y-1">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        RemixIcon Class Name
                    </label>
                    <div class="relative">
                        <i class="{{ $icon ? $icon : 'ri-shield-check-line' }} absolute left-3 top-1/2 -translate-y-1/2 text-brownie/50 text-sm"></i>
                        <input 
                            wire:model="icon" 
                            type="text" 
                            placeholder="ri-shield-check-fill" 
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium"
                        />
                    </div>
                    @error('icon') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Sort Order -->
                <div class="space-y-1">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Sort Order
                    </label>
                    <input 
                        wire:model="sort_order" 
                        type="number" 
                        placeholder="0" 
                        class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium"
                    />
                    @error('sort_order') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Short Description -->
            <div class="space-y-1">
                <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                    Short Description (Brief Summary)
                </label>
                <textarea 
                    wire:model="short_description" 
                    rows="2" 
                    placeholder="Brief 2-3 line summary of this service..." 
                    class="w-full px-3 py-2 text-xs rounded-xs bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-medium"
                ></textarea>
                @error('short_description') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
            </div>

            <!-- Cover Image Upload -->
            <div class="space-y-1">
                <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                    Cover Banner Image
                </label>
                <div class="flex items-center gap-4">
                    @if($image)
                        <img src="{{ $image->temporaryUrl() }}" class="w-14 h-14 rounded-xs object-cover border border-[#F3E9DC]" />
                    @endif
                    <input 
                        wire:model="image" 
                        type="file" 
                        accept="image/*" 
                        class="text-xs text-brownie file:mr-3 file:py-1.5 file:px-3 file:rounded-xs file:border-0 file:text-xs file:font-bold file:bg-[#C08552]/10 file:text-[#C08552] hover:file:bg-[#C08552] hover:file:text-white transition-colors"
                    />
                </div>
                @error('image') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
            </div>

            <!-- TinyMCE Content Editor -->
            <div class="space-y-1">
                <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                    Detailed Service Content (TinyMCE Editor)
                </label>
                <div wire:ignore>
                    <textarea id="service-add-content-editor" x-model="content"></textarea>
                </div>
                @error('content') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
            </div>

            <!-- Active Status Toggle -->
            <div class="flex items-center gap-2 pt-2">
                <input 
                    wire:model="is_active" 
                    type="checkbox" 
                    id="is_active" 
                    class="rounded-xs border-[#F3E9DC] text-[#C08552] focus:ring-[#C08552]"
                />
                <label for="is_active" class="text-xs font-bold text-brownie uppercase tracking-wider cursor-pointer">
                    Active (Publish on Website)
                </label>
            </div>

            <!-- Submit Buttons -->
            <div class="pt-4 border-t border-[#F3E9DC]/60 flex items-center justify-end gap-3">
                <a 
                    href="{{ route('admin.services.index') }}" 
                    class="px-4 py-2 rounded-xs border border-[#F3E9DC] text-brownie/70 hover:bg-[#FAF9F5] text-xs font-bold uppercase tracking-wider transition-all">
                    Cancel
                </a>
                <button 
                    type="submit" 
                    class="px-6 py-2 rounded-xs bg-[#C08552] hover:bg-[#895737] text-white text-xs font-bold uppercase tracking-wider transition-all shadow-xs cursor-pointer active:scale-95">
                    Save Service
                </button>
            </div>
        </form>
    </div>

    <!-- TinyMCE CDN Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
</div>