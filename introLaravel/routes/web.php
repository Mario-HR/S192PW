<?php

use Illuminate\Support\Facades\Route;

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

#Ruta tipo view
Route::view('/', 'welcome');

Route::view('/form', 'formulario');