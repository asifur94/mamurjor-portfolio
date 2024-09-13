<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Counter;


class CounterController extends Controller
{
    // Display a listing of the counters
    public function index()
    {
        $counters = Counter::all();
        return view('admin.content.counter.index', compact('counters'));
    }

    // Show the form for creating a new counter
    public function create()
    {
        return view('admin.content.counter.create');
    }

    // Store a newly created counter in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required|integer',
        ]);

        Counter::create($request->all());

        return redirect()->route('counters.index')
                         ->with('success', 'Counter created successfully.');
    }

    // Show the form for editing the specified counter
    public function edit($id)
    {
        $counter = Counter::findOrFail($id);
        return view('admin.content.counter.edit', compact('counter'));
    }

    // Update the specified counter in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required|integer',
        ]);

        $counter = Counter::findOrFail($id);
        $counter->update($request->all());

        return redirect()->route('counters.index')
                         ->with('success', 'Counter updated successfully.');
    }

    // Remove the specified counter from storage
    public function destroy($id)
    {
        $counter = Counter::findOrFail($id);
        $counter->delete();

        return redirect()->route('counters.index')
                         ->with('success', 'Counter deleted successfully.');
    }
}

