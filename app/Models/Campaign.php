<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campaign extends Model
{
    protected $fillable = ['name', 'context'];

    public function quests(): HasMany
    {
        return $this->hasMany(Quest::class);
    }

    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }

    public function gameSessions(): HasMany
    {
        return $this->hasMany(GameSession::class);
    }
}