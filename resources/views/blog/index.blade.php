@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <h1>My Blog</h1>
    @foreach ($blogs as $blog)
        <div>
            <h2>{{ $blog->title }}</h2>
            <p>{{ $blog->content }}</p>
            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
        </div>
    @endforeach
@endsection
