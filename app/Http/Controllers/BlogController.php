<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        $posts = Blog::latest()->get();
        return view('blog.index', compact('posts'));
    }

    public function show($id) {
        $post = Blog::findOrFail($id);
        return view('blog.show', compact('post'));
    }
}
