<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--Favicon-->
    <!--Estilos-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="../public/css/pagina_principal.css">
    <link rel="stylesheet" href="../public/css/acerca.css">
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="stylesheet" href="../public/css/contacto.css">
    <link rel="stylesheet" href="../public/css/footer.css">
</head>
<body>
  
    <!--NAV-->
    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../public/" style="color: white; font-weight: 600; margin-left: 50px">TECHNOSHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex flex-row-reverse " id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link"  style="color: white; font-size: 20px" href="../public/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color: white; font-size: 20px" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
              </a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-white" >Computadoras</a>
                <a class="dropdown-item text-white" href="#">Celulares</a>
                <a class="dropdown-item text-white" href="#">Gaming</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto" style="color: white; font-size: 20px" >Contacto <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="acercade" style="color: white; font-size: 20px">Acerca <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="login" style="color: white; font-size: 20px">Login <span class="sr-only">(current)</span></a>
              </li>
          </ul>

        </div>
      </nav>

    @yield('content')
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif
                          
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
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

     
  </div>
     <!--Footer-->

     <div class="footer" style="margin-top: 63px">
        <div class="col-xs-footer">
            <p>Derechos reservados Techno Shop&COPY; 2020</p>
        </div>
        <div class="col-xs-icon">

        </div>

    </div>
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>