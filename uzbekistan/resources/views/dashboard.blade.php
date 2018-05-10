@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post </a>
                    <a href="/traditions/create" class="btn btn-primary">Create Tradition </a>
                    {{-- <h3>Your Blog Posts</h3> --}}
                    {{-- @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                               <th>Title</th>
                               <th></th>
                               <th></th>    
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                                <td>{{ $post->title }}</td>
                              
                                <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-default" >Edit</a>
                                {!! Form::open(['action'=>['PostsController@destroy',$post->id], 'method'=>'POST' , 'class'=>'pull-right']) !!}
                                {{   Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
                                {!! Form::close() !!}
                                </td>
                        </tr>
                        @endforeach 
                    </table>   
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
