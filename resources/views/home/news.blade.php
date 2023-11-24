@extends('layouts.app-master')

@section('content')

<div class="whole-section">
    <div class="left-side-section">
        <div class="news-header-section">
            <h1>{{$post->title}}</h1>
            <p><i class="fa-regular fa-clock"></i>&nbsp;{{$post->created_at}}</p>
        </div>

        <div>
            <img src="{{ url($post->url) }}" alt="">
        </div>
        <div class="reporter-text">
            <p>By {{ $post->author }} </p>
        </div>
        <div class="publisher-text">
            <p>{{ $post->source }}, {{ $post->location }}</p>
        </div>
        <div class="divider">

        </div>

        <div class="paragraph">
            <p class="p1">{{$post->description}}</p>
            <p class="p2">{{$post->content}}</p>
        </div>
    </div>
    <div class="right-side-section">
        <i class="fa-regular fa-thumbs-up"></i>
        <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->likes}}</p>
    </div>
        <div class="right-side-section">
        <i class="fa-regular fa-thumbs-up"></i>
        <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->views}}</p>
    </div>

</div>

<div>

</div>

@endsection
