@extends('app')

@section('content')

<h2>Editar dades personals</h2>
<?php $user = Auth::user(); ?>

{!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update'], 'files'=> true, 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
@include('users/partials/_form', ['submit_text' => 'Editar Dades'])
{!! Form::close() !!}

@endsection