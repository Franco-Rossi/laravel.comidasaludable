<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

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

        $food->name = request('name');
        $food->description = request('description');
        $food->img = request('img');
        $food->price = request('price');
        $food->type = request('type');

        $food->save();

        return redirect('/admin/restaurante');

    }

    public function destroy($id){

        Food::findOrFail($id)->delete();

        return redirect('/admin/restaurante');
    }


    public function store(){
        $food = new Food();

        $food->name = request('name');
        $food->description = request('description');
        $food->img = request('img');
        $food->price = request('price');
        $food->type = request('type');

        $food->save();

        return redirect('/admin/restaurante');
    }
}
