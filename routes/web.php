<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('articulos', 'App\Http\Controllers\ArticuloController');

Route::resource('usuarios', 'App\Http\Controllers\UsuarioController');

Route::resource('emprendimientos', 'App\Http\Controllers\EmprendimientoController');

Route::resource('tipoempresas', 'App\Http\Controllers\TipoempresaController');

Route::resource('localidades', 'App\Http\Controllers\LocalidadController');
