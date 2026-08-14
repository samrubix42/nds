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
     * Save or update a setting key-value pair safely without SQL ON CONFLICT syntax issues.
     */
    public static function set(string $key, ?string $value): void
    {
        $setting = static::where('key', $key)->first();

        if ($setting) {
            $setting->value = $value ?? '';
            $setting->save();
        } else {
            static::create([
                'key' => $key,
                'value' => $value ?? '',
            ]);
        }

        try {
            Cache::forget('app_settings');
        } catch (\Throwable $e) {
            // Ignore cache storage failure on older database engines
        }
    }

    /**
     * Retrieve all settings as a key-value collection, cached with direct database fallback.
     *
     * @return Collection<string, string>
     */
    public static function getAllSettings(): Collection
    {
        try {
            $settings = Cache::remember('app_settings', 3600, function (): array {
                return static::pluck('value', 'key')->toArray();
            });
        } catch (\Throwable $e) {
            // Fallback directly to database query if cache driver throws syntax error on older SQLite engines
            $settings = static::pluck('value', 'key')->toArray();
        }

        return collect($settings);
    }
}
