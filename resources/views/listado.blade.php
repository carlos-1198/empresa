@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 d-none d-md-block">
            <h4>Menu</h4>
            <div class="nav flex-column" id="aside-menu" role="tablist" aria-orientation="vertical">
            <a class="nav-link"  >Categoria 1</a>
            <a class="nav-link">Categoria 2</a>
            <a class="nav-link">Categoria 3</a>
            <a class="nav-link">Categoria 4</a>
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
            <div class="col mb-4">
                <div class="card">
                <a href=""><img src="../imagenes/producto1.jpg"  class="card-img-top" alt="Iphone X"></a>
                <div class="card-body">
                    <p class="card-text">Producto 1</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 2</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 3</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 4</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 5</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 6</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 7</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 8</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 9</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 10</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 11</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 12</p>
                </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 13</p>
                </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 14</p>
                </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 15</p>
                </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                <img src="../imagenes/producto1.jpg" class="card-img-top" alt="Iphone X">
                <div class="card-body">
                    <p class="card-text">Producto 16</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-success">Ver mas productos</button>
        </div> 
        </div> 
    </div>    
</main>
@endsection