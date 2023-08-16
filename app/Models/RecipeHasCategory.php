<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeHasCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipes_id',
        'categories_id'
    ];
}
