<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Filament\Models\Contracts\HasName;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser, HasName
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function canAccessFilament(): bool
    {
        return str_ends_with($this->email, '@polycasts.com') && $this->hasVerifiedEmail();
    }

    public function getFilamentName(): string
    {
        return $this->username;
    }

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function achievements(): HasMany
    {
        return $this->hasMany(AchievementUser::class);
    }

    public function series(): HasMany
    {
        return $this->hasMany(Series::class);
    }

    public function discussions(): HasMany
    {
        return $this->hasMany(Discussion::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
