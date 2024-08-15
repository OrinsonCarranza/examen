@extends('layouts.app')

@section('title', 'Lista de Clientes')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
@section('content')
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}">Agregar Cliente</a>
    <ul>
        @foreach($clientes as $cliente)
            <li>{{ $cliente->nombres }} - {{ $cliente->email }} - 
                <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a> - 
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
</body>
</html>
