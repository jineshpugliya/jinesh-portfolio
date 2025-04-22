@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold mb-2">Hi, I'm John Doe</h1>
        <p class="text-lg text-gray-700">Professional Software Engineer specializing in Laravel & Web Technologies</p>
    </div>
    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-2xl font-semibold mb-4">Featured Project</h2>
            <p>A Laravel-based SaaS platform with multi-tenancy and API integrations.</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-2xl font-semibold mb-4">Latest Blog Post</h2>
            <p>How to Build a Modern Web App with Laravel 11 and Jetstream.</p>
        </div>
    </div>
</div>
@endsection
