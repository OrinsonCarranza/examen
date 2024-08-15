<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Ruta para Home
Route::get('/', function () {
    return view('home', ['message' => 'Estás en el Inicio']);
})->name('home');

// Ruta para Servicios
Route::get('/servicios', function () {
    return view('layouts.aplicacion.servicios', ['message' => 'Estás en Servicios. Ofrecemos distintos servicios']);
})->name('servicios');

// Ruta para Proyectos
Route::get('/proyectos', function () {
    return view('layouts.aplicacion.proyectos', ['message' => 'Estás en Proyectos. Los mejores Proyectos']);
})->name('proyectos');

// Rutas para Clientes utilizando Resource Controller
Route::resource('clientes', ClienteController::class);

// Ruta para Blog
Route::get('/blog', function () {
    return view('layouts.aplicacion.blog', ['message' => 'Estás en el Blog. Escribe algo']);
})->name('blog');

// Ruta para Contacto
Route::get('/contacto', function () {
    return view('layouts.aplicacion.contacto', ['message' => 'Estás en Contacto']);
})->name('contacto');
