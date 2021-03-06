@extends('templates.admin')
@section('content')


    <div class="card">
        <h5 class="card-header">Modificando el producto <span class="font-weight-bold">{{$product->name}}</span></h5>
        <div class="card-body">
            <form method="POST" action="/admin/productos/{{$product->id}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Nombre del producto</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Ingrese el producto" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label for="description">Descripcion del producto</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Ingrese una descripcion">{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="img">Imagen</label>
                    <input type="file" class="form-control border-0" name="img" >
                </div>  
                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" class="form-control" name='keywords' id="keywords" placeholder="Ingrese las palabras clave, separadas por una coma" value="{{$product->keywords}}">
                </div>
                <button type="submit" class="btn btn-success btn-lg">Modificar producto</button>
            </form>
            <form method="POST" action="/admin/productos/{{$product->id}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger mt-2">Eliminar producto</button>
            </form>
        </div>
    </div>

@endsection