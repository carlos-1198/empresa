@extends('layouts.app')

@section('content')
    <body class="antialiased">
        <!--MAIN-->
     <main id="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div id="quienes-somos" class="pt-4 pb-4">
                <h2>Quienes somos</h2>
                <p>{{$empresa->quienessomos}}</p>
              </div>
              <div id="productos" class="pt-2 pb-4">
                <h2 class="pb-4">Recientemente Agregados</h2>
                <div class="row row-cols-1 row-cols-s-1 row-cols-md-2 row-cols-lg-4">
                @foreach($listados ?? '' as $listado)
                  <div class="col mb-4">
                    <div class="card">
                      <a data-toggle="modal" data-target="#modalProducto{{$listado->id}}"><img src="{{asset('storage').'/'.$listado->foto}}"  class="card-img-top" alt="Imagen producto"></a>
                      <div class="card-body">
                        <p class="card-text ">{{$listado->nombre}}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
                <div class="text-center">
                  <a class="btn btn-success" href="{{ route('listado') }}">Ver todos los productos</a>       
                </div>              
              </div>
            </div>
            <div id="aside" class="col-md-4 pt-4 pb-4">
              <div class="text-center pt-4">
                
              </div>
              <div class="text-center">
                <a href="https://www.instagram.com/xiaomi.colombia/" target="_blank" class="btn btn-success">Siguenos</a>
              </div> 
            </div>
          </div>
        </div>
      </main>
    <!--/MAIN-->
@endsection