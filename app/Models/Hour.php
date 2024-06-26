<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hour extends Model
{
    use HasFactory;

    protected $table = 'horario';

    protected $fillable = [
        'dia',
        'hora',
        'user_id',
        'course_id',
        'semester_id',
        'block_id',
        'room_id',
        'discipline_id',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function discipline(): BelongsTo
    {
        return $this->belongsTo(Discipline::class);
    }

    public function block(): BelongsTo
    {
        return $this->belongsTo(Blocks::class);
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
