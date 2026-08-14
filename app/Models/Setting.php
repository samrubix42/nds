<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * Get setting value by key with an optional default value.
     */
    public static function get(string $key, ?string $default = null): ?string
    {
        $settings = static::getAllSettings();
        $val = $settings->get($key);

        return ($val !== null && $val !== '') ? $val : $default;
    }

    /**
     * Save or update a setting key-value pair.
     */
    public static function set(string $key, ?string $value): void
    {
        static::updateOrCreate(
            ['key' => $key],
            ['value' => $value ?? '']
        );

        Cache::forget('app_settings');
    }

    /**
     * Retrieve all settings as a key-value collection, cached.
     *
     * @return Collection<string, string>
     */
    public static function getAllSettings(): Collection
    {
        $settings = Cache::remember('app_settings', 3600, function (): array {
            return static::pluck('value', 'key')->toArray();
        });

        return collect($settings);
    }
}
