@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="bg-white rounded shadow-lg p-6">
            <img src="{{ $testimonial->image ?? '/images/default-avatar.png' }}" alt="testimonial" class="w-32 h-32 rounded-full mb-4 mx-auto">
            <h3 class="text-3xl font-semibold text-center">{{ $testimonial->name }}</h3>
            <p class="text-center text-gray-600">{{ $testimonial->designation ?? 'Designation' }}</p>
            <p class="text-gray-800 mt-6">{{ $testimonial->content }}</p>
        </div>
    </div>
@endsection
