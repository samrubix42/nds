<?php

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Gallery Management - NDS Admin')] class extends Component
{
    use WithFileUploads;
    use WithPagination;

    /**
     * Search query for filtering gallery items.
     */
    public string $search = '';

    /**
     * Category filter.
     */
    public string $category_filter = '';

    /**
     * Gallery item title.
     */
    public string $title = '';

    /**
     * Selected category ID.
     */
    public ?int $gallery_category_id = null;

    /**
     * Temporary uploaded image.
     */
    public mixed $image = null;

    /**
     * Display URL of current image when editing.
     */
    public string $existingImage = '';

    /**
     * Gallery item active status.
     */
    public bool $is_active = true;

    /**
     * ID of the gallery item being edited.
     */
    public ?int $editingGalleryId = null;

    /**
     * ID of the gallery item being deleted.
     */
    public ?int $deletingGalleryId = null;

    /**
     * Reset pagination when search changes.
     */
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Reset pagination when category filter changes.
     */
    public function updatingCategoryFilter(): void
    {
        $this->resetPage();
    }

    /**
     * Reset form input state and validation.
     */
    public function resetForm(): void
    {
        $this->reset(['title', 'gallery_category_id', 'image', 'existingImage', 'is_active', 'editingGalleryId', 'deletingGalleryId']);
        $this->resetValidation();
        $this->is_active = true;
    }

    /**
     * Load gallery item for editing.
     */
    public function edit(int $galleryId): void
    {
        $this->resetForm();
        $item = Gallery::findOrFail($galleryId);

        $this->editingGalleryId = $item->id;
        $this->title = $item->title;
        $this->gallery_category_id = $item->gallery_category_id;
        $this->is_active = $item->is_active;
        $this->existingImage = $item->image_url;
    }

    /**
     * Set item ID for deletion modal.
     */
    public function confirmDelete(int $galleryId): void
    {
        $item = Gallery::findOrFail($galleryId);
        $this->deletingGalleryId = $item->id;
    }

    /**
     * Delete confirmed gallery item.
     */
    public function deleteConfirmed(): void
    {
        if (! $this->deletingGalleryId) {
            return;
        }

        $item = Gallery::findOrFail($this->deletingGalleryId);

        if ($item->image && ! file_exists(public_path($item->image))) {
            Storage::disk('public')->delete($item->image);
        }

        $item->delete();

        $this->deletingGalleryId = null;
        session()->flash('message', 'Gallery item deleted successfully.');
        $this->dispatch('toast-show', [
            'message' => 'Gallery item deleted successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
        $this->dispatch('close-delete-modal');
    }

    /**
     * Toggle active status.
     */
    public function toggleStatus(int $galleryId): void
    {
        $item = Gallery::findOrFail($galleryId);
        $item->is_active = ! $item->is_active;
        $item->save();

        session()->flash('message', 'Gallery status updated successfully.');
        $this->dispatch('toast-show', [
            'message' => 'Gallery status updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    /**
     * Create or update gallery item.
     */
    public function save(): void
    {
        if ($this->editingGalleryId) {
            $this->validate([
                'title' => 'required|string|max:255',
                'gallery_category_id' => 'nullable|exists:gallery_categories,id',
                'image' => 'nullable|image|max:2048',
                'is_active' => 'required|boolean',
            ]);

            $item = Gallery::findOrFail($this->editingGalleryId);

            if ($this->image) {
                if ($item->image && ! file_exists(public_path($item->image))) {
                    Storage::disk('public')->delete($item->image);
                }
                $path = $this->image->store('galleries', 'public');
                $item->image = $path;
            }

            $item->title = $this->title;
            $item->gallery_category_id = $this->gallery_category_id ?: null;
            $item->is_active = $this->is_active;
            $item->save();

            session()->flash('message', 'Gallery item updated successfully.');
            $this->dispatch('toast-show', [
                'message' => 'Gallery item updated successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        } else {
            $this->validate([
                'title' => 'required|string|max:255',
                'gallery_category_id' => 'nullable|exists:gallery_categories,id',
                'image' => 'required|image|max:2048',
                'is_active' => 'required|boolean',
            ]);

            $path = $this->image->store('galleries', 'public');

            Gallery::create([
                'title' => $this->title,
                'gallery_category_id' => $this->gallery_category_id ?: null,
                'image' => $path,
                'is_active' => $this->is_active,
            ]);

            session()->flash('message', 'Gallery item added successfully.');
            $this->dispatch('toast-show', [
                'message' => 'Gallery item added successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }

        $this->resetForm();
        $this->dispatch('close-modal');
    }

    /**
     * Render view.
     */
    public function render(): mixed
    {
        $galleries = Gallery::with('category')
            ->when($this->search, function ($query): void {
                $query->where('title', 'like', '%'.$this->search.'%');
            })
            ->when($this->category_filter, function ($query): void {
                $query->where('gallery_category_id', $this->category_filter);
            })
            ->latest()
            ->paginate(12);

        $categories = GalleryCategory::orderBy('name')->get();

        return view('admin.gallery.gallery', [
            'galleries' => $galleries,
            'categories' => $categories,
        ]);
    }
};
