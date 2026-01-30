<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Contact;


use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all(); // Get all groups from DB
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Group::create($data);

        return redirect()->route('groups.index')->with('success', 'Group created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contacts = Contact::where('group_id',$id)->get();
        $group = Group::find($id); 
        // $group = Group::find($id); 
        // dd(var_dump( $contacts)); 
        return view('groups.view' , compact('contacts','group'));
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $group = Group::find($id);
        return view('groups.edit', compact('group'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $group = Group::FindOrfail($id);
        $group->update($data);

        return redirect()->route('groups.index')->with('success', 'group updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Group::find($id)->delete();
        return redirect()->route('groups.index')->with('succes', 'group deleted succesfully!');
    }

    public function add()
    {
       
        return view('groups.add');
       
    }
}
