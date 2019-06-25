<?php

namespace App\Http\Controllers;

use App\Food;
use App\Image;
use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $images = Image::all();
        return view('index', compact('images'));
    }

    public function restaurante()
    {
        $images = Image::all();
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
