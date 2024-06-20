<!-- resources/views/libros/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="fecha_publicacion">Fecha de Publicación</label>
            <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" required>
        </div>
        <div class="form-group">
            <label for="autor_id">Autor</label>
            <select class="form-control" id="autor_id" name="autor_id" required>
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
