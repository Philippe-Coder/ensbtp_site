<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'media',
        'published_at',
    ];

    protected $casts = [
        'media' => 'array',
        'published_at' => 'datetime',
    ];
}
