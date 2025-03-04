<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
<!-- Include CSS -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Include JavaScript (before closing </body>) -->
<script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
            <li><a href="{{ route('blog.index') }}">Blog</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
