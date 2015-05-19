@extends('app')
 
@section('content')


{!! Form::model($producte, ['method' => 'PATCH', 'route' => ['productes.update', $producte->id], 'files'=> true, 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
@include('productes/partials/_formEdit', ['submit_text' => 'Editar producte'])
{!! Form::close() !!}

@endsection