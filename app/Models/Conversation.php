<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    protected $fillable = [
        'user_id',
        'channel_id',
        'title',
        'slug',
        'body',
        'views',
    ];

    protected $casts = [
        'views' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }

    public function lastReply(): BelongsTo
    {
        return $this->belongsTo(Reply::class, 'last_reply_id');
    }

    public function channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    }
}
