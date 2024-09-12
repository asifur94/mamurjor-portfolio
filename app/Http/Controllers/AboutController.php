<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.content.about.index');
    }

    public function create()
    {
        // Show form to create a new about entry
    }

    public function store(Request $request)
    {
        // Validate and store a new about entry
    }

    public function show($id)
    {
        // Display a specific about entry
    }

    public function edit($id)
    {
        // Show form to edit an existing about entry
    }

    public function update(Request $request, $id)
    {
        // Validate and update an existing about entry
    }

    public function destroy($id)
    {
        // Delete a specific about entry
    }
}

