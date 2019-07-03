@extends ('templates.admin')

@section('content')

    <div class="card">
        <h5 class="card-header">Productos</h5>
        <div class="card-body">
            <h1>{{$product->name}}</h1>
            <p>{{$product->description}}</p>
            <img src="{{url('img/productos/'.$product->filename)}}" alt="" class="img-producto img-fluid">
            <p>{{$product->keywords}}</p>
        </div>
    </div>

    <a href="/admin/productos/{{$product->id}}/edit" class="btn btn-primary btn-block" role="button">Modificar producto</a>

@endsection