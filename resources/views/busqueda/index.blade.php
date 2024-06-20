<!-- resources/views/busqueda/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Resultados de búsqueda</h1>

    <h2>Bibliotecas</h2>
    <ul>
        @foreach($bibliotecas as $biblioteca)
            <li>{{ $biblioteca->nombre }}</li>
        @endforeach
    </ul>

    <h2>Libros</h2>
    <ul>
        @foreach($libros as $libro)
            <li>{{ $libro->nombre }}</li>
        @endforeach
    </ul>

    <h2>Autores</h2>
    <ul>
        @foreach($autores as $autor)
            <li>{{ $autor->nombre }}</li>
        @endforeach
    </ul>
</div>
@endsection
