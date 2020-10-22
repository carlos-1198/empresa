@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-2 d-none d-md-block">
            <h4>Menu</h4>
            <div class="nav flex-column" id="aside-menu" role="tablist" aria-orientation="vertical">
                <a class="nav-link"  href="{{ route('marca.index') }}">Marcas</a>
                <a class="nav-link"  href="{{ route('categoria.index') }}">Categorias</a>
                <a class="nav-link active" href="{{ route('producto.index') }}">Productos</a>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                  <h2 class="col-10 mt-2">Listado de Productos</h2>
                  <a href="{{url('producto/create')}}"><i id="plus-icon" class="fas fa-plus-circle"></i></a>
            </div>
            <div class="col-12">
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Referencia</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion Corta</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Palabras Clave</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->referencia}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcioncorta}}</td>
                        <td>{{$producto->detalle}}</td>
                        <td>{{$producto->valor}}</td>
                        <td>{{$producto->palabrasclave}}</td>
                        <td>{{ $producto->estado=='0' ? 'activo':'inactivo' }}</td>
                        <td> <img src="{{asset('storage').'/'.$producto->foto}}" alt="" width="100px" class="img-fluid"> </td>
                        <td>{{$producto->categoria}}</td>
                        <td>{{$producto->marca}}</td>
                        <td class="d-flex justify-content-center"><a id="edit-icon" href="{{url('/producto/'.$producto->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                            <form action="{{url('/producto/'.$producto->id)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <a id="delete-icon"onclick="return confirm('Borrar?');"><i class="fas fa-trash-alt"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection