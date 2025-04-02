<!DOCTYPE html>
<html lang="en">

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
@yield('home')
@yield('eventos')
@yield('evento')
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
