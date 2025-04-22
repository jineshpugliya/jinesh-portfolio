@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-semibold text-center mb-8">Testimonials</h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonials as $testimonial)
                <div class="bg-white rounded shadow-lg p-6">
                    <img src="{{ $testimonial->image ?? '/images/default-avatar.png' }}" alt="testimonial" class="w-16 h-16 rounded-full mb-4">
                    <h3 class="text-lg font-semibold">{{ $testimonial->name }}</h3>
                    <p class="text-gray-600">{{ $testimonial->designation ?? 'Designation' }}</p>
                    <p class="text-gray-800 mt-4">{{ $testimonial->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
