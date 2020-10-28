@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div id="fondo-form" class="offset-md-3 col-12 col-md-6">
            <div class="row ">
                <h2 class="col-10 mt-2 pb-2">Editar informacion Empresa</h2>
            </div>
            <div class="col-12 ">
                <form action="{{ url('/') }}" method="HEAD">
                    {{csrf_field()}}
                    @method('HEAD')
                    @include('admin.empresa.form',['modo'=>'editar'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection