@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<h1>Blog</h1>
<div class="blog-list">
    <article class="blog-item">
        <img src="{{ asset('images/blog1.jpg') }}" alt="Blog 1">
        <h2>Blog Title 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Author: John Doe | Date: August 30, 2024 | Views: 150</p>
        <a href="/blog/1">Read more</a>
    </article>

    <article class="blog-item">
        <img src="{{ asset('images/blog2.jpg') }}" alt="Blog 2">
        <h2>Blog Title 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Author: Jane Doe | Date: August 29, 2024 | Views: 120</p>
        <a href="/blog/2">Read more</a>
    </article>
</div>

<aside class="sidebar">
    <h3>Categories</h3>
    <ul>
        <li>Web Development</li>
        <li>SEO</li>
        <li>Design</li>
    </ul>

    <h3>Popular Posts</h3>
    <ul>
        <li>Popular Blog Post 1</li>
        <li>Popular Blog Post 2</li>
    </ul>
</aside>
@endsection
