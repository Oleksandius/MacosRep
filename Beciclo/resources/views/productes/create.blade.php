@extends('app')

@section('content')
<h2>Publicar un anuncio</h2>
{!! Form::model(new App\Producte, ['route' => ['productes.store'], 'files'=> true, 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
@include('productes/partials/_form',['submit_text' => 'Crear Poblacio'])
{!! Form::close() !!}
@endsection