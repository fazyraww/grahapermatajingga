<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'image', 'meta_title', 'meta_description', 'google_maps', 'extra_data'];

    protected $casts = [
        'extra_data' => 'array',
    ];
}
