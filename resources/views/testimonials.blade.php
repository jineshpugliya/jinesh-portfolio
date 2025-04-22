@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold mb-4">Testimonials</h1>
    <p class="mb-6 text-lg text-gray-600">What my clients and colleagues say about me.</p>
    <div class="space-y-6">
        <div class="bg-white p-6 shadow rounded">
            <p class="text-gray-600">"Great work on the project! Very professional and efficient."</p>
            <span class="text-indigo-600 font-semibold">John Doe</span>
        </div>
        <div class="bg-white p-6 shadow rounded">
            <p class="text-gray-600">"A highly skilled developer who always goes the extra mile."</p>
            <span class="text-indigo-600 font-semibold">Jane Smith</span>
        </div>
    </div>
</div>
@endsection
