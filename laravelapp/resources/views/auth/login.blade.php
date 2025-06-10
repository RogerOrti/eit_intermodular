@extends('layouts.principal')

@section('titol', 'Login')

@section('contingut')
    
@if (session('error'))
<div class="container mt-3">
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
</div>
@endif

<div class="container rounded bg-primary ">
    <form action="{{ route('login')}}" method="POST">
        @csrf
        <div class="mt-3">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" >
            </div>
            <div class="mb-3">
                <label for="contrasenya" class="form-label">Contrasenya</label>
                <input type="password" class="form-control" id="contrasenya" name="contrasenya">
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