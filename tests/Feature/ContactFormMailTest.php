<?php

use App\Mail\ContactFormSubmitted;
use App\Mail\JobApplicationSubmitted;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

test('contact form sends email to contact_recipient email', function () {
    Mail::fake();

    Livewire::test('pages::contact')
        ->set('name', 'John Doe')
        ->set('email', 'john@example.com')
        ->set('phone', '9876543210')
        ->set('subject', 'Security Inquiry')
        ->set('message', 'We would like to inquire about security services for our commercial facility.')
        ->call('submitForm')
        ->assertHasNoErrors();

    Mail::assertSent(ContactFormSubmitted::class, function ($mail) {
        return $mail->hasTo(config('mail.contact_recipient')) &&
               $mail->name === 'John Doe' &&
               $mail->email === 'john@example.com' &&
               $mail->phone === '9876543210' &&
               $mail->subjectText === 'Security Inquiry';
    });
});

test('career form sends email with application details to contact_recipient email', function () {
    Mail::fake();
    Storage::fake('public');

    $file = UploadedFile::fake()->create('resume.pdf', 100, 'application/pdf');

    Livewire::test('pages::career')
        ->set('position', 'Security Supervisor')
        ->set('name', 'Jane Smith')
        ->set('email', 'jane@example.com')
        ->set('phone', '9876543210')
        ->set('experience', '5')
        ->set('address', '123 Main Street, Sector 62, Noida')
        ->set('resume', $file)
        ->call('submitApplication')
        ->assertHasNoErrors();

    Mail::assertSent(JobApplicationSubmitted::class, function ($mail) {
        return $mail->hasTo(config('mail.contact_recipient')) &&
               $mail->name === 'Jane Smith' &&
               $mail->position === 'Security Supervisor' &&
               $mail->experience === '5';
    });
});
