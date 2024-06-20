<!-- resources/views/temas/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Temas</h1>
    <a href="{{ route('temas.create') }}" class="btn btn-primary">Nuevo Tema</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Código de Color</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($temas as $tema)
            <tr>
                <td>{{ $tema->nombre }}</td>
                <td>{{ $tema->codigo_color }}</td>
                <td>
                    <a href="{{ route('temas.edit', $tema->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('temas.destroy', $tema->id) }}" method="POST" class="d-inline">
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
