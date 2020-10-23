@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 d-none d-md-block">
            <h4>Menu</h4>
            <div class="nav flex-column" id="aside-menu" role="tablist" aria-orientation="vertical">
                <h5>Categorias</h5>
                @isset($categorias)
                @foreach($categorias as $categoria)
                <a class="nav-link" href="{{url('/listado/'.$categoria->id.'/filter')}}">{{$categoria->nombre}}</a>
                @endforeach
                @endisset
            </div>
        </div>
        <div class="col-12 col-md-8">
            <h2>Listado de Productos</h2>
            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">Buscar</button>
                    </div>
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
                <div class="d-sm-block d-md-none">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categoria 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categoria 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categoria 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categoria 4</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="productos" class="pt-2 pb-4">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
                    @foreach($listados as $listado)
                    <div class="col mb-4">
                        <div class="card">
                            <a data-toggle="modal" data-target="#modalProducto{{$listado->id}}"><img src="{{asset('storage').'/'.$listado->foto}}" class="card-img-top" alt="Iphone X"></a>
                            <div class="card-body">
                                <p class="card-text">{{$listado->nombre}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="text-center">
                <!-- <button class="btn btn-success">Ver mas productos</button> -->
                {{ $listados->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    </main>
    @endsection