@extends ('templates.admin')

@section('content')

    <div class="card">
        <h5 class="card-header">Articulo</h5>
        <div class="card-body">
            <h1>{{$food->name}}</h1>
            <p>{{$food->description}}</p>
            <img src="{{url('img/comida/'.$food->filename)}}" alt="" class="img-producto img-fluid">
            <p>{{$food->type}}</p>
        </div>
    </div>

    <a href="/admin/restaurante/{{$food->id}}/edit" class="btn btn-primary btn-block" role="button">Modificar articulo</a>

@endsection