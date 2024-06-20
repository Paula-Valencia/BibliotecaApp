<!-- resources/views/bibliotecas/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $biblioteca->nombre }}</h1>
    <a href="{{ route('estanterias.create', $biblioteca->id) }}" class="btn btn-primary">Nueva Estantería</a>
    <h2>Estanterías</h2>
    <div class="row">
        @foreach($biblioteca->estanterias->sortByDesc(function ($estanteria) {
            return $estanteria->libros->count();
        }) as $estanteria)
            <div class="col-md-4" style="background-color: {{ $estanteria->tema->codigo_color }};">
                <h3>{{ $estanteria->codigo }}</h3>
                <p>{{ $estanteria->tema->nombre }}</p>
                <p>{{ $estanteria->libros->count() }} libros</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
