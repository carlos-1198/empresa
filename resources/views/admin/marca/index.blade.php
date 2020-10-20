@extends('layouts.app')

@section('content')
<div class="container">
    <h1>holi</h1>

    <a href="{{url('marca/create')}}">Crear Producto</a>

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
                <td><a href="{{url('/marca/'.$marca->id.'/edit')}}">Editar</a> |
                    <form action="{{url('/marca/'.$marca->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" onclick="return confirm('Borrar?');">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection