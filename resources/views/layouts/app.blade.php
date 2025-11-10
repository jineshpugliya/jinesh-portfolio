<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jinesh Puglia - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-white shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Jinesh Puglia</h1>
            <nav>
                <a href="/" class="mx-2">Home</a>
                <a href="/about" class="mx-2">About</a>
                <a href="/experience" class="mx-2">Experience</a>
                <a href="/skills" class="mx-2">Skills</a>
                <a href="/contact" class="mx-2">Contact</a>
            </nav>
        </div>
    </header>
    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>
