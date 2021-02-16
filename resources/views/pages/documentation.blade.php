@extends('layouts.app')

@section('content')


    <div class="endpoint">
        <h2>Create a user [POST]<p class="link">/api/register</p></h2>
        <p class="sample-request">&#8226; sample request (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
       "name": "John",
       "email": "johndoe@gmail.com",
       "password": "mypassword",
       "password_confirmation": "mypassword"
      }
        </code></pre>
        {{--//@formatter:on--}}
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
       "user": {
       "name": "John",
       "email": "JohnDoe@gmail.com",
       "updated_at": "2021-02-13T10:22:58.000000Z",
       "created_at": "2021-02-13T10:22:58.000000Z",
       "id": 7
       },
       "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianR
     {
         </code></pre>
        {{--//@formatter:on--}}
    </div>

    <div class="endpoint">
        <h2>Log-in [POST]<p class="link">/api/login</p></h2>
        <p class="sample-request">&#8226; sample request (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
       "email": "johndoe@gmail.com",
       "password": "mypassword",
      }
        </code></pre>
        {{--//@formatter:on--}}
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
       "user": {
       "name": "John",
       "email": "JohnDoe@gmail.com",
       "updated_at": "2021-02-13T10:22:58.000000Z",
       "created_at": "2021-02-13T10:22:58.000000Z",
       "id": 7
       },
       "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianR
     {
         </code></pre>
        {{--//@formatter:on--}}
    </div>

    <div class="endpoint">
        <h2>Get all products [GET]<p class="link">/api/products</p></h2>
        {{--//@formatter:on--}}
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     [
        {
            "id": 3,
            "name": "cupiditate",
            "description": "Vero eum aperiam et voluptas praesentium nostrum in.",
            "price": 179.68
        },
        {
            "id": 4,
            "name": "voluptas",
            "description": "Ea laudantium incidunt voluptatem iure ad.",
            "price": 151.54
        }
     ]
         </code></pre>
        {{--//@formatter:on--}}
    </div>

    <div class="endpoint">
        <h2>Get a product [GET]<p class="link">/api/product/{id}</p></h2>
        {{--//@formatter:on--}}
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
        "id": 3,
        "name": "cupiditate",
        "description": "Vero eum aperiam et voluptas praesentium nostrum in.",
        "price": 179.68
     }
         </code></pre>
        {{--//@formatter:on--}}
    </div>

    <div class="endpoint">
        <h2>Create a new product [POST]<p class="link">/api/products</p></h2>
        <p class="sample-request">&#8226; sample request (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
        "name": "bananas",
        "price": 5.6,
        "vat_tariff_id": 2,
        "description": "These are some bananas",
        "category_id": 3
     }
        </code></pre>
        {{--//@formatter:on--}}
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
    {
        "name": "bananas",
        "price": 5.6,
        "description": "These are some bananas",
        "id": 51
    }
         </code></pre>
        {{--//@formatter:on--}}
    </div>
@endsection
