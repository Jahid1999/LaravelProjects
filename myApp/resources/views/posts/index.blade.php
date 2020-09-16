@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    @if ( count($posts) >1)
        @foreach ($posts as $post)
            <div class="well"> 
                <h4>{{$post->title}} </h4>
                <small> Posted on {{$post->created_at}} </small>

            </div>
            
        @endforeach

    @else
        <p> No posts found!!</p>
        
    @endif
    
@endsection