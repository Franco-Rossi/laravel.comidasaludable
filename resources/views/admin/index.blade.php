@extends('templates.admin')

@section('content')

    <div class="row">
        <div class="col mb-5">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Productos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($products)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cookie-bite fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Articulos de Restaurant</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($foods)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-utensils fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection