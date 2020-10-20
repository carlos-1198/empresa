@extends('layouts.app')

@section('content')

<div class="container">
    editar marca

    <form action="{{ url('/marca/'.$marca->id) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('PATCH')
        @include('admin.marca.form',['modo'=>'editar'])

    </form>

    <a href="{{url('marca')}}">Regresar</a>

</div>
@endsection