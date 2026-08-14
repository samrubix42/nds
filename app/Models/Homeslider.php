<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeslider extends Model
{
    use HasFactory;

    protected $table = 'homesliders';

    protected $fillable = [
        'title',
        'description',
        'image',
        'button_text1',
        'button_link1',
        'button_text2',
        'button_link2',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
