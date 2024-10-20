<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\OrdenCompraController;

Route::middleware(['auth'])->group(function () {
    Route::resource('productos', ProductoController::class);
    Route::resource('proveedores', ProveedorController::class);
    Route::resource('ordenes-compra', OrdenCompraController::class);
});

Route::get('/', function () {
    return view('welcome');
});