<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    // Display all skills
    public function index()
    {
        $skills = Skill::all();
        return view('admin.content.skill.index', compact('skills'));
    }

    // Show the form for creating a new skill
    public function create()
    {
        return view('admin.content.skill.create');
    }

    // Store a newly created skill in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'progress' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($request->all());

        return redirect()->route('skills.index')->with('success', 'Skill created successfully.');
    }

    // Show the form for editing a specific skill
    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.content.skill.edit', compact('skill'));
    }

    // Update a specific skill
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'progress' => 'required|integer|min:0|max:100',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update($request->all());

        return redirect()->route('skills.index')->with('success', 'Skill updated successfully.');
    }

    // Delete a specific skill
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Skill deleted successfully.');
    }
}

