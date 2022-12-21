<?php

namespace App\Models;

use App\Enums\AchievementLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Achievement extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
        'level',
    ];

    protected $casts = [
        'level' => AchievementLevel::class,
    ];

    public function users(): HasMany
    {
        return $this->hasMany(AchievementUser::class);
    }
}
