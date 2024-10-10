<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

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

# Ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');

Route::get('/form', [ControladorVistas::class, 'formulario'])->name('rutaForm');

Route::get('/clients', [ControladorVistas::class, 'consulta'])->name('rutaClientes');

#Ruta tipo view
/* Route::view('/', 'inicio')->name('rutaInicio');

Route::view('/form', 'formulario')->name('rutaForm');

Route::view('/clients', 'clientes')->name('rutaClientes'); */

Route::view('/componentes', 'componentes')->name('rutaComponentes');