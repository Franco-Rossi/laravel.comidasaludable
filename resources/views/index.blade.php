<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casa de comida saludable</title>
    
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"--}}
    <link href="https://fonts.googleapis.com/css?family=Kalam|Kanit:800" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <link href="{{ URL::asset('slick/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
    
</head>
<body data-spy="scroll" data-target=".navbar">
    
    {{------------------Home------------------}}
    
    <div class="grow text-center" id="navMenu">
        <a href="#restaurante" style="background-image: url('/img/background/food.jpg')">
            <div>
                <h2>Restaurante</h2>
                <p>Comida rica y saludable que elaboramos en nuestra casa, comprometiendonos en proporcionar calidad a nuestros clientes.</p>
            </div>
        </a>
        <a href="#productos" style="background-image: url('/img/background/grain.jpg')">
            <div>
                <h2>Productos</h2>
                <p>Almacen natural y organico, con productos de La esquina de las Flores.</p>
            </div>
        </a>
        <a href="#about" style="background-color:#0ca7a9;">
            <div>
                <img src="/img/logo.png" alt="" class="logo">
                <p>Restaurant natural y almacén organico, sabe mas de nosotros!</p>
            </div>
        </a>
        <a href="#pedidos" style="background-image: url('/img/background/delivery.jpg')">
            <div>
                <h2>Pedidos</h2>
                <p>Hacenos tu pedido y nosotros te lo alcanzamos a la puerta de tu casa, tambien podes encontrarnos en Pedidos Ya!</p>
            </div>
        </a>
        <a href="#consultas" style="background-image: url('/img/background/question.jpg')">
            <div>
                <h2>Consultas</h2>
                <p>Encontranos en Lomas de Zamora, a tan solo una cuadra de la estacion. Contactanos para saber mas!</p>
            </div>
        </a>
    </div>
    
    {{------------------NavBar------------------}}
    
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-around w-100" >
                <li class="nav-item">
                    <a class="nav-link" href="#restaurante">Restaurante</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pedidos">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#consultas">Consultas</a>
                </li>
            </ul>
        </div>
    </nav>
    
    {{------------------About------------------}}
    <div id="about">
        <div class="container-fluid text-center">
            <div class="text mb-5 mt-3 container shadow-lg" id="phraseContainer">
                <h1 class="phrase mb-3">"No empieces una dieta que terminara algun dia, empieza un estilo de vida que dure para siempre."</h1>
            </div>
            <div class="mb-3">
                <p class="phrase container shadow-lg box rounded-top-both">Encontranos en Gorriti 10, Lomas de Zamora.</p>
                <a href="https://www.google.com/maps/place/Casa+de+Comida+Saludable,+productos+de+la+Esquina+de+las+Flores/@-34.7625714,-58.3986422,17.75z/data=!4m13!1m7!3m6!1s0x95bcd2eb256d7803:0x60c25f66089a3f91!2sJos%C3%A9+Ignacio+Gorriti+10,+Lomas+de+Zamora,+Buenos+Aires!3b1!8m2!3d-34.7624258!4d-58.3978954!3m4!1s0x0:0xe8006829fe6d08ae!8m2!3d-34.7623112!4d-58.3978218" target="_blank"><img src="img/map.png" alt="" class="shadow-lg border map"></a>
            </div>
            <div>
                <a href="#" class="shadow-lg"><i class="fab fa-facebook-f align-middle"></i></a>
                <a href="#" class="shadow-lg"><i class="fab fa-instagram align-middle"></i></a>
            </div>
        </div>
    </div>
    
    {{------------------Restaurante------------------}}
    
    <div id="restaurante">
        <div class="container-fluid text-center mt-5 shadow-lg">
            <div class="container phrase box rounded-top-both">
                <h1>Comida rica y saludable que elaboramos en nuestra casa.</h1>
            </div>
            <div class="box rounded-bottom-both image-box container" >
                <h2 class="phrase">Platos principales</h2>
                <div class="slideShow container-fluid">
                    @foreach ($foods as $food)
                    @if ($food->type === 0)
                    <div><img src="{{URL::asset("img/comida/{$food->img}.jpg")}}"" alt="" class="img-fluid shadow food rounded-lg"> </div>
                    @endif
                    @endforeach
                </div>
                <h2 class="phrase">Tartas</h2>
                <div class="slideShow container">
                    @foreach ($foods as $food)
                    @if ($food->type === 1)
                    <div><img src="{{URL::asset("img/comida/{$food->img}.jpg")}}"" alt="" class="img-fluid shadow food rounded-lg"></div>
                    @endif
                    @endforeach
                </div>
                <h2 class="phrase">Postres</h2>
                <div class="slideShow container">
                    @foreach ($foods as $food)
                    @if ($food->type === 2)
                    <div><img src="{{URL::asset("img/comida/{$food->img}.jpg")}}"" alt="" class="img-fluid shadow food rounded-lg"></div>
                    @endif
                    @endforeach
                </div>
            </div>
            
            
        </div>
    </div>
    
    
    {{------------------Productos------------------}}
    <div class="" id="productos">
        <div class="container-fluid">
            <div class="text mt-5 container shadow-lg text-center " id="phraseContainer">
                <h2 class="phrase">Productos organicos, naturales e integrales. Cortesia de La Esquina de las Flores.</h1>
            </div>
            
            <div>
                <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-between">
                                @foreach ($products as $product)
                                <div class="col-4 col-md-2 py-3">
                                    <div class="product box rounded-lg shadow-lg">
                                        <img src="{{URL::asset("img/productos/{$product->img}.jpg")}}"" alt="" class="img-fluid">
                                        <h5 class="card-title text-white">{{$product->name}}</h5>
                                        <p class="card-text text-white d-none d-lg-inline">{{$product->description}}</p>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        
        
        {{------------------Pedidos------------------}}
        <div id="pedidos">
            <div class="container-fluid text-center mt-5">
                <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequatur dolorum eveniet facere quod temporibus?</h1>
                
                
            </div>
        </div>
        
        
        {{------------------Consultas------------------}}
        <div id="consultas">
            <div class="container-fluid text-center mt-5">
                <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequatur dolorum eveniet facere quod temporibus?</h1>
                
                
            </div>
        </div>
        
        
        
        
        
        
        <script src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
        
        
        <script src="{{ URL::asset('slick/slick.min.js') }}"></script>    
        <script src="{{ URL::asset('js/pages.js') }}"></script>
        
        <script type="text/javascript">
            
        </script>
        
    </body>
    
    </html>