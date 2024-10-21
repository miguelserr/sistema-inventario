<?php

use App\Http\Controllers\OrdenCompraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController; // Asegúrate de importar el controlador
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route; // Cambia esta línea

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::resource('productos', ProductoController::class);
    Route::resource('proveedores', ProveedorController::class);
    Route::resource('ordenes-compra', OrdenCompraController::class);
});
