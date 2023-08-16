<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Level;
use App\Models\RecipeHasLike;
use App\Models\UsersVoteRecipe;
use App\Models\UsersSaveRecipe;
//

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8'
            ]
        );

        if($validator->fails())
        {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'country' => $request->country,
            'profiles_id' => 2,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        
        return response()->json([
            'code' => 200,
            'status' => 'Registered',
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('email', 'password')))
        {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        
        $token = $user->createToken('auth_token')->plainTextToken;

        $uid =  $user->id;
        session_start();
        $_SESSION["uid"] = $uid;

        return response()->json([
            'code' => 200,
            'message' => 'Hi '.$user->name,
            'accessToken' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }

    public function getUserId()
    {
        session_start();
        if(isset($_SESSION["uid"])){
            return response()->json([
                'code' => 200,
                'message' => 'User is logged in',
                'uid' => $_SESSION["uid"]
            ]);
        }else{
            return response()->json([
                'code' => 400,
                'message' => 'User is not logged in'
            ]);
        }
    }

    public function likes($user, $recipe)
    {
        //check if user is already logged in and validate it
        session_start();
        if(isset($_SESSION["uid"])){
            //check if user has voted for this recipe
            $hasvoted = UsersVoteRecipe::select('users_id', 'recipes_id')
            ->where('users_id', $user)
            ->where('recipes_id', $recipe)
            ->get();

            if(count($hasvoted) > 0){
                return response()->json([
                    'code' => 400,
                    'message' => 'The vote for this recipe was registered before'
                ]);
            }else{
                //insert a new vote for this recipe
                UsersVoteRecipe::create([
                    'users_id' => $user,
                    'recipes_id' => $recipe
                ]);
                //increment likes count for the recipe
                RecipeHasLike::increment('likes');
                //get the updated likes for this recipe
                $getUpdatedLikes = RecipeHasLike::select('likes')->where('recipes_id', $recipe)->get();

                return response()->json([
                    'code' => 200,
                    'message' => 'Registered vote for this recipe',
                    'likes' => $getUpdatedLikes[0]->likes
                ]);
            }
        }else{
            return response()->json([
                'code' => 400,
                'message' => 'User is not logged in'
            ]);
        }
    }

    public function saveRecipe($user, $recipe)
    {
        //check if user is already logged in and validate it
        session_start();
        if(isset($_SESSION["uid"])){
            //check if user has saved this recipe before
            $savedRecipe = UsersSaveRecipe::select('users_id', 'recipes_id')
            ->where('users_id', $user)
            ->where('recipes_id', $recipe)
            ->get();

            if(count($savedRecipe) > 0){
                return response()->json([
                    'code' => 400,
                    'message' => 'This recipe was saved before'
                ]);
            }else{
                //save this recipe
                UsersSaveRecipe::create([
                    'users_id' => $user,
                    'recipes_id' => $recipe
                ]);

                return response()->json([
                    'code' => 200,
                    'message' => 'Recipe saved to user profile'
                ]);
            }
        }else{
            return response()->json([
                'code' => 400,
                'message' => 'User is not logged in'
            ]);
        }
    }

    public function removeSavedRecipe($user, $recipe)
    {
        //check if user is already logged in and validate it
        session_start();
        if(isset($_SESSION["uid"])){
            //check if user has saved this recipe before
            $savedRecipe = UsersSaveRecipe::select('id','users_id', 'recipes_id')
            ->where('users_id', $user)
            ->where('recipes_id', $recipe)
            ->get();

            if(count($savedRecipe) > 0){
                //delete saved recipe
                UsersSaveRecipe::find($savedRecipe[0]->id)->delete();
                return response()->json([
                    'code' => 200,
                    'message' => 'Recipe removed successfully from user profile'
                ]);
            }else{
                return response()->json([
                    'code' => 400,
                    'message' => 'This recipe was not saved before'
                ]);
            }
        }else{
            return response()->json([
                'code' => 400,
                'message' => 'User is not logged in'
            ]);
        }
    }

    public function getSavedRecipes($user_id)
    {
        //check if user is already logged in and validate it
        session_start();
        if(isset($_SESSION["uid"])){
            //get user's saved recipes
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
            ->join('users_save_recipes', 'recipes.id', '=', 'users_save_recipes.recipes_id')
            ->where('users_save_recipes.users_id', $user_id)
            ->orderBy('recipes.id')
            ->get();

            if(count($recipes) > 0){
                return $recipes;
            }else{
                return response()->json([
                    'code' => 400,
                    'message' => 'Not saved recipes for this user'
                ]);
            }

        }else{
            return response()->json([
                'code' => 400,
                'message' => 'User is not logged in'
            ]);
        }
    }

    private function generatePassword()
    {
        $input = '!#$%&?0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $strength = 10;
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }

    public function recoverPassword(Request $request)
    {
        $user = User::select('email')->where('email', $request->email)->get();

        if(count($user) > 0){
            $newPassword = $this->generatePassword();
            $data = User::where('email', $user[0]->email)->firstOrFail();
            $token = $data->createToken('auth_token')->plainTextToken;
            User::where('email', $user[0]->email)->update(['password' => Hash::make($newPassword)]);
            return response()->json([
                'code' => 200,
                'message' => 'New password generated and updated successfully',
                'password' => $newPassword
            ]);
        }else{
            return response()->json([
                'code' => 400,
                'message' => 'Unable to get new password'
            ]);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        //destroy session and variables
        session_start();
        session_destroy();
        return response()->json(['message' => 'Logged out successfully']);
    }
}