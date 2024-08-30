@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<h1>Portfolio</h1>
<div class="portfolio-filter">
    <button>All</button>
    <button>Web Development</button>
    <button>Design</button>
</div>

<div class="portfolio-list">
    <div class="portfolio-item">
        <img src="{{ asset('images/portfolio1.jpg') }}" alt="Project 1">
        <h2>Project 1</h2>
        <p>Web Development</p>
    </div>

    <div class="portfolio-item">
        <img src="{{ asset('images/portfolio2.jpg') }}" alt="Project 2">
        <h2>Project 2</h2>
        <p>Design</p>
    </div>
</div>
@endsection
