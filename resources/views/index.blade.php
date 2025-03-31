@extends('layouts.principal')

@section('titol', 'Home')

@section('home')
    <main class="main-general">
        <div class="container-general centrar-elementos">
            <div class="titulo">
                <h1>ORGANIZACIÓN DE</h1>
                <h1>EVENTOS TECNOLÓGICOS</h1>
            </div>
            <div class="div-info centrar-elementos">
                <!-- Carrusel de imágenes -->
                <div class="carrusel">
                    <img class="img-carrusel" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                </div>
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
        <div class="div-prox-eventos centrar-elementos">
            <h3>Próximos eventos</h3>
            <div class="container-eventos centrar-elementos">
                <a href="{{ route('evento') }}">
                    <div class="card-evento">
                        <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                        <h5 class="elemento-card">MWC Barcelona</h5>
                        <p class="elemento-card">03/03/2025 - 06/03/2025</p>
                        <div class="elemento-card">
                            <p>Fira Barcelona</p>
                            <a class="btn-general" href="{{ route('tickets') }}">TICKETS</a>
                        </div>
                    </div>
                </a>
                <a href="{{ route('evento') }}">
                    <div class="card-evento">
                        <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                        <h5 class="elemento-card">MWC Barcelona</h5>
                        <p class="elemento-card">03/03/2025 - 06/03/2025</p>
                        <div class="elemento-card">
                            <p>Fira Barcelona</p>
                            <a class="btn-general" href="{{ route('tickets') }}">TICKETS</a>
                        </div>
                    </div>
                </a>
                <a href="{{ route('evento') }}">
                    <div class="card-evento">
                        <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                        <h5 class="elemento-card">MWC Barcelona</h5>
                        <p class="elemento-card">03/03/2025 - 06/03/2025</p>
                        <div class="elemento-card">
                            <p>Fira Barcelona</p>
                            <a class="btn-general" href="{{ route('tickets') }}">TICKETS</a>
                        </div>
                    </div>
                </a>
                <a href="{{ route('evento') }}">
                    <div class="card-evento">
                        <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                        <h5 class="elemento-card">MWC Barcelona</h5>
                        <p class="elemento-card">03/03/2025 - 06/03/2025</p>
                        <div class="elemento-card">
                            <p>Fira Barcelona</p>
                            <a class="btn-general" href="{{ route('tickets') }}">TICKETS</a>
                        </div>
                    </div>
                </a>
                <a href="{{ route('evento') }}">
                    <div class="card-evento">
                        <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                        <h5 class="elemento-card">MWC Barcelona</h5>
                        <p class="elemento-card">03/03/2025 - 06/03/2025</p>
                        <div class="elemento-card">
                            <p>Fira Barcelona</p>
                            <a class="btn-general" href="{{ route('tickets') }}">TICKETS</a>
                        </div>
                    </div>
                </a>
                <a href="{{ route('evento') }}">
                    <div class="card-evento">
                        <img class="img-evento" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                        <h5 class="elemento-card">MWC Barcelona</h5>
                        <p class="elemento-card">03/03/2025 - 06/03/2025</p>
                        <div class="elemento-card">
                            <p>Fira Barcelona</p>
                            <a class="btn-general" href="{{ route('tickets') }}">TICKETS</a>
                        </div>
                    </div>
                </a>
            </div>
            <a class="btn-ver-mas" href="{{ route('eventos') }}">Ver más</a>
        </div>
        <div class="solicitar-evento centrar-elementos">
            <h3>¡Quiero crear un evento!</h3>
            <a class="btn-general" href="{{ route('crearevento') }}">SOLICITAR</a>
        </div>
        <div class="container-valores">
            <div class="div-valores">
                <img class="img-valores" src="{{ asset('media/iconoEstrella.png')}}" alt="Icono estrella">
                <h3>Innovación</h3>
                <p>Eventos modernos y adaptados a las últimas tendencias.</p>
            </div>
            <div class="div-valores">
                <img class="img-valores" src="{{ asset('media/iconoUsuarios.png')}}" alt="Icono personas">
                <h3>Colaboración</h3>
                <p>Fomentamos el trabajo en equipo y el networking.</p>
            </div>
            <div class="div-valores">
                <img class="img-valores" src="{{ asset('media/iconoComputadora.png')}}" alt="Icono monitor">
                <h3>Conocimientos</h3>
                <p>Compartimos ideas para crecer juntos.</p>
            </div>
        </div>
    </main>


@endsection
