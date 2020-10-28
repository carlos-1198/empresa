<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/empresa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEmpresa=request()->except('_token');

        empresa::insert($datosEmpresa);

        //return response()->json($datosMarca);
        return redirect('categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(empresa $empresa)
    {
        $empresa = empresa::findOrFail(1);

        return view('admin/empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empresa $empresa)
    {
        $datosEmpresa=request()->except(['_token','_method']);
        empresa::where('id','=', 1)->update($datosEmpresa);
        $empresa=empresa::findOrFail(1);

        //return view('admin/marca.edit', compact('marca'));
        return redirect('categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(empresa $empresa)
    {
        //
    }
}
