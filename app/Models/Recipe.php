<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'preparation_time',
        'cooking_time',
        'description',
        'preparation_instructions',
        'portions',
        'total_time',
        'levels_id'
    ];
}
