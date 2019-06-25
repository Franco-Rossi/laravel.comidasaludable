@extends ('templates.home')

@section('hero')
    <div class="hero">
        <div class="heroImage">
            <img src="" alt="">
        </div>
    </div>
@endsection

@section ('content')

    <div class="container">
        <ul>
            <h1>Plato del dia</h1>
            @foreach($foods as $food)
                @if($food->type == 0)
                    <li><h3>{{$food->name}}</h3></li>
                @endif
            @endforeach
                <h1>Pastas caseras</h1>
            @foreach($foods as $food)
                @if($food->type == 1)
                    <li><h3>{{$food->name}}</h3></li>
                @endif
            @endforeach
                <h1>Bebidas</h1>
            @foreach($foods as $food)
                @if($food->type == 2)
                    <li><h3>{{$food->name}}</h3></li>
                @endif
            @endforeach

        </ul>
    </div>


@endsection