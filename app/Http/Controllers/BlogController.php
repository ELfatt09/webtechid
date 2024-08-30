<?php

// app/Http/Controllers/BlogController.php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); // Retrieve all blogs
        return view('blog.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id); // Find the specific blog by ID
        return view('blog.show', compact('blog'));
    }
}

