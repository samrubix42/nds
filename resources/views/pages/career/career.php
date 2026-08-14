<?php

use App\Models\AppliedJobs;
use App\Models\JobPost;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Title('Careers - Join NDS Security')]

class extends Component
{
    use WithFileUploads;

    public string $position = '';

    public ?int $selectedJobId = null;

    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $address = '';

    public string $experience = '';

    public string $message = '';

    /**
     * @var mixed
     */
    public $resume;

    public string $successMessage = '';

    public function selectJob(string|int $jobIdentifier): void
    {
        if (is_numeric($jobIdentifier)) {
            $job = JobPost::find($jobIdentifier);
            if ($job) {
                $this->selectedJobId = $job->id;
                $this->position = $job->title;
            }
        } else {
            $this->position = $jobIdentifier;
            $this->selectedJobId = null;
        }

        $this->successMessage = '';
        $this->dispatch('job-selected');
    }

    public function submitApplication(): void
    {
        $this->validate([
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|numeric|digits_between:10,15',
            'position' => 'required|string',
            'experience' => 'required|numeric|min:0|max:50',
            'address' => 'required|string|min:5|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:10240',
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
            'address.required' => 'Please enter your address.',
            'resume.required' => 'Please upload your resume file.',
            'resume.mimes' => 'Resume must be a PDF, DOC, or DOCX document.',
            'resume.max' => 'Resume file size cannot exceed 10MB.',
        ]);

        $resumePath = $this->resume->store('resumes', 'public');

        AppliedJobs::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'experience' => $this->experience,
            'resume' => $resumePath,
            'status' => 'open',
        ]);

        $this->successMessage = 'Your application and resume for the "'.$this->position.'" position have been successfully submitted. The NDS HR Desk will review your resume and contact you soon.';

        $this->reset(['name', 'email', 'phone', 'address', 'experience', 'message', 'resume']);
    }

    public function render(): mixed
    {
        $jobs = JobPost::where('status', 'open')->latest()->get();

        return view('pages.career.career', [
            'jobs' => $jobs,
        ]);
    }
};
