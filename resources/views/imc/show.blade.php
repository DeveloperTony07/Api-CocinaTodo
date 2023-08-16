@extends('imc.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show IMC Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('imc.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Weight:</strong>
                {{ $result->weigth }}
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Heigth:</strong>
                {{ $result->heigth }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Result:</strong>
                {{ $result->imc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condition:</strong>
                {{ $result->current_condition }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $category->name }}
            </div>
        </div>
    </div>
@endsection