<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
    ];

    public function series(): HasMany
    {
        return $this->hasMany(Series::class);
    }
}
