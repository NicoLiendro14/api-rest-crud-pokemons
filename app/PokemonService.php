<?php

namespace App;

use Illuminate\Http\Request;
use App\Pokemon;

class PokemonService{

    public function saveData(Request $request){
        $pokemon = new Pokemon;
        $pokemon->name = $request->name;
        $pokemon->save();
    }

    public function showPokemons(){
        $pokemons = Pokemon::orderBy('id', 'DESC')->paginate();
        return view('pokemons.index',['pokemons'=>$pokemons]);
    }

    public function showOnePokemon($id){
        $pokemon = Pokemon::find($id);
        return view('pokemons.show',['pokemon'=>$pokemon]);
    }
    public function deletePokemon($id){
        $pokemon = Pokemon::find($id);
        $pokemon->delete();
    }
    public function editPokemon($id){
        $pokemon = Pokemon::find($id);
        return view('pokemons.edit',['pokemon'=>$pokemon]);
    }
    public function updatePokemon($id){
        $datoPokemon = request()->except(['_token','_method']);
        Pokemon::where('id','=',$id)->update($datoPokemon);
        $pokemon = Pokemon::find($id);
    }
}
