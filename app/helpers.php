<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    /**
     * Get a setting value by key or retrieve all settings collection if no key is provided.
     *
     * @param  string|null  $key
     * @param  string|null  $default
     * @return mixed
     */
    function setting(?string $key = null, ?string $default = null): mixed
    {
        if ($key === null) {
            return Setting::getAllSettings();
        }

        return Setting::get($key, $default);
    }
}
