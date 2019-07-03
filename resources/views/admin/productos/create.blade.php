@extends ('templates.admin')

@section('content')

    <div class="card">
        <h5 class="card-header">Agregar un producto</h5>
        <div class="card-body">
            <form method="POST" action="/admin/productos" enctype="multipart/form-data">
                {{  csrf_field() }}
                <div class="form-group">
                    <label for="name">Nombre del producto</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Ingrese el producto">
                </div>
                <div class="form-group">
                    <label for="description">Descripcion del producto</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Ingrese una descripcion"></textarea>
                </div>
                <div class="form-group">
                    <label for="img">Imagen</label>
                    <input type="file" class="form-control border-0" name="img" >
                </div>  
                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" class="form-control" name='keywords' id="keywords" placeholder="Ingrese las palabras clave, separadas por una coma">
                </div>
                <button type="submit" class="btn btn-secondary btn-lg">Agregar producto</button>
            </form>
        </div>
    </div>
@endsection