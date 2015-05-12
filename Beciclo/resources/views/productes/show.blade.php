@extends('app')
 
@section('content')
    <h1>Descripcio del producte:</h1>
    <h2>Id : <strong>{{  $producte->id }}</strong></h2>
    <h2>Titol : <strong>{{  $producte->titol }}</strong></h2>
    <h2>Marca  : <strong>{{  $producte->marca }}</strong></h2>
    <h2>Model  : <strong>{{  $producte->model }}</strong></h2>
    <h2>Preu  : <strong>{{  $producte->preu }} €</strong></h2>
    <h2>Any : <strong>{{  $producte->any }}</strong></h2>
    <h2>Pes : <strong>{{  $producte->pes_aprox }} Kg</strong></h2>
    <h2>Material : <strong>{{  $producte->material }}</strong></h2>
    <h2>Estat : <strong>{{  $producte->estat }}</strong></h2>
    <h2>Comentari : <strong>{{  $producte->comentari }}</strong></h2>

 	
   <!-- @if ( !$usuari->productes->count() )
        Usuario no tienen productos
    @else
        <ul>
            @foreach( $usuari->productes as $producte )
                <li><a href="{{ route('usuaris.productes.show', [$usuari->id, $producte->id]) }}">{{ $producte->titol }}</a></li>
            @endforeach
        </ul>
    @endif -->
@endsection