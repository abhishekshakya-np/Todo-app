<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function bot(): BelongsTo
    {
        return $this->belongsTo(Bot::class);
    }
}
