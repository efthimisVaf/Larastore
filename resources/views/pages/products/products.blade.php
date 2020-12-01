@extends('layouts.app')

@section('content')

    <div class="row">
        <table class="table">
            <thead class="thead-dark">
            <th scope="col">id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
            <th scope="col">
                <form action="/createProductView/" method="GET">
                    <button class="btn btn-primary">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-plus" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                            <path fill-rule="evenodd"
                                  d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Add a product
                    </button>
                </form>
            </th>
            </thead>
            @foreach($products as $prod)
                <tr>
                    <th>{{$prod->id}}</th>
                    <th>{{$prod->name}}</th>
                    <th>{{$prod->category->category_name ?? 'No Category'}}</th>
                    <th>{{$prod->price}}</th>
                    <th>
                        <form action="/editProductView/{{$prod->id}}">
                            <button class="btn btn-outline-dark btn-sm">Edit</button>
                        </form>
                    </th>
                    <th>
                        <form action="/deleteProdWithUi/{{$prod->id}}" method="post">@csrf @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
