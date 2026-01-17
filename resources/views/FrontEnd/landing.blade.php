@extends('Layouts.public_app')

@section('title', 'Welcome')

@section('content')

<!-- Hero Section -->
<section class="hero d-flex align-items-center">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Welcome to My Laravel App</h1>
        <p class="lead mt-3">
            Create posts, schedule content, and manage everything from one dashboard.
        </p>

        <div class="mt-4">
            <a href="/register" class="btn btn-light btn-lg me-3">Get Started</a>
            <a href="/login" class="btn btn-outline-light btn-lg">Login</a>
        </div>
    </div>
</section>

<!-- Features -->
<section class="container my-5">
    <div class="row text-center">
        <div class="col-md-4">
            <h4>📊 Dashboard</h4>
            <p>Manage all your posts in one place.</p>
        </div>

        <div class="col-md-4">
            <h4>✍ Create Posts</h4>
            <p>Write and publish posts easily.</p>
        </div>

        <div class="col-md-4">
            <h4>⏰ Schedule Posts</h4>
            <p>Schedule content for future publishing.</p>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2>Ready to get started?</h2>
        <p class="mb-4">Create your free account now.</p>
        <a href="/register" class="btn btn-primary btn-lg">Sign Up Free</a>
    </div>
</section>

@endsection
