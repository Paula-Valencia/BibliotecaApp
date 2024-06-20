<!-- resources/views/copias/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Copia de Libro</h1>
    <form action="{{ route('copias.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="libro_id">Libro</label>
            <select class="form-control" id="libro_id" name="libro_id" required>
                @foreach($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="numero_copia">Número de Copia</label>
            <input type="text" class="form-control" id="numero_copia" name="numero_copia" required>
        </div>
        <div class="form-group">
            <label for="estanteria_id">Estantería</label>
            <select class="form-control" id="estanteria_id" name="estanteria_id" required>
                @foreach($estanterias as $estanteria)
                    <option value="{{ $estanteria->id }}">{{ $estanteria->codigo }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
