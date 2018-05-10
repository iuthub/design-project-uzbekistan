@extends('layouts.app')
@section('content')
    <h1>Edit Tradition</h1>
    {!! Form::open(['action'=>['TraditionsController@update', $tradition->id],'method'=>'POST' , 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('name','Title') }}
        {{ Form::text('name',$tradition->name,['class'=>'form-control' ,'placeholder' =>'Title']) }}
    </div>
    <div class="form-group">
            {{ Form::label('description','Body') }}
            {{ Form::textarea('description',$tradition->description,['id' => 'aticle-ckeditor','class'=>'form-control' ,'placeholder' =>'Body Text']) }}
        </div>
        <div class="form-group">
                {{ Form::file('img') }}
              </div>
        {{ Form::hidden('_method','PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
 @endsection   