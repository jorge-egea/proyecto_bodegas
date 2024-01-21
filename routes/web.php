<?php

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\VinoController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [BodegaController::class, 'index'])->name('index');
Route::get('bodega', [BodegaController::class, 'index'])->name('bodega.index');
Route::get('bodega/create', [BodegaController::class, 'create'])->name('bodega.create');
Route::delete('bodega/{id}', [BodegaController::class, 'destroy'])->name('bodega.destroy');
Route::get('bodega/{id}', [BodegaController::class, 'show'])->name('bodega.show');
Route::post('bodega', [BodegaController::class, 'store'])->name('bodega.store');
Route::get('bodega/{id}/edit', [BodegaController::class, 'edit'])->name('bodega.edit');
Route::put('bodega/{id}', [BodegaController::class, 'update'])->name('bodega.update');

Route::get('/vinos/{id}/create', [VinoController::class, 'create'])->name('vinos.create');
Route::put('/vinos/{id}', [VinoController::class, 'update'])->name('vinos.update');
Route::post('/vinos', [VinoController::class, 'store'])->name('vinos.store');
Route::get('/vinos/{id}', [VinoController::class, 'show'])->name('vinos.show');
Route::get('/vinos/{id}/edit', [VinoController::class, 'edit'])->name('vinos.edit');
Route::delete('/vinos/{bodegaId}/{id}', [VinoController::class, 'destroy'])->name('vinos.destroy');

