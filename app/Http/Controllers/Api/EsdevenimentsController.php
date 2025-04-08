<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EsdevenimentResource;
use App\Models\Esdeveniment;
use Illuminate\Http\Request;

class EsdevenimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $esdeveniments = Esdeveniment::all();

        return EsdevenimentResource::collection($esdeveniments);
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
    public function show(Esdeveniment $esdeveniment)
    {
        $esdeveniment = Esdeveniment::where($esdeveniment);

        return EsdevenimentResource::collection($esdeveniment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Esdeveniment $esdeveniment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Esdeveniment $esdeveniment)
    {
        //
    }
}
