<!-- resources/views/autores/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Autor</h1>
    <form action="{{ route('autores.update', $autor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $autor->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="biografia">Biografía</label>
            <textarea class="form-control" id="biografia" name="biografia" required>{{ $autor->biografia }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
