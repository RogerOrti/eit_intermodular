<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index'); // Para la vista index.blade.php
})->name('home');

Route::get('/eventos', function () {
    return view('eventos'); // Para la vista eventos.blade.php
})->name('eventos');

Route::get('/about-us', function () {
    return view('aboutUs'); // Para la vista about.blade.php
})->name('about');

Route::get('/login', function () {
    return view('login'); // Para la vista login.blade.php
})->name('login');

Route::get('/tickets', function () {
    return view('tickets'); // Para la vista tickets.blade.php
})->name('tickets');

Route::get('/evento', function () {
    return view('evento'); // Para la vista evento.blade.php
})->name('evento');

Route::get('/crearevento', function () {
    return view('crearevento'); // Para la vista crearEvento.blade.php
})->name('crearevento');

