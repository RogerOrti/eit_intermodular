@extends('layouts.principal')

@section('titol', 'home')



@section('home')
    <main class="main-general">
        <div class="container-home">
            <div class="titulo">
                <h1>ORGANIZACIÓN DE</h1>
                <h1>EVENTOS TECNOLÓGICOS</h1>
            </div>
            <div class="info-home">
                <!-- Carrusel de imágenes -->
                <img class="img-carrusel" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
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
                <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                <h5>MWC Barcelona</h5>
                <p>03/03/2025 - 06/03/2025</p>
                <p>Fira Barcelona</p>
                <a href="">TICKETS</a>
            </div>
            <div class="card-evento">
                <img class="img-evento "src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                <h5>MWC Barcelona</h5>
                <p>03/03/2025 - 06/03/2025</p>
                <p>Fira Barcelona</p>
                <a href="">TICKETS</a>
            </div>
            <div class="card-evento">
                <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                <h5>MWC Barcelona</h5>
                <p>03/03/2025 - 06/03/2025</p>
                <p>Fira Barcelona</p>
                <a href="">TICKETS</a>
            </div>
            <div class="card-evento">
                <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                <h5>MWC Barcelona</h5>
                <p>03/03/2025 - 06/03/2025</p>
                <p>Fira Barcelona</p>
                <a href="">TICKETS</a>
            </div>
            <div class="card-evento">
                <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                <h5>MWC Barcelona</h5>
                <p>03/03/2025 - 06/03/2025</p>
                <p>Fira Barcelona</p>
                <a href="">TICKETS</a>
            </div>
            <div class="card-evento">
                <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                <h5>MWC Barcelona</h5>
                <p>03/03/2025 - 06/03/2025</p>
                <p>Fira Barcelona</p>
                <a href="">TICKETS</a>
            </div>
        </div>
        <a href="">Ver más</a>
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

@endsection
