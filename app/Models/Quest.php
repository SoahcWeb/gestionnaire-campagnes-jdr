<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quest extends Model
{
    protected $fillable = ['campaign_id', 'title', 'summary', 'status'];

    public function campaign(): BelongsTo
    {
        return $this->belongsTo(Campaign::class);
    }
}