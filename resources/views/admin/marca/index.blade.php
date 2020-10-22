@extends('layouts.app')

@section('content')
<div class="container">
<div class="container-fluid">
    <div class="row">
        <div class="col-2 d-none d-md-block">
            <h4>Menu</h4>
            <div class="nav flex-column" id="aside-menu" role="tablist" aria-orientation="vertical">
                <a class="nav-link active"  href="{{ route('marca.index') }}">Marcas</a>
                <a class="nav-link"  href="{{ route('categoria.index') }}">Categorias</a>
                <a class="nav-link" href="{{ route('producto.index') }}">Productos</a>
            </div>
        </div>
        <div class="col-12 offset-md-1 col-md-6">
            <div class="row">
                  <h2 class="col-10 mt-2">Listado de Marcas</h2>
                  <a href="{{url('marca/create')}}"><i id="plus-icon" class="fas fa-plus-circle"></i></a>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($marcas as $marca)
                        <tr>
                            <td>{{$marca->id}}</td>
                            <td>{{$marca->nombre}}</td>
                            <td>{{$marca->descripcion}}</td>
                            <td class="d-flex"><a id="edit-icon" href="{{url('/marca/'.$marca->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                                <form action="{{url('/marca/'.$marca->id)}}" method="POST">
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
</div>
@endsection