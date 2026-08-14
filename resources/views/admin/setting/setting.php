<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('System Settings - NDS Admin')] class extends Component
{
    use WithFileUploads;

    /**
     * Company Name setting.
     */
    public string $company_name = '';

    /**
     * Temporary uploaded favicon file.
     */
    public mixed $favicon = null;

    /**
     * Existing stored favicon URL or path.
     */
    public string $existing_favicon = '';

    /**
     * Email address setting.
     */
    public string $email = '';

    /**
     * Primary Phone number setting.
     */
    public string $phone_number = '';

    /**
     * Secondary Phone number setting.
     */
    public string $phone_number_2 = '';

    /**
     * WhatsApp number setting.
     */
    public string $whatsapp_number = '';

    /**
     * Office physical address setting.
     */
    public string $address = '';

    /**
     * Working / Office hours setting.
     */
    public string $office_time = '';

    /**
     * Instagram page URL setting.
     */
    public string $instagram = '';

    /**
     * X (Twitter) profile URL setting.
     */
    public string $x = '';

    /**
     * Facebook page URL setting.
     */
    public string $facebook = '';

    /**
     * Initialize form data from stored settings.
     */
    public function mount(): void
    {
        $settings = Setting::getAllSettings();

        $this->company_name = $settings->get('company_name', 'NDS GROUP OF COMPANIES');
        $this->existing_favicon = $settings->get('favicon', '');
        $this->email = $settings->get('email', 'info@ndssecurityservices.com');
        $this->phone_number = $settings->get('phone_number', '+91 88005-93141');
        $this->phone_number_2 = $settings->get('phone_number_2', '+91 88105-67716');
        $this->whatsapp_number = $settings->get('whatsapp_number', '+91 88005-93141');
        $this->address = $settings->get('address', 'Plot No. 128, Haibatpur, Near Gaur City Mall, Greater Noida - 201318 (U.P.)');
        $this->office_time = $settings->get('office_time', 'Mon - Sat: 9:00 AM - 7:00 PM (24/7 Command Center)');
        $this->instagram = $settings->get('instagram', 'https://instagram.com/ndssecurityservices');
        $this->x = $settings->get('x', 'https://x.com/ndssecurity');
        $this->facebook = $settings->get('facebook', 'https://facebook.com/ndssecurityservices');
    }

    /**
     * Remove the custom favicon.
     */
    public function removeFavicon(): void
    {
        if ($this->existing_favicon && ! file_exists(public_path($this->existing_favicon))) {
            Storage::disk('public')->delete($this->existing_favicon);
        }

        Setting::set('favicon', '');
        $this->existing_favicon = '';
        $this->favicon = null;

        $this->dispatch('toast-show', [
            'message' => 'Favicon removed successfully!',
            'type' => 'info',
            'position' => 'top-right',
        ]);
    }

    /**
     * Save updated setting configuration.
     */
    public function save(): void
    {
        $this->validate([
            'company_name' => 'required|string|max:255',
            'favicon' => 'nullable|image|mimes:png,jpg,jpeg,ico,svg,webp|max:2048',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:50',
            'phone_number_2' => 'nullable|string|max:50',
            'whatsapp_number' => 'nullable|string|max:50',
            'address' => 'required|string|max:500',
            'office_time' => 'required|string|max:255',
            'instagram' => 'nullable|url|max:255',
            'x' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
        ]);

        if ($this->favicon) {
            if ($this->existing_favicon && ! file_exists(public_path($this->existing_favicon))) {
                Storage::disk('public')->delete($this->existing_favicon);
            }

            $path = $this->favicon->store('settings', 'public');
            Setting::set('favicon', $path);
            $this->existing_favicon = $path;
            $this->favicon = null;
        }

        Setting::set('company_name', $this->company_name);
        Setting::set('email', $this->email);
        Setting::set('phone_number', $this->phone_number);
        Setting::set('phone_number_2', $this->phone_number_2);
        Setting::set('whatsapp_number', $this->whatsapp_number);
        Setting::set('address', $this->address);
        Setting::set('office_time', $this->office_time);
        Setting::set('instagram', $this->instagram);
        Setting::set('x', $this->x);
        Setting::set('facebook', $this->facebook);

        $this->dispatch('toast-show', [
            'message' => 'Setting configuration updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    /**
     * Render setting management component view.
     */
    public function render(): mixed
    {
        return view('admin.setting.setting');
    }
};
