<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TipoVentaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| USUARIO
|--------------------------------------------------------------------------
|
| Rutas para el recurso Usuario
*/
Route::controller(UsuarioController::class)->group(function () {
    Route::get("/usuarios", [UsuarioController::class, "index"])->name("usuarios.index");
});

/*
|--------------------------------------------------------------------------
| CLIENTES
|--------------------------------------------------------------------------
|
| Rutas para el recurso Clientes
*/
Route::controller(ClienteController::class)->group(function () {
    Route::get("/clientes", [ClienteController::class, "index"])->name("clientes.index");
});

/*
|--------------------------------------------------------------------------
| VENTAS
|--------------------------------------------------------------------------
|
| Rutas para el recurso Ventas
*/
Route::controller(VentaController::class)->group(function () {
    Route::get("/ventas", [VentaController::class, "index"])->name("ventas.index");
});

/*
|--------------------------------------------------------------------------
| TIPO VENTAS
|--------------------------------------------------------------------------
|
| Rutas para el recurso TipoVenta
*/
Route::controller(TipoVentaController::class)->group(function () {
    Route::get("/tipo-ventas", [TipoVentaController::class, "index"])->name("tipo-ventas.index");
    Route::post("/tipo-ventas", [TipoVentaController::class, "create"])->name("tipo-ventas.create");
});

