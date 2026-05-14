<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cluster extends Model {
    protected $fillable = [
        'category_id', 'name', 'subtitle', 'badge_text', 'slug', 'description', 'price', 
        'bedrooms', 'bathrooms', 'building_area', 
        'land_area', 'features', 'image', 'denah_image', 'specifications', 'is_active'
    ];

    protected $casts = [
        'features' => 'array',
        'specifications' => 'array',
        'denah_image' => 'array',
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function getFormattedPriceAttribute() {
        return "Rp " . number_format($this->price, 0, ',', '.');
    }
}
