<?php

use App\Http\Controllers\Api\AssistentController;
use App\Http\Controllers\Api\EmpresaController;
use App\Http\Controllers\Api\EntradaController;
use App\Http\Controllers\Api\TipusEmpresaController;
use App\Http\Controllers\Api\UsuariController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('usuari', UsuariController::class);
Route::apiResource('empresa', EmpresaController::class);
Route::apiResource('assistent', AssistentController::class);
Route::apiResource('entrada', EntradaController::class);
Route::apiResource('tipusEmpresa', TipusEmpresaController::class);