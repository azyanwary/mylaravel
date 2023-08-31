

@extends('layouts.main')

@section('container')
    <article class="md-5">
    <h2>{{ $post["tittle"] }}</h1>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
    </article>    

<a href="/posts">Kembali Ke Blog</a>
@endsection
    
    
