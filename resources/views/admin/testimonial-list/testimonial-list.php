<?php

use App\Models\Testimonial;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Testimonial Management - NDS Admin')] class extends Component
{
    use WithPagination;

    /**
     * Search query for filtering testimonials.
     */
    public string $search = '';

    /**
     * Client Name.
     */
    public string $name = '';

    /**
     * Client Designation / Organization.
     */
    public string $designation = '';

    /**
     * Star Rating (1 to 5).
     */
    public int $rating = 5;

    /**
     * Review / Testimonial Description.
     */
    public string $description = '';

    /**
     * ID of the testimonial being edited.
     */
    public ?int $editingTestimonialId = null;

    /**
     * ID of the testimonial being deleted.
     */
    public ?int $deletingTestimonialId = null;

    /**
     * Reset pagination when searching.
     */
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Reset form inputs and validation state.
     */
    public function resetForm(): void
    {
        $this->reset(['name', 'designation', 'rating', 'description', 'editingTestimonialId', 'deletingTestimonialId']);
        $this->resetValidation();
        $this->rating = 5;
    }

    /**
     * Load testimonial for editing.
     */
    public function edit(int $testimonialId): void
    {
        $this->resetForm();
        $testimonial = Testimonial::findOrFail($testimonialId);

        $this->editingTestimonialId = $testimonial->id;
        $this->name = $testimonial->name;
        $this->designation = $testimonial->designation ?? '';
        $this->rating = $testimonial->rating ?? 5;
        $this->description = $testimonial->description;
    }

    /**
     * Set testimonial ID for deletion modal.
     */
    public function confirmDelete(int $testimonialId): void
    {
        $testimonial = Testimonial::findOrFail($testimonialId);
        $this->deletingTestimonialId = $testimonial->id;
    }

    /**
     * Delete confirmed testimonial.
     */
    public function deleteConfirmed(): void
    {
        if (! $this->deletingTestimonialId) {
            return;
        }

        $testimonial = Testimonial::findOrFail($this->deletingTestimonialId);
        $testimonial->delete();

        $this->deletingTestimonialId = null;
        session()->flash('message', 'Testimonial deleted successfully.');
        $this->dispatch('toast-show', [
            'message' => 'Testimonial deleted successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
        $this->dispatch('close-delete-modal');
    }

    /**
     * Save testimonial (create or update).
     */
    public function save(): void
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'description' => 'required|string',
        ]);

        if ($this->editingTestimonialId) {
            $testimonial = Testimonial::findOrFail($this->editingTestimonialId);
            $testimonial->update([
                'name' => $this->name,
                'designation' => $this->designation,
                'rating' => $this->rating,
                'description' => $this->description,
            ]);
            session()->flash('message', 'Testimonial updated successfully.');
            $this->dispatch('toast-show', [
                'message' => 'Testimonial updated successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        } else {
            Testimonial::create([
                'name' => $this->name,
                'designation' => $this->designation,
                'rating' => $this->rating,
                'description' => $this->description,
            ]);
            session()->flash('message', 'Testimonial added successfully.');
            $this->dispatch('toast-show', [
                'message' => 'Testimonial added successfully!',
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
        $testimonials = Testimonial::latest()
            ->when($this->search, function ($query): void {
                $query->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('designation', 'like', '%'.$this->search.'%')
                    ->orWhere('description', 'like', '%'.$this->search.'%');
            })
            ->paginate(10);

        return view('admin.testimonial-list.testimonial-list', [
            'testimonials' => $testimonials,
        ]);
    }
};
