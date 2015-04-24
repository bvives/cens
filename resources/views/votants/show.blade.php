@extends('app')
 
@section('content')
    <h2>
        {!! link_to_route('poblacions.show', $poblacion->name, [$poblacion->slug]) !!} -
        {{ $votant->name }}
    </h2>
 
<p>Dni:{{ $votant->dni }} data de naixament:{{ $votant->dataNaixement }}
     <p>
        {!! link_to_route('poblacions.index', 'Back to Poblacions') !!}
    </p>
@endsection