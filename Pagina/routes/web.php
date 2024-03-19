<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;
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

Route::get('/', function () {
    return view('layouts.admin'); #welcome, asi estaba antes y es la interfaz de laravel
});

Auth::routes();

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/almacen/categoria', [CategoriaController::class, 'index']);
Route::get('/almacen/categoria/create', [CategoriaController::class, 'create']);
Route::post('/almacen/categoria', [CategoriaController::class, 'store']);
Route::get('/almacen/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::patch('/almacen/categoria/{idcategoria}', [CategoriaController::class, 'update'])->name('almacen.categoria.update');
Route::delete('/almacen/categoria/{id}', [CategoriaController::class, 'destroy'])->name('almacen.categoria.destroy');

Route::get('/almacen/articulo', [ArticuloController::class, 'index']);
Route::get('/almacen/articulo/create', [ArticuloController::class, 'create']);
Route::post('/almacen/articulo', [ArticuloController::class, 'store']);
Route::get('/almacen/articulo/{id}/edit', [ArticuloController::class, 'edit'])->name('articulo.edit');
Route::patch('/almacen/articulo/{idarticulo}', [ArticuloController::class, 'update'])->name('almacen.articulo.update');
Route::delete('/almacen/articulo/{id}', [ArticuloController::class, 'destroy'])->name('almacen.articulo.destroy');
