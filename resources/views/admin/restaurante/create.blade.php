@extends ('templates.admin')

@section('content')

    <div class="card">
        <h5 class="card-header">Agregar un articulo</h5>
        <div class="card-body">
            <form method="POST" action="/admin/restaurante" enctype="multipart/form-data">
                {{  csrf_field() }}
                <div class="form-group">
                    <label for="name">Nombre del articulo</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Ingrese el articulo" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripcion del articulo</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Ingrese una descripcion" required></textarea>
                </div>
                <div class="form-group">
                    <label for="img">Imagen</label>
                    <input type="file" class="form-control border-0" name="img" required>
                </div>  
                <div class="form-group">
                    <label for="type">Tipo</label>
                    <input type="number" class="form-control" name='type' id="type" placeholder="Ingrese el tipo de comida" required>
                </div>
                <button type="submit" class="btn btn-secondary btn-lg">Agregar articulo</button>
            </form>
        </div>
    </div>
@endsection