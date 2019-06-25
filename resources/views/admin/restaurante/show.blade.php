@extends ('templates.admin')

@section('content')

    <div class="card">
        <h5 class="card-header">Articulo</h5>
        <div class="card-body">
            <h1>{{$food->name}}</h1>
            <p>{{$food->description}}</p>
            <img src="/img/restaurante/{{$food->img}}" alt="" class="img-producto">
            <p>{{$food->type}}</p>
            <p>${{$food->price}}</p>
        </div>
    </div>

    <a href="/admin/restaurante/{{$food->id}}/edit" class="btn btn-primary btn-block" role="button">Modificar articulo</a>

@endsection