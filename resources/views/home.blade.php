@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="banner" style="background-image: url('{{ asset('images/banner.jpg') }}');">
        <h1>Welcome to WebTech Indonesia</h1>
        <p>Explore our services, portfolio, and blog posts.</p>
    </section>

    <section class="gallery">
        <h2>Image and Video Gallery</h2>
<!-- home.blade.php -->
<div class="gallery-grid">
    @foreach ($images as $image)
        <div class="gallery-item">
            <img src="{{ asset($image) }}" alt="Sample Image" class="img-fluid">
        </div>
    @endforeach
</div>

    </section>

    <section class="about">
        <h2>About Us</h2>
        <p>This website is dedicated to showcasing our latest projects, blogs, and much more.</p>
    </section>

    <section class="news">
        <h2>Latest News</h2>
        <!-- Dynamically load news items -->
    </section>

    <section class="services">
        <h2>Our Services</h2>
        <!-- Service descriptions with icons or images -->
    </section>

    <section class="portfolio">
        <h2>Our Portfolio</h2>
        <!-- Showcase recent works with filters -->
    </section>

    <section class="testimonials">
        <h2>Testimonials</h2>
        <!-- Testimonials carousel or list -->
    </section>

    <section class="search">
        <h2>Search News</h2>
        <input type="text" placeholder="Search...">
    </section>

    <section class="social-media">
        <h2>Follow Us</h2>
        <a href="https://facebook.com" target="_blank">Facebook</a>
        <a href="https://twitter.com" target="_blank">Twitter</a>
        <a href="https://instagram.com" target="_blank">Instagram</a>
    </section>
@endsection
