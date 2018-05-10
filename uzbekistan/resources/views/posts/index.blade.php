
{{-- ************************************************************************************************************************ --}}
@extends('layouts.app')
@section('content')
<section class="container-fluid home-background">
        <div class="row">

        <div class="container">



            <div class="row">
                <div class="container">
                    <p class="welcome">WELCOME</p>
                    <p class="uzbekistan gold">to Uzbekistan</p>
                    <p class="motto gold">the place whith sightseeng view </p>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="form-search mx-auto">
                        <form action="">
                            <input type="text" class="search-input" placeholder="Search among the country">
                            <button class="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <p class="center"><a href="#" class="discover">Discover</a></p>
                </div>
            </div>
        </div>

    </div>
    </section>
<div class="home">
@if(count($posts)>0)
@foreach($posts as $post)
            <?php $paragraphs = preg_split('/~`/', $post->body);  ?>
@if(empty($post->cover_image))
    <section class="container-fluid home-second">
        <div class="row">
            <div class="gold-line">
            </div>
        </div>

            <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 offset-lg-1 offset-md-1">
                            <p class="page-title">{{$post->pre_title}} <br> <span class="gold">{{$post->title}}</span></p>
                        </div>

                    </div>
                    <div class="row article">
                        <article class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="article-text text-justify" >
                               {{$paragraphs[0]}}
                            </p>
                        </article>

                        <article class="col-lg-6 col-md-6 col-sm-12 col-12">
                            @if(count($paragraphs)>= 2)
                            <p class="article-text text-justify">
                               {{ $paragraphs[1] }}
                            </p>
                            @endif
                            @if(!empty($post->quote) && !empty($post->author))
                            <div class="quotation">
                                <p class="quotation-p">
                                   " {{$post->quote}} "
                                </p>
                                <p class="quotation-author">{{$post->author}}</p>
                        </div>
                        @endif
                        </article>
                    </div>


    </section>
    @else

    <section class="container-fluid home-third">
        <div class="row">
            <div class="gold-line ml-auto">
            </div>
        </div>

    <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 ml-auto">
                    <p class="page-title">{{$post->pre_title}}<br> <span class="gold">{{$post->title}}</span></p>
                </div>
                
            </div>
            <div class="row article">
                <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <p class="article-text text-justify" >
                        @for($i = 0; $i < 2 && $i < count($paragraphs); $i++)
                            {{$paragraphs[$i]}}
                        <br>
                        @endfor
                    </p>
                </article>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="image-block" style="background-image: url('storage/cover_images/{{$post->cover_image}}')">
                    </div>

                </div>
            </div>
            
            @if(count($paragraphs)>2)
                <div class="container read">
                    <div class="row">
                        <div class="read-more ml-auto">
                            <a href="/posts/{{$post->id}}" class="ml-auto"><i class="fas fa-ellipsis-h"></i> Read More</a>
                        </div>
                    </div>
                </div> <!-- READ MORE -->
            @endif
    @endif

@if(count($paragraphs)>2)
    <div class="container read">
        <div class="row">
            <div class="read-more ml-auto">
                <a href="/posts/{{$post->id}}" class="ml-auto"><i class="fas fa-ellipsis-h"></i> Read More</a>
            </div>
        </div>
    </div> <!-- READ MORE -->
@endif
    @endforeach
    @else
    <h1>There is no posts yet</h1>
    @endif


            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="sub-navigation">
                        <ul class="sub-nav">
                            <li class="active"><button id="music">Music</button></li>
                            <li><button id="education">Education</button></li>
                            <li><button id="holidays">Holidays</button></li>
                            <li><button id="cuisine">Cuisine</button></li>
                            <li><button id="sport">Sport</button></li>
                        </ul>
                    </div>
                    <div class="sub-content music">
                        <p class="sub-content-text text-justify">
                            Central Asian classical music is called Shashmaqam, which arose in Bukhara in the late 16th century when that city was a regional capital. Shashmaqam is closely related to Azerbaijani Mugam and Uyghur muqam. The name, which translates as six maqams refers to the structure of the music, which contains six sections in six different Musical modes, similar to classical Persian traditional music. Interludes of spoken Sufi poetry interrupt the music, typically beginning at a lower register and gradually ascending to a climax before calming back down to the beginning tone.
                        </p>
                        <div class="controls-player">

                            <button class="play">
                                <i class="fas fa-play"></i>
                                Play Glyukoza
                            </button>
                            <button class="pause" style="display: none">
                                <i class="fas fa-pause"></i>
                                Pause Glyukoza
                            </button>

                        </div>
                        <audio controls src="tune/gljukoza_-_ja_nenavizhu_tebja_(zf.fm).mp3" id="player" class="player"></audio>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="image-block" style="margin-top: 40px; height: 300px; background-image: url('storage/cover_images/1579.jpg'); background-size: contain; background-repeat: no-repeat">
                    </div>
                </div>

    </div>

    <div class="container read">
            <div class="row">
                <div class="read-more ml-auto">
                    <a href="" class="ml-auto"><i class="fas fa-ellipsis-h"></i> Read More</a>
                </div>
            </div>
        </div> <!-- READ MORE -->
