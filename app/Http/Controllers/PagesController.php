<?php

namespace App\Http\Controllers;

use App\Food;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    public function home()
    {
        $foods = Food::all();
        $products = DB::table('products')->paginate(6);
        return view('index', compact('foods', 'products'));
    }

    public function restaurante()
    {
        $foods = Food::all();
        return view('restaurante', compact('foods'));
    }


    public function productos(Request $request){

        $q = Input::get ( 'q' );
        $products = Product::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->orWhere('keywords','LIKE','%'.$q.'%')->paginate(6);
        if(count($products) > 0)
            return view('productos', compact('products'));
        else return view ('productos')->withMessage('No se ha encontrado ningun producto, por favor busque otro termino.');
    }

    public function pedidos()
    {
        return view('pedidos');
    }

    public function consultas()
    {
        return view('consultas');
    }

}
