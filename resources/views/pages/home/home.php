<?php

use App\Models\Client;
use App\Models\Service;
use Livewire\Component;

new class extends Component
{
    public function render(): mixed
    {
        $clients = Client::where('is_active', true)->get();
        $services = Service::where('is_active', true)->orderBy('sort_order')->take(6)->get();

        return view('pages.home.home', [
            'clients' => $clients,
            'services' => $services,
        ]);
    }
};
