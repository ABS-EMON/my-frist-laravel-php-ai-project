@extends('layouts.app')
@section('title','Create Blog')
@section('content') 

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9f9f9;
        color: #333;
        padding: 20px;
    }

    .blog-container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    h1.page-title {
        text-align: center;
        color: #222;
        margin-bottom: 30px;
    }

    .alert-danger {
        background-color: #ffe5e5;
        color: #a94442;
        border-left: 5px solid #e74c3c;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
    }

    ul.blog-list {
        list-style: none;
        padding: 0;
    }

    ul.blog-list li {
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #ddd;
    }

    ul.blog-list h2 {
        color: #2c3e50;
        margin-bottom: 10px;
    }

    ul.blog-list p {
        color: #555;
        font-size: 16px;
    }

    .no-blogs {
        text-align: center;
        font-style: italic;
        color: #888;
    }

    .btn-primary {
        display: inline-block;
        margin-top: 30px;
        background-color: #3498db;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }
    .button-container {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}


    .btn-primary:hover {
        background-color: #e74c3c;
    }
</style>

<div class="blog-container">
    <h1 class="page-title">This is the First Blog Post</h1>

    @if ($errors->any())  
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>
    @endif

    @if ($blogs->isEmpty())
        <p class="no-blogs">No blogs available.</p>
    @else
    <ul class="blog-list">
    @foreach ($blogs as $blog)
        <li>
            <h2>
                <a href="{{ route('blogs.show', $blog->id) }}" style="text-decoration: none; color: #2c3e50;">
                    {{ $blog->title }}
                </a>
            </h2>
              <p>{{ \Illuminate\Support\Str::limit($blog->description, 100) }}</p>
        </li>
        @endforeach 
    </ul>
    @endif

    <div class="button-container">
    <a href="{{ route('blogs.create') }}" class="btn-primary">Create Blog</a>
</div>
</div>
@endsection


