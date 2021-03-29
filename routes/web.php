<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TemaController;
use \App\Http\Controllers\EventoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {
    Route::get('/home', function () {
        \App\Models\Pagina::contarPagina(request()->path());
        return view('tecno.home');
    });
    Route::get('/tema', [TemaController::class, 'show'])->name('admin.tema.show');
    Route::put('/tema', [TemaController::class, 'update'])->name('admin.tema.update');

    Route::get('/evento', [EventoController::class, 'index'])->name('evento.index');
    Route::get('/evento/{id}', [EventoController::class, 'show'])->name('evento.show');
    Route::get('/evento/create', [EventoController::class, 'create'])->name('evento.create');
    Route::post('/evento', [EventoController::class, 'store'])->name('evento.store');
    Route::get('/evento/edit/{id}', [EventoController::class, 'edit'])->name('evento.edit');
    Route::put('/evento/{id}', [EventoController::class, 'update'])->name('evento.update');
    Route::delete('/evento/{id}', [EventoController::class, 'destroy'])->name('evento.destroy');

    Route::get('/correo', [EventoController::class, 'index'])->name('correo.index');
    Route::get('/correo/{id}', [EventoController::class, 'show'])->name('correo.show');
    Route::get('/correo/create', [EventoController::class, 'create'])->name('correo.create');
    Route::post('/correo', [EventoController::class, 'store'])->name('correo.store');
    Route::get('/correo/edit/{id}', [EventoController::class, 'edit'])->name('correo.edit');
    Route::put('/correo/{id}', [EventoController::class, 'update'])->name('correo.update');
    Route::delete('/correo/{id}', [EventoController::class, 'destroy'])->name('correo.destroy');

    Route::get('/difusion', [EventoController::class, 'index'])->name('difusion.index');
    Route::get('/difusion/{id}', [EventoController::class, 'show'])->name('difusion.show');
    Route::get('/difusion/create', [EventoController::class, 'create'])->name('difusion.create');
    Route::post('/difusion', [EventoController::class, 'store'])->name('difusion.store');
    Route::get('/difusion/edit/{id}', [EventoController::class, 'edit'])->name('difusion.edit');
    Route::put('/difusion/{id}', [EventoController::class, 'update'])->name('difusion.update');
    Route::delete('/difusion/{id}', [EventoController::class, 'destroy'])->name('difusion.destroy');

    Route::get('/difusion/correo/create', [EventoController::class, 'create'])->name('difusion.create');
    Route::post('/difusion/{id_difusion}/correo', [EventoController::class, 'store'])->name('difusion.store');
    Route::delete('/difusion/{id_difusion}/correo/{id}', [EventoController::class, 'destroy'])->name('difusion.destroy');

    Route::get('/administrador', [EventoController::class, 'index'])->name('administrador.index');
    Route::get('/administrador/{id}', [EventoController::class, 'show'])->name('administrador.show');
    Route::get('/administrador/create', [EventoController::class, 'create'])->name('administrador.create');
    Route::post('/administrador', [EventoController::class, 'store'])->name('administrador.store');
    Route::get('/administrador/edit/{id}', [EventoController::class, 'edit'])->name('administrador.edit');
    Route::put('/administrador/{id}', [EventoController::class, 'update'])->name('administrador.update');
    Route::delete('/administrador/{id}', [EventoController::class, 'destroy'])->name('administrador.destroy');
});
