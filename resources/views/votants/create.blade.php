@extends('app')
 
@section('content')
    <h2>Create Votant for Poblacion "{{ $poblacion->name }}"</h2>
 
    {!! Form::model(new App\Votant, ['route' => ['poblacions.votants.store', $poblacion->slug], 'class'=>'']) !!}
        @include('votants/partials/_form', ['submit_text' => 'Create Votant'])
    {!! Form::close() !!}
    <p>{!! link_to_route('poblacions.show', "tornar a ".$poblacion->name, [$poblacion->slug]) !!}</p>
@endsection