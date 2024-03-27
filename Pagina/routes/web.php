<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\AsesoriasController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\TipsyCursosController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\MiPerfilController;
use App\Http\Controllers\MiEmpresaController;

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

Route::get('/principal', function () {
    return view('layouts.admin'); 
});



#Route::get('/home', [App\Http\Controller\HomeController::class, 'index'])->name('home');

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

Route::get('/ventas/cliente', [ClienteController::class, 'index']);
Route::get('/ventas/cliente/create', [ClienteController::class, 'create']);
Route::post('/ventas/cliente', [ClienteController::class, 'store']);
Route::get('/ventas/cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::patch('/ventas/cliente/{idpersona}', [ClienteController::class, 'update'])->name('ventas.cliente.update');
Route::delete('/ventas/cliente/{id}', [ClienteController::class, 'destroy'])->name('ventas.cliente.destroy');

Route::get('/compras/proveedor', [ProveedorController::class, 'index']);
Route::get('/compras/proveedor/create', [ProveedorController::class, 'create']);
Route::post('/compras/proveedor', [ProveedorController::class, 'store']);
Route::get('/compras/proveedor/{id}/edit', [ProveedorController::class, 'edit'])->name('proveedor.edit');
Route::patch('/compras/proveedor/{idpersona}', [ProveedorController::class, 'update'])->name('compras.proveedor.update');
Route::delete('/compras/proveedor/{id}', [ProveedorController::class, 'destroy'])->name('compras.proveedor.destroy');

Route::get('/compras/ingreso', [IngresoController::class, 'index']);
Route::get('/compras/ingreso/create', [IngresoController::class, 'create']);
Route::post('/compras/ingreso', [IngresoController::class, 'store']);
Route::get('/compras/ingreso/{id}/edit', [IngresoController::class, 'edit'])->name('ingreso.edit');
Route::patch('/compras/ingreso/{idpersona}', [IngresoController::class, 'update'])->name('compras.ingreso.update');
Route::delete('/compras/ingreso/{id}', [IngresoController::class, 'destroy'])->name('compras.ingreso.destroy');

Route::get('/ingreso/{id}', [IngresoController::class, 'show'])->name('ingreso.show');

Route::get('/ventas/venta', [VentaController::class, 'index']);
Route::get('/ventas/venta/create', [VentaController::class, 'create']);
Route::post('/ventas/venta', [VentaController::class, 'store']);
Route::get('/ventas/ingreso/{id}/edit', [VentaController::class, 'edit'])->name('ingreso.edit');
Route::patch('/ventas/venta/{id}', [VentaController::class, 'update'])->name('ventas.venta.update');
Route::delete('/ventas/venta/{id}', [VentaController::class, 'destroy'])->name('ventas.venta.destroy');


Route::get('/ventas/{id}', [VentaController::class, 'show'])->name('Venta.show');


Route::get('/organizador/calendario', [EventoController::class, 'index']);
Route::post('/organizador/calendario/add', [EventoController::class, 'store']);
Route::get('/organizador/calendario/show', [EventoController::class, 'show']);
Route::post('/organizador/calendario/{id}/edit', [EventoController::class, 'edit']);
Route::post('/organizador/calendario/delete/{id}', [EventoController::class, 'destroy']);
Route::post('/organizador/calendario/update/{evento}', [EventoController::class, 'update']);

Route::get('/Asesorias', [AsesoriasController::class, 'index']);









Route::get('/Tips_Cursos/Cursos', [TipsyCursosController::class, 'index']);
Route::get('/Calculadora/calculadora', [CalculadoraController::class, 'index']);
Route::get('/MiPerfil/Perfil', [MiPerfilController::class, 'index']);
Route::get('/MiPerfil/Empresa', [MiEmpresaController::class, 'index']);