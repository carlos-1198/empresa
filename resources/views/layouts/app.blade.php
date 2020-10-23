<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pear') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark">
          <div id="header" class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('storage/pear.png')}}" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <h1>Pear</h1>
                <!-- Right Side Of Navbar -->
                <ul class="nav justify-content-center ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li id="register-button" class="nav-item">
                        <a class="btn btn-outline-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li>
                      <a class="btn btn-outline-success" href="{{ route('producto.index') }}">{{ __('Administrar') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
              </div>
          </div>
        </nav>
        <!--BANNER-->
        <section id="banner">
            <div id="carousel" class="carousel slide" data-ride="carousel" data-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <img class="d-block w-100" src="{{asset('storage/banner1.jpg')}}" alt="Banner 1">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img class="d-block w-100" src="{{asset('storage/banner2.jpg')}}" alt="Banner 2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/banner3.jpg')}}" alt="Banner 3">
                    </div>
                    <div class="overlay">
                        <div class="container">
                            <div class="row align-items-center pt-3">
                                <div class="col-md-6 offset-md-6 text-center text-md-right">
                                    <h2>Ven y Conocenos</h2>
                                    <p class="d-block">
                                        calle 15 #3-69
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/BANNER-->


        <main class="pt-4 pb-4">
            @yield('content')
        </main>
    </div>

    <!--FOOTER-->
        <footer id="footer" class="pb-4 pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-8">
                        <h3>Información de contacto</h3>
                        <p>Email: pear@support.com</p>
                        <p>Télefono de contacto: +57 3188069485</p>
                    </div>
                    <div class="col-6 col-md-4 text-center pt-3">
                    <div class="d-inline">   
                        <a href="https://www.facebook.com/XiaomiColombia/" target="_blank"><img class="img-face" src="{{asset('storage/facebook-logo.png')}}" alt="facebook"></a>
                        <a href="https://twitter.com/XiaomiColombia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img class="img-twit" src="{{asset('storage/twitter-logo.png')}}" alt="twitter"></a>
                        <a href="https://www.instagram.com/xiaomi.colombia/" target="_blank"><img class="img-insta" src="{{asset('storage/instagram-logo.png')}}" alt="instagram"></a>      
                    </div>
                    <div class="pt-2">
                        <a class="btn btn-success" data-toggle="modal" data-target="#modal-btn-siguenos">Contactanos</a>
                    </div>   
                </div>
            </div>
            </div>
        </footer>
    <!--/FOOTER-->

    <!--MODALIMGPRODUCTO-->

    @isset($listados)
    @foreach($listados as $listado)
    <div id="modalProducto{{$listado->id}}" class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>{{$listado->nombre}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="row modal-body">
            <div class="col-6">
              <img id="imgModalProducto" src="{{asset('storage').'/'.$listado->foto}}">
            </div>
            <div class="col-6">
              <p>{{$listado->categoria}}</p>
              <p>{{$listado->descripcioncorta}}</p>
              <a class="offset-8" href="">más</a>
            </div>
          </div>
          <div class="modal-footer">
            <p>{{$listado->detalle}}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @endisset
    <!--/MODALIMGPRODUCTO-->

    <!--MODALBTNSIGUENOS-->
    <div id="modal-btn-siguenos" class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Formulario de Contacto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Digite su Nombre">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Digite su email">
                </div>
              </div>
              <div class="form-group row col-12">
                <textarea name="text"  class="form-control form-control-lg" placeholder="Escribe aqui tu duda o sugerencia"></textarea> 
              </div>
              <div class="form-group row">
                <button class="btn btn-success offset-9">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--/MODALBTNSIGUENOS-->

    <!--LOGINMODAL-->
    <div id="modal-btn-log" class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Log</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <form>
              <div class="form-group">
                <label for="usuario-log">Usuario</label>
                <input type="text" class="form-control" id="usuario-log">
              </div>
              <div class="form-group">
                <label for="password-log">Password</label>
                <input type="password" class="form-control" id="password-log" aria-describedby="consejo-contra">
                <small id="consejo-contra" class="form-text text-muted">Asegurate de verificar las mayusculas.</small>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="recuerdame-log">
                <label class="form-check-label" for="recuerdame-log">Recuerdame</label>
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Registrarse</button>
                <button type="submit" class="btn btn-success">Ingresar</button>
              </div>
            </form>         
          </div>
        </div>
      </div>
    </div>   
    <!--/LOGINMODAL-->
</body>

</html>