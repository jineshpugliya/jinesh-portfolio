<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .navbar { background-color: #2c3e50; }
        .navbar-brand, .nav-link { color: #fff !important; font-weight: 500; }
        .hero { background: linear-gradient(to right, #6a11cb, #2575fc); color: white; padding: 80px 0; text-align: center; }
        .hero h1 { font-size: 3rem; font-weight: 700; }
        .hero p { font-size: 1.25rem; }
        .section { padding: 60px 0; }
        .section-title { font-size: 2.5rem; font-weight: 700; text-align: center; margin-bottom: 40px; }
        .card { box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); border: none; }
        footer { background-color: #2c3e50; color: white; padding: 30px 0; text-align: center; margin-top: 60px; }
        .btn-primary { background-color: #2575fc; border-color: #2575fc; }
        .btn-primary:hover { background-color: #1a5be1; border-color: #1a5be1; }
    </style>
</head>
<body>
    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>