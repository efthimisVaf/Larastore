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

    public function createCategory(){
        return CategoryController::create();
    }

    public function editCategory($id){
        error_log($id);
        return CategoryController::edit($id);
    }

    public function deleteFromUi($id){
        error_log('Some message here.');
        Category::find($id)->delete();
        return redirect()->action([PagesController::class,'createCategory'])->with('success','Category successfully Deleted');

    }

    public function updateWithUi(Request $request, $id){
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        error_log($request->category_name);

        $category->save($request->all());
        return redirect()->action([PagesController::class,'createCategory'])->with('success','Category successfully Updated');
    }

}

