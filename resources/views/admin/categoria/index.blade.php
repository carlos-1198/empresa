@extends('layouts.app')

@section('content')
<div class="container">
    <h1>holi</h1>

    <a href="{{url('categoria/create')}}">Crear Categoria</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>

                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>{{ $categoria->estado=='0' ? 'activo':'inactivo' }}</td>
                <td><a href="{{url('/categoria/'.$categoria->id.'/edit')}}">Editar</a> |
                    <form action="{{url('/categoria/'.$categoria->id)}}" method="POST">
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