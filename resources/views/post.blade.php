

@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post -> title }}</h2>
                
                <p>By. <a  class="text-decoration-none" href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }} </a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post -> category-> name}}</a></p>
                <img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

                <article class="my-3 fs-5">
                    {!! $post->body !!} 
                </article>
                    
            
            <a href="/posts" class="d-block mt-3"> Kembali Ke Blog</a>
        </div>
    </div>
</div>


@endsection
    
    
