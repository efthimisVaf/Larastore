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
        $validatedData = $request->validate([
            'category_name' => 'required|max:55'
        ]);
        $category = Category::find($id);
        return $category->update($validatedData);
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
    }

}
