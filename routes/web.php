<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restrito\CategoriaController;
use App\Http\Controllers\Restrito\ProdutoController;

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
    Route::get('/restrito', [App\Http\Controllers\Restrito\HomeController::class, 'home'])->name('restrito.home');
    Route::resource('categorias', CategoriaController::class);  
});

Route::get('produtos', [ProdutoController::class, 'index']); // listar produtos
Route::get('produtos/create', [ProdutoController::class, 'create']); // criação
Route::post('produtos', [ProdutoController::class, 'store']); // salvar produto 
Route::get('produtos/edit/{produto}', [ProdutoController::class, 'edit']); // edição
Route::put('produtos/{produto}', [ProdutoController::class, 'update']); // salvar edição
Route::delete('produtos/{produto}', [ProdutoController::class, 'delete']); // excluir registro


