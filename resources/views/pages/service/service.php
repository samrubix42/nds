<?php

use App\Models\Service;
use Livewire\Component;

new class extends Component
{
    public string $slug = '';

    public ?Service $serviceModel = null;

    public function mount(string $slug): void
    {
        $this->slug = $slug;

        $this->serviceModel = Service::where('slug', $slug)->first();

        if (! $this->serviceModel) {
            // Fallback to first available active service or fail
            $this->serviceModel = Service::where('is_active', true)->first();
        }
    }

    public function render()
    {
        $allServices = Service::where('is_active', true)->orderBy('sort_order')->get();

        return view('pages.service.service', [
            'service' => $this->serviceModel,
            'allServices' => $allServices,
        ])->title(($this->serviceModel ? $this->serviceModel->title : 'Service Detail').' - NDS Security Services');
    }
};
