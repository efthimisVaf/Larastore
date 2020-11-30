@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Create a Category</h1>
        </div>
        <div class="col-12">

            <form action="/create_category/save" method="post">
                @csrf
                @foreach($category->getFillable() as $fillable)
                    <div class="form-group">
                        <label>{{$fillable}}</label>
                        <input name={{$fillable}} type="text" class="form-control" id="exampleInputPassword1"
                               placeholder="{{$fillable}}">
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Save Category</button>
            </form>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead class="thead-dark">
            <th scope="col">id</th>
            <th scope="col">Category Name</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </thead>
            @foreach($categories as $cat)
                <tr>
                    <th>{{$cat->id}}</th>
                    <th>{{$cat->category_name}}</th>
                    <th><form action="/editCategory/{{$cat->id}}"><button class="btn btn-outline-dark btn-sm">Edit</button></form></th>
                    <th><form action="/deleteCatWithUi/{{$cat->id}}" method="post">@csrf @method('DELETE')<button type="submit" class="btn btn-outline-danger btn-sm">Delete</button></form></th>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

