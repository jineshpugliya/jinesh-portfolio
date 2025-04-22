@extends('layouts.app')
@section('content')
<h1>Blog</h1>
<ul>
    @foreach($posts as $post)
        <li><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a></li>
    @endforeach
</ul>
@endsection