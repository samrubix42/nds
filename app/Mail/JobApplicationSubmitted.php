<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class JobApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $name,
        public ?string $email,
        public string $phone,
        public string $position,
        public string $experience,
        public string $address,
        public ?string $resumePath = null,
        public ?string $messageContent = null
    ) {}

    public function envelope(): Envelope
    {
        $replyTo = [];
        if (! empty($this->email)) {
            $replyTo[] = new Address($this->email, $this->name);
        }

        return new Envelope(
            subject: 'New Job Application: '.$this->position.' - '.$this->name,
            replyTo: $replyTo
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.job-application',
            with: [
                'name' => $this->name,
                'email' => $this->email ?? 'Not Provided',
                'phone' => $this->phone,
                'position' => $this->position,
                'experience' => $this->experience,
                'address' => $this->address,
                'messageContent' => $this->messageContent,
            ]
        );
    }

    public function attachments(): array
    {
        if ($this->resumePath && Storage::disk('public')->exists($this->resumePath)) {
            return [
                Attachment::fromStorageDisk('public', $this->resumePath)
                    ->as('Resume-'.preg_replace('/[^A-Za-z0-9_\-]/', '_', $this->name).'.'.pathinfo($this->resumePath, PATHINFO_EXTENSION)),
            ];
        }

        return [];
    }
}
