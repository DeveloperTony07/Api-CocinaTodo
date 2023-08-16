<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeHasIngredient extends Model
{
    use HasFactory;
    protected $fillable = [
        'recipes_id',
        'ingredients_id',
        'measurement_units_id',
        'amount'
    ];
}
