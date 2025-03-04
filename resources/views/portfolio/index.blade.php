@extends('layouts.app')
@section('title', 'Portfolio')
@section('content')
    <h1>My Portfolio</h1>
    @foreach ($portfolios as $portfolio)
        <div>
            <h2>{{ $portfolio->title }}</h2>
            <p>{{ $portfolio->description }}</p>
            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Portfolio Image">
        </div>
    @endforeach
@endsection
