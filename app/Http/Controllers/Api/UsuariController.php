<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UsuariResource;
use App\Models\Usuaris;
use Illuminate\Http\Request;

class UsuariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuari = Usuaris::all();

        return UsuariResource::collection($usuari);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $usuari = new Usuaris();

            $usuari->

            $usuari->save();

        } catch (\Throwable $th) {
            
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Usuaris $usuaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuaris $usuaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuaris $usuaris)
    {
        //
    }
}
