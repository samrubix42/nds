<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    /**
     * Get a setting value by key or retrieve all settings collection if no key is provided.
     */
    function setting(?string $key = null, ?string $default = null): mixed
    {
        if ($key === null) {
            return Setting::getAllSettings();
        }

        return Setting::get($key, $default);
    }
}
