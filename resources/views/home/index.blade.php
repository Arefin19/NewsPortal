@extends('layouts.app-master')

@section('content')
    {{-- @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here
            &raquo;</a>
    @endauth --}}
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
                    <h2> LATEST NEWS</h2>
                    <p>Articles, reviews and news from WebWire Tribune magazine and fairs</p>
                </div>
            </div>

            <div class="article-container">
                <div class="article">
                    <div class="article-item">
                        <img src="{{ asset('/img/artcl11.jpg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">{{ $post[0]->title }}</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                    <div class="article-item">
                        <img src="{{ asset('/img/artcl12.jpg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                    <div class="article-item">
                        <img src="{{ asset('/img/artcl13.jpg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                    <div class="article-item">
                        <img src="{{ asset('/img/artcl14.jpg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Revealed: Highlights of WebWire Tribune London</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                </div>
            </div>

            <div class="map-paragraph-container">
                <div class="map-side-content">
                    <h2>WEBWIRE TRIBUNE SCULPTURE</h2>
                    <p>WebWire Tribune Sculpture takes place from <br /> 
                        <strong>20 September - 29 October 2023 in The Regent’s Park's English Gardens.</strong></p>
                    <p>With a renewed vision and an array of historical and commissioned works, WebWire Tribune Sculpture 2023
                        brings together a wide array of inspiring artists from around the world. The exhibition is
                        curated by independent curator and writer Fatoş Üstek and is presented by distinguished
                        international galleries.</p>
                </div>
                <div class="map"><img src="{{ asset('/img/5.png') }}" alt="map"></div>
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
                    <div class="article-item">
                        <img src="{{ asset('/img/article_img1.jpg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                    <div class="article-item">
                        <img src="{{ asset('/img/article_img2.png') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                    <div class="article-item">
                        <img src="{{ asset('/img/article_img3.jpg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                    <div class="article-item">
                        <img src="{{ asset('/img/article_img4.jpg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Revealed: Highlights of WebWire Tribune London</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>

                    <div class="article-item">
                        <img src="{{ asset('/img/artcl21.jpeg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                    <div class="article-item">
                        <img src="{{ asset('/img/artcl22.jpeg') }}" alt="">
                        <p class="small-text1">Latest</p>
                        <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                    <div class="article-item">
                        <img src="{{ asset('/img/artcl23.jpeg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                    <div class="article-item">
                        <img src="{{ asset('/img/artcl24.jpg') }}" alt="">
                        <p class="small-text">Latest</p>
                        <p><a href="#">Revealed: Highlights of WebWire Tribune London</a></p>
                        <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-image2"></div>
@endsection
