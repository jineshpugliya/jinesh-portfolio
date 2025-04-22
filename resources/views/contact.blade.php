@extends('layouts.app')
@section('content')
<h1>Contact</h1>
<form method="POST" action="{{ route('contact.send') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Your Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" name="message" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection