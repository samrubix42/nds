<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Admin Profile & Security - NDS Admin')] class extends Component
{
    public string $name = '';

    public string $email = '';

    public string $current_password = '';

    public string $new_password = '';

    public string $new_password_confirmation = '';

    public function mount(): void
    {
        /** @var User $user */
        $user = Auth::user();
        if ($user) {
            $this->name = $user->name;
            $this->email = $user->email;
        }
    }

    public function updateProfile(): void
    {
        /** @var User $user */
        $user = Auth::user();

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
        ]);

        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        $this->dispatch('toast-show', [
            'message' => 'Profile details updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function updatePassword(): void
    {
        /** @var User $user */
        $user = Auth::user();

        $this->validate([
            'current_password' => 'required|string',
            'new_password' => ['required', 'string', 'confirmed', Password::min(8)],
        ]);

        if (! Hash::check($this->current_password, $user->password)) {
            $this->addError('current_password', 'The provided current password does not match our records.');

            return;
        }

        $user->password = Hash::make($this->new_password);
        $user->save();

        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);

        $this->dispatch('toast-show', [
            'message' => 'Security password updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function render(): mixed
    {
        return view('admin.profile.profile');
    }
};
