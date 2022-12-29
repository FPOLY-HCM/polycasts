<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Channel extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'color',
    ];

    public function discussions(): HasMany
    {
        return $this->hasMany(Discussion::class);
    }
}
