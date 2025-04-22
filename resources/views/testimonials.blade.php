@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="page-title">Testimonials</h1>
    <div class="testimonial-grid">
        @foreach($testimonials as $testimonial)
        <div class="testimonial-card">
            <img src="{{ $testimonial->image ?? 'https://via.placeholder.com/80' }}" class="avatar" alt="{{ $testimonial->name }}">
            <div class="testimonial-info">
                <h2>{{ $testimonial->name }}</h2>
                <p class="designation">{{ $testimonial->designation ?? '' }} @ {{ $testimonial->company ?? '' }}</p>
                <p class="testimonial-text">"{{ $testimonial->content }}"</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
