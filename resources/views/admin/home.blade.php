@extends('templates.admin')

@section('content')

<div class="card border-left-info shadow">
    <h5 class="card-header">Carousel</h5>
    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        @foreach($images as $image)
            @if($image->id <= 5)
                <li class="nav-item">
                    <a class="nav-link {{$image->id == 1 ? "active" : ""}}" id="image{{$image->id}}-tab" data-toggle="tab" href="#image{{$image->id}}" role="tab" aria-controls="image{{$image->id}}" aria-selected="true">Imagen {{$image->id}}</a>
                </li>
            @endif
            @endforeach
    </ul>
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            @foreach($images as $image)
                @if($image->id <= 5)
                    <div class="tab-pane fade show {{$image->id == 1 ? "active" : ""}}" id="image{{$image->id}}" role="tabpanel" aria-labelledby="image{{$image->id}}-tab">

                        <form method="POST" action="/admin/images/{{$image->id}}">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name='img' id="img" placeholder="Ingrese el nombre de la imagen" value="{{$image->img}}">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name='title' id="title" placeholder="Ingrese el titulo" value="{{$image->title}}">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name='description' id="description" placeholder="Ingrese el texto" value="{{$image->description}}">
                                <p class="help-block">Maximo 275 caracteres. Las imagenes deben estar en 1280x720 y 640x480.</p>
                            </div>
                            <div class="row">
                                <div class="form-check pl-5 pt-2">
                                    <input class="form-check-input" type="checkbox" value="" name="show" id="show" {{$image->show ? 'checked' : ''}}>
                                    <label class="form-check-label" for="show">Mostrar</label>
                                </div>
                            </div>
                            <div class="card">
                                <img src="{{URL::asset("img/bg/{$image->img}.png")}}" alt="" class="card-img">
                            </div>
                            <div class="card">
                                <img src="{{URL::asset("img/bg/{$image->img}big.png")}}" alt="" class="card-img img-fluid" style="width: 640px; height: 480px;">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg">Modificar imagen</button>
                        </form>

                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>


    {{--<div class="card">--}}
        {{--<h5 class="card-header">Carousel</h5>--}}
        {{--@foreach($images as $image)--}}
            {{--@if($image->id <= 5)--}}
            {{--<div class="card-body">--}}
                {{--<form method="POST" action="/admin/images/{{$image->id}}">--}}
                    {{--@method('PATCH')--}}
                    {{--@csrf--}}
                    {{--<div class="row">--}}
                        {{--<div class="col">--}}
                            {{--<input type="text" class="form-control" name='img' id="img" placeholder="Ingrese el nombre de la imagen" value="{{$image->img}}">--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}
                            {{--<input type="text" class="form-control" name='title' id="title" placeholder="Ingrese el titulo" value="{{$image->title}}">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group mt-3">--}}
                        {{--<input type="text" class="form-control" name='description' id="description" placeholder="Ingrese el texto" value="{{$image->description}}">--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-6">--}}
                            {{--<select id="number" name="number" class="form-control">--}}
                                {{--<option value="1" {{$image->number == 1 ? 'selected' : ''}}>1</option>--}}
                                {{--<option value="2" {{$image->number == 2 ? 'selected' : ''}}>2</option>--}}
                                {{--<option value="3" {{$image->number == 3 ? 'selected' : ''}}>3</option>--}}
                                {{--<option value="4" {{$image->number == 4 ? 'selected' : ''}}>4</option>--}}
                                {{--<option value="5" {{$image->number == 5 ? 'selected' : ''}}>5</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="form-check pl-5 pt-2">--}}
                            {{--<input class="form-check-input" type="checkbox" value="" name="show" id="show" {{$image->show ? 'checked' : ''}}>--}}
                            {{--<label class="form-check-label" for="show">Mostrar</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-success btn-lg">Modificar imagen</button>--}}
                {{--</form>--}}
            {{--</div>--}}
            {{--@endif--}}
        {{--@endforeach--}}
    {{--</div>--}}

@endsection