<?php


namespace App\Services;



use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{

    public function index()
    {
        return Product::get();
    }

    public function show($id)
    {
        return Product::whereId($id)->firstOrFail();
    }

    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
    }

}
