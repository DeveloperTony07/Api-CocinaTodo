@extends('recipes.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>RECIPES - ADMIN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('recipes.create') }}"> Add New Recipe</a>
            </div>
            <div class="pull-right mt-3">
                <a class="btn btn-dark" href="{{ route('recipes.unpublish') }}"> View Removed Recipes</a>
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
                <form action="{{ route('recipes.destroy',$recipe->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('recipes.show',$recipe->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('recipes.edit',$recipe->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection