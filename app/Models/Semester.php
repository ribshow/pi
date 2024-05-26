<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'semester';

    // relação many to many entre curso e semestre
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    // relação many to many entre semestre e disciplina
    public function disciplines(): BelongsToMany
    {
        return $this->belongsToMany(Discipline::class);
    }

    public function hour(): HasMany
    {
        return $this->hasMany(Hour::class);
    }
}
