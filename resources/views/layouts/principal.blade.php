<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titol')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/css/app.scss', 'resources/css/style.css', 'resources/js/app.js', 'resources/js/botonFiltro.js'])
</head>
<body>
<header class="header-general">
    <div class="div-logo">
        <img class="img-logo-header" src="{{ asset('media/logo.png')}}" alt="Imagen logo">
        <h3><a href="{{ route('home') }}">EIT</a></h3>
    </div>
    <nav class="menu-principal">
        <ul>
            <li><a href="{{ route('home') }}"><img class="img-icono" src="{{ asset('media/iconoHogar.png')}}" alt="Icono hogar">Home</a></li>
            <li><a href="{{ route('eventos') }}"><img class="img-icono" src="{{ asset('media/iconoCalendario.png')}}" alt="Icono calendario">Esdeveniments</a></li>
            <li><a href="{{ route('about') }}"><img class="img-icono" src="{{ asset('media/iconoUsuarios.png')}}" alt="Icono usuarios">About us</a></li>
            <li><a href="{{ route('showLogin') }}"><img class="img-icono" src="{{ asset('media/iconoUsuario.png')}}" alt="Icono usuario">Iniciar sesión</a></li>
        </ul>
    </nav>
</header>

<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{ route('home') }}">
        <img src="{{ asset('media/logo.png')}}" alt="Imagen logo" height="30">
        EIT
      </a>
      
      <!-- Botó del menú hamburguesa per a mòbils -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <!-- Contingut del menú -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('eventos') }}">Esdeveniments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('about') }}">About us</a>
          </li>



          @if (!Auth::user())
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('showLogin') }}"> <img src="{{ asset('media/iconoUsuario.png')}}">Iniciar sessió</a>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              {{ Auth::user()->nom }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href=" {{ route('')}} ">Perfil</a></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Tancar sessió</a></li>
            </ul>
          </li>
          @endif


        </ul>
      </div>
    </div>
  </nav>
  





@yield('home')
@yield('eventos')
@yield('evento')
@yield('aboutUs')
<footer class="footer-general">
    <div class="div-logo-footer centrar-elementos">
        <img class="img-logo-footer" src="{{ asset('media/logo.png')}}" alt="Imagen logo">
        <h2>EIT</h2>
    </div>
    <div class= "barra-vertical"></div>
    <div class="enlaces-footer">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('eventos') }}">Esdeveniments</a></li>
            <li><a href="{{ route('about') }}">About us</a></li>
        </ul>
        <ul>
            <li>Legal</li>
            <li>Privacity Policity</li>
            <li>Cookies Policity</li>
        </ul>
    </div>
</footer>

</body>
</html>
