@extends('app')
 
@section('content')
    <h2>Productes</h2>
 
    @if ( !$productes->count() )
        Usuario no tienen productos
    @else
        <ul>
            @foreach( $productes as $producte )
                <li><a href="{{ route('productes.show', [$producte->id]) }}">{{ $producte->titol }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection