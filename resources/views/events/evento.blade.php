@extends('layouts.principal')

@section('titol', 'Evento')

@section('evento')

<div id="app">

    <h1>{{$esdeveniment}}</h1>
    @if (Auth::user())
        <crearexpo :esdeveniment-id='@json($esdeveniment)'></crearexpo>
    @endif

    <esdeveniment :esdeveniment-id='@json($esdeveniment)'></esdeveniment>
    <exposicio></exposicio>

</div>

@endsection
