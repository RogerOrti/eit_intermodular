@extends('layouts.principal')

@section('titol', 'About Us')

@section('aboutUs')
<main class="main-general">
    <div class="container-general centrar-elementos">
        <div class="titulo h1-eventos">
            <h1>¿QUI <span class="palabras-moradas">SOM</span>?</h1>
        </div>
        <section class="section-aboutus">
            <div class="div-info">
                <img id="img-logo-aboutUs" src="{{ asset('media/logo.png')}}" alt="Imagen sobre nosotros">
            </div>
            <div class="div-aboutus">
                <h3 class="palabras-moradas">EIT</h3>
                <p>
                    A <strong>EIT (Esdeveniments Informàtics Tecnològics)</strong> som apassionats per la 
                    tecnologia i la innovació. La nostra missió és ser el pont que connecta a empreses, 
                    professionals i entusiastes del món tecnològic i informàtic, creant espais dinàmics on 
                    les idees i el coneixement flueixen lliurement.
                </p>
                <p>
                    Organitzem esdeveniments únics que combinen exposicions, xerrades inspiradores i 
                    presentacions projectes o productes d'avantguarda. El nostre objectiu és fomentar 
                    l'intercanvi de experiències, impulsar la creativitat i promoure la col·laboració entre 
                    els diferents actors de la comunitat tecnològica.
                </p>
                <p>
                    A EIT creiem que el futur es construeix treballant junts, compartint coneixements 
                    i creant connexions valuoses. Uneix-te a nosaltres i sé part d'aquesta xarxa que 
                    transforma el panorama tecnològic.
                </p>
            </div>
        </section>
        <div class="titulo h1-eventos">
            <h2>EL NOSTRE <span class="palabras-moradas">EQUIP</span></h2>
        </div>
        <section class="container-miembros">
            <div class="card-miembro">
                <div>
                    <img class="img-miembro" src="{{ asset('media/desi.png')}}" alt="Desirée Romero">
                </div>
                <div class="info-miembro">
                    <h4>DESIRÉE ROMERO</h4>
                    <p>Desarrolladora de aplicaciones web</p>
                </div>
            </div>
            <div class="card-miembro">
                <div>
                    <img class="img-valores" src="{{ asset('media/roger.png')}}" alt="Roger Ortí">
                </div>
                <div class="info-miembro">
                    <h4>ROGER ORTÍ</h4>
                    <p>Desarrollador de aplicaciones web</p>
                </div>
            </div>
        </section>
    </div>
</main>        
@endsection