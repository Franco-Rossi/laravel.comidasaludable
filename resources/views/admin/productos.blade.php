@extends ('templates.admin')

@section('content')

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered table-hover table-responsive-md" style="width:100%">
                <thead>
                <tr>
                    <th>Producto</th>
                    <th>Descripcion</th>
                    <th>Keywords</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><a href="/admin/productos/{{$product->id}}">{{$product->name}}</a></td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->keywords}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="/admin/productos/create" class="btn btn-warning btn-block" role="button" style="margin-bottom: -7px;">Agregar producto</a>
    </div>


    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>

@endsection