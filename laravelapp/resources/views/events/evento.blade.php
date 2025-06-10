@extends('layouts.principal')

@section('titol', 'Evento')

@section('contingut')

<div id="app">
    <esdeveniment :esdeveniment-id='@json($esdeveniment)'></esdeveniment>
    <exposicio :esdeveniment-id='@json($esdeveniment)'></exposicio>
    <crearexpo :esdeveniment-id='@json($esdeveniment)'></crearexpo>
</div>

@endsection
