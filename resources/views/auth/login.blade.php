@extends('layouts.principal')

@section('titol', 'Login')

@section('home')
    
<div class="container rounded bg-primary ">
    <form action="{{ route('login')}}">
        <div class="mt-3">
            <div class="mb-3">
                <label for="email" class="form-label">Correu electrónic</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="mb-3">
                <label for="contrasenya" class="form-label">Contrasenya</label>
                <input type="text" class="form-control" id="contrasenya" name="contrasenya">
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary ">Iniciar sessió</button>
            </div>
            <div class="mb-3">
                <span>No tens compte?<a href="{{ route('showRegister')}}">Registra't!</a></span>
            </div>
        </div>
    </form>
</div>
@endsection