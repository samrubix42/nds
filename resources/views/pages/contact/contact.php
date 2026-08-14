<?php

use App\Mail\ContactFormSubmitted;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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

        // Save entry into database for admin management
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
            'is_read' => false,
        ]);

        $recipientEmail = setting('email', config('mail.contact_recipient', 'samcool3203@gmail.com'));

        try {
            Mail::to($recipientEmail)->send(
                new ContactFormSubmitted(
                    name: $this->name,
                    email: $this->email,
                    phone: $this->phone,
                    subjectText: $this->subject,
                    messageContent: $this->message
                )
            );
        } catch (\Throwable $e) {
            Log::error('Contact form mail sending error: '.$e->getMessage(), [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'subject' => $this->subject,
            ]);
        }

        $this->successMessage = 'Thank you! Your message has been sent successfully to '.$recipientEmail.'. Noida\'s Command Center response team will get back to you shortly.';

        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
    }
};
