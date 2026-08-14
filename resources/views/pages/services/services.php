<?php

use App\Models\Service;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Our Services - NDS Security Services')] class extends Component
{
    public function render(): mixed
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();

        return view('pages.services.services', [
            'services' => $services,
        ]);
    }
};
