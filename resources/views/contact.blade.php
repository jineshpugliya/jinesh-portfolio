@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <h1>Contact Me</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Message:</label>
        <textarea name="message" required></textarea>
        <button type="submit">Send</button>
    </form>
@endsection
