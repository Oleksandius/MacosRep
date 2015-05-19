@extends('app')
 
@section('content')
    <h1>Descripcio del producte:</h1>
    <h2>Id : <strong>{{  $producte->id }}</strong></h2>
    <h2>Titol : <strong>{{  $producte->titol }}</strong></h2>
    <h2>Marca  : <strong>{{  $producte->marca }}</strong></h2>
    <h2>Model  : <strong>{{  $producte->model }}</strong></h2>
    <h2>Preu  : <strong>{{  $producte->preu }} €</strong></h2>
    <h2>Any : <strong>{{  $producte->any }}</strong></h2>
    <h2>Pes : <strong>{{  $producte->pes_aprox }}</strong></h2>
    <h2>Material : <strong>{{  $producte->material }}</strong></h2>
    <h2>Estat : <strong>{{  $producte->estat }}</strong></h2>
    <h2>Comentari : <strong>{{  $producte->comentari }}</strong></h2>
    <h2>Foto : <strong><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($producte->foto).'" style="width:60px;height:60px;margin-left:20px"/><br/><br/>';?></strong></h2>
    <h2>COMENTARIS DELS USUARIS</h2>
    @foreach($producte->comentaris as $comentari)
    <p>{{$comentari->comentari}}<br/>- {{$comentari->user->name}}</p><hr/>
    @endforeach
    <h2>{{$producte->user->id}}</h2>
    <h2>{{$producte->user->name}}</h2>
    <h2>{{$producte->user->cognom}}</h2>
    <h2>{{$producte->user->direccio}}</h2>

@endsection