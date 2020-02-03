@extends('pokemons.layout')

@section('content')

    <div class="col-md-8">
        <h2> Listado de pokemons 
            <a href="{{ route('pokemons.create') }}" class="btn btn-primary float-right"> Nuevo </a>
        </h2>
        @include('pokemons.fragments.info')
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">ID</th>
                    <th>Nombre</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pokemons as $pokemon)
                    <tr>
                        <td>{{ $pokemon->id }}</td>
                        <td>{{ $pokemon->name }}</td>
                        <td>
                            <a href="{{ route('pokemons.show', $pokemon->id) }}" class="btn btn-link">Ver</a>
                        </td>
                        <td>
                            <a href="{{ route('pokemons.edit', $pokemon->id) }}" class="btn btn-link">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-link">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $pokemons->render() !!}
    </div>
    <div class="col-md-4">
        @include('pokemons.fragments.aside')
    </div>


@endsection