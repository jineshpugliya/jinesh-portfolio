@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold mb-4">Projects</h1>
    <p class="mb-6 text-lg text-gray-600">Explore my latest projects where I showcase my work and contributions.</p>
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded shadow p-4">
            <h3 class="text-lg font-semibold">Project One</h3>
            <p class="text-gray-600">Brief description of Project One.</p>
            <a href="/projects/1" class="text-indigo-600 hover:underline">Read more</a>
        </div>
        <div class="bg-white rounded shadow p-4">
            <h3 class="text-lg font-semibold">Project Two</h3>
            <p class="text-gray-600">Brief description of Project Two.</p>
            <a href="/projects/2" class="text-indigo-600 hover:underline">Read more</a>
        </div>
        <div class="bg-white rounded shadow p-4">
            <h3 class="text-lg font-semibold">Project Three</h3>
            <p class="text-gray-600">Brief description of Project Three.</p>
            <a href="/projects/3" class="text-indigo-600 hover:underline">Read more</a>
        </div>
    </div>
</div>
@endsection
