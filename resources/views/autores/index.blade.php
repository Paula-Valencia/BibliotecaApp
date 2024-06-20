<!-- resources/views/autores/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Autores</h1>
    <a href="{{ route('autores.create') }}" class="btn btn-primary">Nuevo Autor</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Biografía</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($autores as $autor)
            <tr>
                <td>{{ $autor->nombre }}</td>
                <td>{{ $autor->biografia }}</td>
                <td>
                    <a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('autores.destroy', $autor->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
