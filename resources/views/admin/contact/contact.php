<?php

use App\Models\Contact;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Title('Contact Inquiries Management - NDS Security Admin')] class extends Component
{
    use WithPagination;

    public string $search = '';

    public string $statusFilter = 'all'; // all, unread, read

    public ?Contact $viewingContact = null;

    public ?int $deletingContactId = null;

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingStatusFilter(): void
    {
        $this->resetPage();
    }

    public function viewMessage(int $id): void
    {
        $contact = Contact::findOrFail($id);
        $contact->is_read = true;
        $contact->save();

        $this->viewingContact = $contact;
    }

    public function closeViewModal(): void
    {
        $this->viewingContact = null;
    }

    public function toggleReadStatus(int $id): void
    {
        $contact = Contact::findOrFail($id);
        $contact->is_read = ! $contact->is_read;
        $contact->save();
    }

    public function confirmDelete(int $id): void
    {
        $this->deletingContactId = $id;
    }

    public function deleteConfirmed(): void
    {
        if ($this->deletingContactId) {
            Contact::destroy($this->deletingContactId);
            $this->deletingContactId = null;
        }

        $this->dispatch('close-delete-modal');
    }

    public function render(): mixed
    {
        $contacts = Contact::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%'.$this->search.'%')
                        ->orWhere('email', 'like', '%'.$this->search.'%')
                        ->orWhere('phone', 'like', '%'.$this->search.'%')
                        ->orWhere('subject', 'like', '%'.$this->search.'%')
                        ->orWhere('message', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->statusFilter === 'unread', fn ($q) => $q->where('is_read', false))
            ->when($this->statusFilter === 'read', fn ($q) => $q->where('is_read', true))
            ->latest()
            ->paginate(12);

        $unreadCount = Contact::where('is_read', false)->count();

        return view('admin.contact.contact', [
            'contacts' => $contacts,
            'unreadCount' => $unreadCount,
        ]);
    }
};