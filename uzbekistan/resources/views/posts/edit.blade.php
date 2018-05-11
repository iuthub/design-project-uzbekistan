@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action'=>['PostsController@update', $post->id], 'method'=>'PUT' , 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('pre_title','Pre_Title') }}
        {{ Form::text('pre_title','',['class'=>'form-control' ,'placeholder' =>'Pre_Title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('title','Title') }}
        {{ Form::text('title','',['class'=>'form-control' ,'placeholder' =>'Title']) }}
    </div>
    <div class="form-group">
            {{ Form::label('body','Body') }}
            {{ Form::textarea('body','',['id' => 'aticle-ckeditor','class'=>'form-control' ,'placeholder' =>'Body Text']) }}
        </div>

     <div class="form-group">
        {{ Form::label('quote','Quote') }}
        {{ Form::text('quote','',['class'=>'form-control' ,'placeholder' =>'Quote']) }}
    </div>
        <div class="form-group">
        {{ Form::label('author','Author') }}
        {{ Form::text('author','',['class'=>'form-control' ,'placeholder' =>'Author']) }}
    </div>
    <div class="form-group">
          {{ Form::file('cover_image') }}
     </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
 @endsection   