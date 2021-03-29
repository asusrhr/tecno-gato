<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TemaController;
use \App\Http\Controllers\EventoController;
use \App\Http\Controllers\CorreoController;
use \App\Http\Controllers\DifusionController;
use \App\Http\Controllers\DifusionCorreoController;
use \App\Http\Controllers\AdministradorController;

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
    Route::get('/evento/create', [EventoController::class, 'create'])->name('evento.create');
    Route::get('/evento/{id}', [EventoController::class, 'show'])->name('evento.show');
    Route::post('/evento', [EventoController::class, 'store'])->name('evento.store');
    Route::get('/evento/edit/{id}', [EventoController::class, 'edit'])->name('evento.edit');
    Route::put('/evento/{id}', [EventoController::class, 'update'])->name('evento.update');
    Route::get('/evento/delete/{id}', [EventoController::class, 'destroy'])->name('evento.destroy');

    Route::get('/correo', [CorreoController::class, 'index'])->name('correo.index');
    Route::get('/correo/create', [CorreoController::class, 'create'])->name('correo.create');
    Route::get('/correo/{id}', [CorreoController::class, 'show'])->name('correo.show');
    Route::post('/correo', [CorreoController::class, 'store'])->name('correo.store');
    Route::get('/correo/edit/{id}', [CorreoController::class, 'edit'])->name('correo.edit');
    Route::put('/correo/{id}', [CorreoController::class, 'update'])->name('correo.update');
    Route::delete('/correo/{id}', [CorreoController::class, 'destroy'])->name('correo.destroy');

    Route::get('/difusion', [DifusionController::class, 'index'])->name('difusion.index');
    Route::get('/difusion/create', [DifusionController::class, 'create'])->name('difusion.create');
    Route::get('/difusion/{id}', [DifusionController::class, 'show'])->name('difusion.show');
    Route::post('/difusion', [DifusionController::class, 'store'])->name('difusion.store');
    Route::get('/difusion/edit/{id}', [DifusionController::class, 'edit'])->name('difusion.edit');
    Route::put('/difusion/{id}', [DifusionController::class, 'update'])->name('difusion.update');
    Route::get('/difusion/delete/{id}', [DifusionController::class, 'destroy'])->name('difusion.destroy');

    Route::get('/difusion/correo/create', [DifusionCorreoController::class, 'create'])->name('difusion.correo.create');
    Route::post('/difusion/{id_difusion}/correo', [DifusionCorreoController::class, 'store'])->name('difusion.correo.store');
    Route::delete('/difusion/{id_difusion}/correo/{id}', [DifusionCorreoController::class, 'destroy'])->name('difusion.correo.destroy');

    Route::get('/administrador', [AdministradorController::class, 'index'])->name('administrador.index');
    Route::get('/administrador/{id}', [AdministradorController::class, 'show'])->name('administrador.show');
    Route::get('/administrador/create', [AdministradorController::class, 'create'])->name('administrador.create');
    Route::post('/administrador', [AdministradorController::class, 'store'])->name('administrador.store');
    Route::get('/administrador/edit/{id}', [AdministradorController::class, 'edit'])->name('administrador.edit');
    Route::put('/administrador/{id}', [AdministradorController::class, 'update'])->name('administrador.update');
    Route::delete('/administrador/{id}', [AdministradorController::class, 'destroy'])->name('administrador.destroy');
});
