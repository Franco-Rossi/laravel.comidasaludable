<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FoodsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $foods = Food::all();
        return view('admin.restaurante', compact('foods'));
    }

    public function create(){
        return view('admin.restaurante.create');
    }

    public function show($id){
        $food = Food::findOrFail($id);
        return view('admin.restaurante.show', compact('food'));

    }

    public function edit($id){

        $food = Food::findOrFail($id);
        return view('admin.restaurante.edit', compact('food'));

    }

    public function update($id){

        $food = Food::findOrFail($id);

        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        if(request('img') != null){
            $img_name = request()->file('img');
            $extension = $img_name->getClientOriginalExtension();
            Storage::disk('public_food')->put($img_name->getFilename().'.'.$extension,  File::get($img_name));

            
            $foodImage = public_path("/img/comida/{$food->filename}");
            if(file_exists($foodImage)){
                unlink($foodImage);
            }

            
            $food->mime = $img_name->getClientMimeType();
            $food->original_filename = $img_name->getClientOriginalName();
            $food->filename = $img_name->getFilename().'.'.$extension;
        }

        $food->name = request('name');
        $food->description = request('description');
        $food->type = request('type');

        $food->save();

        return redirect('/admin/restaurante');

    }

    public function destroy($id){

        $food = Food::findOrFail($id);
        unlink(public_path("/img/comida/{$food->filename}"));
        $food->delete();

        return redirect('/admin/restaurante');
    }


    public function store(){

        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'required',
            'type' => 'required',
        ]);

        $img_name = request()->file('img');
        $extension = $img_name->getClientOriginalExtension();
        Storage::disk('public_food')->put($img_name->getFilename().'.'.$extension,  File::get($img_name));


        $food = new Food();

        $food->name = request('name');
        $food->description = request('description');
        $food->mime = $img_name->getClientMimeType();
        $food->original_filename = $img_name->getClientOriginalName();
        $food->filename = $img_name->getFilename().'.'.$extension;
        $food->type = request('type');

        $food->save();

        return redirect('/admin/restaurante');
    }
}
