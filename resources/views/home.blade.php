@extends('layouts.app')

@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">MyPortfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Hi, I'm a Full Stack Developer</h1>
        <p>Crafting elegant solutions with Laravel, Angular, and .NET</p>
        <a href="#projects" class="btn btn-primary mt-4">Explore My Work</a>
    </div>
</section>

<!-- Placeholder Sections -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">About Me</h2>
        <p class="text-center">I'm a passionate developer with experience in building modern web applications. I specialize in Laravel, Angular, and building seamless full-stack solutions.</p>
    </div>
</section>

<section id="projects" class="section bg-light">
    <div class="container">
        <h2 class="section-title">Projects</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <h5>Project One</h5>
                    <p>Advanced CRM with Laravel & Vue.js</p>
                    <a href="#" class="btn btn-primary btn-sm">View More</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <h5>Project Two</h5>
                    <p>Angular-based Dashboard for Logistics</p>
                    <a href="#" class="btn btn-primary btn-sm">View More</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <h5>Project Three</h5>
                    <p>SSO Integration with Laravel & .NET</p>
                    <a href="#" class="btn btn-primary btn-sm">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="section">
    <div class="container">
        <h2 class="section-title">Latest Blog Posts</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-3 mb-3">
                    <h5>How I built a SaaS dashboard using Laravel</h5>
                    <p>Discover my journey building a fully functional admin dashboard.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 mb-3">
                    <h5>Integrating APIs in Laravel with Clean Architecture</h5>
                    <p>Learn how to keep your Laravel code clean and scalable.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="section bg-light">
    <div class="container">
        <h2 class="section-title">Testimonials</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <p>"Absolutely fantastic developer! Helped build our product from the ground up."</p>
                    <strong>— Client A</strong>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <p>"Great attention to detail and timely delivery. Highly recommend."</p>
                    <strong>— Client B</strong>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <p>"A Laravel wizard and an amazing problem solver."</p>
                    <strong>— Client C</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Contact Me</h2>
        <form class="mx-auto" style="max-width:600px;">
            <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" placeholder="John Doe">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="you@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea class="form-control" rows="4" placeholder="Hi there..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2025 MyPortfolio. All rights reserved.</p>
</footer>
@endsection