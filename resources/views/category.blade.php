

@extends('layouts.main')

@section('container')
<h1 class='mb-5'> Halaman Category : {{ $category }} </h1>

    @foreach ($posts as $post)
    <article class="md-5">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <h6>{{ $post->excerpt }}</h2>
        </article>    
    @endforeach

@endsection
    
    
