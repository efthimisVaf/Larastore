<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\VatTariff;
use Illuminate\Http\Request;

class VatTariffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VatTariff::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return VatTariff::findorfail($id);
    }

}
