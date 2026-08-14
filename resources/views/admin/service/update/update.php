<?php

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('Edit Service - NDS Admin')] class extends Component
{
    use WithFileUploads;

    public int $serviceId;

    public string $title = '';

    public string $slug = '';

    public string $icon = 'ri-shield-check-fill';

    public string $short_description = '';

    public string $content = '';

    public mixed $image = null;

    public string $existingImage = '';

    public bool $is_active = true;

    public int $sort_order = 0;

    public function mount(int $id): void
    {
        $this->serviceId = $id;
        $service = Service::findOrFail($id);

        $this->title = $service->title;
        $this->slug = $service->slug;
        $this->icon = $service->icon ?? 'ri-shield-check-fill';
        $this->short_description = $service->short_description ?? '';
        $this->content = $service->content ?? '';
        $this->existingImage = $service->image_url;
        $this->is_active = $service->is_active;
        $this->sort_order = $service->sort_order;
    }

    public function save(): mixed
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,'.$this->serviceId,
            'icon' => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'image' => 'nullable|image|max:3072',
            'is_active' => 'required|boolean',
            'sort_order' => 'required|integer',
        ]);

        $service = Service::findOrFail($this->serviceId);
        $service->title = $this->title;
        $service->slug = $this->slug;
        $service->icon = $this->icon;
        $service->short_description = $this->short_description;
        $service->content = $this->content;
        $service->is_active = $this->is_active;
        $service->sort_order = $this->sort_order;

        if ($this->image) {
            if ($service->image && ! file_exists(public_path($service->image))) {
                Storage::disk('public')->delete($service->image);
            }
            $service->image = $this->image->store('services', 'public');
        }

        $service->save();

        return redirect()->route('admin.services.index');
    }

    public function render(): mixed
    {
        return view('admin.service.update.update');
    }
};
