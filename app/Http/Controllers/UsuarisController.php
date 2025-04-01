<?php

namespace App\Http\Controllers;

use App\Models\Usuaris;
use Illuminate\Http\Request;

class UsuarisController extends Controller
{

    public function showRegister(){

        return view('auth.register');
    }

    public function showLogin(){

        return view('auth.login');
    }

    public function login(Request $request){

        $nomUsuari = $request->input('correu');
        $contrasenya = $request->input('contrasenya');

        $usuari = Usuaris::where('nom',$nomUsuari)->first();

        if($usuari != null && Hash::check($contrasenya, $usuari->contrasenya)){
            Auth::login($usuari);
            $request->session()->flash('usuari', $usuari);
            $response = redirect('/');
        }
        else{
            $request->session()->flash('error','Usuari o contrasenya incorrectes');
            $response = redirect('/');
        }

        return $response;
    }

    public function logout(){

        

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Usuaris $usuaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuaris $usuaris)
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
