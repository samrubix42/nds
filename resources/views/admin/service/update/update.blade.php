<div class="p-6 font-sans">
    <!-- Page Header -->
    <div class="flex items-center justify-between gap-4 mb-6">
        <div>
            <h1 class="text-xl font-bold text-brownie flex items-center gap-2">
                <i class="ri-edit-circle-line text-[#C08552]"></i>
                Edit Service
            </h1>
            <p class="text-xs text-brownie/60 mt-0.5 font-medium">Update service details, cover image, and rich text content via TinyMCE editor.</p>
        </div>
        <a 
            href="{{ route('admin.services.index') }}" 
            class="inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg border border-[#F3E9DC] bg-white hover:bg-[#FAF9F5] text-brownie text-xs font-bold uppercase tracking-wider transition-all shadow-2xs">
            <i class="ri-arrow-left-line text-sm"></i>
            <span>Back to Services</span>
        </a>
    </div>

    <!-- Edit Service Form Container -->
    <div 
        x-data="{
            content: @entangle('content'),
            initEditor() {
                if (typeof tinymce === 'undefined') return;
                if (tinymce.get('service-update-content-editor')) {
                    tinymce.get('service-update-content-editor').remove();
                }
                tinymce.init({
                    selector: '#service-update-content-editor',
                    height: 380,
                    menubar: false,
                    plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
                    toolbar: 'undo redo | blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code help',
                    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px; color:#2e1d11 }',
                    setup: (editor) => {
                        editor.on('init', () => {
                            editor.setContent(this.content || '');
                        });
                        editor.on('change keyup nodeChange', () => {
                            this.content = editor.getContent();
                        });
                    }
                });
            }
        }"
        x-init="
            $nextTick(() => {
                setTimeout(() => {
                    initEditor();
                }, 150);
            });
        "
        class="bg-white border border-[#F3E9DC] rounded-xl shadow-2xs p-6 max-w-4xl">
        
        <form wire:submit.prevent="save" class="space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Service Title -->
                <div class="space-y-1">
                    <label class="block text-[11px] font-bold text-brownie uppercase tracking-wider">
                        Service Title <span class="text-rose-500">*</span>
                    </label>
                    <input 
                        wire:model="title" 
                        type="text" 
                        placeholder="e.g. Manned Guarding" 
                        class="w-full px-3 py-2 text-xs rounded-lg bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold"
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
                        class="w-full px-3 py-2 text-xs rounded-lg bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold font-mono"
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
                            class="w-full pl-9 pr-3 py-2 text-xs rounded-lg bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold"
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
                        class="w-full px-3 py-2 text-xs rounded-lg bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold"
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
                    class="w-full px-3 py-2 text-xs rounded-lg bg-[#FAF9F5]/40 border border-[#F3E9DC] focus:outline-none focus:border-[#C08552] text-brownie font-semibold"
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
                        <img src="{{ $image->temporaryUrl() }}" class="w-16 h-16 rounded-lg object-cover border border-[#F3E9DC]" />
                    @elseif($existingImage)
                        <img src="{{ $existingImage }}" class="w-16 h-16 rounded-lg object-cover border border-[#F3E9DC]" />
                    @endif
                    <input 
                        wire:model="image" 
                        type="file" 
                        accept="image/*" 
                        class="text-xs text-brownie file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-bold file:bg-[#C08552]/10 file:text-[#C08552] hover:file:bg-[#C08552] hover:file:text-white transition-colors"
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
                    <textarea id="service-update-content-editor" x-model="content"></textarea>
                </div>
                @error('content') <span class="text-[10px] text-rose-600 font-semibold block mt-1">{{ $message }}</span> @enderror
            </div>

            <!-- Active Status Toggle -->
            <div class="flex items-center gap-2 pt-2">
                <input 
                    wire:model="is_active" 
                    type="checkbox" 
                    id="is_active" 
                    class="rounded border-[#F3E9DC] text-[#C08552] focus:ring-[#C08552]"
                />
                <label for="is_active" class="text-xs font-bold text-brownie uppercase tracking-wider cursor-pointer">
                    Active (Publish on Website)
                </label>
            </div>

            <!-- Submit Buttons -->
            <div class="pt-4 border-t border-[#F3E9DC] flex items-center justify-end gap-3">
                <a 
                    href="{{ route('admin.services.index') }}" 
                    class="px-4 py-2 rounded-lg border border-[#F3E9DC] text-brownie/70 hover:bg-[#FAF9F5] text-xs font-bold uppercase tracking-wider transition-all">
                    Cancel
                </a>
                <button 
                    type="submit" 
                    class="px-6 py-2.5 rounded-lg bg-[#C08552] hover:bg-[#a66f41] text-white text-xs font-bold uppercase tracking-wider transition-all shadow-xs cursor-pointer active:scale-95">
                    Update Service
                </button>
            </div>
        </form>
    </div>

    <!-- TinyMCE CDN Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
</div>