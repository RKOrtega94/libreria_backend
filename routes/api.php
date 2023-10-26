<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\OrdenTrabajoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ProductoController;
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

/*
|--------------------------------------------------------------------------
| PAÍSES
|--------------------------------------------------------------------------
|
| Rutas para el recurso País
*/
Route::controller(PaisController::class)->group(function () {
    Route::get("/paises", [PaisController::class, "index"])->name("paises.index");
    Route::post("/paises", [PaisController::class, "create"])->name("paises.create");
    Route::put("/paises/{id}", [PaisController::class, "update"])->name("paises.update");
    Route::delete("/paises/{id}", [PaisController::class, "delete"])->name("paises.delete");
});

/*
|--------------------------------------------------------------------------
| ORDENES DE TRABAJO
|--------------------------------------------------------------------------
|
| Rutas para el recurso OrdenTrabajo
*/
Route::controller(OrdenTrabajoController::class)->group(function () {
    Route::get("/ordenes-trabajo", [OrdenTrabajoController::class, "index"])->name("ordenes-trabajo.index");
});

/*
|--------------------------------------------------------------------------
| PRODUCTO
|--------------------------------------------------------------------------
|
| Rutas para el recurso Producto
*/
Route::controller(ProductoController::class)->group(function () {
    Route::get("/productos", [ProductoController::class, "index"])->name("productos.index");
});

/*
|--------------------------------------------------------------------------
| INSTITUCION
|--------------------------------------------------------------------------
|
| Rutas para el recurso Institucion
*/
Route::controller(InstitucionController::class)->group(function () {
    Route::get("/instituciones", [InstitucionController::class, "index"])->name("instituciones.index");
});
