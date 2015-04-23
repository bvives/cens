@extends('app')
 
@section('content')
    <h2>Edit Poblacion</h2>
 
    {!! Form::model($poblacion, ['method' => 'PATCH', 'route' => ['poblacions.update', $poblacion->slug]]) !!}
        @include('poblacions/partials/_form', ['submit_text' => 'Edit Poblacion'])
    {!! Form::close() !!}
@endsection