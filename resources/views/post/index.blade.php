@extends('layouts.app')

@section('content')

    <div class="list-group">

        @foreach($post as $item)
            <div class="list-group-item">
                <a style="text-align: center"
                   href="{{route('post.detail',['post'=>$item->id])}}">{{$item->title}} </a>
                <span style="float: right">{{$item->created_at}}</span>
            </div>
        @endforeach
    </div>



@endsection
