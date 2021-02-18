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
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'description' => 'required|max:250',
            'price' => 'required|',
            'vat_tariff_id' => 'required|exists:vat_tariffs,id'
        ]);

        $product = Product::find($id);
        return $product->update($validatedData);
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
    }

}
