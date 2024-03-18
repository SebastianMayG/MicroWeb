<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
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


Route::get('/almacen/articulo', function () {
    return 'hello world';
});