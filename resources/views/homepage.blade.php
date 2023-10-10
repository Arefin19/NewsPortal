<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
</head>

<body>

    
    <nav class="navbar">
        <div>
            <h1 class="logo">WebWire Tribune</h1>
        </div>
        <div class="nav-item">
            <li><a href="/homepage">Home</a></li>
             
            <li><a href="/category">Category</a></li>
            <li><a href="/contactus">Contact</a></li>      
            <li><a href="/politics">Politics</a></li>
            <li><a href="/business">Business</a></li>
            <li><a href="/sports">Sports</a></li>
            <li><a href="/fashion">Fashion</a></li>
            
        </div>
        <div class="navbar-side">
            <li><a href="/login">login</a></li>
            <li><a href="/registration">Registration</a></li>
            <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></i></a></li>
        </div>
    </nav>

    
        <div class="background-image1">
            <div class="welcome-screen">
                <h1>Revisiting the Dandy Canon, From Baudelaire to Bloomsbury</h1>
                <p>How Blackness shaped the look of queer modernism</p>
                <a href="#">OPINION | SHOLA VON REINHOLD</a> 
            </div>
            
        </div>


        <div class="container">
            <div class="top-container">
                    
                    <div class="text-content-container1">
                        <div class="text-container1">
                        <h2> LATEST NEWS</h2>
                        <p>Articles, reviews and news from frieze magazine and fairs</p>
                        </div>
                    </div>
                    
                    <div class="article-container">
                <div class="article">
                <div class="article-item">
                    <img src="{{asset("/img/artcl11.jpg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
                <div class="article-item">
                    <img src="{{asset("/img/artcl12.jpg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
                <div class="article-item">
                    <img src="{{asset("/img/artcl13.jpg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
                <div class="article-item">
                    <img src="{{asset("/img/artcl14.jpg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Revealed: Highlights of Frieze London</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
            </div>
        </div>





            <div class="map-paragraph-container">
                <div class="map-side-content">
                    <h2>FRIEZE SCULPTURE</h2>
                    <p>Frieze Sculpture takes place from <strong>20 September - 29 October 2023 in The Regent’s Park's English Gardens.</strong></p>
                    <p>With a renewed vision and an array of historical and commissioned works, Frieze Sculpture 2023 brings together a wide array of inspiring artists from around the world. The exhibition is curated by independent curator and writer Fatoş Üstek and is presented by distinguished international galleries.</p>
                </div>
                <div class="map"><img src="{{asset("/img/5.png")}}" alt="map"></div>
            </div>

<div class="background-image3">
</div>

            <div class="text-content-container2">
                <div class="text-container2">
                    <h2> LATEST</h2>
                    <p>Articles, reviews and news from frieze magazine and fairs</p>
                </div>
                
            </div>


            {{-- article section --}}
            <div class="article-container">
                <div class="article">
                <div class="article-item">
                    <img src="{{asset("/img/article_img1.jpg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
                <div class="article-item">
                    <img src="{{asset("/img/article_img2.png")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
                <div class="article-item">
                    <img src="{{asset("/img/article_img3.jpg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
                <div class="article-item">
                    <img src="{{asset("/img/article_img4.jpg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Revealed: Highlights of Frieze London</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>

                <div class="article-item">
                    <img src="{{asset("/img/artcl21.jpeg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
                <div class="article-item">
                    <img src="{{asset("/img/artcl22.jpeg")}}" alt="">
                    <p class="small-text1">Latest</p>
                    <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
                <div class="article-item">
                    <img src="{{asset("/img/artcl23.jpeg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Shanzhai Lyric’s Poetry of the Streets</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
                <div class="article-item">
                    <img src="{{asset("/img/artcl24.jpg")}}" alt="">
                    <p class="small-text">Latest</p>
                    <p><a href="#">Revealed: Highlights of Frieze London</a></p>
                    <p class="small-text2">BY TAN LIN | 25 SEP 23</p>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="background-image2">
        </div>

<footer class="page-footer">
                    <div class="catagory-container">
                        <div class="catagory">
                        <h4>THE COMPANY</h4>
                        <p>ABOUT</p>
                        <p>VIP TEAM</p>
                        <p>PARTNERS</p>
                        <p>PRESS</p>
                        <p>CAREERS</p>
                        <p>ADVERTISE</p>
                        <p>CONTACT US</p>
                        </div>
                        <div class="catagory">
                        <h4>HELP</h4>
                        <p>MEMBERSHIP FAQS</p>
                        <p>PRIVACY POLICY</p>
                        <p>LEGALS</p>
                        <p>COOKIE POLICY</p>
                        </div>
                        <div class="catagory">
                        <h4>FOLLOW US</h4>
                        <p>FACEBOOK</p>
                        <p>TWITTER</p>
                        <p>INSTAGRAM</p>
                        
                        </div>
                    </div>



                <div class="footer-search-container">
                        <div class="footer-search-text">
                        <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        <p>Sign up for email updates on the latest frieze talks, fairs and events.</p>
                        </div>
                    <div class="footer-search">
                    <input class="search-box" type="text" placeholder=" Enter your email here">
                    </div>
                </div>              
        </footer>

</body>

</html>