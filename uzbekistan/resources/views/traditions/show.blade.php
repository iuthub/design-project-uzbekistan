@extends('layouts.app')
@section('content')
<a href="/posts" class="btb btn-default">Go back</a>
<br>
<img  src="/storage/traditions/{{ $tradition->img }}"/>    
<h1>{{ $tradition->title }}</h1>
    <br /> 
    <div>
         {!! $tradition->description !!}
    </div>  
    <hr>
  
    <hr/>
    @if(!Auth::guest())
    @if(Auth::user()->type == 1)
    <a href="/traditions/{{ $tradition->id }}/edit" class="btn btn-default" >Edit</a>
    {!! Form::open(['action'=>['TraditionsController@destroy',$tradition->id], 'method'=>'POST' , 'class'=>'pull-right']) !!}
    {{   Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}
    @endif
    @endif
@endsection