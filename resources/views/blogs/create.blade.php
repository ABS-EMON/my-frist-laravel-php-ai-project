@extends('layouts.app')
@section('title','Create Blog')
@section('content')

<style>
    body {
        background-color: #f7f9fc;
        font-family: Arial, sans-serif;
        color: #333;
    }

    .blog-form-container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .blog-form-container h1 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 28px;
        color: #2c3e50;
    }

    .alert-danger {
        background-color: #ffe5e5;
        color: #c0392b;
        border-left: 4px solid #e74c3c;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 6px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        box-sizing: border-box;
    }

    input[type="text"]:focus,
    textarea:focus {
        border-color: #3498db;
        outline: none;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.4);
    }

    .btn {
        display: block;
        width: 100%;
        background-color: #3498db;
        color: white;
        padding: 12px;
        font-size: 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #2980b9;
    }
</style>

<div class="blog-form-container">
    <h1>Create New Blog</h1>

    @if ($errors->any())  
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>    
    @endif  

    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn">Create Blog</button>
    </form>
</div>
@endsection
