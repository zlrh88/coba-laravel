@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article>
                    <h3>{{ $post->title }}</h3>

                    <p>
                        By : 
                        <a href="/author/{{ $post->author->username }}">{{ $post->author->name }} </a> 
                        : 
                        <a href="/posts?category={{ $post->category->slug}}"> {{ $post->category->name }} </a>
                    </p>

                    <img class="img-fluid mb-5" src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{{ $post->category->name }}">

                    {!! $post->body !!}
                </article>
                
                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>
    
@endsection