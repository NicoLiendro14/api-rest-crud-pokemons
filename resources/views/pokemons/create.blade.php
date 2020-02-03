@extends('pokemons.layout')

@section('content')
<div class="">

    <h1 class="page-header text-center my-5">Crear pokemon</h1>
    <form action="{{ url('/pokemons')}}" method="post">
    {{ csrf_field() }}
        <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="">

            <input type="submit" value="Agregar" class="btn btn-primary">
            <a href="{{ url('/pokemons')}}" class="btn btn-danger">Cancelar</a>

    </form>
</div>
@endsection