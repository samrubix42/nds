<?php

use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('Add New Service - NDS Admin')] class extends Component
{
    use WithFileUploads;

    public string $title = '';

    public string $slug = '';

    public string $icon = 'ri-shield-check-fill';

    public string $short_description = '';

    public string $content = '';

    public mixed $image = null;

    public bool $is_active = true;

    public int $sort_order = 0;

    public function updatedTitle(string $value): void
    {
        $this->slug = Str::slug($value);
    }

    public function save(): mixed
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug',
            'icon' => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'image' => 'nullable|image|max:3072',
            'is_active' => 'required|boolean',
            'sort_order' => 'required|integer',
        ]);

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('services', 'public');
        }

        Service::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'icon' => $this->icon,
            'image' => $imagePath,
            'short_description' => $this->short_description,
            'content' => $this->content,
            'is_active' => $this->is_active,
            'sort_order' => $this->sort_order,
        ]);

        return redirect()->route('admin.services.index');
    }

    public function render(): mixed
    {
        return view('admin.service.add.add');
    }
};
