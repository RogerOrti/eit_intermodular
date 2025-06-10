<?php

use App\Http\Controllers\EsdevenimentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarisController;


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
    return view('index'); // Para la vista eventos.blade.php
})->name('home');

Route::get('/eventos', function () {
    return view('events.eventos'); // Para la vista eventos.blade.php
})->name('eventos');

Route::get('/about-us', function () {
    return view('aboutUs'); // Para la vista about.blade.php
})->name('about');

Route::get('/register', [UsuarisController::class,'showRegister'])->name('showRegister');

Route::get('/login', [UsuarisController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [UsuarisController::class, 'login'])->name('login');

Route::get('/logout', [UsuarisController::class,'logout'])->name('logout');

Route::get('/tickets', function () {
    return view('tickets'); // Para la vista tickets.blade.php
})->name('tickets');

Route::get('/evento/{id_esdeveniment}', function ($id_esdeveniment) {
    $esdeveniment = $id_esdeveniment;
    return view('events.evento', compact('esdeveniment')); // Para la vista evento.blade.php
})->name('evento');


Route::get('/crearevento', function () {
    return view('events.crearEvent'); 
})->name('crearEvent');

Route::get('/perfil', function() {
    return view('perfil.perfil');
})->name('perfil');