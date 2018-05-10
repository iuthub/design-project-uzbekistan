

     {{--  <div>
  
    <ul>
    @foreach($types as $t)
    <li>{{$t->name}}</li>
    @endforeach
    </ul>
     @foreach($traditions as $tr)
        {{$tr->title}}
         <br>
         @foreach($tr->images as $img)
            {{ $img->img}}
            <br>
         @endforeach
         @foreach($tr->paragraphs as $p)
            {{ $p->paragraph}}
            <br>
         @endforeach
         <br>
     @endforeach    
 </div> --}}


@extends('layouts.app')
@section('content')

 <div class="gold-line">

    </div>
    <div class="container-fluid" style="height: 50px; width: 100%; box-shadow: 10px 0 5px silver;position: fixed; top: 0; background-color: white; z-index: 3">
        <div class="row">

        </div>
    </div>

    <div class="container">
        <div class="row justify-content-between">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 offset-lg-1 offset-md-1 headings">
                <p class="headings-title">THE BEAUTINESS<br><span>OF CULTURE</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 icons">
                            <i class="far fa-paper-plane icons-style" ></i>
                            <i class="fab fa-facebook-f icons-style"></i>
                            <i class="fab fa-twitter icons-style"></i>
                            <i class="fab fa-instagram icons-style"></i>
            </div>

        </div>
       
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 carousel">
                    
                <div class="owl-carousel" >
                  <div class="image-block">
                  <a class="carousel-link" href="/traditions/{{ $types[0]->name }}"><img class="image" src=" /storage/img/about/sport2.jpg" alt="general"><p>Sport</p></a>

                  </div>
                  <div class="image-block">
                    <a class="carousel-link" href="/traditions/{{ $types[1]->name }}"><img src="/storage/img/about/postgraduates.jpg" alt="general"><p>Education</p></a>
                  </div>
                  <div class="image-block">
                   <a class="carousel-link" href="/traditions/{{ $types[2]->name }}"><img src="/storage/img/about/cuisine.jpg" alt="general"><p>Cuisine</p></a>
                  </div>
                  <div class="image-block">
                    <a class="carousel-link" href="/traditions/{{ $types[3]->name }}"><img src="/storage/img/about/holiday2.jpg" alt="general"><p>Holidays</p></a>
                  </div>
                  <div class="image-block">
                    <a class="carousel-link" href="/traditions/{{ $types[4]->name}}"><img src="/storage/img/about/musical.jpg" alt="general"><p>Music</p></a>
                  </div>
                  <div class="image-block">
                    <a class="carousel-link" href="/traditions/{{ $types[5]->name }}"><img src="/storage/img/about/general1.jpg" alt="general"><p>General</p></a>
                  </div>

                </div>
            </div>
        </div>



        @foreach($traditions as $tradition)
            <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 info">
                        <h1 class="general">{{$tradition->type}}</h1>

                           @foreach($tradition->paragraphs as $p)
                                    <p>
                                    {{ $p->paragraph}}
                                    <br>
                                    </p>
                            @endforeach

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 image-content">
                       @foreach($tradition->images as $img)
                        <img src="/storage/img/about/{{ $img->img}}" alt="general">
                        @endforeach

                    </div>

            </div>
            @endforeach
            </div>
        <script src="{{ URL::asset('js/scripts.min.js') }}"></script> 
@endsection