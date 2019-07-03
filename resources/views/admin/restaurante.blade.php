@extends ('templates.admin')

@section('content')

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered table-hover table-responsive-md" style="width:100%">
                <thead>
                <tr>
                    <th>Articulo de Restaurante</th>
                    <th>Descripcion</th>
                    <th>Tipo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($foods as $food)
                    <tr>
                        <td><a href="/admin/restaurante/{{$food->id}}">{{$food->name}}</a></td>
                        <td>{{$food->description}}</td>
                        <td>{{$food->type}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <a href="/admin/restaurante/create" class="btn btn-primary btn-block" role="button">Agregar articulo</a>
    </div>


    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>

@endsection