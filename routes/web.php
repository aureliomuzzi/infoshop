<?php

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

Route::get('/', [App\Http\Controllers\Publico\HomeController::class, 'index'])->name('publico.home.index');


Auth::routes();

Route::middleware('auth')->namespace('Restrito')->group(function() {
    Route::get('/restrito', 'IndexController@index')->name('restrito.index.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
