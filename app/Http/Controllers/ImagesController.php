<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store($id)
    {
        $image = Image::findOrFail($id);

        $image->title = request('title');
        $image->description = request('description');
        $image->img = request('img');
        $image->show = request('show');

        $image->save();

        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update($id)
    {
        $image = Image::findOrFail($id);

        $image->title = request('title');
        $image->description = request('description');
        $image->img = request('img');

        $image->update([
            'show' => request()->has('show')
        ]);

        $image->save();

        return redirect()->back();
    }

}
