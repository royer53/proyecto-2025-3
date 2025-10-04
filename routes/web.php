<?php


use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Models\Royer2; 

// Ruta raíz que guarda un nuevo registro
Route::get('/', function () {
    $nuevo = new Royer2();
    $nuevo->nombre = 'José';
    $nuevo->save();

    return $nuevo;
});

// Ruta bienvenidos (retorna vista)
Route::get('/bienvenidos', function (): View {
    return view('bienvenidos');
})->name('bienvenidos');

// Ruta saludos (texto)
Route::get('/saludos', function (): string {
    return 'Hola amiguitos!';
})->name('saluditos');

// Ruta contacto (retorna vista)
Route::get('/contacto', function (): View {
    return view('contacto');
})->name('contacto');

// Ruta acerca (texto)
Route::get('/acerca', function (): string {
    return 'Acerca de nosotros';
})->name('acerca');

