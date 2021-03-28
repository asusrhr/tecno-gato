<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TemaController;
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

});
