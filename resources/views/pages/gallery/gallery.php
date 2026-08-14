<?php

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Title('Operations Gallery - NDS Security Services')] class extends Component
{
    use WithPagination;

    public ?int $selectedCategory = null;

    public function selectCategory(?int $categoryId = null): void
    {
        $this->selectedCategory = $categoryId;
        $this->resetPage();
    }

    public function render(): mixed
    {
        $categories = GalleryCategory::where('is_active', true)->get();
        $galleries = Gallery::with('category')
            ->where('is_active', true)
            ->when($this->selectedCategory, function ($query): void {
                $query->where('gallery_category_id', $this->selectedCategory);
            })
            ->latest()
            ->paginate(12);

        return view('pages.gallery.gallery', [
            'categories' => $categories,
            'galleries' => $galleries,
        ]);
    }
};
