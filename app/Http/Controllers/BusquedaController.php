<?php

namespace App\Http\Controllers;
use App\Models\Biblioteca;
use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $bibliotecas = Biblioteca::where('nombre', 'LIKE', "%{$query}%")->get();
        $libros = Libro::where('nombre', 'LIKE', "%{$query}%")->get();
        $autores = Autor::where('nombre', 'LIKE', "%{$query}%")->get();

        return view('busqueda.index', compact('bibliotecas', 'libros', 'autores'));
    }
}
