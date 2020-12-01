<?php

namespace App\Http\Controllers\PageControllers;

use App\Models\Category;
use Illuminate\Http\Request;

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

    public function editCategoryView($id){
        error_log($id);
        return CategoryController::edit($id);
    }

}

