<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campaign extends Model
{
    protected $fillable = ['name', 'context'];

    /** @return HasMany<Quest, Campaign> */
    public function quests(): HasMany
    {
        return $this->hasMany(Quest::class);
    }

    /** @return HasMany<Character, Campaign> */
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }

    /** @return HasMany<GameSession, Campaign> */
    public function gameSessions(): HasMany
    {
        return $this->hasMany(GameSession::class);
    }
}
