<?php

namespace App\Http\Controllers;

use App\Image;
use App\Food;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $foods = Food::all();
        $products = Product::all();
        $images = Image::all();
        return view('admin.index', compact('foods', 'products', 'images'));
    }

    public function home()
    {
        $images = Image::all();
        return view('admin.home', compact('images'));
    }

    public function restaurante()
    {
        return view('admin.restaurante');
    }

    public function productos()
    {
        return view('admin.productos');
    }

    public function pedidos()
    {
        return view('admin.pedidos');
    }

    public function consultas()
    {
        return view('admin.consultas');
    }
}
