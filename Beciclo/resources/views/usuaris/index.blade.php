@extends('app')
 
@section('content')
    <?php echo "<h2>".Lang::get('messages.userIndex')."</h2>"?>
 
    @if ( !$usuaris->count() )
        No hay usuarios 
    @else
        <ul>
            @foreach( $usuaris as $usuari )
                <li><a href="{{ route('usuaris.show', $usuari->id) }}">{{ $usuari->nom }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection