<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Contact Us - NDS Security Services')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $subject = '';
    public string $message = '';
    
    public string $successMessage = '';

    public function submitForm(): void
    {
        $this->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|numeric|digits_between:10,15',
            'subject' => 'required|min:3|max:150',
            'message' => 'required|min:10|max:1000',
        ], [
            'name.required' => 'Please enter your full name.',
            'name.min' => 'Name must be at least 3 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'phone.numeric' => 'Phone number must contain only numbers.',
            'phone.digits_between' => 'Phone number must be between 10 and 15 digits.',
            'subject.required' => 'Please enter a subject.',
            'subject.min' => 'Subject must be at least 3 characters.',
            'message.required' => 'Please enter your query message.',
            'message.min' => 'Message must be at least 10 characters.',
        ]);

        // Here we could trigger a mail notification or database log if required.
        // For this task, we will simulate successful submission.
        
        $this->successMessage = 'Thank you! Your message has been sent successfully. Noida\'s Command Center response team will get back to you shortly.';
        
        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
    }
};