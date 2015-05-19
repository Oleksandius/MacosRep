@extends('app')

@section('content')
<h2>Menu d'usuari</h2>


<?php
$user = Auth::user();
echo '<img src="data:image/jpeg;base64,'.base64_encode($user->foto).'" style="width:60px;height:60px;margin-left:20px"/><br/><br/>';
?>
<ul>
    <li><a href="{{route('productes.create')}}">Publicar un nou producte</a></li>
    <li><a href="{{route('productes.index')}}">Veure i editar els meus productes</a></li>
    <li><a href="{{route('users.show')}}">Veure i editar les meves dades i preferits</a></li>
</ul>
@endsection