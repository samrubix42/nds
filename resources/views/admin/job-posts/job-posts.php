<?php

use App\Models\JobPost;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Job Posts Management - NDS Admin')] class extends Component
{
    use WithPagination;

    /**
     * Search query for filtering job posts.
     */
    public string $search = '';

    /**
     * Job Title.
     */
    public string $title = '';

    /**
     * Rich Text Description (TinyMCE content).
     */
    public string $description = '';

    /**
     * Job Location.
     */
    public string $location = '';

    /**
     * Work Shift ('Day', 'Night', 'Rotational').
     */
    public string $shift = 'Day';

    /**
     * Job Status ('open', 'closed').
     */
    public string $status = 'open';

    /**
     * ID of the job post being edited.
     */
    public ?int $editingJobPostId = null;

    /**
     * ID of the job post being deleted.
     */
    public ?int $deletingJobPostId = null;

    /**
     * Reset pagination when searching.
     */
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Reset form fields and validation state.
     */
    public function resetForm(): void
    {
        $this->reset(['title', 'description', 'location', 'shift', 'status', 'editingJobPostId', 'deletingJobPostId']);
        $this->resetValidation();
        $this->shift = 'Day';
        $this->status = 'open';
    }

    /**
     * Load job post for editing.
     */
    public function edit(int $jobPostId): void
    {
        $this->resetForm();
        $jobPost = JobPost::findOrFail($jobPostId);

        $this->editingJobPostId = $jobPost->id;
        $this->title = $jobPost->title;
        $this->description = $jobPost->description;
        $this->location = $jobPost->location;
        $this->shift = $jobPost->shift;
        $this->status = $jobPost->status;

        $this->dispatch('load-tinymce', content: $this->description);
    }

    /**
     * Set job post ID for deletion modal.
     */
    public function confirmDelete(int $jobPostId): void
    {
        $jobPost = JobPost::findOrFail($jobPostId);
        $this->deletingJobPostId = $jobPost->id;
    }

    /**
     * Delete confirmed job post.
     */
    public function deleteConfirmed(): void
    {
        if (! $this->deletingJobPostId) {
            return;
        }

        $jobPost = JobPost::findOrFail($this->deletingJobPostId);
        $jobPost->delete();

        $this->deletingJobPostId = null;
        session()->flash('message', 'Job post deleted successfully.');
        $this->dispatch('toast-show', [
            'message' => 'Job post deleted successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
        $this->dispatch('close-delete-modal');
    }

    /**
     * Toggle open/closed status.
     */
    public function toggleStatus(int $jobPostId): void
    {
        $jobPost = JobPost::findOrFail($jobPostId);
        $jobPost->status = $jobPost->status === 'open' ? 'closed' : 'open';
        $jobPost->save();

        session()->flash('message', 'Job post status updated successfully.');
        $this->dispatch('toast-show', [
            'message' => 'Job post status updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    /**
     * Save job post (create or update).
     */
    public function save(): void
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'shift' => 'required|in:Day,Night,Rotational',
            'status' => 'required|in:open,closed',
        ]);

        if ($this->editingJobPostId) {
            $jobPost = JobPost::findOrFail($this->editingJobPostId);
            $jobPost->update([
                'title' => $this->title,
                'description' => $this->description,
                'location' => $this->location,
                'shift' => $this->shift,
                'status' => $this->status,
            ]);
            session()->flash('message', 'Job post updated successfully.');
            $this->dispatch('toast-show', [
                'message' => 'Job post updated successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        } else {
            JobPost::create([
                'title' => $this->title,
                'description' => $this->description,
                'location' => $this->location,
                'shift' => $this->shift,
                'status' => $this->status,
            ]);
            session()->flash('message', 'Job post created successfully.');
            $this->dispatch('toast-show', [
                'message' => 'Job post created successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }

        $this->resetForm();
        $this->dispatch('close-modal');
    }

    /**
     * Render view.
     */
    public function render(): mixed
    {
        $jobPosts = JobPost::latest()
            ->when($this->search, function ($query): void {
                $query->where('title', 'like', '%'.$this->search.'%')
                    ->orWhere('location', 'like', '%'.$this->search.'%')
                    ->orWhere('description', 'like', '%'.$this->search.'%');
            })
            ->paginate(10);

        return view('admin.job-posts.job-posts', [
            'jobPosts' => $jobPosts,
        ]);
    }
};
