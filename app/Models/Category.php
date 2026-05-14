<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model {
    protected $fillable = ['name', 'slug', 'description', 'image'];

    public function clusters(): HasMany {
        return $this->hasMany(Cluster::class);
    }
}
