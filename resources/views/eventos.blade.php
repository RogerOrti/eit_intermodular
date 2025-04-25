@extends('layouts.principal')

@section('titol', 'Eventos')

@section('eventos')
    <main class="main-general">
        <div class="container-general centrar-elementos">
            <div class="titulo h1-eventos">
                <h1><span class="palabras-moradas">ASSISTEIX</span> ALS NOSTRES</h1>
                <h1>ESDEVENIMENTS</h1>
            </div>
            <div class="div-info centrar-elementos">
                <h4>
                    Uneix-te a l'experiència i descobreix un espai on
                    la innovació, les idees i el coneixement es troben.
                    Esdeveniments únics que inspiren, connecten i promouen
                    l'aprenentatge col·laboratiu.
                </h4>
                <hr>
            </div>
        </div>
        <div class="div-prox-eventos">
            <h3>Pròxims esdeveniments</h3>
            <div class="container-prox-eventos">
                <div class="container-filtros centrar-elememtos">
                    <div class="titulo-filtros">
                        <img src="{{ asset('media/iconoFiltros.png')}}" alt="Icono filtros">
                        <h5>Filtres</h5>
                    </div>
                    <div class="div-filtros">
                        <div class="categoria-flitro">
                            <h5>Tipologia</h5>
                            <div class="tipo-categoria">
                                <button class="btn-general btn-filtros">Tot</button>
                                <button class="btn-general btn-filtros">Tecnológia</button>
                                <button class="btn-general btn-filtros">Informàtica</button>
                            </div>
                        </div>
                        <div class="categoria-flitro">
                            <h5>Recinte</h5>
                            <div class="tipo-categoria">
                                <button class="btn-general btn-filtros">Tot</button>
                                <button class="btn-general btn-filtros">Fira Monjuic</button>
                                <button class="btn-general btn-filtros">Fira Gran Via</button>
                                <button class="btn-general btn-filtros">Fira Cornellà</button>
                                <button class="btn-general btn-filtros">Fira Hospitalet</button>
                                <button class="btn-general btn-filtros">Fira Sabadell</button>
                            </div>
                        </div>
                        <div class="categoria-flitro">
                            <h5>Tipus</h5>
                            <div class="tipo-categoria">
                                <button class="btn-general btn-filtros">Tot</button>
                                <button class="btn-general btn-filtros">Exposició</button>
                                <button class="btn-general btn-filtros">Xerrada</button>
                                <button class="btn-general btn-filtros">Presentació</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-eventos eventos" id="app">
                    <card-esdeveniment :limit="6"><card-esdeveniment>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
