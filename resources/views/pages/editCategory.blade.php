
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <h1>Update a Category</h1>
    </div>
    <div class="col-12">

        <form action="/updateCatWithUi/{{$category->id}}" method="post">
            @csrf
            @method('PATCH')

                <div class="form-group">
                    <label>category name</label>
                    <input name="category_name" type="text" class="form-control" id="exampleInputPassword1"
                           placeholder="{{$category->category_name}}">
                </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
</div>
@endsection
