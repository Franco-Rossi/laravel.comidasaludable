@extends ('templates.home')

@section ('content')

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarNav">
        <ul class="navbar-nav d-flex justify-content-around w-100" >
            <li class="nav-item">
                <a class="nav-link" href="/#restaurante">Restaurante</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#productos">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#about">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#pedidos">Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#consultas">Consultas</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    
    <div class="text mt-5 container shadow-lg text-center " id="phraseContainer">
        <h2 class="phrase">Productos organicos, naturales e integrales de La Esquina de las Flores.</h1>
    </div>
        
    <form action="/productos" method="POST" role="productos">
        {{ csrf_field() }}
        <div class="input-group box rounded-top-both px-5 mt-5">
            <input type="text" class="form-control" name="q" placeholder="Buscar un producto">
            <span class="input-group-btn"><button type="submit" class="btn btn-light ml-1"><span class="fa fa-search"></span></button></span>
        </div>
    </form>
        
        
    <div class="row products box rounded-lg text-center">
        @if(isset($products))
        @foreach($products as $product)
        <div class="col-6 col-sm-4 col-lg-2 mb-5">
            <div class="card text-center shadow h-100">
                <img src="img/productos/{{$product->img}}.jpg" alt="" class="card-img-top img-fluid">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <hr class="mx-5 d-none d-lg-flex">
                    <p class="card-text d-none d-lg-inline">{{$product->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="text-center m-auto">{{ $products->links() }}</div>
            
        @else
            <h3 class="phrase mx-auto my-3">{{$message}}</h3>

        @endif
    </div>
</div>
    
    
    
    
@endsection