<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $products = Product::all();
        return view('admin.productos', compact('products'));
    }

    public function create(){
        return view('admin.productos.create');
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('admin.productos.show', compact('product'));

    }

    public function edit($id){

        $product = Product::findOrFail($id);
        return view('admin.productos.edit', compact('product'));

    }

    public function update($id){
        $product = Product::findOrFail($id);

        $product->name = request('name');
        $product->description = request('description');
        $product->img = request('img');
        $product->keywords = request('keywords');
        $product->price = request('price');

        $product->save();

        return redirect('/admin/productos');

    }

    public function destroy($id){

        Product::find($id)->delete();

        return redirect('/admin/productos');
    }


    public function store(){
        $product = new Product();

        $product->name = request('name');
        $product->description = request('description');
        $product->img = request('img');
        $product->keywords = request('keywords');
        $product->price = request('price');

        $product->save();

        return redirect('/admin/productos');
    }
}
