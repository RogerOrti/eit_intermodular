<?php

namespace App\Http\Controllers\Api;

use App\Models\Assistent;
use App\Models\Empresa;
use App\Models\Usuaris;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\UsuariResource;

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

            DB::beginTransaction();

            $usuari = new Usuaris();

            $usuari->nom = $request->input("nom");
            $usuari->correu_electronic = $request->input("correu");
            $usuari->contrasenya = $request->input("contrasenya");
            $usuari->telefon = $request->input("telefon");
            $usuari->tipus_usuari = $request->input("tipusUsuari");
            $usuari->id_rol_usuaris = $request->input("tipusUsuari");

            $usuari->save();


            if ($usuari->id_rol_usuaris == 2) {
            
                $empresa = new Empresa();

                $empresa->nif = $request->input("nif");
                $empresa->direccio = $request->input("direccio");
                $empresa->codi_postal = $request->input("codiPostal");
                $empresa->id_tipus_empreses = $request->input("tipusEmpresa");
                $empresa->id_usuaris = $usuari->id_usuaris;

                $prova_usuari = $usuari->id_usuaris;


                $empresa->save();

            }
            elseif ($usuari->id_rol_usuaris == 3) {
                
                $assistent = new Assistent();

                $assistent->dni = $request->input("dni");
                $assistent->cognom = $request->input("cognom");
                $assistent->id_usuaris = $usuari->id_usuaris;

                $assistent->save();
            }

            DB::commit();

        } catch (QueryException $e) {
            DB::rollBack();
            
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
