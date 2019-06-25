@extends('templates.home')

@section('hero')
<div class="hero">
    <div class="heroImage">
        <img src="{{URL::asset("img/{$images->get(5)->img}")}}" class="d-block w-100 img-fluid" alt="">
    </div>
</div>
@endsection

@section('content')

consultas

@endsection