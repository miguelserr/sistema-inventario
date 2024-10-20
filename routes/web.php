<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\OrdenCompraController;

// Rutas de autenticación de Laravel Breeze
require __DIR__.'/auth.php';

// Rutas para Productos (CRUD)
Route::resource('productos', ProductoController::class)->middleware('auth');

// Rutas para Proveedores (CRUD)
Route::resource('proveedores', ProveedorController::class)->middleware('auth');

// Rutas para Órdenes de Compra (CRUD)
Route::resource('ordenes-de-compra', OrdenCompraController::class)->middleware('auth');
