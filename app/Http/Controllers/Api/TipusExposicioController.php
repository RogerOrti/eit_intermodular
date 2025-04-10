<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TipusEmpresaResource;
use App\Models\TipusExposicio;
use Illuminate\Http\Request;

class TipusExposicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipusExposicio = TipusExposicio::all();

        return TipusEmpresaResource::collection($tipusExposicio);
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
    public function show(TipusExposicio $tipusExposicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipusExposicio $tipusExposicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipusExposicio $tipusExposicio)
    {
        //
    }
}
