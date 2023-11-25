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
            <p>By {{ $post->author }} &nbsp; #{{$post->type}}</p>
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
            <button disabled type="submit">
                <i class="fa-regular fa-eye"></i>
            </button>
        <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->views}}</p>
    </div>

    @auth
    @if(!$isLiked)
        <div class="right-side-section" id="likeBtn">
            <form method="POST" action="{{ route('posts.like', $post->post_id) }}">
            @csrf
                <button type="submit">
                    <i class="fa-regular fa-thumbs-up"></i>
                </button>
            </form>
            <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->likes}}</p>
        </div>
    @else
        <div class="right-side-section" id='removeLikeBtn'>
            <form method="POST" action="{{ route('post.removeLike', $post->post_id) }}">
            @csrf
                <button  type="submit">
                    <i class="fa-regular fa-thumbs-down"></i>
                </button>
            </form>
            <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->likes}}</p>
        </div>
    @endif
    @endauth

    @guest
     <div class="right-side-section" id='removeLikeBtn'>
            <form method="POST" action="{{ route('post.removeLike', $post->post_id) }}">
            @csrf
                <button  type="submit" disabled>
                    <i class="fa-regular fa-thumbs-up"></i>
                </button>
            </form>
            <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->likes}}</p>
    </div>
    @endguest

</div>

<div>

</div>
@endsection
