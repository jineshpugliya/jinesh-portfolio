<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // Show all blogs
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blog.index', compact('blogs'));
    }

    // Show a single blog post
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }

    // Admin: Show all blogs
    public function adminIndex()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs', compact('blogs'));
    }

    // Store a new blog post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return redirect()->route('admin.blogs')->with('success', 'Blog post added successfully!');
    }

    // Update an existing blog post
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->only('title', 'content'));

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs', 'public');
            $blog->save();
        }

        return redirect()->route('admin.blogs')->with('success', 'Blog post updated successfully!');
    }

    // Delete a blog post
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs')->with('success', 'Blog post deleted successfully!');
    }
}