</div>
</div>

    <section class="container-fluid home-fourth" id="services">
        <div class="row">
            <div class="container">
                <p class="home-fourth-heading text-center">
                    <img src="/storage/img/logo_uzb_grey.svg" alt="">
                    <span> / <i class="fas fa-ticket-alt"></i> Services</span>
                </p>
        </div>
        </div>
        <div class="row justify-content-center">

                <div class="col-xs-3 col-lg-3 col-md-3 col-sm-12 col-12 serv">
                    <div class="serv">
                        <div class="serv-logo mx-auto">
                            <img src="/storage/img/icons/taxi.svg" alt="">
                        </div>
                        <p class="serv-description text-justify">
                            Book your taxi in a flash. How about a 5-Star Taxi? Or one with a regular driver? Book now – or in advance. And watch it arrive in real time – on your phone
                        </p>
                        <div class="serv-order">
                            <a href="" class="serv-order-btn text-center">
                                ORDER
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-3 col-lg-3 col-md-3 col-sm-12 col-12 serv">
                    <div class="serv">
                        <div class="serv-logo mx-auto">
                            <img src="/storage/img/icons/hotel.svg" alt="">
                        </div>
                        <p class="serv-description text-justify">
                            European cuisine and local specialities are served in the elegant restaurant with grand piano. The Vena café-bar offers a range of hot and cold drinks, and there is also a snack bar on site.
                        </p>
                        <div class="serv-order">
                            <a href="" class="serv-order-btn text-center">
                                ORDER
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-3 col-lg-3 col-md-3 col-sm-12 col-12 serv">
                    <div class="serv">
                        <div class="serv-logo mx-auto">
                            <img src="/storage/img/icons/restaurant.svg" alt="">
                        </div>
                        <p class="serv-description text-justify">
                            Make online reservations, read restaurant reviews from diners, and earn points towards free meals. OpenTable is a real-time online reservation network for fine dining restaurants.
                        </p>
                        <div class="serv-order">
                            <a href="" class="serv-order-btn text-center">
                                ORDER
                            </a>
                        </div>
                    </div>
                </div>

            <!-- </div> -->
        </div>
    </section>
    <section class="container-fluid home-fourth" id="guide" style="height: 100vh">
        <div class="row">
            <div class="container">
                <p class="home-fourth-heading text-center">
                    <img src="/storage/img/logo_uzb_grey.svg" alt="">
                    <span> / <i class="fas fa-compass"></i> Guide</span>
                </p>
            </div>
        </div>

        <div class="row category">
            <div class="container">
                <div class="category-block">
                    <form action="">
                        <select name="" id="">
                            <option value="" selected disabled>Region/City</option>
                            <option value="">Tashkent City</option>
                            <option value="">Tashkent Reg</option>
                            <option value="">Samarkand</option>
                            <option value="">Bukhara</option>
                            <option value="">Khiva</option>
                            <option value="">Fergana</option>
                            <option value="">Andijon</option>
                        </select>
                        <select name="" id="">
                            <option value="" selected disabled>District</option>
                            <option value="">Mirzo Ulugbek</option>
                            <option value="">Uchtepa</option>
                            <option value="">Mirabad</option>
                            <option value="">Sergeli</option>
                            <option value="">Chilonzor</option>
                            <option value="">Yashnabod</option>
                            <option value="">Shaykhantaur</option>
                        </select>
                        </select>
                        <select name="" id="">
                            <option value="" selected disabled>Type</option>
                            <option value="">Entertainment</option>
                            <option value="">Exhibition</option>
                            <option value="">Concert</option>
                            <option value="">Theater</option>
                            <option value="">Cinema</option>
                            <option value="">Museum</option>
                            <option value="">Bazaars</option>
                            <option value="">Shopping Halls</option>
                        </select>
                        </select>
                        <select name="" id="">
                            <option value="" selected disabled>Purpuse</option>
                            <option value="">All kind</option>
                            <option value="">For Youngs</option>
                            <option value="">Dress Code</option>
                            <option value="">Open Air</option>
                            <option value="">Live Music</option>
                            <option value="">Noisy</option>
                            <option value="">For Walk</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="container" style="min-height: 100vh">
                <div class="category-guide">
                    <div class="owl-two owl-carousel owl-theme">
                        <div class="owl-carousel-item" style="background-image: url('/storage/img/0233654_b.jpg');">
                            <!-- <img src="img/0233654_b.jpg" alt=""> -->
                            <div class="title">
                                <p class="title-name">"Retro Fusion House"</p>
                                <p class="title-description">
                                    The Retro Fusion House restaurant is a restaurant with a fusion kitchen that looks like an illustrated book - whimsical ceiling patterns, different chandeliers, completely different from each other, colored velvet sofas, high, royal, armchairs.
                                </p>
                                <a href="" class="title-link">VIEW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

