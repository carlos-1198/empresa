@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 d-none d-md-block">
            <h4>Menu</h4>
            <div class="nav flex-column" id="aside-menu" role="tablist" aria-orientation="vertical">
                <a class="nav-link"  href="{{ route('marca.index') }}">Marcas</a>
                <a class="nav-link active"  href="{{ route('categoria.index') }}">Categorias</a>
                <a class="nav-link" href="{{ route('producto.index') }}">Productos</a>
            </div>
        </div>
        <div id="fondo-form" class="offset-md-1 col-12 col-md-6">
            <div class="row ">
                <h2 class="col-10 mt-2 pb-2">Registro de Nueva Categoria</h2>
            </div>
            <div class="col-12">
                <form action="{{ url('/categoria') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('admin.categoria.form',['modo'=>'crear'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection