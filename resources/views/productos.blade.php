@extends ('templates.home')

@section ('content')

        <div class="container">

                <form action="/search" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" placeholder="Buscar un producto">
                        <span class="input-group-btn"><button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button></span>
                    </div>
                </form>

                @if(isset($products))
                <div class="row products">
                        @foreach($products as $product)
                            <div class="col-6 col-sm-4 col-lg-2 mb-5">
                                <div class="card text-center shadow h-100">
                                    <img src="img/productos/{{$product->img}}.jpg" alt="" class="card-img-top img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <hr class="mx-5 d-none d-lg-flex">
                                        <p class="card-text d-none d-lg-inline">{{$product->description}}</p>
                                        <p class="text-muted">{{$product->keywords}}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $products->links() }}
                </div>
@endif</div>



           {{--  <div class="row products">
                @foreach($products as $product)
                    <div class="col-6 col-sm-4 col-lg-2 mb-5">
                        <div class="card text-center shadow h-100">
                            <img src="img/productos/{{$product->img}}.jpg" alt="" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <hr class="mx-5 d-none d-lg-flex">
                                <p class="card-text d-none d-lg-inline">{{$product->description}}</p>
                                <p class="text-muted">{{$product->keywords}}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $products->links() }}
        </div> --}}



@endsection