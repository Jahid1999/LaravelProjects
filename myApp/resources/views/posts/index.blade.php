@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    @if ( count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well"> 
                <h4> <a href="/posts/{{$post->id}}"> {{$post->title}} </a> </h4>
                <small> Posted on {{$post->created_at}} </small>

            </div>
            
        @endforeach
        {{$posts->links()}}

    @else
        <p> No posts found!!</p>
        
    @endif
    
@endsection