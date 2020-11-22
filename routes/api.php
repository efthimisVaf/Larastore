<?php

use App\Http\Controllers\VatTariffController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('products', [ProductController::class, 'index']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);
Route::get('products/{product}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store']);
Route::put('products/{id}', [ProductController::class, 'update']);

Route::get('vat', [VatTariffController::class, 'index']);
Route::delete('vat/{id}', [VatTariffController::class, 'destroy']);
Route::get('vat/{tariff}', [VatTariffController::class, 'show']);
Route::post('vat', [VatTariffController::class, 'store']);
Route::put('vat/{id}', [VatTariffController::class, 'update']);

