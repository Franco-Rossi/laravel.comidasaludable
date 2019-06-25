@extends('templates.admin')
@section('content')


    <div class="card">
        <h5 class="card-header">Modificando el articulo <span class="font-weight-bold">{{$food->name}}</span></h5>
        <div class="card-body">
            <form method="POST" action="/admin/restaurante/{{$food->id}}">
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
                    <label for="img">Nombre de la imagen</label>
                    <input type="text" class="form-control" name='img' id="img" placeholder="Ingrese el nombre de la imagen" value="{{$food->img}}">
                </div>
                <div class="form-group">
                    <label for="type">Tipo</label>
                    <input type="number" class="form-control" name='type' id="type" placeholder="Ingrese el tipo de comida!">
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" class="form-control" name='price' id="price" placeholder="Ingrese el precio" value="{{$food->price}}">
                </div>
                <button type="submit" class="btn btn-success btn-lg">Modificar articulo</button>
            </form>
            <form method="POST" action="/admin/restaurante/{{$food->id}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger mt-2">Eliminar articulo</button>
            </form>
        </div>
    </div>

@endsection