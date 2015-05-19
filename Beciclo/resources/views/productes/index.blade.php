@extends('app')
 
@section('content')
    <h2>Productes</h2>
 
    <?php 
    $user=Auth::user();
    ?>
    
    @if(!Auth::user())
        @if ( !$productes->count() )
            No hi ha productes disponibles
        @else
            <ul>
                @foreach( $productes as $producte )
                    <li><a href="{{ route('productes.show', $producte->id) }}">{{ $producte->titol }}</a></li>
                @endforeach
            </ul>
        @endif
    @else
        @if ( !$user->productes->count() )
            No has publicat cap producte
        @else
            <ul>
                @foreach( $user->productes as $producte )
                    <li><a href="{{ route('productes.show', $producte->id) }}">{{ $producte->titol }}</a> {!! link_to_route('productes.edit', 'Editar', array($producte->id), array('class' => 'btn btn-info')) !!}</li>
                @endforeach
            </ul>
        @endif
    @endif
@endsection