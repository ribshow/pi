<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blocks extends Model
{
    use HasFactory;
    protected $table = 'blocks';

    protected $fillable = [
        'block',
    ];
}
