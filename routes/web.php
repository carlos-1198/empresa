<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', [App\Http\Controllers\ProductoController::class, 'list'])->name('welcome');
Route::get('/listado', [App\Http\Controllers\ProductoController::class, 'listAll'])->name('listado');
Route::get('/listado/filter/{id}', [App\Http\Controllers\ProductoController::class, 'filter'])->name('listado.filter');
Route::resource('marca', MarcaController::class)->middleware('auth');
Route::resource('categoria', CategoriaController::class)->middleware('auth');
Route::resource('producto', ProductoController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\ProductoController::class, 'list'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\ProductoController::class, 'list'])->name('home');


