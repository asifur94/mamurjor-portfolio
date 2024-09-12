<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // List all blog posts



    public function index()
    {
        $blogs = Blog::with('author', 'category')->get();
        return view('admin.content.blog.index',  compact('blogs'));
    }

    // Show the form to create a new blog post
    public function create()
    {
        $categories = BlogCategory::all(); // Get all categories
        return view('admin.content.blog.create', compact('categories'));
    }

    // Store a new blog post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:blog_categories,id',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title); // Automatically generate slug from title
        $blog->content = $request->content;
        $blog->author_id = auth()->id(); // Automatically set the current logged-in user as author
        $blog->category_id = $request->category_id;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $blog->image = basename($imagePath);
        }

        $blog->save();

        return redirect()->route('blogs')->with('success', 'Blog created successfully.');
    }

    // Show the form to edit a specific blog post
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all(); // Get all categories
        return view('admin.content.blog.edit', compact('blog', 'categories'));
    }

    // Update a specific blog post
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:blog_categories,id',
        ]);

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title); // Automatically update slug from title
        $blog->content = $request->content;
        $blog->author_id = auth()->id(); // Automatically set the current logged-in user as author
        $blog->category_id = $request->category_id;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image) {
                Storage::delete('public/images/' . $blog->image);
            }
            $imagePath = $request->file('image')->store('public/images');
            $blog->image = basename($imagePath);
        }

        $blog->save();

        return redirect()->route('blogs')->with('success', 'Blog updated successfully.');
    }

    // Delete a specific blog post
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete image if exists
        if ($blog->image) {
            Storage::delete('public/images/' . $blog->image);
        }

        $blog->delete();

        return redirect()->route('blogs')->with('success', 'Blog deleted successfully.');
    }

    // Display a specific blog post
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.content.blog.view', compact('blog'));
    }
}
