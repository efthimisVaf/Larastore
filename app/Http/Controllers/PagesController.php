<?php

namespace App\Http\Controllers;

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

    public function createCategory(){
        return CategoryController::create();
    }

    public function editCategoryView($id){
        error_log($id);
        return CategoryController::edit($id);
    }

    public function deleteFromUi($id){
        error_log('Some message here.');
        Category::find($id)->delete();
        return redirect()->action([PagesController::class,'categoriesView'])->with('success','Category successfully Deleted');

    }

    public function updateWithUi(Request $request, $id){
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        $this->validate($request, ['category_name' => 'required|unique:categories']);
        $category->save($request->all());
        return redirect()->action([PagesController::class,'categoriesView'])->with('success','Category successfully Updated');
    }

}

