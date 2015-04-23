@extends('app')
 
@section('content')
    <h2>{{ $poblacion->name }}</h2>
 
    @if ( !$poblacion->votants->count() )
        Your poblacion has no votants.
    @else
        <ul>
            @foreach( $poblacion->votants as $votant )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('poblacions.votants.destroy', $poblacion->slug, $votant->slug))) !!}
                        <a href="{{ route('poblacions.votants.show', [$poblacion->slug, $votant->slug]) }}">{{ $votant->name }}</a>
                        (
                            {!! link_to_route('poblacions.votants.edit', 'Edit', array($poblacion->slug, $votant->slug), array('class' => 'btn btn-info')) !!},
 
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('poblacions.index', 'Back to Poblacions') !!} |
        {!! link_to_route('poblacions.votants.create', 'Create Votant', $poblacion->slug) !!}
    </p>
@endsection