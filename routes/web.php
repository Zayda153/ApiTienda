<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductoController;
use App\http\Controllers\VentaController;
use App\http\Controllers\ProveedoreController;
use App\http\Controllers\SalidaController;
use App\http\Controllers\EntradaController;
use App\http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('productos', ProductoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('proveedores', ProveedoreController::class);
Route::resource('entradas', EntradaController::class);
Route::resource('salidas', SalidaController::class);
Route::resource('users', UserController::class);