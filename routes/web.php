<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restrito\CategoriaController;
use App\Http\Controllers\Restrito\ProdutoController;
use App\Http\Controllers\Restrito\ClienteController;
use App\Http\Controllers\Restrito\EstoqueController;
use App\Http\Controllers\Restrito\FornecedorController;
use App\Http\Controllers\Restrito\CompraController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\Publico\HomeController::class, 'index'])->name('publico.home.index');

Route::middleware('auth')->group(function() {
    Route::get('/home', [App\Http\Controllers\Restrito\HomeController::class, 'index'])->name('restrito.home.index');

    Route::resource('categorias', CategoriaController::class);
    Route::resource('produtos', ProdutoController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('estoque', EstoqueController::class);
    Route::resource('fornecedor', FornecedorController::class);
    Route::resource('compra', CompraController::class);
});

