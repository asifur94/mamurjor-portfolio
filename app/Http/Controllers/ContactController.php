<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $contacts = \App\Models\Contact::all();


        return view('admin.content.contact.index', compact('contacts'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);


        \App\Models\Contact::create($validatedData);


        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function destroy($id)
{
    // Find the contact message by its ID and delete it
    $contact = \App\Models\Contact::findOrFail($id);
    $contact->delete();


    return redirect()->back()->with('success', 'Message deleted successfully!');
}

}

