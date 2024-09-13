<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();
        return view('admin.content.resume.index', compact('resumes'));
    }

    public function create()
    {
        return view('admin.content.resume.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'skill_year' => 'required|max:300',
            'description' => 'required|max:300',
            'designation' => 'required|max:300',
        ]);

        Resume::create($request->all());
        return redirect()->route('resume.index')->with('success', 'Resume created successfully');
    }

    public function edit($id)
    {
        $resume = Resume::findOrFail($id);
        return view('admin.content.resume.edit', compact('resume'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'skill_year' => 'required|max:300',
            'description' => 'required|max:300',
            'designation' => 'required|max:300',
        ]);

        $resume = Resume::findOrFail($id);
        $resume->update($request->all());
        return redirect()->route('resume.index')->with('success', 'Resume updated successfully');
    }

    public function destroy($id)
    {
        $resume = Resume::findOrFail($id);
        $resume->delete();
        return redirect()->route('resume.index')->with('success', 'Resume deleted successfully');
    }
}

