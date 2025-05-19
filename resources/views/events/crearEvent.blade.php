@extends('layouts.principal')

@section('titol', 'Crear Esdeveniment' )

@section('contingut')
    
    <div id="app" class="container bg-primary">
        <formevent :usuari='@json(Auth::user())'></formevent>
    </div>


@endsection