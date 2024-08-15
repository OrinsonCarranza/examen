<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('home', ['message' => 'Estás en el Inicio']);
})->name('home');

Route::get('/servicios', function () {
    return view('layouts.aplicacion.servicios', ['message' => 'Estás en Servicios. Ofrecemos distintos servicios']);
})->name('servicios');

Route::get('/proyectos', function () {
    return view('layouts.aplicacion.proyectos', ['message' => 'Estás en Proyectos. Los mejores Proyectos']);
})->name('proyectos');

//Controlador para todas las opciones de cliente
Route::resource('clientes', ClienteController::class);

Route::get('/blog', function () {
    return view('layouts.aplicacion.blog', ['message' => 'Estás en el Blog. Escribe algo']);
})->name('blog');

Route::get('/contacto', function () {
    return view('layouts.aplicacion.contacto', ['message' => 'Estás en Contacto']);
})->name('contacto');
