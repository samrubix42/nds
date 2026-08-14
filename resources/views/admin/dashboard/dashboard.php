<?php

use App\Models\AppliedJobs;
use App\Models\Client;
use App\Models\Contact;
use App\Models\JobPost;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Admin Dashboard - NDS Console')] class extends Component
{
    public function render(): mixed
    {
        $totalServices = Service::count();
        $totalInquiries = Contact::count();
        $totalJobPosts = JobPost::count();
        $totalApplications = AppliedJobs::count();
        $totalClients = Client::count();

        $recentInquiries = Contact::latest()->take(5)->get();
        $recentApplications = AppliedJobs::latest()->take(5)->get();

        return view('admin.dashboard.dashboard', [
            'totalServices' => $totalServices,
            'totalInquiries' => $totalInquiries,
            'totalJobPosts' => $totalJobPosts,
            'totalApplications' => $totalApplications,
            'totalClients' => $totalClients,
            'recentInquiries' => $recentInquiries,
            'recentApplications' => $recentApplications,
        ]);
    }
};
