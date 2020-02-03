<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PokemonService;
use App\Pokemon;
class PokemonControllerWeb extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokeservice = new PokemonService;
        return $pokeservice->showPokemons();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $pokeservice = new PokemonService;
        $pokeservice->saveData($request);
        return redirect('pokemons')->with('info','Pokemon agregado con exito.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokeservice = new PokemonService;
        return $pokeservice->showOnePokemon($id);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokeservice = new PokemonService;
        return $pokeservice->editPokemon($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pokeservice = new PokemonService;
        $pokeservice->updatePokemon($id);
        return redirect('pokemons')->with('info','Pokemon modificado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pokeservice = new PokemonService;
        $pokeservice->deletePokemon($id);
        return back()->with('info', 'El Pokemon fue eliminado');
    }    
}
