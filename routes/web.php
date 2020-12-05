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
Route::get('createCategoryView', [PagesController::class,'createCategory']);
Route::get('/editCategoryView/{id}', [PagesController::class,'updateCategoryView']);
Route::patch('/updateCatWithUi/{id}', [PagesController::class,'updateCategory']);
Route::post('createCategory/save', [PagesController::class,'storeCategory']);
Route::delete('/deleteCatWithUi/{id}', [PagesController::class,'deleteCategory']);

Route::get('/products/list', [PagesController::class,'productsView']);
Route::get('createProductView', [PagesController::class,'createProduct']);
Route::post('createProduct/save', [PagesController::class,'storeProduct']);
Route::delete('/deleteProdWithUi/{id}', [PagesController::class,'deleteProduct']);
Route::get('/editProductView/{id}', [PagesController::class,'updateProductView']);
Route::patch('/updateProdWithUi/{id}', [PagesController::class,'updateProduct']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
