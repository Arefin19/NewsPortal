@extends('layouts.app-master')

@section('content')
<div class="container category-container">
    <div class="article-container-catagory">
        @for($i = 0; $i < $posts->count(); $i++)
            <div class="article-catagory">
                <div class="article-item-catagory">
                    <img src="{{ url($posts[$i]->url) }}" alt="">
                    <p><a href="{{route('post.show', ['id' => $posts[$i]->post_id])}}">{{$posts[$i]->title}}</a></p>
                    <p class="small-text2">BY {{$posts[$i]->author}} | {{$posts[$i]->created_at}}</p>
                </div>
            </div>
            @endfor
    </div>

    <div class="article-catagory-beside">
        <h3>What else on WebTribune</h1>
            <div class="side-top-nav">
                <a href="">Trending</a>
                <a href="">Latest</a>
                <a href="">Popular</a>
            </div>

            <div class="side-content">
                @for($i = 0; $i < 5 ; $i++) <div class="content">
                    <img src="{{ url($allpost[$i]->url) }}" alt="">
                    <div class="content-details">
                        <a href="#">Shanzhai Lyric’s Poetry of the Streets</a>
                        <p class="small-text2">BY {{$allpost[$i]->author}} | {{$allpost[$i]->created_at}}</p>
                    </div>
            </div>
            @endfor
    </div>
</div>

</div>
@endsection
