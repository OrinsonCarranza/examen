<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('layouts.aplicacion.index', compact('clientes'));
    }
    
    public function create()
    {
        return view('layouts.aplicacion.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombres' => 'required',
            'email' => 'required|email|unique:clientes',
            'direccion' => 'required',
            'fono' => 'required',
        ]);
    
        Cliente::create($validatedData);
    
        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente');
    }
    
    public function edit(Cliente $cliente)
    {
        return view('layouts.aplicacion.edit', compact('cliente'));
    }
    
    public function update(Request $request, Cliente $cliente)
    {
        $validatedData = $request->validate([
            'nombres' => 'required',
            'email' => 'required|email|unique:clientes,email,'.$cliente->id,
            'direccion' => 'required',
            'fono' => 'required',
        ]);
    
        $cliente->update($validatedData);
    
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente');
    }
    
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
    
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente');
    }
    
}
