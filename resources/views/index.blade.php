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
                <img src="/img/logo3.png" alt="" class="logo">
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
            <div class="mb-3 phrase">
                <p class="container shadow-lg box rounded-top-both">Encontranos en Gorriti 10, Lomas de Zamora.</p>
                <a href="https://www.google.com/maps/place/Casa+de+Comida+Saludable,+productos+de+la+Esquina+de+las+Flores/@-34.7625714,-58.3986422,17.75z/data=!4m13!1m7!3m6!1s0x95bcd2eb256d7803:0x60c25f66089a3f91!2sJos%C3%A9+Ignacio+Gorriti+10,+Lomas+de+Zamora,+Buenos+Aires!3b1!8m2!3d-34.7624258!4d-58.3978954!3m4!1s0x0:0xe8006829fe6d08ae!8m2!3d-34.7623112!4d-58.3978218" target="_blank"><img src="img/map.png" alt="" class="shadow-lg border map"></a>
            </div>
            <div>
                <a href="https://www.facebook.com/conproductosdelaesquinadelasflores/" class="shadow-lg" target="_blank"><i class="fab fa-facebook-f align-middle"></i></a>
                <a href="https://www.instagram.com/casadecomidasaludable/" class="shadow-lg" target="_blank"><i class="fab fa-instagram align-middle"></i></a>
            </div>
        </div>
    </div>
    
    {{------------------Restaurante------------------}}
    
    <div id="restaurante">
        <div class="container-fluid text-center mt-5">
            <div class="container box rounded-top-both">
                <h1 class="phrase">Comida rica y saludable que elaboramos en nuestra casa.</h1>
            </div>
            <div class="box rounded-bottom-both image-box container" >
                <h2 class="phrase">Platos principales</h2>
                <div class="slideShow container-fluid">
                    @foreach ($foods as $food)
                    @if ($food->type === 0)
                    <div><img src="{{url('img/comida/'.$food->filename)}}" alt="" class="img-fluid shadow food rounded-lg"> </div>
                    @endif
                    @endforeach
                </div>
                <h2 class="phrase mt-3">Tartas</h2>
                <div class="slideShow container">
                    @foreach ($foods as $food)
                    @if ($food->type === 1)
                    <div><img src="{{url('img/comida/'.$food->filename)}}" alt="" class="img-fluid shadow food rounded-lg"></div>
                    @endif
                    @endforeach
                </div>
                <h2 class="phrase mt-3">Postres</h2>
                <div class="slideShow container">
                    @foreach ($foods as $food)
                    @if ($food->type === 2)
                    <div><img src="{{url('img/comida/'.$food->filename)}}" alt="" class="img-fluid shadow food rounded-lg"></div>
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
                <h2 class="phrase">Productos organicos, naturales e integrales de La Esquina de las Flores.</h1>
            </div>
                
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-between">
                                @foreach ($products as $product)
                                <div class="col-4 col-lg-2 py-3">
                                    <div class="product box rounded-lg shadow-lg h-100 text-center">
                                        <img src="{{url('img/productos/'.$product->filename)}}" alt="" class="img-fluid">
                                        <h5 class="card-title text-white">{{$product->name}}</h5>
                                        <hr class="mx-5 d-none d-lg-flex">
                                        <p class="card-text text-white d-none d-lg-inline">{{$product->description}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                        
                    <a name="" id="buttonGreen" class="btn btn-block rounded-pill shadow-lg" href="/productos" role="button"><h4 class="phrase">Ver mas productos</h4></a>
                        
                </div>
            </div>
        </div>
    </div>
        
        {{------------------Pedidos------------------}}
        
    <div id="pedidos">
        <div class="container text-center text-white mt-4">
            <div class="row d-md-none"> {{-- MOBILE --}}
                <div class="col-12 mb-1">
                    <div class="rounded-top-both p-3" id="pedidosYa">
                        <h1>Encontranos en</h1>
                        <a href="https://www.pedidosya.com.ar/restaurantes/lomas-de-zamora/casa-de-comidas-saludable-vegetariana-menu"><img src="/img/pedidosya.png" alt="" class=" img-fluid logo"></a>
                        <h4>Buscanos por el nombre de</h4>
                        <h2>Casa de Comida Saludable</h2>    
                    </div>
                </div>
                <div class="col-12">
                    <div class="rounded-bottom-both p-3" id="entregas">
                        <h4>Podes comunicarte con nosotros llamandonos al</h3>
                        <h2>4244 5048</h2>
                        <h4>o via Whatsapp al</h3>
                        <h2>+54 11 41937119</h2>
                        <hr class="mx-3">
                        <p>Hacemos entregas hasta 10 cuadras a la redonda.</p>
                    </div>
                </div>
            </div>
                        
            <div class="d-none d-md-flex row"> {{-- DESKTOP --}}
                <div class="col-8 px-1">
                    <div class="rounded-left-both h-100 p-3" id="pedidosYa">
                        <h1>Encontranos en</h1>
                        <a href="https://www.pedidosya.com.ar/restaurantes/lomas-de-zamora/casa-de-comidas-saludable-vegetariana-menu" target="_blank"><img src="/img/pedidosya.png" alt="" class=" img-fluid logo"></a>
                        <h4>Buscanos por el nombre de</h4>
                        <h2>Casa de Comida Saludable</h2>
                    </div>
                </div>
                <div class="col-4 px-1">
                    <div class="rounded-right-both h-100 p-3 d-flex justify-content-center flex-column" id="entregas">
                        <h4>Podes comunicarte con nosotros llamandonos al</h3>
                        <h2>4244 5048</h2>
                        <h4>o via Whatsapp al</h3>
                        <h2>+54 11 41937119</h2>
                        <hr class="mx-3">
                        <p>Hacemos entregas hasta 10 cuadras a la redonda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        
     {{------------------Consultas------------------}}
                        
    <div id="consultas">
        <div class="container text-center text-white mt-4">
                @if(Session::has('success'))
                <div class="alert alert-success">
                  {{ Session::get('success') }}
                </div>
                @endif
            <div class="row d-md-none"> {{-- MOBILE --}}
                <div class="col-12 mb-1">
                    <div class="rounded-top-both p-3" id="contactInfo">
                        <h2>¡Dejanos tu mensaje!</h2>
                        <h4>Tambien podes encontrarnos en nuestras redes sociales</h4>
                        <a href="https://www.facebook.com/conproductosdelaesquinadelasflores/" class="shadow-lg" target="_blank"><i class="fab fa-facebook-f fab-mini align-middle m-2"></i></a>
                        <a href="https://www.instagram.com/casadecomidasaludable/" class="shadow-lg" target="_blank"><i class="fab fa-instagram fab-mini align-middle m-2"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="rounded-bottom-both p-3" id="contactForm">
                        <form method="POST" action="/contact-us" class="mx-5">
                            {{  csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control shadow-lg" name="name" id="name" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control shadow-lg" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control shadow-lg" name="message" id="message" rows="7" placeholder="Ingrese su mensaje" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-block shadow-lg border" id="buttonCyan"><h2 class="phrase">Enviar</h2></button>
                        </form>
                    </div>
                </div>
            </div>
                                
            <div class="d-none d-md-flex row"> {{-- DESKTOP --}}
                <div class="col-4 px-1">
                    <div class="rounded-left-both h-100 p-3 d-flex justify-content-center flex-column" id="contactInfo">
                        <div class="">
                            <h2>¡Dejanos tu mensaje!</h2>
                            <h4>Tambien podes encontrarnos en nuestras redes sociales</h4>
                            <a href="https://www.facebook.com/conproductosdelaesquinadelasflores/" class="shadow-lg" target="_blank"><i class="fab fa-facebook-f fab-mini align-middle m-2"></i></a>
                            <a href="https://www.instagram.com/casadecomidasaludable/" class="shadow-lg" target="_blank"><i class="fab fa-instagram fab-mini align-middle m-2"></i></a>
                        </div>
                    </div>
                </div>  
                <div class="col-8 px-1">
                    <div class="rounded-right-both h-100 p-3" id="contactForm">
                        <form method="POST" action="/contact-us" class="mx-5">
                            {{  csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control shadow-lg" name="name" id="name" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control shadow-lg" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control shadow-lg" name="message" id="message" rows="7" placeholder="Ingrese su mensaje" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-block shadow-lg border" id="buttonCyan"><h2 class="phrase">Enviar</h2></button>
                        </form>
                    </div>
                                        
                </div>
            </div>
        </div>
    </div>
                        
                        
                        
                        
                        
                        
    <script src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                        
    <script src="{{ URL::asset('slick/slick.min.js') }}"></script>    
    <script src="{{ URL::asset('js/pages.js') }}"></script>
                        
</body>
                    
</html>