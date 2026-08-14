<?php

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Services List - NDS Admin')] class extends Component
{
    use WithPagination;

    public string $search = '';

    public ?int $deletingServiceId = null;

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function toggleStatus(int $id): void
    {
        $service = Service::findOrFail($id);
        $service->is_active = ! $service->is_active;
        $service->save();

        $this->dispatch('toast-show', [
            'message' => 'Service status updated!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function confirmDelete(int $id): void
    {
        $this->deletingServiceId = $id;
    }

    public function deleteConfirmed(): void
    {
        if (! $this->deletingServiceId) {
            return;
        }

        $service = Service::findOrFail($this->deletingServiceId);

        if ($service->image && ! file_exists(public_path($service->image))) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();
        $this->deletingServiceId = null;

        $this->dispatch('toast-show', [
            'message' => 'Service deleted successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function render(): mixed
    {
        $services = Service::latest()
            ->when($this->search, function ($query): void {
                $query->where('title', 'like', '%'.$this->search.'%')
                    ->orWhere('short_description', 'like', '%'.$this->search.'%');
            })
            ->paginate(10);

        return view('admin.service.list.list', [
            'services' => $services,
        ]);
    }
};
