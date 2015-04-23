@extends('app')
 
@section('content')
    <h2>Edit Votant "{{ $votant->name }}"</h2>
 
    {!! Form::model($votant, ['method' => 'PATCH', 'route' => ['poblacions.votants.update', $poblacion->slug, $votant->slug]]) !!}
        @include('votants/partials/_form', ['submit_text' => 'Edit Votant'])
    {!! Form::close() !!}
@endsection