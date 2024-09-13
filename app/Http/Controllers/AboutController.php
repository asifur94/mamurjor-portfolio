<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.content.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.content.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:300',
            'sub_title' => 'required|max:300',
            'description' => 'required',
            'btn_text' => 'required|max:300',
            'btn_url' => 'required',
            'birth_date' => 'required',
            'email' => 'required|email|max:300',
            'phone' => 'required',
            'skype_username' => 'required|max:300',
            'address' => 'required',
        ]);

        About::create($request->all());

        return redirect()->route('about.index')->with('success', 'About entry created successfully.');
    }

    public function show($id)
    {
        $about = About::findOrFail($id);
        return view('admin.content.about.show', compact('about'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.content.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:300',
            'sub_title' => 'required|max:300',
            'description' => 'required',
            'btn_text' => 'required|max:300',
            'btn_url' => 'required',
            'birth_date' => 'required',
            'email' => 'required|email|max:300',
            'phone' => 'required',
            'skype_username' => 'required|max:300',
            'address' => 'required',
        ]);

        $about = About::findOrFail($id);
        $about->update($request->all());

        return redirect()->route('about.index')->with('success', 'About entry updated successfully.');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('about.index')->with('success', 'About entry deleted successfully.');
    }
}

