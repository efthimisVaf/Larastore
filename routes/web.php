<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
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

Route::get('/editCategoryView/{id}', [PagesController::class,'editCategoryView']);

Route::get('createCategoryView', [CategoryController::class,'create']);






Route::post('createCategory/save', [CategoryController::class,'storeFromForm']);

Route::patch('/updateCatWithUi/{id}', [PagesController::class,'updateWithUi']);

Route::delete('/deleteCatWithUi/{id}', [PagesController::class,'deleteFromUi']);
