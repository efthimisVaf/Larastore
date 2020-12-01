<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::get();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required|unique:categories'

        ]);
        return Category::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::whereId($id)->firstOrFail();

        return response($category, 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }












    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create()
    {
        $category = new Category();
        $categories = Category::get();
        error_log('Hello');
        return view('pages.categories.addCategory', compact('category', 'categories'));
    }

    public function storeFromForm(Request $request)
    {
        $this->validate($request, ['category_name' => 'required|unique:categories']);

        Category::create($request->all());
        return redirect()->action([PagesController::class,'categoriesView'])->with('success','Category successfully Created');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public static function edit($id)
    {
        $category = Category::whereId($id)->firstOrfail();
        error_log(implode(' ', $category->getFillable()));
        error_log($category->category_name);
        return view('pages.categories.editCategory')->with('category', $category);
    }



}
