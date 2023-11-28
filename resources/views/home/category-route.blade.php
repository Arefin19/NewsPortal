@extends('layouts.app-master')

@section('content')
<div class="container category-container">
    <div class="article-container-catagory">
        <h1>#{{$category}}</h1>
        <div class="article-catagory">
            @for($i = 0; $i < $posts->count(); $i++)
                <div class="card" style="width: 18rem; height: 22rem;">
                    <img class="card-img-top" src="{{ url($posts[$i]->url) }}" alt="Card image cap">
                    <div class="card-body">
                        <p><a href="{{route('post.show', ['id' => $posts[$i]->post_id])}}">{{$posts[$i]->title}}</a></p>
                        <p class="small-text2">BY {{$posts[$i]->author}} | {{$posts[$i]->created_at}}</p>
                    </div>
                </div>
            @endfor
            </div>
    </div>

    <div class="article-catagory-beside">
        <h3>What else on WebTribune</h3>
            <div class="side-top-nav">
                <a @if($sortby == 'views') style="background-color: grey; color: white;" @endif href={{route('category.show', ['route'=> $category, 'sortby'=>'views'])}}>Trending</a>
                <a @if($sortby == 'created_at') style="background-color: grey; color: white;" @endif href={{route('category.show', ['route'=> $category, 'sortby'=>'created_at'])}}>Latest</a>
                <a @if($sortby == 'likes') style="background-color: grey; color: white;" @endif href={{route('category.show', ['route'=> $category, 'sortby'=>'likes'])}}>Popular</a>
            </div>

            <div class="side-content">
                @for($i = 0; $i < 4 ; $i++) <div class="content">
                    <img src="{{ url($allpost[$i]->url) }}" alt="">
                    <div class="content-details">
                        <a href="{{route('post.show', ['id' => $allpost[$i]->post_id])}}">{{$allpost[$i]->title}}</a>
                        <p class="small-text2">BY {{$allpost[$i]->author}} | {{$allpost[$i]->created_at}}</p>
                    </div>
            </div>
            @endfor
    </div>
</div>

</div>
@endsection
