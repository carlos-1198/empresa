@extends('layouts.app')

@section('content')

<div class="container">
    crear marcas

    <form action="{{ url('/marca') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.marca.form',['modo'=>'crear'])

    </form>

    <a href="{{url('marca')}}">Regresar</a>

</div>

@endsection