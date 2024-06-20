<!-- resources/views/estanterias/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Estantería</h1>
    <form action="{{ route('estanterias.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tema_id">Tema</label>
            <select class="form-control" id="tema_id" name="tema_id" required>
                @foreach($temas as $tema)
                    <option value="{{ $tema->id }}">{{ $tema->nombre }}</option>
                @endforeach
            </select>
        </div>
        <input type="hidden" name="biblioteca_id" value="{{ $biblioteca_id }}">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
