<?php

use App\Http\Controllers\Auth\API\AuthController;
use App\Http\Controllers\VatTariffController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store'])->middleware('auth:api');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->middleware('auth:api');
Route::put('products/{id}', [ProductController::class, 'update'])->middleware('auth:api');

Route::get('vat', [VatTariffController::class, 'index']);
Route::get('vat/{id}', [VatTariffController::class, 'show']);

Route::get('category', [CategoryController::class, 'index']);
Route::get('category/{id}', [CategoryController::class, 'show']);
Route::post('category', [CategoryController::class, 'store'])->middleware('auth:api');
Route::delete('category/{id}', [CategoryController::class, 'destroy'])->middleware('auth:api');
Route::put('category/{id}', [CategoryController::class, 'update'])->middleware('auth:api');
