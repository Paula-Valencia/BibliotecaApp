<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibiliotecaController extends Controller
{
    public function index()
    {
        $bibliotecas = Biblioteca::all();
        return view('bibliotecas.index', compact('bibliotecas'));
    }

    public function create()
    {
        return view('bibliotecas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:5|max:30',
            'ubicacion' => 'required|string|min:20|max:125',
            'descripcion' => 'nullable|string|max:500',
        ]);
    
        $data = $request->only(['nombre', 'ubicacion', 'descripcion']);
        $data = array_map('trim', $data);
        $data['user_id'] = auth()->id();
    
        Biblioteca::create($data);
    
        return redirect()->route('bibliotecas.index');
}
}