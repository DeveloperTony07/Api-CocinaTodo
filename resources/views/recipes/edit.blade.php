@extends('recipes.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Recipe</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('recipes.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('recipes.update', $recipe->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Recipe Image (PNG, JPG):</strong>
                    <input id="recipe_image" class="form-control" type="file" name="recipe_image" onchange="readURL(this)">
                    <img id="preview" src="{{ asset('storage/imgs/'.$recipe->image) }}" width="125" height="125" alt="Preview">
                    <input type="hidden" name="current_img" value="{{ $recipe->image }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Recipe Name:</strong>
                    <input type="text" name="recipe" class="form-control" placeholder="Recipe Name" value="{{$recipe->name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Category:</strong>
                    <select class="form-select" name="categories_id">
                        @foreach ($categories as $category)
                            @if ($category->id == $recipeHasCategory[0]->categories_id)
                                <option value="{{ $category->id }}" selected>{{$category->category}}</option>
                            @else
                                <option value="{{ $category->id }}">{{$category->category}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Occasion:</strong>
                    <select class="form-select" name="occasions_id">
                        @foreach ($occasions as $occasion)
                            @if ($occasion->id == $recipeHasOccasion[0]->occasions_id)
                                <option value="{{ $occasion->id }}" selected>{{$occasion->occasion}}</option>
                            @else
                                <option value="{{ $occasion->id }}">{{$occasion->occasion}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Level:</strong>
                    <select class="form-select" name="levels_id">
                        @foreach ($levels as $level)
                            @if ($level->id == $recipe->levels_id)
                                <option value="{{ $level->id }}" selected>{{$level->level}}</option>
                            @else
                                <option value="{{ $level->id }}">{{$level->level}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Preparation time:</strong>
                    <input type="text" name="preparation_time" class="form-control" value="{{ $recipe->preparation_time}}" placeholder="Preparation time">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Cooking Time:</strong>
                    <input type="text" name="cooking_time" class="form-control" value="{{ $recipe->cooking_time}}" placeholder="Cooking Time">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Total Time:</strong>
                    <input type="text" name="total_time" class="form-control" value="{{ $recipe->total_time}}" placeholder="Cooking Time">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Portions:</strong>
                    <input type="text" name="portions" class="form-control" value="{{ $recipe->portions}}" placeholder="Portions">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Likes:</strong>
                    <input type="text" name="likes" class="form-control" value="{{ $recipeHasLike[0]->likes}}" placeholder="Likes">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Ingredients:</strong>
                    <button type="button" id="add-ingredient" class="btn btn-success m-3">Add ingredient</button>
                    <ul id="ingredients">
                        @foreach ($ingredients as $ingredient)
                            <li>
                                <input type="text" name="amounts[]" value="{{$ingredient->amount}}" placeholder="Amount">
                                <select id="units" name="units[]">
                                    @foreach ($units as $unit)
                                        @if ($unit->id == $recipe->measurement_units_id)    
                                            <option value="{{ $unit->id }}" selected>{{$unit->measurement_unit}}</option>
                                        @else
                                            <option value="{{ $unit->id }}">{{$unit->measurement_unit}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <select id="ingredient" name="ingredients[]">
                                    @foreach ($ingredients as $ingredient)
                                        <option value="{{ $ingredient->id }}">{{$ingredient->name}}</option>
                                    @endforeach
                                </select>
                                <button class='btn btn-outline-danger remove-ingredient'>Remove</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{$recipe->description}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                <div class="form-group">
                    <strong>Instructions:</strong>
                    <textarea name="preparation_instructions" class="form-control" cols="30" rows="10">{{$recipe->preparation_instructions}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <input type="hidden" name="current_ingredients" value="{{ $ingredients}}">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <script>
        document.querySelector('#add-ingredient').addEventListener('click', function(){

            event.preventDefault();
            let ingredient = document.createElement("li");
            let id = "ingredient-"+Date.now();
            ingredient.id = id;
            document.querySelector('#ingredients').appendChild(ingredient);

            let input = document.createElement("input");
            input.type = "text";
            input.setAttribute('placeholder', "Amount");
            input.setAttribute('name', "amounts[]");
            document.querySelector('#'+id).appendChild(input);

            let cloneUnits = document.querySelector('#units').cloneNode(true);
            cloneUnits.id = "unit-"+Date.now();
            cloneUnits.style.marginLeft = ".25rem";
            cloneUnits.style.marginRight = ".25rem";
            document.querySelector('#'+id).appendChild(cloneUnits);

            let cloneIngredients = document.querySelector('#ingredient').cloneNode(true);
            cloneIngredients.id = "ingredient-"+Date.now();
            document.querySelector('#'+id).appendChild(cloneIngredients);

            let btn = document.createElement("button");
            btn.style.marginLeft = ".25rem";
            btn.innerText = "Remove";
            
            btn.addEventListener("click", function() { 
                document.querySelector('#'+id).remove();
            });
            document.querySelector('#'+id).appendChild(btn);
            btn.classList.add('btn');
            btn.classList.add('btn-outline-danger');

        });

        let registered_ingredients = document.querySelectorAll('.remove-ingredient');
        //console.log(registered_ingredients.length);
        for(let i=0; i<registered_ingredients.length; i++){
            registered_ingredients[i].addEventListener("click", function(event) {
                event.preventDefault();
                this.parentNode.remove();
            });
        }

    </script>
@endsection