<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('busqueda', function () {
    $dato = \request()->get('dato');
    $items = \App\Models\Busqueda::where('titulo', 'LIKE', '%'.$dato.'%')->get();
    $labels = [];
    foreach ($items as $item) {
        array_push($labels, $item->titulo);
    }
    return $labels;
});
