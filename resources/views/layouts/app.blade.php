<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
    nav a {
        margin: 0 10px;
        text-decoration: none;
        color: blue;
    }

    nav a.active {
        color: red; /* Cambia el color a rojo o el que prefieras */
        font-weight: bold; /* Opcional: hacer el texto en negrita */
    }

    nav a:hover {
        color: darkred; /* Cambia el color en hover si quieres */
    }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ route('servicios') }}" class="{{ Request::is('servicios') ? 'active' : '' }}">Servicios</a>
        <a href="{{ route('proyectos') }}" class="{{ Request::is('proyectos') ? 'active' : '' }}">Proyectos</a>
        <a href="{{ route('clientes.index') }}" class="{{ Request::is('clientes') ? 'active' : '' }}">Clientes</a>
        <a href="{{ route('blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">Blog</a>
        <a href="{{ route('contacto') }}" class="{{ Request::is('contacto') ? 'active' : '' }}">Contacto</a>
    </nav>


    <div>
        @yield('content')
    </div>
</body>
</html>
