<?php

use App\Models\Client;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Our Clientele - NDS Security Services')] class extends Component
{
    /**
     * Render the public clientele page with active clients.
     */
    public function render(): mixed
    {
        return view('pages.clientele.clientele', [
            'clients' => Client::where('is_active', true)->orderBy('sort_order')->orderBy('id', 'desc')->get(),
        ]);
    }
};
