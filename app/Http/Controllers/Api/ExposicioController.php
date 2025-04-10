<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExposicioResource;
use App\Models\Exposicio;
use Illuminate\Http\Request;

class ExposicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exposicions = Exposicio::all();

        return ExposicioResource::collection($exposicions);
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
    public function show(Exposicio $exposicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exposicio $exposicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exposicio $exposicio)
    {
        //
    }
}
