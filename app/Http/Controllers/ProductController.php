<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageControllers\PagesController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::with('VatTariff', 'Category')->get();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        return Product::create($request->all());

    }




    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('VatTariff', 'Category')->whereId($id)->firstOrFail();

        return response($product, 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return $product;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return int
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return 204;
    }





}
