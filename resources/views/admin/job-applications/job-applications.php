<?php

use App\Models\AppliedJobs;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Job Applications - NDS Admin')] class extends Component
{
    use WithPagination;

    /**
     * Search query for filtering applicant records.
     */
    public string $search = '';

    /**
     * ID of application selected for detail view and resume preview.
     */
    public ?int $selectedApplicationId = null;

    /**
     * Data array or model instance of selected application.
     */
    public ?AppliedJobs $selectedApplication = null;

    /**
     * ID of application marked for deletion.
     */
    public ?int $deletingApplicationId = null;

    /**
     * Reset pagination when searching.
     */
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Reset modal state.
     */
    public function resetState(): void
    {
        $this->reset(['selectedApplicationId', 'selectedApplication', 'deletingApplicationId']);
    }

    /**
     * View applicant details and load resume preview.
     */
    public function viewApplication(int $id): void
    {
        $this->selectedApplication = AppliedJobs::findOrFail($id);
        $this->selectedApplicationId = $this->selectedApplication->id;
    }

    /**
     * Toggle application status ('open' / 'closed').
     */
    public function toggleStatus(int $id): void
    {
        $application = AppliedJobs::findOrFail($id);
        $application->status = $application->status === 'open' ? 'closed' : 'open';
        $application->save();

        if ($this->selectedApplication && $this->selectedApplication->id === $id) {
            $this->selectedApplication->status = $application->status;
        }

        $this->dispatch('toast-show', [
            'message' => 'Application status updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    /**
     * Set application ID for deletion confirmation.
     */
    public function confirmDelete(int $id): void
    {
        $application = AppliedJobs::findOrFail($id);
        $this->deletingApplicationId = $application->id;
    }

    /**
     * Delete confirmed application record and file.
     */
    public function deleteConfirmed(): void
    {
        if (! $this->deletingApplicationId) {
            return;
        }

        $application = AppliedJobs::findOrFail($this->deletingApplicationId);

        // Delete uploaded file from storage if stored in public disk
        if ($application->resume && ! str_starts_with($application->resume, 'http') && ! file_exists(public_path($application->resume))) {
            Storage::disk('public')->delete($application->resume);
        }

        $application->delete();

        $this->deletingApplicationId = null;
        if ($this->selectedApplicationId === $this->deletingApplicationId) {
            $this->resetState();
        }

        $this->dispatch('toast-show', [
            'message' => 'Application deleted successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
        $this->dispatch('close-delete-modal');
        $this->dispatch('close-modal');
    }

    /**
     * Render view.
     */
    public function render(): mixed
    {
        $applications = AppliedJobs::latest()
            ->when($this->search, function ($query): void {
                $query->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%')
                    ->orWhere('phone', 'like', '%'.$this->search.'%')
                    ->orWhere('address', 'like', '%'.$this->search.'%')
                    ->orWhere('experience', 'like', '%'.$this->search.'%');
            })
            ->paginate(10);

        return view('admin.job-applications.job-applications', [
            'applications' => $applications,
        ]);
    }
};
