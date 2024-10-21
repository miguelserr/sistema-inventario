<?php

use App\Http\Controllers\OrdenCompraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio
Route::get('/', function () {
    return view('welcome'); // Asegúrate de tener esta vista en resources/views/welcome.blade.php
})->name('home');

// Rutas protegidas con middleware de autenticación
Route::middleware(['auth'])->group(function () {
    // Ruta para el dashboard
    Route::get('/dashboard', function () {
        return view('dashboard'); // Asegúrate de tener esta vista en resources/views/dashboard.blade.php
    })->name('dashboard');

    // Ruta para editar el perfil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    // Rutas para el CRUD de productos
    Route::resource('productos', ProductoController::class);

    // Rutas para el CRUD de proveedores
    Route::resource('proveedores', ProveedorController::class);

    // Rutas para el CRUD de órdenes de compra
    Route::resource('ordenes-compra', OrdenCompraController::class);
});
require __DIR__.'/auth.php';
