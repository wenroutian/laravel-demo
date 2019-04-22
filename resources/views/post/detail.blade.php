<?php
/**
 * @var $post \App\Post
 */
$content = $post->content;
?>
@extends('layouts.app')

@section('content')

    <h1>
        {{$post->title}}
    </h1>
    <span>创建于: {{$post->created_at}}</span>
    <div style="padding-top: 20px">
        @markdown
        {!! $post->content !!}
        @endmarkdown

        {{--{!! $post->content !!}--}}
    </div>


@endsection

