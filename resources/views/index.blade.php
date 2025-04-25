@extends('layouts.principal')

@section('titol', 'Home')

@section('home')
    <main class="main-general">
        <div class="container-general centrar-elementos">
            <div class="titulo">
                <h1>ORGANITZACIÓ D'ESDEVENIMENTS</h1>
                <h1>TECNOLÒGICS I INFORMÀTICS</h1>
            </div>
            <div class="div-info centrar-elementos">
                <!-- Carrusel de imágenes -->
                <div class="carrusel">
                    <img class="img-carrusel" src="{{ asset('media/eventoPrincipal.png')}}" alt="">
                </div>
                <div class="subtitulo">
                    <h2>
                        Tot el necessari per a <span class="palabras-moradas">crear</span> i
                    </h2>
                    <h2>
                        <span class="palabras-moradas">asistir</span> als nostres <span class="palabras-moradas">esdeveniments</span>
                    </h2>
                </div>
                <h4>
                    Connectem empreses, professionals i entusiastes de la tecnologia/informàtica
                    mitjançant esdeveniments on es realitzen exposicions, xerrades i es presenten
                    projectes o productes, per a fomentar l'intercanvi de coneixements i idees.
                </h4>
                <hr>
            </div>
        </div>
        <div class="div-prox-eventos centrar-elementos" id="app">
            <h3>Pròxims esdeveniments</h3>
            <div class="container-eventos centrar-elementos" id="app">
                <card-esdeveniment :limit="6"><card-esdeveniment>
            </div>
            <a class="btn-ver-mas" href="{{ route('eventos') }}">Veure més</a>
        </div>
        <div class="solicitar-evento centrar-elementos">
            <h3>Vull crear un esdeveniment!</h3>
            <a class="btn-general" href="{{ route('crearevento') }}">SOL·LICITAR</a>
        </div>
        <div class="container-valores">
            <div class="div-valores">
                <img class="img-valores" src="{{ asset('media/iconoEstrella.png')}}" alt="Icono estrella">
                <h3>Innovació</h3>
                <p>Esdeveniments moderns i adaptats a les últimes tendències.</p>
            </div>
            <div class="div-valores">
                <img class="img-valores" src="{{ asset('media/iconoUsuarios.png')}}" alt="Icono personas">
                <h3>Col·laboració</h3>
                <p>Fomentem el treball en equip i el networking.</p>
            </div>
            <div class="div-valores">
                <img class="img-valores" src="{{ asset('media/iconoComputadora.png')}}" alt="Icono monitor">
                <h3>Coneixements</h3>
                <p>Compartim idees per a créixer junts.</p>
            </div>
        </div>
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
