@extends('layout')

@section('content')

<div class="starter-template">
    <h1>
        {{ Auth::check() ? "Welcome, " . Auth::user()->username : "Why don't you Sing Up!" }}
    </h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, cum cumque cupiditate deserunt dolore eius est id impedit laborum libero, maiores mollitia nam numquam odio quo quos recusandae reprehenderit vero.</p>
</div>

@stop