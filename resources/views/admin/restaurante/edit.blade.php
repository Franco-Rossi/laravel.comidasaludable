@extends('templates.admin')
@section('content')


    <div class="card">
        <h5 class="card-header">Modificando el articulo <span class="font-weight-bold">{{$food->name}}</span></h5>
        <div class="card-body">
            <form method="POST" action="/admin/restaurante/{{$food->id}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Nombre del articulo</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Ingrese el articulo" value="{{$food->name}}">
                </div>
                <div class="form-group">
                    <label for="description">Descripcion del articulo</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Ingrese una descripcion">{{$food->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="img">Imagen</label>
                    <input type="file" class="form-control border-0" name="img" >
                </div>
                <div class="form-group">
                    <label for="type">Tipo</label>
                    <input type="number" class="form-control" name='type' id="type" placeholder="Ingrese el tipo de plato" value="{{$food->type}}">
                </div>
                <button type="submit" class="btn btn-success btn-lg">Modificar articulo</button>
            </form>
            <form method="POST" action="/admin/comida/{{$food->id}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger mt-2">Eliminar articulo</button>
            </form>
        </div>
    </div>

@endsection