@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="row">
                <h2 class="col-8 mt-2">Registro de Nuevo Producto</h2>
            </div>
        </div>
        <div class="col-8 pt-4">
            <form action="{{ url('/producto') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('admin.producto.form',['modo'=>'crear'])

            </form>

        </div>


    </div>
    <!-- crear producto -->



    <a href="{{url('producto')}}">Regresar</a>

</div>

@endsection