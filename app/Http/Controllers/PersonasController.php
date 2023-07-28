<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaPersonas = Persona::all();
        return view('persona.lista', ["personas" => $listaPersonas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('persona.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //dd($request);
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->edad = $request->edad;

        $persona->save();
        return Redirect::to(route('personas.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        return  view('persona.form', ["persona" => $persona]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
