<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

        request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        if(request('img') != null){
             $img_name = request()->file('img');
            $extension = $img_name->getClientOriginalExtension();
            Storage::disk('public_product')->put($img_name->getFilename().'.'.$extension,  File::get($img_name));

            
            $productImage = public_path("/img/productos/{$product->filename}");
            if(file_exists($productImage)){
                unlink($productImage);
            }

            
            $product->mime = $img_name->getClientMimeType();
            $product->original_filename = $img_name->getClientOriginalName();
            $product->filename = $img_name->getFilename().'.'.$extension;
        }

        $product->name = request('name');
        $product->description = request('description');
        $product->keywords = request('keywords');
        $product->save();

        return redirect('/admin/productos');

    }

    public function destroy($id){

        Product::find($id)->delete();

        return redirect('/admin/productos');
    }


    public function store(){

        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'required',
        ]);

        $img_name = request()->file('img');
        $extension = $img_name->getClientOriginalExtension();
        Storage::disk('public_product')->put($img_name->getFilename().'.'.$extension,  File::get($img_name));


        $product = new Product();

        $product->name = request('name');
        $product->description = request('description');
        $product->mime = $img_name->getClientMimeType();
        $product->original_filename = $img_name->getClientOriginalName();
        $product->filename = $img_name->getFilename().'.'.$extension;
        $product->keywords = request('keywords');

        $product->save();

        return redirect('/admin/productos');
    }
}
