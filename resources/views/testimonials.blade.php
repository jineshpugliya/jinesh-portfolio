@extends('layouts.app')
@section('content')
<h1 class="mb-4">Testimonials</h1>
<div class="row">
    @foreach($testimonials as $testimonial)
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body text-center">
                <img src="{{ $testimonial->image ?? 'https://via.placeholder.com/80' }}" class="rounded-circle mb-3" width="80" height="80">
                <h5>{{ $testimonial->name }}</h5>
                <p class="text-muted">{{ $testimonial->designation }}</p>
                <p>"{{ $testimonial->content }}"</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection