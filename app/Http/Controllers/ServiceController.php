<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // View all services
    public function index()
    {
        $services = Service::all();
        return view('admin.content.service.index', compact('services'));
    }

    // Show form to create a new service
    public function create()
    {
        return view('admin.content.service.create');
    }

    // Store a new service
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Service::create($validatedData);

        return redirect()->route('services')->with('success', 'Service created successfully.');
    }

    // Show form to edit a service
    public function edit(Service $service)
    {
        return view('admin.content.service.edit', compact('service'));
    }

    // Update a service
    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service->update($validatedData);

        return redirect()->route('services')->with('success', 'Service updated successfully.');
    }

    // Delete a service
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services')->with('success', 'Service deleted successfully.');
    }
}

