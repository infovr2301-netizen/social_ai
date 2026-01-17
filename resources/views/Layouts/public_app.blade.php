<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel App')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            height: 90vh;
            background: linear-gradient(to right, #0d6efd, #6610f2);
            color: white;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="/">Social AI</a>

    <div class="ms-auto">
        <a href="/login" class="btn btn-outline-light me-2">Login</a>
        <a href="/register" class="btn btn-primary">Sign Up</a>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer class="bg-dark text-white text-center p-3">
    © {{ date('Y') }} MyApp | All Rights Reserved
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
