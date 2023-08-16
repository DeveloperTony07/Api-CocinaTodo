<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Level;
use App\Models\MeasurementUnit;
use App\Models\RecipeHasCategory;
use App\Models\RecipeHasOccasion;
use App\Models\RecipeHasLike;
use App\Models\RecipeHasIngredient;
use App\Models\Ingredient;

class RecipesCollection extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recipes = Recipe::select(
            'recipes.id',
            'recipes.name',
            'recipes.image',
            'recipes.description',
            'categories.category',
            'occasions.occasion',
            'levels.level',
            'recipe_has_likes.likes'
        )
        ->join('recipe_has_categories', 'recipes.id', '=', 'recipe_has_categories.recipes_id')
        ->join('categories', 'categories.id', '=', 'recipe_has_categories.categories_id')
        ->join('recipe_has_occasions', 'recipes.id', '=', 'recipe_has_occasions.recipes_id')
        ->join('occasions', 'occasions.id', '=', 'recipe_has_occasions.occasions_id')
        ->join('levels', 'recipes.levels_id', '=', 'levels.id')
        ->join('recipe_has_likes', 'recipes.id', '=', 'recipe_has_likes.recipes_id')
        ->where('recipes.status', 1)
        ->orderBy('recipes.id', 'ASC')
        ->get();

        return $recipes;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get recipe details
        $recipe = Recipe::select(
            'recipes.id',
            'recipes.name',
            'recipes.image',
            'recipes.description',
            'recipes.preparation_time',
            'recipes.cooking_time',
            'recipes.total_time',
            'recipes.preparation_instructions',
            'recipes.portions',
            'categories.id',
            'categories.category',
            'occasions.occasion',
            'levels.level',
            'recipe_has_likes.likes',
            'recipe_has_categories.categories_id'
        )
        ->join('recipe_has_categories', 'recipes.id', '=', 'recipe_has_categories.recipes_id')
        ->join('categories', 'categories.id', '=', 'recipe_has_categories.categories_id')
        ->join('recipe_has_occasions', 'recipes.id', '=', 'recipe_has_occasions.recipes_id')
        ->join('occasions', 'occasions.id', '=', 'recipe_has_occasions.occasions_id')
        ->join('levels', 'recipes.levels_id', '=', 'levels.id')
        ->join('recipe_has_likes', 'recipes.id', '=', 'recipe_has_likes.recipes_id')
        ->where('recipes.id',$id)
        ->get();
        
        //get recipe ingredients list
        $ingredients = Recipe::select(
            'recipes.id',
            'ingredients.description',
            'measurement_units.measurement_unit',
            'recipe_has_ingredients.amount'
        )
        ->join('recipe_has_ingredients', 'recipes.id', '=', 'recipe_has_ingredients.recipes_id')
        ->join('ingredients', 'ingredients.id', '=', 'recipe_has_ingredients.ingredients_id')
        ->join('measurement_units', 'measurement_units.id', '=', 'recipe_has_ingredients.measurement_units_id')
        ->where([
            'recipes.id' => $id,
            'ingredients.status' => 1,
            'recipe_has_ingredients.status' => 1
        ])
        ->get();

        //get related recipes from same category
        $related = Recipe::select(
            'recipes.id',
            'recipes.name',
            'recipes.image',
            'recipes.description',
            'recipes.preparation_time',
            'recipes.cooking_time',
            'recipes.total_time',
            'recipes.preparation_instructions',
            'recipes.portions',
            'categories.category',
            'occasions.occasion',
            'levels.level',
            'recipe_has_likes.likes'
        )
        ->join('recipe_has_categories', 'recipes.id', '=', 'recipe_has_categories.recipes_id')
        ->join('categories', 'categories.id', '=', 'recipe_has_categories.categories_id')
        ->join('recipe_has_occasions', 'recipes.id', '=', 'recipe_has_occasions.recipes_id')
        ->join('occasions', 'occasions.id', '=', 'recipe_has_occasions.occasions_id')
        ->join('levels', 'recipes.levels_id', '=', 'levels.id')
        ->join('recipe_has_likes', 'recipes.id', '=', 'recipe_has_likes.recipes_id')
        ->where('recipe_has_categories.categories_id',$recipe[0]->categories_id)
        ->inRandomOrder()
        ->take(4)
        ->get();

        return [$recipe, $ingredients, $related];
    }

    /**
     * get all available categories
     */
    public function categories()
    {
        $categories = Category::select('id', 'category')->get();
        return $categories;
    }

    /**
     * get all available levels
     */
    public function levels()
    {
        $levels = Level::select('id', 'level')->get();
        return $levels;
    }

    /**
     * get all available occasions
     */
    public function occasions()
    {
        $occasions = Occasion::select('id', 'occasion')->get();
        return $occasions;
    }

    /**
     * get 10 most voted recipes
     */
    public function top10()
    {
        $recipes = Recipe::select(
            'recipes.id',
            'recipes.name',
            'recipes.image',
            'recipes.description',
            'categories.category',
            'occasions.occasion',
            'levels.level',
            'recipe_has_likes.likes'
        )
        ->join('recipe_has_categories', 'recipes.id', '=', 'recipe_has_categories.recipes_id')
        ->join('categories', 'categories.id', '=', 'recipe_has_categories.categories_id')
        ->join('recipe_has_occasions', 'recipes.id', '=', 'recipe_has_occasions.recipes_id')
        ->join('occasions', 'occasions.id', '=', 'recipe_has_occasions.occasions_id')
        ->join('levels', 'recipes.levels_id', '=', 'levels.id')
        ->join('recipe_has_likes', 'recipes.id', '=', 'recipe_has_likes.recipes_id')
        ->where('recipes.status', 1)
        ->orderBy('recipe_has_likes.likes', 'DESC')
        ->take(10)
        ->get();

        return $recipes;
    }

    /**
     * get recipes by filter & value:
     *  $filter = category, level, occasion
     *  $value = filter's int value
     * 
     */
    public function getRecipesBy($filter, $value)
    {
        //
        if($filter == 'category') $tableField = 'categories.id';
        if($filter == 'level') $tableField = 'levels.id';
        if($filter == 'occasion') $tableField = 'occasions.id';

        $recipes = Recipe::select(
            'recipes.id',
            'recipes.name',
            'recipes.image',
            'recipes.description',
            'categories.category',
            'occasions.occasion',
            'levels.level',
            'recipe_has_likes.likes'
        )
        ->join('recipe_has_categories', 'recipes.id', '=', 'recipe_has_categories.recipes_id')
        ->join('categories', 'categories.id', '=', 'recipe_has_categories.categories_id')
        ->join('recipe_has_occasions', 'recipes.id', '=', 'recipe_has_occasions.recipes_id')
        ->join('occasions', 'occasions.id', '=', 'recipe_has_occasions.occasions_id')
        ->join('levels', 'recipes.levels_id', '=', 'levels.id')
        ->join('recipe_has_likes', 'recipes.id', '=', 'recipe_has_likes.recipes_id')
        ->where($tableField, $value)
        ->where('recipes.status', 1)
        ->orderBy('recipes.id', 'ASC')
        ->get();

        if(count($recipes) > 0){
            return $recipes;
        }else{
            return response()->json([
                'message' => 'We couldn\'t find any results'
            ]);
        }
    }

    /**
     * search recipes by recipe name
     * 
     */
    public function searchByName($value)
    {
        //
        $recipes = Recipe::select(
            'recipes.id',
            'recipes.name',
            'recipes.image',
            'recipes.description',
            'categories.category',
            'occasions.occasion',
            'levels.level',
            'recipe_has_likes.likes'
        )
        ->join('recipe_has_categories', 'recipes.id', '=', 'recipe_has_categories.recipes_id')
        ->join('categories', 'categories.id', '=', 'recipe_has_categories.categories_id')
        ->join('recipe_has_occasions', 'recipes.id', '=', 'recipe_has_occasions.recipes_id')
        ->join('occasions', 'occasions.id', '=', 'recipe_has_occasions.occasions_id')
        ->join('levels', 'recipes.levels_id', '=', 'levels.id')
        ->join('recipe_has_likes', 'recipes.id', '=', 'recipe_has_likes.recipes_id')
        ->where('recipes.name', 'LIKE', '%'.$value.'%')
        ->where('recipes.status', 1)
        ->orderBy('recipes.id', 'ASC')
        ->get();

        if(count($recipes) > 0){
            return $recipes;
        }else{
            return response()->json([
                'message' => 'We couldn\'t find any results'
            ]);
        }
    }

}
