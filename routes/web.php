<?php
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\EstanteriaController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CopiaLibroController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('bibliotecas', BibliotecaController::class);
    Route::resource('temas', TemaController::class);
    Route::resource('estanterias', EstanteriaController::class);
    Route::resource('autores', AutorController::class);
    Route::resource('libros', LibroController::class);
    Route::resource('copias', CopiaLibroController::class);
});

// Para la búsqueda
Route::get('buscar', [BusquedaController::class, 'buscar'])->name('buscar');
