<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return response()->json(Animal::all());
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',
            'raza' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string',
            'disponible' => 'boolean',
        ]);

        $animal = Animal::create($request->all());
        return response()->json($animal, 201);
    }
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return response()->json($animal);
    }
    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());
        return response()->json($animal);
    }
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return response()->json(['message' => 'Animal eliminado correctamente'], 204);
    }
}
