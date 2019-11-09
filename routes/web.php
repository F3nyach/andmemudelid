<?php

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

Route::get('/', [\App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\ProductsController::class, 'create']);
Route::post('/create', [\App\Http\Controllers\ProductsController::class, 'store']);
Route::get('/{product}/delete', [\App\Http\Controllers\ProductsController::class, 'destroy']);
Route::get('/{product}/edit', [\App\Http\Controllers\ProductsController::class, 'edit']);
Route::post('/{product}/edit', [\App\Http\Controllers\ProductsController::class, 'update']);