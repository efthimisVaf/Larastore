@extends('layouts.app')

@section('content')


    <div class="endpoint">
        <h2>Create a user [POST]</h2>
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
        <h2>Log-in [POST]</h2>
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
@endsection
