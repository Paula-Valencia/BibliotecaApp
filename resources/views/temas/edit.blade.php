<!-- resources/views/temas/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tema</h1>
    <form action="{{ route('temas.update', $tema->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $tema->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="codigo_color">Código de Color</label>
            <input type="text" class="form-control" id="codigo_color" name="codigo_color" value="{{ $tema->codigo_color }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
