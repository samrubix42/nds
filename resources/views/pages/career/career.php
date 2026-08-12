<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Careers - Join NDS Security')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $position = '';
    public string $experience = '';
    public string $message = '';
    
    public string $successMessage = '';

    public function selectJob(string $jobSlug): void
    {
        $this->position = $jobSlug;
        $this->successMessage = '';
        $this->dispatch('job-selected');
    }

    public function submitApplication(): void
    {
        $this->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|numeric|digits_between:10,15',
            'position' => 'required',
            'experience' => 'required|numeric|min:0|max:50',
            'message' => 'required|min:10|max:1000',
        ], [
            'name.required' => 'Please enter your full name.',
            'name.min' => 'Name must be at least 3 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your contact number.',
            'phone.numeric' => 'Phone number must contain only numbers.',
            'phone.digits_between' => 'Phone number must be between 10 and 15 digits.',
            'position.required' => 'Please select a job position to apply.',
            'experience.required' => 'Please enter your experience in years.',
            'experience.numeric' => 'Experience must be a number.',
            'experience.min' => 'Experience cannot be negative.',
            'message.required' => 'Please share a brief note about yourself or cover details.',
            'message.min' => 'Note must be at least 10 characters.',
        ]);

        // In a real application, we would handle resume file uploads and database records.
        // For the purposes of this task, we simulate success.

        $this->successMessage = 'Your application for the ' . ucwords(str_replace('-', ' ', $this->position)) . ' position has been logged. The NDS HR Desk will review your application and contact you soon.';

        $this->reset(['name', 'email', 'phone', 'position', 'experience', 'message']);
    }
};