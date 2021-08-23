<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restrito\CategoriaController;

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
