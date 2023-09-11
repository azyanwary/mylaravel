

@extends('layouts.main')

@section('container')
    <article class="md-5">
    <h2>{{ $post -> title }}</h2>
    
    <p>By. <a  class="text-decoration-none" href="/author/{{ $post->author->username }}"> {{ $post->author->name }} </a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post -> category-> name}}</a></p>

        {!! $post -> body !!} 

<a href="/posts" class="d-block mt-3"> Kembali Ke Blog</a>
@endsection
    
    
