@extends('layouts.app')

@section('content')
<div class="container">
    <h1>holi</h1>

    <a href="{{url('producto/create')}}">Crear Producto</a>

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
                <td class="d-flex justify-content-center"><a href="{{url('/producto/'.$producto->id.'/edit')}}" class="btn btn-primary">Editar</a>
                    <form action="{{url('/producto/'.$producto->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" onclick="return confirm('Borrar?');" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $productos->links() }}
</div>
@endsection