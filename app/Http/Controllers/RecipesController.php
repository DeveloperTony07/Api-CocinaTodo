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


class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        /*$recipes = Recipe::all();
        return $recipes;*/

        $recipes = Recipe::select(
            'recipes.id',
            'recipes.name',
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
        ->orderBy('recipes.id')
        ->get();

        return view('recipes.index', compact('recipes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        $occasions = Occasion::all();
        $levels = Level::all();
        $units = MeasurementUnit::all();
        $ingredients = Ingredient::select('id', 'name')->where('status', 1)->orderBy('name')->get();
        return view('recipes.create', compact('categories', 'occasions', 'levels', 'units', 'ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //recipe image
        $file = $request->file('recipe_image');
        $filename = 'recipe-'.time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('public/imgs', $filename);

        //insert recipe
        $recipe = Recipe::create([
            'name' => $request->recipe,
            'preparation_time' => $request->preparation_time,
            'image' => $filename,
            'cooking_time' => $request->cooking_time,
            'description' => $request->description,
            'preparation_instructions' => $request->preparation_instructions,
            'portions' => $request->portions,
            'total_time' => $request->total_time,
            'levels_id' => $request->levels_id
        ]);

        //insert - category
        RecipeHasCategory::create([
            'recipes_id' => $recipe->id,
            'categories_id' => $request->categories_id
        ]);

        //insert - occasion
        RecipeHasOccasion::create([
            'recipes_id' => $recipe->id,
            'occasions_id' => $request->occasions_id
        ]);

        //insert - likes
        RecipeHasLike::create([
            'recipes_id' => $recipe->id,
            'likes' => $request->likes
        ]);

        //insert recipe has ingredients
        foreach($request->amounts as $key => $value){

            $amount = "";
            if($value != null) $amount = $value;

            RecipeHasIngredient::create([
                'recipes_id' => $recipe->id,
                'ingredients_id' => $request->ingredients[$key],
                'measurement_units_id' => $request->units[$key],
                'amount' => $amount
            ]);
        }

        return redirect()->route('recipes.index')->with('success', 'Recipe registered successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
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
        ->where('recipes.id',$id)
        ->get();

        $ingredients = Recipe::select(
            'recipes.id',
            'ingredients.name',
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

        return view('recipes.show', compact('recipe', 'ingredients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $recipe = Recipe::find($id);
        $categories = Category::all();
        $occasions = Occasion::all();
        $levels = Level::all();
        $units = MeasurementUnit::all();
        $recipeHasOccasion = RecipeHasOccasion::select('occasions_id')->where('recipes_id', $id)->get();
        $recipeHasCategory = RecipeHasCategory::select('categories_id')->where('recipes_id', $id)->get();
        $recipeHasLike = RecipeHasLike::select('likes')->where('recipes_id', $id)->get();
        $ingredients = Recipe::select(
            'ingredients.id',
            'ingredients.name',
            'measurement_units.measurement_unit',
            'recipe_has_ingredients.amount',
            'recipe_has_ingredients.measurement_units_id as measure_unit_id'
        )
        ->join('recipe_has_ingredients', 'recipes.id', '=', 'recipe_has_ingredients.recipes_id')
        ->join('ingredients', 'ingredients.id', '=', 'recipe_has_ingredients.ingredients_id')
        ->join('measurement_units', 'measurement_units.id', '=', 'recipe_has_ingredients.measurement_units_id')
        ->where([
            'recipes.id' => $id,
            'ingredients.status' => 1
        ])
        ->get();
        
        return view('recipes.edit', compact('recipe', 'categories', 'occasions', 'levels', 'units', 'recipeHasOccasion', 'recipeHasCategory', 'recipeHasLike', 'ingredients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $registered_ingredients = [];

        //check new image to update
        $file = $request->file('image');
        if(strlen($file) > 0){
            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = 'recipe-' . time() . '.' . $file->getClientOriginalExtension();
            // save to storage/app/public/imgs as the new $filename
            $path = $file->storeAs('public/imgs', $filename);
        }else{
            //if not, keep current image
            $filename = $request->current_img;
        }

        //find the recipe to update
        $recipe = Recipe::find($id);
        //update recipe
        $recipe->update([
            'name' => $request->recipe,
            'preparation_time' => $request->preparation_time,
            'image' => $filename,
            'cooking_time' => $request->cooking_time,
            'description' => $request->description,
            'preparation_instructions' => $request->preparation_instructions,
            'portions' => $request->portions,
            'total_time' => $request->total_time,
            'levels_id' => $request->levels_id
        ]);
  
        //update - category
        RecipeHasCategory::where('recipes_id', $recipe->id)->update(['categories_id' => $request->categories_id]);

        //update - occasion
        RecipeHasOccasion::where( 'recipes_id', $recipe->id)->update(['occasions_id' => $request->occasions_id]);

        //update - likes
        RecipeHasLike::where( 'recipes_id', $recipe->id)->update(['likes' => $request->likes]);

        //update current ingredients
        foreach(json_decode($request->current_ingredients) as $current_ingredient){
            RecipeHasIngredient::where('recipes_id', $recipe->id)->update(['status' => 0]);
            Ingredient::where('id', $current_ingredient->id)->update(['status' => 0]);
        }

        //insert ingredients
        foreach($request->ingredients as $ingredient){
            $item = Ingredient::create([
                'name' => $ingredient,
                'description' => $ingredient
            ]);
            $registered_ingredients[] = $item->id;
        }

        //insert recipe has ingredients
        foreach($registered_ingredients as $ingredient_id){
            RecipeHasIngredient::create([
                'recipes_id' => $recipe->id,
                'ingredients_id' => $ingredient_id,
                'measurement_units_id' => 19,
                'amount' => '',
            ]);
        }

        return redirect()->route('recipes.index')->with('success', 'Recipe updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Recipe::where( 'id', $id)->update(['status'=> 0]);
        return redirect()->route('recipes.index')->with('success', 'Recipe removed successfully');
    }

    public function publishRecipe($id)
    {
        //
        Recipe::where( 'id', $id)->update(['status'=> 1]);
        return redirect()->route('recipes.index')->with('success', 'Recipe published successfully');
    }

    public function getUnpublishedRecipes()
    {
        //
        $recipes = Recipe::select(
            'recipes.id',
            'recipes.name',
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
        ->orderBy('recipes.id')
        ->where('recipes.status', 0)
        ->get();

        return view('recipes.unpublish', compact('recipes'));

    }
}
