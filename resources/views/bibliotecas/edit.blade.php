<!-- resources/views/bibliotecas/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Biblioteca</h1>
    <form action="{{ route('bibliotecas.update', $biblioteca->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $biblioteca->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="ubicacion">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $biblioteca->ubicacion }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion">{{ $biblioteca->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
