<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/cliente', [HomeController::class, 'cliente'])->name('cliente.index');
Route::get('/administrador', [HomeController::class, 'administrador'])->name('administrador.index');
Route::post('/administrador/investimento/criar', [HomeController::class, 'create'])->name('administrador.create');
Route::put('/administrador/investimento/update/{id}', [HomeController::class, 'update'])->name('administrador.update');
Route::get('/administrador/investimento/edit/{id}', [HomeController::class, 'edit'])->name('administrador.edit');
Route::get('/administrador/investimento/deletar/{id}', [HomeController::class, 'delete'])->name('administrador.delete');
Route::delete('/administrador/investimento/destroy/{id}', [HomeController::class, 'destroy'])->name('administrador.destroy');