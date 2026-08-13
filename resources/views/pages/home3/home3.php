<?php

use App\Models\Client;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('NDS Security Services - Home 3 Full Screen Top Hero Slider')]
#[Layout('layouts.app3')]
class extends Component
{
    public function render(): mixed
    {
        $clients = Client::where('is_active', true)->get();

        return view('pages.home3.home3', [
            'clients' => $clients,
        ]);
    }
};
