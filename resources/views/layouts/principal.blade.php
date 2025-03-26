<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titol')</title>
    @vite(['resources/css/app.css','resources/css/app.scss', 'resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
<header class="header-general">
    <div class="div-logo">
        <img class="img-logo-header" src="{{ asset('media/logo.png')}}" alt="Imagen logo">
        <h3>EIT</h3>
    </div>
    <nav class="menu-principal">
        <ul>
            <li><a href=""><img class="img-icono" src="{{ asset('media/iconoHogar.png')}}" alt="Icono hogar">Home</a></li>
            <li><a href=""><img class="img-icono" src="{{ asset('media/iconoCalendario.png')}}" alt="Icono calendario">Eventos</a></li>
            <li><a href=""><img class="img-icono" src="{{ asset('media/iconoUsuarios.png')}}" alt="Icono usuarios">About us</a></li>
            <li><a href=""><img class="img-icono" src="{{ asset('media/iconoUsuario.png')}}" alt="Icono usuario">Iniciar sesión</a></li>
        </ul>
    </nav>
</header>
@yield('home')
<footer class="footer-general">
    <div class="div-logo-footer">
        <img class="img-logo-footer" src="{{ asset('media/logo.png')}}" alt="Imagen logo">
        <h2>EIT</h2>
    </div>
    <div class= "barra-vertical"></div>
    <div class="enlaces-footer">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Eventos</a></li>
            <li><a href="">About us</a></li>
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
