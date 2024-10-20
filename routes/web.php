<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\OrdenCompraController;

// Agrupamos las rutas que requieren autenticación con el middleware 'auth'
Route::group(['middleware' => ['auth']], function () {
    Route::resource('productos', ProductoController::class);
    Route::resource('proveedores', ProveedorController::class);
    Route::resource('ordenes-de-compra', OrdenCompraController::class);
});

