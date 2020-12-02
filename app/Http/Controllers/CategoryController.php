<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageControllers\PagesController;
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
     * Implements the previous function on the frond end.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeFromForm(Request $request)
    {
        $this->validate($request, ['category_name' => 'required|unique:categories']);

        $this->store($request);

        return redirect()->action([PagesController::class, 'categoriesView'])->with('success', 'Category successfully Created');
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
        $category = Category::find($id);

        if ($category->category_name == $request->category_name) {
            $this->validate($request, ['category_name' => 'required']);
        } else {
            $this->validate($request, ['category_name' => 'required|unique:categories']);
        }

        $category->update($request->all());
    }

    /**
     * Implements the previous function on the frond end.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateWithUi(Request $request, $id)
    {
        $this->update($request, $id);
        return redirect()->action([PagesController::class, 'categoriesView'])->with('success', 'Category successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        error_log('Hello');
        Category::find($id)->delete();
    }


    /**
     * Implements the previous function on the frond end.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteFromUi($id)
    {
        $this->destroy($id);
        return redirect()->action([PagesController::class, 'categoriesView'])->with('success', 'Category successfully Deleted');
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
        return view('pages.categories.addCategory', compact('category', 'categories'));
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
