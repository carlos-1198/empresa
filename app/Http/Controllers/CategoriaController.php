<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $datos['categorias']=categoria::paginate(20);

        return view('admin/categoria.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin/categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosCategoria=request()->except('_token');

        categoria::insert($datosCategoria);

        //return response()->json($datosMarca);
        return redirect('categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $categoria=categoria::findOrFail($id);

        return view('admin/categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datosCategoria=request()->except(['_token','_method']);
        categoria::where('id','=', $id)->update($datosCategoria);
        $categoria=categoria::findOrFail($id);

        //return view('admin/marca.edit', compact('marca'));
        return redirect('categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        categoria::destroy($id);

        return redirect('categoria');
    }

    
    
}
