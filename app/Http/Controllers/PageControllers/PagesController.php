<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;


class PagesController extends Controller
{
    public function welcome(){
        $welcome = 'Welcome to Laravel SuperMarket';
        return view('pages.welcome',compact('welcome'));
    }

    public function documentation(){
        return view('pages.documentation');
    }

    public static function categoriesView()
    {
        $category = new Category();
        $categories = Category::get();
        return view('pages.categories.categories', compact('category', 'categories'));
    }

    public static function productsView()
    {
        $product = new Product();
        $products = Product::get();
        error_log('hello');
        return view('pages.products.products', compact('product', 'products'));
    }

    public function editCategoryView($id){
        error_log($id);
        return CategoryController::edit($id);
    }

}

