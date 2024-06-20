<!-- resources/views/libros/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Libros</h1>
    <a href="{{ route('libros.create') }}" class="btn btn-primary">Nuevo Libro</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha de Publicación</th>
                <th>Autor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
            <tr>
                <td>{{ $libro->nombre }}</td>
                <td>{{ $libro->fecha_publicacion }}</td>
                <td>{{ $libro->autor->nombre }}</td>
                <td>
                    <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="d-inline">
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
