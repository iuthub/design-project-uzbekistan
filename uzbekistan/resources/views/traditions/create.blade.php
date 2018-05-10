@extends('layouts.app')
@section('content')
    <h1>Create Tradition</h1>
    {!! Form::open(['action'=>'TraditionsController@store','method'=>'POST', 'enctype'=>'multipart/form-data' ]) !!}
    <div class="form-group">
        {{ Form::label('name','Title') }}
        {{ Form::text('name','',['class'=>'form-control' ,'placeholder' =>'Title']) }}
    </div>
    <div class="form-group">
            {{ Form::label('description','Body') }}
            {{ Form::textarea('description','',['id' => 'aticle-ckeditor','class'=>'form-control' ,'placeholder' =>'Body Text']) }}
        </div>
        <div class="form-group">
          {{ Form::file('img') }}
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
 @endsection   