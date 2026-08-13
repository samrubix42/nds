<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AppliedJobs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'resume',
        'experience',
        'status',
    ];

    /**
     * Get the full URL for the applicant resume.
     */
    public function getResumeUrlAttribute(): string
    {
        if (empty($this->resume)) {
            return '';
        }

        if (str_starts_with($this->resume, 'http://') || str_starts_with($this->resume, 'https://')) {
            return $this->resume;
        }

        if (file_exists(public_path($this->resume))) {
            return asset($this->resume);
        }

        return Storage::disk('public')->url($this->resume);
    }
}
