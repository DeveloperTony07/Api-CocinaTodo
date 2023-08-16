<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeHasOccasion extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipes_id',
        'occasions_id'
    ];
}
