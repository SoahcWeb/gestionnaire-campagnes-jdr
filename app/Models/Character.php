<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    protected $fillable = ['campaign_id', 'name', 'description'];

    public function campaign(): BelongsTo
    {
        return $this->belongsTo(Campaign::class);
    }
}