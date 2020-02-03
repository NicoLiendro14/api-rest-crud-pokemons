@extends('pokemons.layout')

@section('content')

    <div class="col-sm-8">
        <h2>Pokemon</h2>
        <hr>
        <h3 class="">{{ $pokemon->name }} </h3>
        <p>
            Este Pokemon se llama: {{ $pokemon->name }} y su id es: {{ $pokemon->id }}
        </p>
        
    </div>
    


@endsection