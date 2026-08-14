<?php

use App\Models\Client;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Clientele Management - NDS Admin')] class extends Component
{
    use WithFileUploads;
    use WithPagination;

    /**
     * Search query for filtering clients.
     */
    public string $search = '';

    /**
     * Temporary uploaded image.
     */
    public mixed $image = null;

    /**
     * Client active status.
     */
    public bool $is_active = true;

    /**
     * ID of the client being edited.
     */
    public ?int $editingClientId = null;

    /**
     * ID of the client being deleted.
     */
    public ?int $deletingClientId = null;

    /**
     * Display URL of the current client image when editing.
     */
    public string $existingImage = '';

    /**
     * Reset pagination when searching.
     */
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Reset the modal form inputs and state.
     */
    public function resetForm(): void
    {
        $this->reset(['image', 'is_active', 'editingClientId', 'existingImage', 'deletingClientId']);
        $this->resetValidation();
        $this->is_active = true;
    }

    /**
     * Set client ID for deletion modal.
     */
    public function confirmDelete(int $clientId): void
    {
        $client = Client::findOrFail($clientId);
        $this->deletingClientId = $client->id;
    }

    /**
     * Execute deletion of confirmed client.
     */
    public function deleteConfirmed(): void
    {
        if (! $this->deletingClientId) {
            return;
        }

        $client = Client::findOrFail($this->deletingClientId);

        // Delete uploaded file from storage if it exists (but do not delete seeded files from public folder)
        if ($client->image && ! file_exists(public_path($client->image))) {
            Storage::disk('public')->delete($client->image);
        }

        $client->delete();

        $this->deletingClientId = null;
        $this->dispatch('toast-show', [
            'message' => 'Client deleted successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
        $this->dispatch('close-delete-modal');
    }

    /**
     * Load client data into the form for editing.
     */
    public function edit(int $clientId): void
    {
        $this->resetForm();
        $client = Client::findOrFail($clientId);

        $this->editingClientId = $client->id;
        $this->is_active = $client->is_active;
        $this->existingImage = $client->image_url;
    }

    /**
     * Toggle a client's active status.
     */
    public function toggleStatus(int $clientId): void
    {
        $client = Client::findOrFail($clientId);
        $client->is_active = ! $client->is_active;
        $client->save();

        $this->dispatch('toast-show', [
            'message' => 'Client status updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    /**
     * Create or update a client.
     */
    public function save(): void
    {
        if ($this->editingClientId) {
            $this->validate([
                'image' => 'nullable|image|max:2048',
                'is_active' => 'required|boolean',
            ]);

            $client = Client::findOrFail($this->editingClientId);

            if ($this->image) {
                // Delete old uploaded file from storage if it exists (but do not delete seeded files from public folder)
                if ($client->image && ! file_exists(public_path($client->image))) {
                    Storage::disk('public')->delete($client->image);
                }

                $path = $this->image->store('clients', 'public');
                $client->image = $path;
            }

            $client->is_active = $this->is_active;
            $client->save();

            $this->dispatch('toast-show', [
                'message' => 'Client updated successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        } else {
            $this->validate([
                'image' => 'required|image|max:2048',
                'is_active' => 'required|boolean',
            ]);

            $path = $this->image->store('clients', 'public');

            Client::create([
                'image' => $path,
                'is_active' => $this->is_active,
            ]);

            $this->dispatch('toast-show', [
                'message' => 'Client added successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }

        $this->resetForm();
        $this->dispatch('close-modal');
    }

    /**
     * Render the component view.
     */
    public function render(): mixed
    {
        $clients = Client::latest()
            ->when($this->search, function ($query): void {
                $query->where('image', 'like', '%'.$this->search.'%');
            })
            ->paginate(12);

        return view('admin.clientele.clientele', [
            'clients' => $clients,
        ]);
    }
};
