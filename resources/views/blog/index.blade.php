@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold mb-4">Blog</h1>
    <p class="mb-6 text-lg text-gray-600">Read my latest posts on software engineering, web development, and more.</p>
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded shadow p-4">
            <h3 class="text-lg font-semibold">Blog Post One</h3>
            <p class="text-gray-600">A brief summary of Blog Post One.</p>
            <a href="/blog/1" class="text-indigo-600 hover:underline">Read more</a>
        </div>
        <div class="bg-white rounded shadow p-4">
            <h3 class="text-lg font-semibold">Blog Post Two</h3>
            <p class="text-gray-600">A brief summary of Blog Post Two.</p>
            <a href="/blog/2" class="text-indigo-600 hover:underline">Read more</a>
        </div>
        <div class="bg-white rounded shadow p-4">
            <h3 class="text-lg font-semibold">Blog Post Three</h3>
            <p class="text-gray-600">A brief summary of Blog Post Three.</p>
            <a href="/blog/3" class="text-indigo-600 hover:underline">Read more</a>
        </div>
    </div>
</div>
@endsection
