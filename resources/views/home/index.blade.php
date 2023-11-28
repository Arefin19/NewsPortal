@extends('layouts.app-master')

@section('content')
<div class="background-image1">
    <div class="welcome-screen">
        <h1>WebWire Tribune, for the truth we exist</h1>
        <p>Simple, fast and Secure. </p>
        <a href="#">14th November, 2023 </a>
    </div>
</div>

<div class="container">
    <div class="top-container">

        <div class="text-content-container1">
            <div class="text-container1">
                <h2>Most Viewd News</h2>
                <p>Articles, reviews and news from WebWire Tribune magazine and fairs</p>
            </div>
        </div>

        <div class="article-container">
            <div class="article">
                @for ($i = 0; $i < 4; $i++) <div class="article-item">
                    <div class="card" style="width: 18rem; height: 20rem;">
                            <img class="card-img-top" src="{{ url($postPopular[$i]->url) }}" alt="">
                            <div class="card-body">
                                <div class="title-like">
                                <p class="small-text">Most viewed </p>
                                <p class="small-text">views: {{$postPopular[$i]->views}}</p>
                                </div>
                                <p class="article-title"><a href="{{route('post.show', ['id' => $postPopular[$i]->post_id])}}">{{ $postPopular[$i]->title }}</a></p>
                                <p class="small-text2">{{ $postPopular[$i]->created_at }}</p>
                            </div>

                    </div>
            </div>
            @endfor
        </div>
    </div>

    <div class="map-paragraph-container">
        <div class="map-side-content">
            <h2>{{$conf->title}}</h2>
            <p>The conference takes place from <br />
                <strong>{{$conf->deadline}} in {{$conf->location}}</strong>
            </p>
            <p>{{$conf->descritpion}}</p>
        </div>
        <div class="map"><img src="{{ url($conf->img_url) }}" alt="map"></div>
    </div>

    <div class="background-image3">
    </div>

    <div class="text-content-container2">
        <div class="text-container2">
            <h2> LATEST</h2>
            <p>Articles, reviews and news from WebWire Tribune magazine and fairs</p>
        </div>

    </div>


    {{-- article section --}}
    <div class="article-container">
        <div class="article">
            @for ($i = 0; $i < 8; $i++) <div class="article-item">
                <div class="card" style="width: 18rem; height: 22rem;">
                    <img class="card-img-top" src="{{ url($post[$i]->url) }}" alt="">
                    <div class="card-body">
                        <p class="small-text">Latest</p>
                        <p><a href="{{route('post.show', ['id' => $post[$i]->post_id])}}">{{$post[$i]->title}}</a></p>
                        <p class=" small-text2">{{ $post[$i]->author }}| {{$post[$i]->created_at}}</p>
                    </div>

                </div>

        </div>
        @endfor

    </div>
</div>
</div>
</div>
<div class="background-image2"></div>
@endsection
