<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discipline extends Model
{
    use HasFactory;

    protected $table = 'disciplines';

    protected $fillable = [
        'name'
    ];
    // relação many to many entre semestre e disciplina
    public function semester(): BelongsToMany
    {
        return $this->belongsToMany(Semester::class);
    }

    public function course(){
        return $this->belongsToMany(Course::class, 'course_discipline');
    }

    public function hour(): HasMany
    {
        return $this->hasMany(Hour::class);
    }
}
