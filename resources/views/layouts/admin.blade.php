<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>
