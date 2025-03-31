@extends('layouts.principal')

@section('titol', 'Eventos')

@section('eventos')
    <main class="main-general">
        <div class="container-general centrar-elementos">
            <div class="titulo ">
                <h1><span class="palabras-moradas">ASISTE</span> A NUESTROS EVENTOS</h1>
            </div>
            <div class="div-info centrar-elementos">
                <h4>
                    Únete a la experiencia y descubre un espacio donde la
                    innovación, las ideas y el conocimiento se encuentran.
                    Eventos únicos que inspiran, conectan y promueven el
                    aprendizaje colaborativo.
                </h4>
                <hr>
            </div>
        </div>
        <div class="div-prox-eventos">
            <h3>Próximos eventos</h3>
            <div class="container-filtros">
                <div class="titulo-filtros">
                    <img src="{{ asset('media/iconoFiltros.png')}}" alt="Icono filtros">
                    <h5>Filtros</h5>
                </div>
                <div class="div-filtros">
                    <div class="tipo-flitro">
                        <h5>Tipología</h5>
                        <div>
                            <a class="btn-general" href="">Todo</a>
                            <a class="btn-general" href="">Tecnológia</a>
                            <a class="btn-general" href="">Informática</a>
                        </div>
                    </div>
                    <div class="tipo-flitro">
                        <h5>Recinto</h5>
                        <div>
                            <a class="btn-general" href="">Todo</a>
                            <a class="btn-general" href="">Fira Monjuic</a>
                            <a class="btn-general" href="">Fira Gran Via</a>
                            <a class="btn-general" href="">Fira Cornellà</a>
                            <a class="btn-general" href="">Fira Hospitalet</a>
                            <a class="btn-general" href="">Fira Sabadell</a>
                        </div>
                    </div>
                    <div class="tipo-flitro">
                        <h5>Tipo</h5>
                        <div>
                            <a class="btn-general" href="">Todo</a>
                            <a class="btn-general" href="">Exposición</a>
                            <a class="btn-general" href="">Charla</a>
                            <a class="btn-general" href="">Presentación</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container-eventos">

            </div>
        </div>
    </main>
@endsection
