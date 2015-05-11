@extends('app')
 
@section('content')
    <h2>Productes de : <strong>{{  $usuari->nom }}</strong></h2>
 
    @if ( !$usuari->productes->count() )
        Usuario no tienen productos
    @else
        <ul>
            @foreach( $usuari->productes as $producte )
                <li><a href="{{ route('usuaris.productes.show', [$usuari->id, $producte->id]) }}">{{ $producte->titol }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection