@extends('dashboard.layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-lg-8">
                <article>
                    <h3>{{ $post->title }}</h3>

                    <a href="/dashboard/posts" class="mb-3 btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>

                    <a href="" class="mb-3 btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    
                    <a href="" class="mb-3 btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

                    <img class="img-fluid mb-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">

                    {!! $post->body !!}
                </article>
                
                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection