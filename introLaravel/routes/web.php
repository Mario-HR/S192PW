<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

# Controlador vistas

# Ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');

#Ruta tipo view
/* Route::view('/', 'inicio')->name('rutaInicio');

Route::view('/form', 'formulario')->name('rutaForm');

Route::view('/clients', 'clientes')->name('rutaClientes'); */

Route::view('/componentes', 'componentes')->name('rutaComponentes');

# Controlador cliente

Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaForm');

Route::get('/cliente/edit/{id}', [clienteController::class, 'edit'])->name('rutaEdit');

Route::post('/cliente', [clienteController::class, 'store'])->name('procesarCliente');

Route::put('/cliente/update/{id}', [clienteController::class, 'update'])->name('actualizarCliente');

Route::delete('/cliente/delete/{id}', [clienteController::class, 'destroy'])->name('eliminarCliente');

Route::get('/clientes', [clienteController::class, 'index'])->name('rutaClientes');