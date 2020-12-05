<?php


namespace App\Services;


use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService

{
    public function index()
    {
        return Category::get();
    }

    public function show($id)
    {
        return Category::whereId($id)->firstOrFail();
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
    }

}
