<?php

use App\Models\Client;
use Livewire\Component;

new class extends Component
{
    public function render(): mixed
    {
        $clients = Client::where('is_active', true)->get();

        return view('pages.home.home', [
            'clients' => $clients,
        ]);
    }
};
