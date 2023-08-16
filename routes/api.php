<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesCollection;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//end points for recipes
Route::get('/recipes/all', [RecipesCollection::class, 'index']);
Route::get('/recipes/recipe/{id}', [RecipesCollection::class, 'show']);
Route::get('/recipes/categories', [RecipesCollection::class, 'categories']);
Route::get('/recipes/levels', [RecipesCollection::class, 'levels']);
Route::get('/recipes/occasions', [RecipesCollection::class, 'occasions']);
Route::get('/recipes/top10', [RecipesCollection::class, 'top10']);
Route::get('/recipes/filterby/{filter}/{value}', [RecipesCollection::class, 'getRecipesBy']);
Route::get('/recipes/searchbyname/{value}', [RecipesCollection::class, 'searchByName']);


//end points for users
Route::post('/users/register', [AuthController::class, 'register']);
Route::post('/users/login', [AuthController::class, 'login']);

Route::get('/users/getuserid', [AuthController::class, 'getUserId']);

Route::middleware(['auth:sanctum'])->group(function() { 
    Route::get('/users/logout', [AuthController::class, 'logout']);
});

Route::get('/users/likes/{user}/{recipe}', [AuthController::class, 'likes']);
Route::get('/users/saverecipe/{user}/{recipe}', [AuthController::class, 'saveRecipe']);
Route::get('/users/savedrecipes/{user}', [AuthController::class, 'getSavedRecipes']);
