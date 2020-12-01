@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Create a Product</h1>
        </div>
        <div class="col-12">

            <form action="/createProduct/save" method="post">
                @csrf


                <div class="form-group">
                    <label>{{'name'}}</label>
                    <input name={{'name'}} type="text" class="form-control" id="exampleInputPassword1"
                           placeholder="{{'name'}}">
                </div>

                <div class="form-group">
                    <label>{{'description'}}</label>
                    <input name={{'description'}} type="text" class="form-control" id="exampleInputPassword1"
                           placeholder="{{'description'}}">
                </div>

                <div class="form-group">
                    <label>{{'price'}}</label>
                    <input name="{{'price'}}" type="number" step="0.01" class="form-control" id="exampleInputPassword1"
                           placeholder="{{'price'}}">
                </div>


                <div class="form-group">
                    <label>{{'Vat Tariff'}}</label>
                    <select name="vat_tariff_id" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        @foreach(\App\Models\VatTariff::all() as $tariff)
                            <option value="{{$tariff->id}}">{{$tariff->tariff}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>{{'Category'}}</label>
                    <select name="category_id" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                    @foreach(\App\Models\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>



                <a href="/products/list" class="btn btn-outline-primary">Go Back</a>
                <button type="submit" class="btn btn-primary">Create Product</button>
            </form>
        </div>
    </div>
@endsection
