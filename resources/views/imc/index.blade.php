@extends('imc.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>IMC Calculator</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('imc.create') }}"> Create New Result</a>
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
            <th>Result</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($results as $result)
        <tr>
            <td>{{ $result->id }}</td>
            <td>{{ $result->imc }}</td>
            <td>{{ $result->current_condition }}</td>
            <td>
                <form action="{{ route('imc.destroy',$result->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('imc.show',$result->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('imc.edit',$result->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection