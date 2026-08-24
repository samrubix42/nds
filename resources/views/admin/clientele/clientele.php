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
     * Client featured status (shows on home page).
     */
    public bool $is_featured = true;

    /**
     * Client display sort order.
     */
    public int $sort_order = 0;

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
     * Items per page quantity.
     */
    public int $perPage = 12;

    /**
     * Reset pagination when search or perPage changes.
     */
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingPerPage(): void
    {
        $this->resetPage();
    }

    /**
     * Reset the modal form inputs and state.
     */
    public function resetForm(): void
    {
        $this->reset(['image', 'is_active', 'is_featured', 'sort_order', 'editingClientId', 'existingImage', 'deletingClientId']);
        $this->resetValidation();
        $this->is_active = true;
        $this->is_featured = true;
        $this->sort_order = 0;
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
        $this->is_featured = $client->is_featured;
        $this->sort_order = $client->sort_order;
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
     * Toggle a client's featured status.
     */
    public function toggleFeatured(int $clientId): void
    {
        $client = Client::findOrFail($clientId);
        $client->is_featured = ! $client->is_featured;
        $client->save();

        $this->dispatch('toast-show', [
            'message' => 'Client featured status updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    /**
     * Reorder client items via wire:sort drag and drop.
     */
    public function updateOrder(mixed $item = null, ?int $position = null): void
    {
        $page = $this->getPage();
        $perPage = $this->perPage;
        $offset = ($page - 1) * $perPage;

        if (is_array($item)) {
            foreach ($item as $index => $itemData) {
                $id = is_array($itemData) ? ($itemData['id'] ?? $itemData['value'] ?? null) : $itemData;
                $order = is_array($itemData) ? ($itemData['order'] ?? $itemData['position'] ?? ($offset + $index)) : ($offset + $index);
                if ($id) {
                    Client::where('id', $id)->update(['sort_order' => (int) $order]);
                }
            }
        } elseif ($item !== null && $position !== null) {
            $targetPosition = $offset + $position;
            $allClients = Client::orderBy('sort_order', 'asc')->orderBy('id', 'desc')->get();
            $movedClient = $allClients->firstWhere('id', (int) $item);

            if ($movedClient) {
                $remainingClients = $allClients->reject(fn ($c) => $c->id === (int) $item)->values();
                $remainingClients->splice($targetPosition, 0, [$movedClient]);

                foreach ($remainingClients as $newIndex => $clientRecord) {
                    $clientRecord->update(['sort_order' => $newIndex]);
                }
            }
        }

        $this->dispatch('toast-show', [
            'message' => 'Client order updated successfully!',
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
                'is_featured' => 'required|boolean',
                'sort_order' => 'required|integer|min:0',
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
            $client->is_featured = $this->is_featured;
            $client->sort_order = $this->sort_order;
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
                'is_featured' => 'required|boolean',
                'sort_order' => 'required|integer|min:0',
            ]);

            $path = $this->image->store('clients', 'public');

            Client::create([
                'image' => $path,
                'is_active' => $this->is_active,
                'is_featured' => $this->is_featured,
                'sort_order' => $this->sort_order,
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
        $clients = Client::orderBy('sort_order', 'asc')
            ->orderBy('id', 'desc')
            ->when($this->search, function ($query): void {
                $query->where('image', 'like', '%'.$this->search.'%');
            })
            ->paginate($this->perPage);

        return view('admin.clientele.clientele', [
            'clients' => $clients,
        ]);
    }
};
