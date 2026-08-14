<?php

use App\Models\Client;
use App\Models\Faq;
use App\Models\Homeslider;
use App\Models\Service;
use App\Models\Testimonial;
use Livewire\Component;

new class extends Component
{
    public function render(): mixed
    {
        $sliders = Homeslider::where('is_active', true)->get();
        $clients = Client::where('is_active', true)->get();
        $services = Service::where('is_active', true)->orderBy('sort_order')->take(6)->get();
        $testimonials = Testimonial::all();
        $faqs = Faq::where('status', true)->get();

        return view('pages.home.home', [
            'sliders' => $sliders,
            'clients' => $clients,
            'services' => $services,
            'testimonials' => $testimonials,
            'faqs' => $faqs,
        ]);
    }
};
