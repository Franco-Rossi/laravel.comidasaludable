<?php

namespace App\Http\Controllers;

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
        return view('admin.index', compact('foods', 'products', 'images'));
    }

    public function restaurante()
    {
        return view('admin.restaurante');
    }

    public function productos()
    {
        return view('admin.productos');
    }

}
