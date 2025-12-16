<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Sluggable
{
    /**
     * Boot the trait
     */
    public static function bootSluggable()
    {
        static::creating(function ($model) {
            if (empty($model->slug) && !empty($model->title)) {
                $model->slug = Str::slug($model->title);
            }
        });

        static::updating(function ($model) {
            if (!empty($model->title) && $model->isDirty('title')) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
