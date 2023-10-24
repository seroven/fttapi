<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::controller(ProductController::class)->group(function () {
    Route::get('/products',  'get')->name('products.get');
    Route::get('/products/{id}',  'getById')->name('products.getById');
    Route::post('/products',  'create')->name('products.create');
    Route::put('/products/{id}',  'update')->name('products.update');
    Route::put('/products/delete/{id}',  'delete')->name('products.delete');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories',  'get')->name('categories.get');
    Route::get('/categories/{id}',  'getById')->name('categories.getById');
    Route::post('/categories',  'create')->name('categories.create');
    Route::put('/categories/{id}',  'update')->name('categories.update');
    Route::put('/categories/delete/{id}',  'delete')->name('categories.delete');
});
