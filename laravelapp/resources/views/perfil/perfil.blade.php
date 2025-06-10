@extends('layouts.principal')


@section("titol", "Perfil d'usuari")


@section("home")
    
    <div id="app" class="container">
        <perfil :usuari=' @json(Auth::user()) '></perfil>
    </div>


@endsection