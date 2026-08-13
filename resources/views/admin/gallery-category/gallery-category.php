<?php

use App\Models\GalleryCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Gallery Categories - NDS Admin')] class extends Component
{
    use WithPagination;

    /**
     * Search query for filtering categories.
     */
    public string $search = '';

    /**
     * Category name input.
     */
    public string $name = '';

    /**
     * Category active status.
     */
    public bool $is_active = true;

    /**
     * ID of the category being edited.
     */
    public ?int $editingCategoryId = null;

    /**
     * ID of the category being deleted.
     */
    public ?int $deletingCategoryId = null;

    /**
     * Reset pagination when searching.
     */
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Reset form fields and validation.
     */
    public function resetForm(): void
    {
        $this->reset(['name', 'is_active', 'editingCategoryId', 'deletingCategoryId']);
        $this->resetValidation();
        $this->is_active = true;
    }

    /**
     * Load category for editing.
     */
    public function edit(int $categoryId): void
    {
        $this->resetForm();
        $category = GalleryCategory::findOrFail($categoryId);

        $this->editingCategoryId = $category->id;
        $this->name = $category->name;
        $this->is_active = $category->is_active;
    }

    /**
     * Set category ID for deletion modal.
     */
    public function confirmDelete(int $categoryId): void
    {
        $category = GalleryCategory::findOrFail($categoryId);
        $this->deletingCategoryId = $category->id;
    }

    /**
     * Delete confirmed category.
     */
    public function deleteConfirmed(): void
    {
        if (! $this->deletingCategoryId) {
            return;
        }

        $category = GalleryCategory::findOrFail($this->deletingCategoryId);
        $category->delete();

        $this->deletingCategoryId = null;
        session()->flash('message', 'Category deleted successfully.');
        $this->dispatch('toast-show', [
            'message' => 'Category deleted successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
        $this->dispatch('close-delete-modal');
    }

    /**
     * Toggle active status.
     */
    public function toggleStatus(int $categoryId): void
    {
        $category = GalleryCategory::findOrFail($categoryId);
        $category->is_active = ! $category->is_active;
        $category->save();

        session()->flash('message', 'Category status updated successfully.');
        $this->dispatch('toast-show', [
            'message' => 'Category status updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    /**
     * Save category (create or update).
     */
    public function save(): void
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);

        if ($this->editingCategoryId) {
            $category = GalleryCategory::findOrFail($this->editingCategoryId);
            $category->update([
                'name' => $this->name,
                'is_active' => $this->is_active,
            ]);
            session()->flash('message', 'Category updated successfully.');
            $this->dispatch('toast-show', [
                'message' => 'Category updated successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        } else {
            GalleryCategory::create([
                'name' => $this->name,
                'is_active' => $this->is_active,
            ]);
            session()->flash('message', 'Category added successfully.');
            $this->dispatch('toast-show', [
                'message' => 'Category added successfully!',
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
        $categories = GalleryCategory::withCount('galleries')
            ->when($this->search, function ($query): void {
                $query->where('name', 'like', '%'.$this->search.'%');
            })
            ->latest()
            ->paginate(10);

        return view('admin.gallery-category.gallery-category', [
            'categories' => $categories,
        ]);
    }
};
