<?php

use App\Models\Client;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('NDS Security Services - Premium Security Guard Solutions Noida')]
#[Layout('layouts.app')]
class extends Component
{
    public function render(): mixed
    {
        $clients = Client::where('is_active', true)->get();

        return view('pages.home2.home2', [
            'clients' => $clients,
        ]);
    }
};
