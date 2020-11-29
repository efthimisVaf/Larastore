<?php

namespace App\Http\Controllers;

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

    public function createProduct(){

    }

}

