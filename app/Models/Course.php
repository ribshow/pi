<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    // definindo o nome correto da tabela
    protected $table = 'course';

    protected $fillable = [
        'description'
    ];
    // relação muitos para muitos entre curso e semestre
    public function semester(): BelongsToMany
    {
        return $this->belongsToMany(Semester::class);
    }
    // Relação muitos para muitos entre curso e disciplina
    public function disciplines(){
        return $this->belongsToMany(Discipline::class, 'course_discipline');
    }

    public function hour(): HasMany
    {
        return $this->hasMany(Hour::class);
    }
}
