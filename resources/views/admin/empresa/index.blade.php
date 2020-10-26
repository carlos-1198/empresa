@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div id="fondo-form" class="offset-md-3 col-12 col-md-6">
            <div class="row">
                <h2 class="col-10 mt-2">Gestion de informacion de la empresa</h2>
                <i id="plus-icon" class="fas fa-plus-circle"></i>
            </div>
            <div class="col-12 pt-4">
            <form>
                <div class="form-group row">
                <label for="email-gestion" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="email-gestion">
                </div>
                </div>
                <div class="form-group row">
                <label for="nombre-gestion" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="nombre-gestion">
                </div>
                </div>
                <div class="form-group row">
                <label for="telefono-gestion" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="telefono-gestion">
                </div>
                </div>
                <div class="form-group row">
                <label for="presentacion-gestion" class="col-sm-2 col-form-label">Quienes somos</label>
                <div class="col-sm-10">
                    <textarea type="text"  class="form-control" id="presentacion-gestion" rows="5"></textarea>
                </div>
                </div>
                <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection