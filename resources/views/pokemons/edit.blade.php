@extends('pokemons.layout')

@section('content')
<div class="">
    <h1 class="page-header text-center my-5">Editar pokemon</h1>
        <form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH">
    <label for="name">{{'name'}}</label>
    <input type="text" name="name" id="name" value="{{ $pokemon->name }}">

    <input type="submit" value="Editar" class="btn btn-primary">
    <a href="{{ url('/pokemons')}}" class="btn btn-danger">Cancelar</a>

</form>
@endsection