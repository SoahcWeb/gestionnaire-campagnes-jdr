<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameSession extends Model
{
    protected $table = 'game_sessions';

    protected $fillable = ['campaign_id', 'played_at', 'notes'];

    protected $casts = [
        'played_at' => 'datetime',
    ];

    /** @return BelongsTo<Campaign, GameSession> */
    public function campaign(): BelongsTo
    {
        return $this->belongsTo(Campaign::class);
    }
}
