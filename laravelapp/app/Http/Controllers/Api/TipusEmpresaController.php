<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TipusEmpresaResource;
use App\Models\TipusEmpresa;
use Illuminate\Http\Request;

class TipusEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrada = TipusEmpresa::all();

        return TipusEmpresaResource::collection($entrada);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TipusEmpresa $tipusEmpresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipusEmpresa $tipusEmpresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipusEmpresa $tipusEmpresa)
    {
        //
    }
}
