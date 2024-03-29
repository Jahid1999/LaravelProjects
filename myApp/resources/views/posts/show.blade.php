@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-success"> Go Back </a>
    <h2>{{$post->title}}</h2>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small> Posted on {{$post->created_at}} </small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary"> Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection