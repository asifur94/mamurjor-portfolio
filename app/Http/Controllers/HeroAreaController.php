<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroArea;

class HeroAreaController extends Controller
{
    public function hero()
{

    $heroArea = HeroArea::first();
    return view('admin.content.heroArea.index', compact('heroArea'));
}



    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'background_image' => 'nullable|image|max:2048',
            'button_text' => 'nullable|string|max:50',
            'file' => 'nullable|file|max:2048',
        ]);


        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
        }


        HeroArea::create([
            'heading' => $request->input('heading'),
            'subheading' => $request->input('subheading'),
            'background_image' => $filePath,
            'button_text' => $request->input('button_text'),
        ]);

        return redirect()->route('hero')->with('success', 'Hero area saved successfully!');
    }

    public function edit()
    {
        $heroArea = HeroArea::first();
        return view('admin/content/heroArea/edit', compact('heroArea'));
    }

    public function update(Request $request)
{
    $heroArea = HeroArea::first();

    // Validate input
    $request->validate([
        'heading' => 'required|string|max:255',
        'subheading' => 'nullable|string|max:255',
        'background_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'button_text' => 'nullable|string|max:255',
        'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
    ]);

    // Handle Background Image Upload
    if ($request->hasFile('background_image')) {
        $backgroundImagePath = $request->file('background_image')->store('hero_areas', 'public');
        $heroArea->background_image = $backgroundImagePath;
    }


    if ($request->hasFile('resume')) {
        $resumePath = $request->file('resume')->store('resumes', 'public');
        $heroArea->file_path = $resumePath;
    }

    // Update fields
    $heroArea->heading = $request->input('heading');
    $heroArea->subheading = $request->input('subheading');
    $heroArea->button_text = $request->input('button_text');

    $heroArea->save();

    return redirect()->route('heroEdit')->with('success', 'Hero area updated successfully!');
}

}
