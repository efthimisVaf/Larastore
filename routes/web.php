<?php

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\PageControllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class,'welcome']);
Route::get('/documentation', [PagesController::class,'documentation']);
Route::get('/categories/list', [PagesController::class,'categoriesView']);


Route::get('createCategoryView', [CategoryController::class,'create']);
Route::get('/editCategoryView/{id}', [PagesController::class,'editCategoryView']);
Route::patch('/updateCatWithUi/{id}', [CategoryController::class,'updateWithUi']);
Route::post('createCategory/save', [CategoryController::class,'storeFromForm']);
Route::delete('/deleteCatWithUi/{id}', [CategoryController::class,'deleteFromUi']);

Route::get('/products/list', [PagesController::class,'productsView']);
Route::get('createProductView', [ProductController::class,'create']);
Route::post('createProduct/save', [ProductController::class,'storeFromForm']);
Route::delete('/deleteProdWithUi/{id}', [ProductController::class,'deleteFromUi']);
Route::get('/editProductView/{id}', [ProductController::class,'edit']);
Route::patch('/updateProdWithUi/{id}', [ProductController::class,'updateWithUi']);








