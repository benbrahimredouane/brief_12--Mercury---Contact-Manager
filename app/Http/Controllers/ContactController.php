<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:contacts,email',
            'phone' => 'required|regex:/^\+?[0-9]{8,15}$/',
        ]);

        Contact::create($data);

        return redirect()->route('contacts.index')->with('success', 'contact created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $contact = Contact::find($id);
        return view('contacts.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:contacts,email,'. $id,
            'phone' => 'required|regex:/^\+?[0-9]{8,15}$/',
        ]);

        Contact::find($id)->update($data);
       
        return redirect()->route('contacts.index')->with('success', 'contact updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Contact::find($id)->delete();
        return redirect()->route('contacts.index')->with('succes', 'contact deleted succesfully!');
    }
}
