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
        <img class="img-logo-header" src="/media/LogoEIT.png" alt="Imagen logo">
        <h3>EIT</h3>
    </div>
    <nav class="menu-principal">
        <ul>
            <li><a href=""><img class="img-icono" src="/media/iconoHogar.png" alt="Icono hogar">Home</a></li>
            <li><a href=""><img class="img-icono" src="/media/iconoCalendario.png" alt="Icono calendario">Eventos</a></li>
            <li><a href=""><img class="img-icono" src="/media/iconoUsuarios.png" alt="Icono usuarios">About us</a></li>
            <li><a href=""><img class="img-icono" src="/media/iconoUsuario.png" alt="Icono usuario">Iniciar sesión</a></li>
        </ul>
    </nav>
</header>
<main class="main-general">
    <div class="container-home">
        <div class="titulo">
            <h1>ORGANIZACIÓN DE</h1>
            <h1>EVENTOS TECNOLÓGICOS</h1>
        </div>
        <div class="info-home">
            <!-- Carrusel de imágenes -->
            <img class="img-carrusel" src="/media/eventoPrincipal.png" alt="">
            <div class="subtitulo">
                <h2>
                    Todo lo necesario para <span class="palabras-moradas">crear</span> y
                </h2>
                <h2>
                    <span class="palabras-moradas">asistir</span> a nuestros
                    <span class="palabras-moradas">eventos</span>
                </h2>
            </div>
            <h4>
                Conectamos empresas, profesionales y estusiastas de la
                tecnología/informática mediante eventos donde se realizan
                exposiciones, charlas y se presentan proyectos o productos,
                para fomentar el intercambio de conocimientos e ideas.
            </h4>
            <hr>
        </div>
    </div>

    <h3>Próximos eventos</h3>
    <div class="container-eventos">
        <div class="card-evento">
            <img src="" alt="">
            <h5>MWC Barcelona</h5>
            <p>03/03/2025 - 06/03/2025</p>
            <p>Fira Barcelona</p>
            <a href="">TICKETS</a>
        </div>
        <div class="card-evento">
            <img src="" alt="">
            <h5>MWC Barcelona</h5>
            <p>03/03/2025 - 06/03/2025</p>
            <p>Fira Barcelona</p>
            <a href="">TICKETS</a>
        </div>
        <div class="card-evento">
            <img src="" alt="">
            <h5>MWC Barcelona</h5>
            <p>03/03/2025 - 06/03/2025</p>
            <p>Fira Barcelona</p>
            <a href="">TICKETS</a>
        </div>
        <div class="card-evento">
            <img src="" alt="">
            <h5>MWC Barcelona</h5>
            <p>03/03/2025 - 06/03/2025</p>
            <p>Fira Barcelona</p>
            <a href="">TICKETS</a>
        </div>
        <div class="card-evento">
            <img src="" alt="">
            <h5>MWC Barcelona</h5>
            <p>03/03/2025 - 06/03/2025</p>
            <p>Fira Barcelona</p>
            <a href="">TICKETS</a>
        </div>
        <div class="card-evento">
            <img src="" alt="">
            <h5>MWC Barcelona</h5>
            <p>03/03/2025 - 06/03/2025</p>
            <p>Fira Barcelona</p>
            <a href="">TICKETS</a>
        </div>
        <a href="">Ver más</a>
    </div>
    <div class="solicitar-evento">
        <h3>¡Quiero crear un evento!</h3>
        <a href="">SOLICITAR</a>
    </div>
    <div class="container-valores">
        <div class="div-valores">
            <img src="" alt="Icono estrella">
            <h3>Innovación</h3>
            <p>Eventos modernos y adaptados a las últimas tendencias.</p>
        </div>
        <div class="div-valores">
            <img src="" alt="Icono personas">
            <h3>Colaboración</h3>
            <p>Fomentamos el trabajo en equipo y el networking.</p>
        </div><div class="div-valores">
            <img src="" alt="Icono monitor">
            <h3>Conocimientos</h3>
            <p>Compartimos ideas para crecer juntos.</p>
        </div>
    </div>
</main>
<footer class="footer-general">
    <div class="div-logo">
        <img src="" alt="Imagen logo">
        <h2>EIT</h2>
    </div>
    <div class= "barra-vertical"></div>
    <div class="enlaces-footer">
        <ul>
            <a href="">
                <li>Home</li>
            </a>
            <a href="">
                <li>Eventos</li>
            </a>
            <a href="">
                <li>About us</li>
            </a>
            <li>Legal</li>
            <li>Privacity Policity</li>
            <li>Cookies Policity</li>
        </ul>
    </div>
</footer>
</body>
</html>
