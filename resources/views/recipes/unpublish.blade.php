@extends('recipes.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UNPUBLISHED RECIPES - ADMIN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('recipes.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Recipe</th>
            <th>Category</th>
            <th>Occasion</th>
            <th>Level</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($recipes as $recipe)
        <tr>
            <td>{{ $recipe->id }}</td>
            <td>{{ $recipe->name }}</td>
            <td>{{ $recipe->category }}</td>
            <td>{{ $recipe->occasion }}</td>
            <td>{{ $recipe->level }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('recipes.publish', $recipe->id) }}">Publish Recipe</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection