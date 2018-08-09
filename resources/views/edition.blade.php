@extends('layouts.app')
<?php
$part = \App\Part::all()->where("id", "=", $part_id)->first();
$edition = $part->edition();
$raw_type = \Illuminate\Support\Facades\DB::raw("SELECT name FROM types WHERE id = ?");
$raw_post = \Illuminate\Support\Facades\DB::raw("SELECT id,name,author,type_id,created_at FROM posts WHERE part_id = ? and category_id = ?");
$raw_categories = \Illuminate\Support\Facades\DB::raw("SELECT id,name FROM categories WHERE id in (SELECT category_id FROM `posts` WHERE `part_id`=?)");
$categories = \Illuminate\Support\Facades\DB::select($raw_categories, array($part_id));
?>
@section('title')
    {{$edition->year}}-{{$part->text}}
@endsection

@section('content')
    <h3 class="text-center">{{config('app.name')}} {{$edition->year}}-{{$part->text}}</h3>
    @if(!empty($categories))
        @foreach($categories as $category)
            <div class="text-center">{{$category->name}}</div>

            <div class="list-group">
                <?php
                $posts = \Illuminate\Support\Facades\DB::select($raw_post, array($part_id, $category->id));
                ?>
                @foreach($posts as $post)
                    <?php $type = \Illuminate\Support\Facades\DB::select($raw_type, array($post->type_id))[0]->name;?>
                    <a href="{{url("/edition/post").'/'.$post->id }}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$post->name}}</h5>
                            <small><?php
                                $date = new DateTime($post->created_at);
                                echo $date->format('d.m.y');
                                ?></small>
                        </div>
                        <p class="mb-1">{{$type}}</p>
                        <small>{{$post->author}}</small>
                    </a>
                @endforeach
            </div>
        @endforeach
    @else
        <p class="text-center">Контента нету</p>
    @endif

@endsection

