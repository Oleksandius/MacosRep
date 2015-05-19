@extends('app')

@section('content')

<?php
$user = Auth::user();
?>

<table>
    <thead>
        <tr>
            <th colspan='2'><h2>Dades Personals</h2></th>
</tr>
</thead>
<tbody>
    <tr>
        <td>{{$user->name}}</td>
        <td><?php echo '<img src="data:image/jpeg;base64,' . base64_encode($user->foto) . '" style="width:60px;height:60px;margin-left:20px"/><br/><br/>'; ?></td>
    </tr>
    <tr>
        <td colspan='2'>{{$user->cognom}}</td>
    </tr>
    <tr>
        <td colspan='2'>{{$user->direccio}}</td>
    </tr>
    <tr>
        <td colspan='2'>{{$user->ciutat}}</td>
    </tr>
    <tr>
        <td colspan='2'>{{$user->provincia}}</td>
    </tr>
    <tr>
        <td colspan='2'>{{$user->telefon}}</td>
    </tr>
    <tr>
        <td colspan='2'>{{$user->email}}</td>
    </tr>
</tbody>
</table>

<br/>
<h2>Preferits</h2>
@if ( !$user->preferits->count() )
No tens productes preferits
@else
<ul>
    @foreach( $user->preferits as $preferit )
    <li>
        <a href="{{ route('productes.show', [$producte->id, $user]) }}">{{ $preferit->nom }}</a>

    </li>
    @endforeach
</ul>
@endif

<br/>

<h2>Editar les meves dades</h2>

{!! link_to_route('users.edit', 'Editar les meves dades', array($user), array('class' => 'btn btn-info')) !!}

</li>
</ul>

@endsection