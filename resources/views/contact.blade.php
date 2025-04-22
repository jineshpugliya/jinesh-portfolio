@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold mb-4">Contact Me</h1>
    <p class="mb-6 text-lg text-gray-600">Feel free to reach out for inquiries or collaborations.</p>
    <form action="/contact" method="POST" class="space-y-4 max-w-xl mx-auto">
        @csrf
        <input type="text" name="name" placeholder="Your Name" class="w-full p-4 border rounded">
        <input type="email" name="email" placeholder="Your Email" class="w-full p-4 border rounded">
        <textarea name="message" placeholder="Your Message" class="w-full p-4 border rounded" rows="4"></textarea>
        <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded hover:bg-indigo-700">Send Message</button>
    </form>
</div>
@endsection
