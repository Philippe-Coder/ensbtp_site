<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Realisation extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'media',
        'image',
        'category',
        'published_at',
    ];

    protected $casts = [
        'media' => 'array',
        'published_at' => 'datetime',
    ];
}
