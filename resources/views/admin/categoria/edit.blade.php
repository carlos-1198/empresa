@extends('layouts.app')

@section('content')

<div class="container">
    editar categoria

    <form action="{{ url('/categoria/'.$categoria->id) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('PATCH')
        @include('admin.categoria.form',['modo'=>'editar'])

    </form>

    <a href="{{url('categoria')}}">Regresar</a>
</div>
@endsection