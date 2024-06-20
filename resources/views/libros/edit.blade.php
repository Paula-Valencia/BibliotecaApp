<!-- resources/views/libros/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Libro</h1>
    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $libro->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_publicacion">Fecha de Publicación</label>
            <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" value="{{ $libro->fecha_publicacion }}" required>
        </div>
        <div class="form-group">
            <label for="autor_id">Autor</label>
            <select class="form-control" id="autor_id" name="autor_id" required>
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}" {{ $libro->autor_id == $autor->id ? 'selected' : '' }}>{{ $autor->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
