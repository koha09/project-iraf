@extends('layouts.app-full')
<?php
    $post = \App\Post::all()->where("id","=",$post_id)->first();
    $type = \App\Type::all(array("id","name"))->where("id","=",$post->type_id)->first()["name"];
    $category = \App\Category::all(array("id","name"))->where("id","=",$post->category_id)->first()["name"];
?>
@section('title')
    {{ $post->name}}
@endsection

@section('content')
    <h5 class="text-center">{{$post->author}}</h5>
    <h2 class="text-center text-uppercase">{{$post->name}}</h2>
    <h4 class="category text-center">{{$type}}</h4>
    <pre class="text-center">{{$post->content}}</pre>
@endsection

