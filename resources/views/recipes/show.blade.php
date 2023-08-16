@extends('recipes.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recipe Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('recipes.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img class="img-fluid w-25" src="{{ asset('storage/imgs/'.$recipe[0]->image) }}" alt="{{ $recipe[0]->name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $recipe[0]->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $recipe[0]->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preparation time:</strong>
                {{ $recipe[0]->preparation_time }} minutes
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cooking time:</strong>
                {{ $recipe[0]->cooking_time }} minutes
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total time:</strong>
                {{ $recipe[0]->total_time }} minutes
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Instructions:</strong>
                {{ $recipe[0]->preparation_instructions }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Portions:</strong>
                {{ $recipe[0]->portions }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $recipe[0]->category }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Occasion:</strong>
                {{ $recipe[0]->occasion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level:</strong>
                {{ $recipe[0]->level }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Likes:</strong>
                {{ $recipe[0]->likes }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ingredients:</strong>
                <ul>
                    @foreach ($ingredients as $ingredient)
                        <li>{{ $ingredient->amount }} {{ $ingredient->measurement_unit }} {{ $ingredient->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection