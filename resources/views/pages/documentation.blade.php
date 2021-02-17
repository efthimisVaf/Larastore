@extends('layouts.app')

@section('content')


    <div>
        <h1 class="documentation-header">Authentication</h1>
    </div>
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

    <div>
        <h1 class="documentation-header">Product</h1>
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

    <div class="endpoint">
        <h2>Delete a product [DELETE]<p class="link">/api/products/{id}</p></h2>
        <p class="sample-response">&#8226; response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
    1
         </code></pre>
        {{--//@formatter:on--}}
    </div>

    <div class="endpoint">
        <h2>Update or create a new product [PUT]<p class="link">/api/products/{id}</p></h2>
        <p class="sample-request">UNDER DEVELOPMENT</p>
    </div>

    <div>
        <h1 class="documentation-header">Category</h1>
    </div>
    <div class="endpoint">
        <h2>Get all categories [GET]<p class="link">/api/category</p></h2>
        {{--//@formatter:on--}}
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     [
        {
            "id": 1,
            "category_name": "fruits"
        },
        {
            "id": 2,
            "category_name": "vegetables"
        },
        {
            "id": 3,
            "category_name": "dairy"
        },
        {
            "id": 4,
            "category_name": "bakery"
        },
        {
            "id": 5,
            "category_name": "beverages"
        }
     ]
         </code></pre>
        {{--//@formatter:on--}}
    </div>


    <div class="endpoint">
        <h2>Get a category [GET]<p class="link">/api/category/{id}</p></h2>
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
        "id": 1,
        "category_name": "fruits"
     }
         </code></pre>
        {{--//@formatter:on--}}
    </div>

    <div class="endpoint">
        <h2>Create a category [POST]<p class="link">/api/category</p></h2>
        <p class="sample-request">&#8226; sample request (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
        "category_name": "dairy"
     }
         </code></pre>
        {{--//@formatter:on--}}
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
        "category_name": "dairy"
        "id": "9"
     }
         </code></pre>
        {{--//@formatter:on--}}
    </div>

    <div class="endpoint">
        <h2>Delete a category [DELETE]<p class="link">/api/category/{id}</p></h2>
        <p class="sample-response">&#8226; response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
    1
         </code></pre>
        {{--//@formatter:on--}}
    </div>

    <div class="endpoint">
        <h2>Update or create a new category [PUT]<p class="link">/api/category/{id}</p></h2>
        <p class="sample-request">UNDER DEVELOPMENT</p>
    </div>

    <div>
        <h1 class="documentation-header">Vat Tariff</h1>
    </div>
    <div class="endpoint">
        <h2>Get all Vat Tariffs [GET]<p class="link">/api/vat</p></h2>
        {{--//@formatter:on--}}
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     [
        {
            "id": 1,
            "tariff": "LOW",
        },
        {
            "id": 2,
            "name": "HIGH",
        }
     ]
         </code></pre>
        {{--//@formatter:on--}}
    </div>

    <div class="endpoint">
        <h2>Get a single Vat Tariff [GET]<p class="link">/api/vat/{id}</p></h2>
        {{--//@formatter:on--}}
        <p class="sample-response">&#8226; sample response (application/json)</p>
        {{--//@formatter:off--}}
        <pre><code>
     {
            "id": 1,
            "tariff": "LOW",
     }
        </code></pre>
        {{--//@formatter:on--}}
    </div>

@endsection
