@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Create a Category</h1>
        </div>
        <div class="col-12">

            <form action="/createCategory/save" method="post">
                @csrf
                @foreach($category->getFillable() as $fillable)
                    <div class="form-group">
                        <label>{{$fillable}}</label>
                        <input name={{$fillable}} type="text" class="form-control" id="exampleInputPassword1"
                               placeholder="{{$fillable}}">
                    </div>
                @endforeach
                <a href="/categories/list" class="btn btn-outline-primary">Go Back</a>
                <button type="submit" class="btn btn-primary">Create Category</button>
            </form>
        </div>
    </div>
@endsection
