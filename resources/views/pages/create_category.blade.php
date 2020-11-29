@extends('layouts.app')

@section('content')



    <div class="row">
        <div class="col-12">
            <h1>Create a Category</h1>
        </div>
        <div class="col-12">
            @csrf
            <form action="/api/category" method="post" target="hiddenFrame">
                @foreach($category->getFillable() as $fillable)
                <div class="form-group">
                    <label for="exampleInputPassword1">{{$fillable}}</label>
                    <input name={{$fillable}} type="text" class="form-control" id="exampleInputPassword1" placeholder="{{$fillable}}">
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Save Category</button>
            </form>
        </div>
    </div>
@endsection

