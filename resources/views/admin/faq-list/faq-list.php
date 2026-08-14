<?php

use App\Models\Faq;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('FAQ List Management - NDS Admin')] class extends Component
{
    use WithPagination;

    /**
     * Search query for filtering FAQs.
     */
    public string $search = '';

    /**
     * FAQ Question input.
     */
    public string $question = '';

    /**
     * FAQ Answer input.
     */
    public string $answer = '';

    /**
     * FAQ active status.
     */
    public bool $status = true;

    /**
     * ID of the FAQ being edited.
     */
    public ?int $editingFaqId = null;

    /**
     * ID of the FAQ being deleted.
     */
    public ?int $deletingFaqId = null;

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
        $this->reset(['question', 'answer', 'status', 'editingFaqId', 'deletingFaqId']);
        $this->resetValidation();
        $this->status = true;
    }

    /**
     * Load FAQ for editing.
     */
    public function edit(int $faqId): void
    {
        $this->resetForm();
        $faq = Faq::findOrFail($faqId);

        $this->editingFaqId = $faq->id;
        $this->question = $faq->question;
        $this->answer = $faq->answer;
        $this->status = $faq->status;
    }

    /**
     * Set FAQ ID for deletion modal.
     */
    public function confirmDelete(int $faqId): void
    {
        $faq = Faq::findOrFail($faqId);
        $this->deletingFaqId = $faq->id;
    }

    /**
     * Delete confirmed FAQ.
     */
    public function deleteConfirmed(): void
    {
        if (! $this->deletingFaqId) {
            return;
        }

        $faq = Faq::findOrFail($this->deletingFaqId);
        $faq->delete();

        $this->deletingFaqId = null;
        $this->dispatch('toast-show', [
            'message' => 'FAQ deleted successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
        $this->dispatch('close-delete-modal');
    }

    /**
     * Toggle active status.
     */
    public function toggleStatus(int $faqId): void
    {
        $faq = Faq::findOrFail($faqId);
        $faq->status = ! $faq->status;
        $faq->save();

        $this->dispatch('toast-show', [
            'message' => 'FAQ status updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    /**
     * Save FAQ (create or update).
     */
    public function save(): void
    {
        $this->validate([
            'question' => 'required|string|max:500',
            'answer' => 'required|string',
            'status' => 'required|boolean',
        ]);

        if ($this->editingFaqId) {
            $faq = Faq::findOrFail($this->editingFaqId);
            $faq->update([
                'question' => $this->question,
                'answer' => $this->answer,
                'status' => $this->status,
            ]);
            $this->dispatch('toast-show', [
                'message' => 'FAQ updated successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        } else {
            Faq::create([
                'question' => $this->question,
                'answer' => $this->answer,
                'status' => $this->status,
            ]);
            $this->dispatch('toast-show', [
                'message' => 'FAQ added successfully!',
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
        $faqs = Faq::latest()
            ->when($this->search, function ($query): void {
                $query->where('question', 'like', '%'.$this->search.'%')
                    ->orWhere('answer', 'like', '%'.$this->search.'%');
            })
            ->paginate(10);

        return view('admin.faq-list.faq-list', [
            'faqs' => $faqs,
        ]);
    }
};
