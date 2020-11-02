<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\producto;
use App\Models\categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::select('p.id', 'p.referencia', 'p.nombre', 'p.descripcioncorta', 'p.detalle', 'p.valor', 'p.palabrasclave', 'p.estado', 'p.foto', 'c.nombre as categoria', 'm.nombre as marca')
            ->from('productos as p')
            ->join('categorias as c', function ($join) {
                $join->on('c.id', '=', 'p.id_categoria');
            })
            ->join('marcas as m', function ($join) {
                $join->on('m.id', '=', 'p.id_marca');
            })
            ->paginate(20);
        $empresa = Empresa::findOrFail(1);
        return view('admin/producto.index', compact('productos','empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categorias = DB::table('categorias')->select('id', 'nombre')
            ->where('estado', '=', 0)
            ->get();
        $marcas = DB::table('marcas')->select('id', 'nombre')->get();
        $empresa = Empresa::findOrFail(1);
        return view('admin/producto.create', compact('categorias', 'marcas','empresa'));
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
        $datosProducto = request()->except('_token');

        if ($request->hasFile('foto')) {
            $datosProducto['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        producto::insert($datosProducto);

        //return response()->json($datosMarca);
        return redirect('producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = producto::findOrFail($id);
        $categorias = DB::table('categorias')->select('id', 'nombre')->get();
        $marcas = DB::table('marcas')->select('id', 'nombre')->get();

        $empresa = Empresa::findOrFail(1);
        return view('admin/producto.edit', compact('producto', 'categorias', 'marcas','empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProducto = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {

            $producto = producto::findOrFail($id);
            Storage::delete('public/' . $producto->foto);
            $datosProducto['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        producto::where('id', '=', $id)->update($datosProducto);
        $producto = producto::findOrFail($id);

       
        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $result = producto::findOrFail($id);
        if (Storage::delete('public/' . $result->foto)) {
            producto::destroy($id);
        }


        return redirect('producto');
    }

    public function list()
    {   
        $listados = producto::select('p.id', 'p.nombre', 'p.descripcioncorta', 'p.detalle', 'p.valor', 'p.palabrasclave', 'p.foto', 'c.nombre as categoria', 'm.nombre as marca')
            ->from('productos as p')
            ->join('categorias as c', function ($join) {
                $join->on('p.id_categoria', '=', 'c.id')
                    ->where('p.estado', '=', '0')
                    ->where('c.estado', '=', '0');
            })
            ->join('marcas as m', function ($join) {
                $join->on('p.id_marca', '=', 'm.id');
            })
            ->orderBy('id', 'desc')
            ->limit(8)
            ->get();

        $empresa = Empresa::findOrFail(1);
        return view('welcome', compact('listados','empresa'));
    }

    public function listAll()
    {
        $listados = producto::select('p.id', 'p.nombre', 'p.descripcioncorta', 'p.detalle', 'p.valor', 'p.palabrasclave', 'p.foto', 'c.nombre as categoria', 'm.nombre as marca')
            ->from('productos as p')
            ->join('categorias as c', function ($join) {
                $join->on('p.id_categoria', '=', 'c.id')
                    ->where('p.estado', '=', '0')
                    ->where('c.estado', '=', '0');
            })
            ->join('marcas as m', function ($join) {
                $join->on('p.id_marca', '=', 'm.id');
            })
            ->paginate(8);

        $categorias = DB::table('categorias')->select('id', 'nombre')
            ->where('estado', '=', 0)
            ->get();

        $empresa = Empresa::findOrFail(1);
        return view('listado', compact('listados', 'categorias','empresa'));
    }

    public function filter($id)
    {
        $listados = producto::select('p.id', 'p.nombre', 'p.descripcioncorta', 'p.detalle', 'p.valor', 'p.palabrasclave', 'p.foto', 'c.nombre as categoria', 'm.nombre as marca')
            ->from('productos as p')
            ->join('categorias as c', function ($join) {
                $join->on('p.id_categoria', '=', 'c.id')
                    ->where('p.estado', '=', '0')
                    ->where('c.estado', '=', '0')
                    ->where('c.id','=', $id);
            })
            ->join('marcas as m', function ($join) {
                $join->on('p.id_marca', '=', 'm.id');
            })
            ->paginate(8);

        $categorias = DB::table('categorias')->select('id', 'nombre')
            ->where('estado', '=', 0)
            ->get();

        return view('listado', compact('listados', 'categorias'));
    }
}
