<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    // List all blog categories
    public function index()
    {
        $categories = BlogCategory::all();
        return view('admin.content.blog.blogCategory.index', compact('categories'));
    }

    // Show the form for creating a new blog category
    public function create()
    {
        return view('admin.content.blog.blogCategory.create');
    }

    // Store a newly created blog category in the database
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255|unique:blog_categories,category_name',
        ]);

        BlogCategory::create([
            'category_name' => $request->category_name,
            'slug' => Str::slug($request->category_name),
        ]);

        return redirect()->route('blogCategories.index')->with('success', 'Category created successfully.');
    }

    // Show the form for editing the specified blog category
    public function edit($id)
    {
        $category = BlogCategory::findOrFail($id);
        return view('admin.content.blog.blogCategory.edit', compact('category'));
    }

    // Update the specified blog category in the database
    public function update(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);

        $request->validate([
            'category_name' => 'required|string|max:255|unique:blog_categories,category_name,' . $category->id,
        ]);

        $category->update([
            'category_name' => $request->category_name,
            'slug' => Str::slug($request->category_name),
        ]);

        return redirect()->route('blogCategories')->with('success', 'Category updated successfully.');
    }

    // Delete the specified blog category from the database
    public function destroy($id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('blogCategories')->with('success', 'Category deleted successfully.');
    }
}
