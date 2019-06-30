<?php

namespace App\Http\Controllers;

use App\Food;
use App\Image;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('restaurante', compact('foods', 'images'));
    }

    public function productos()
    {
        $images = Image::all();
        $products = Product::all();
        return view('productos', compact('products', 'images'));
    }

    public function pedidos()
    {
        $images = Image::all();
        return view('pedidos', compact('images'));
    }

    public function consultas()
    {
        $images = Image::all();
        return view('consultas', compact('images'));
    }

}
