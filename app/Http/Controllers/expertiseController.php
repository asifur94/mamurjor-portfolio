<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\expertise;

class ExpertiseController extends Controller
{
    public function index()
    {
        $expertises = Expertise::all();
        return view('admin.content.expertise.index', compact('expertises'));
    }

    public function create()
    {
        return view('admin.content.expertise.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        Expertise::create($request->all());

        return redirect()->route('expertise.index')->with('success', 'Expertise created successfully.');
    }

    public function edit($id)
    {
        $expertise = Expertise::findOrFail($id);
        return view('admin.content.expertise.edit', compact('expertise'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $expertise = Expertise::findOrFail($id);
        $expertise->update($request->all());

        return redirect()->route('expertise.index')->with('success', 'Expertise updated successfully.');
    }

    public function destroy($id)
    {
        $expertise = Expertise::findOrFail($id);
        $expertise->delete();

        return redirect()->route('expertise.index')->with('success', 'Expertise deleted successfully.');
    }
}


