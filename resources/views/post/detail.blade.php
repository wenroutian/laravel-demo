@extends('layouts.app')

@section('content')

    <?php
    /**
     * @var $post \App\Post
     */
    ?>
    <h1>
        {{$post->title}}
    </h1>
    <span>创建于: {{$post->created_at}}</span>
    <div style="padding-top: 20px">
        {{$post->content}}
    </div>


@endsection

