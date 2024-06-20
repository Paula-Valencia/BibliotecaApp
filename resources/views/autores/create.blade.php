<!-- resources/views/autores/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Autor</h1>
    <form action="{{ route('autores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="biografia">Biografía</label>
            <textarea class="form-control" id="biografia" name="biografia" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
