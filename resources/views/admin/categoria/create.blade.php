@extends('layouts.app')

@section('content')
<div class="container"></div>
crear categoria

<form action="{{ url('/categoria') }}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('admin.categoria.form',['modo'=>'crear'])

</form>

<a href="{{url('categoria')}}">Regresar</a>
</div>
@endsection