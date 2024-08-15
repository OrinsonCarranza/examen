<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" value="{{ $cliente->nombres }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $cliente->email }}" required>
        <br>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" value="{{ $cliente->direccion }}" required>
        <br>
        <label for="fono">Fono:</label>
        <input type="text" name="fono" value="{{ $cliente->fono }}" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
