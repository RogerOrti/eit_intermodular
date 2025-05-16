@extends('layouts.principal')

@section('titol', 'Evento')

@section('evento')

<div id="app">
    <esdeveniment :esdeveniment-id='@json($esdeveniment)'></esdeveniment>
    <exposicio :esdeveniment-id='@json($esdeveniment)'></exposicio>
    <crearexpo :esdeveniment-id='@json($esdeveniment)'></crearexpo>
</div>

@endsection
