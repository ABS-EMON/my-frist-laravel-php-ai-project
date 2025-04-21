@extends('layouts.app')
@section('title', $blog->title)

@section('content')
<style>
    .blog-container {
        max-width: 800px;
        margin: 50px auto;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: 'Georgia', serif;
        line-height: 1.8;
    }

    .blog-title {
        text-align: center;
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 30px;
        color: #2c3e50;
    }

    .blog-content {
        font-size: 18px;
        color: #333;
        text-align: justify;
        margin-bottom: 40px;
        white-space: pre-line; /* keeps line breaks */
    }

    .back-link {
        display: block;
        text-align: center;
        font-size: 16px;
        text-decoration: none;
        color: #3498db;
        margin-top: 20px;
        transition: 0.3s ease;
    }

    .back-link:hover {
        text-decoration: underline;
        color: #1d6fa5;
    }
</style>

<div class="blog-container">
    <h1 class="blog-title">{{ $blog->title }}</h1>
    <p class="blog-content">{{ $blog->description }}</p>

    <a href="{{ route('blogs.index') }}" class="back-link">← Back to all blogs</a>
</div>
@endsection
