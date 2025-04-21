<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //to show all blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }
    //to create a new blog
    public function create()
    {
        return view('blogs.create');
    }
    //to store a new blog   
    public function store(Request $request)
    {
        $validated=$request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        Blog::create( $validated);
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
      
        

    }

    //to show a single blog
    public function show($id)
{
    $blog = Blog::findOrFail($id);
    return view('blogs.show', compact('blog'));
}

}
