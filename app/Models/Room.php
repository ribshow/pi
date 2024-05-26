<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function block(): BelongsTo
    {
        return $this->belongsTo(Blocks::class);
    }

    public function hour(): HasMany
    {
        return $this->hasMany(Hour::class);
    }
}
