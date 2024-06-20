<!-- resources/views/bibliotecas/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bibliotecas</h1>
    <a href="{{ route('bibliotecas.create') }}" class="btn btn-primary">Nueva Biblioteca</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bibliotecas as $biblioteca)
            <tr>
                <td>{{ $biblioteca->nombre }}</td>
                <td>{{ $biblioteca->ubicacion }}</td>
                <td>{{ $biblioteca->descripcion }}</td>
                <td>
                    <a href="{{ route('bibliotecas.edit', $biblioteca->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('bibliotecas.destroy', $biblioteca->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection