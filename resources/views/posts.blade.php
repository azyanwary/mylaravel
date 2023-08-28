

@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
    <article class="md-5">
        <h2>
            <a href="/posts/{{ $post["slug"] }}">{{ $post["tittle"] }}</a></h2>
        <h5> by: {{ $post["author"] }}</h2>
        <h6>{{ $post["body"] }}</h2>
        </article>    
    @endforeach

@endsection
    
    
