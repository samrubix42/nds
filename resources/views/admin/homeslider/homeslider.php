<?php

use App\Models\Homeslider;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

new #[Layout('layouts.admin')] #[Title('Home Slider Management - NDS Security Admin')] class extends Component
{
    use WithFileUploads, WithPagination;

    public string $search = '';

    public ?int $editingSliderId = null;

    public ?int $deletingSliderId = null;

    // Form fields
    public string $title = '';

    public string $description = '';

    public $image = null;

    public ?string $existingImage = null;

    public string $button_text1 = '';

    public string $button_link1 = '';

    public string $button_text2 = '';

    public string $button_link2 = '';

    public bool $is_active = true;

    protected function rules(): array
    {
        return [
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:10',
            'image' => $this->editingSliderId ? 'nullable' : 'nullable',
            'button_text1' => 'nullable|max:50',
            'button_link1' => 'nullable|max:255',
            'button_text2' => 'nullable|max:50',
            'button_link2' => 'nullable|max:255',
            'is_active' => 'boolean',
        ];
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function resetForm(): void
    {
        $this->editingSliderId = null;
        $this->title = '';
        $this->description = '';
        $this->image = null;
        $this->existingImage = null;
        $this->button_text1 = '';
        $this->button_link1 = '';
        $this->button_text2 = '';
        $this->button_link2 = '';
        $this->is_active = true;
        $this->resetErrorBag();
    }

    public function edit(int $id): void
    {
        $slider = Homeslider::findOrFail($id);
        $this->editingSliderId = $slider->id;
        $this->title = $slider->title;
        $this->description = $slider->description ?? '';
        $this->existingImage = $slider->image;
        $this->button_text1 = $slider->button_text1 ?? '';
        $this->button_link1 = $slider->button_link1 ?? '';
        $this->button_text2 = $slider->button_text2 ?? '';
        $this->button_link2 = $slider->button_link2 ?? '';
        $this->is_active = (bool) $slider->is_active;
        $this->image = null;
        $this->resetErrorBag();
    }

    public function save(): void
    {
        $this->validate();

        $imagePath = $this->existingImage;

        if ($this->image && is_object($this->image)) {
            $imagePath = $this->image->store('homesliders', 'public');
        }

        Homeslider::updateOrCreate(
            ['id' => $this->editingSliderId],
            [
                'title' => $this->title,
                'description' => $this->description,
                'image' => $imagePath ?? 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?auto=format&fit=crop&w=1600&q=80',
                'button_text1' => $this->button_text1 ?: null,
                'button_link1' => $this->button_link1 ?: null,
                'button_text2' => $this->button_text2 ?: null,
                'button_link2' => $this->button_link2 ?: null,
                'is_active' => $this->is_active,
            ]
        );

        $this->resetForm();
        $this->dispatch('close-modal');
    }

    public function toggleStatus(int $id): void
    {
        $slider = Homeslider::findOrFail($id);
        $slider->is_active = ! $slider->is_active;
        $slider->save();
    }

    public function confirmDelete(int $id): void
    {
        $this->deletingSliderId = $id;
    }

    public function deleteConfirmed(): void
    {
        if ($this->deletingSliderId) {
            $slider = Homeslider::findOrFail($this->deletingSliderId);
            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }
            $slider->delete();
            $this->deletingSliderId = null;
        }

        $this->dispatch('close-delete-modal');
    }

    public function render(): mixed
    {
        $sliders = Homeslider::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%'.$this->search.'%')
                    ->orWhere('description', 'like', '%'.$this->search.'%');
            })
            ->latest()
            ->paginate(10);

        return view('admin.homeslider.homeslider', [
            'sliders' => $sliders,
        ]);
    }
};