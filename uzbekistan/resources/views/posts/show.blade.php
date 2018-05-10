{{-- @extends('layouts.app')
@section('content')
<div class="home">
<a href="/posts" class="btb btn-default">Go back</a>
<br>
<img  src="/storage/cover_images/{{ $post->cover_image }}"/>    
<h1>{{ $post->title }}</h1>
    <br /> 
    <div>
         {!! $post->body !!}
    </div>  
    <hr>
    <hr/>
    @if(!Auth::guest())
    @if(Auth::user()->type == 1)
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-default" >Edit</a>
    {!! Form::open(['action'=>['PostsController@destroy',$post->id], 'method'=>'POST' , 'class'=>'pull-right']) !!}
    {{   Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}
    @endif
    @endif
</div>
@endsection --}}
@extends('layouts.app')
@section('content')
<div class="home">

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
                            <a href="/posts" style="color:gold; float:right; margin-top: 145px; position: relative;" class="btb btn-default">Go back</a>
                            <p class="page-title">{{$post->pre_title}} <br> <span class="gold">{{$post->title}}</span></p>
                        </div>

                    </div>
                    <div class="row article">
                  @for($i=0;$i<count($paragraphs);$i++)
                  @if($i<count($paragraphs)/2)
                        <article class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="article-text text-justify" >
                               {{$paragraphs[$i]}}
                            </p>
                        </article>
                         @else   
                        <article class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="article-text text-justify">
                               {{ $paragraphs[$i] }}
                            </p>
                            
                        @if($paragraphs[$i]==count($paragraphs)-1)
                         @if(!empty($post->quote) && !empty($post->author))
                            <div class="quotation">
                                <p class="quotation-p">
                                   " {{$post->quote}} "
                                </p>
                                <p class="quotation-author">{{$post->author}}</p>
                            </div>
                            @endif
                        @endif    
                        </article>
                    @endif
                    @endfor
                    </div>
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
            
        </div>  
        </section>
    @endif
    
    </div>
@endsection