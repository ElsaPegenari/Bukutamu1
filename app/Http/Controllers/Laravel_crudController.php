<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laravel_crudController extends Controller
{
    public function index(Request $request)
    {   

        // dd($request->all());

        if ($request->has('cari'))
        {

            $data_laravel_crud = \App\laravel_crud::where('no_identitas','LIKE','%'.$request->cari.'%')->get();

        }
        else 
        {

            $data_laravel_crud =\App\laravel_crud::all();

        }

        
        return view('laravel_crud.index',['data_laravel_crud' => $data_laravel_crud]);

    }

    public function create(Request $request)
    {

        \App\Laravel_crud::create($request->all());
        return redirect('/laravel_crud')->with('sukses','Data berhasil diinput');

    }

    public function edit($id)
    {
        
        $laravel_crud= \App\Laravel_crud::find($id);
        return view('laravel_crud/edit',['laravel_crud' => $laravel_crud]);

    }

    public function update(Request $request,$id)
    {

        $laravel_crud= \App\Laravel_crud::find($id);
        $laravel_crud->update($request->all());
        return redirect("/laravel_crud")->with('sukses','Data berhasil diupdate');

    }

    public function delete($id)
    {

        $laravel_crud= \App\Laravel_crud::find($id);
        $laravel_crud->delete($laravel_crud);
        return redirect("/laravel_crud")->with('sukses','Data berhasil didelete');

    }

}
