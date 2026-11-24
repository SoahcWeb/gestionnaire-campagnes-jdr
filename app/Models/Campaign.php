<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campaign extends Model
{
    protected $fillable = ['name', 'context'];

    /** @return HasMany<Quest, $this> */
    public function quests(): HasMany
    {
        return $this->hasMany(Quest::class);
    }

    /** @return HasMany<Character, $this> */
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }

    /** @return HasMany<GameSession, $this> */
    public function gameSessions(): HasMany
    {
        return $this->hasMany(GameSession::class);
    }
}
