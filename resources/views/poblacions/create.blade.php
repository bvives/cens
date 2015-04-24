<!-- /resources/views/poblacions/create.blade.php -->
@extends('app')
 
@section('content')
    <h2>Create Poblacion</h2>
 
    {!! Form::model(new App\Poblacion, ['route' => ['poblacions.store']]) !!}
        @include('poblacions/partials/_form', ['submit_text' => 'Create Poblacion'])
    {!! Form::close() !!}
    <p>{!! link_to_route('poblacions.index', "tornar a poblacions") !!}</p>
@endsection