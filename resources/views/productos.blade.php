@extends ('templates.home')

@section ('content')

        <div class="container">
            <div class="row products">
                @foreach($products as $product)
                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                        <div class="card text-center shadow">
                            <img src="img/productos/{{$product->img}}" alt="" class="card-img-top" style="height: 250px;">
                            <div class="card-body">
                                <h3>{{$product->name}}</h3>
                                <p class="">{{$product->description}}</p>
                                <h6 class="text-muted">{{$product->keywords}}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



@endsection