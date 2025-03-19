<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Get all the colleges sort by name if requested
     * Defaults to A-Z unless otherwise speccified
     */
    public function index(Request $request)
    {
        $sortBy = $request->input('sort_by', 'asc');
        $colleges = College::orderBy('name', $sortBy)->get();
        return view('colleges.index', compact('colleges'));
    }

    public function create()
    {
        return view('colleges.create');
    }

    //Add a new college throws an error if name is already used
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:colleges|max:255',
            'address' => 'required',
        ]);

        College::create($request->all());
        return redirect()->route('colleges.index')->with('success', 'College added successfully!');
    }

    public function show(College $college)
    {
        return view('colleges.show', compact('college'));
    }

    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    //update college info. make sure name is still unique
    public function update(Request $request, College $college)
    {
        $request->validate([
            'name' => 'required|unique:colleges,name,' . $college->id,
            'address' => 'required',
        ]);

        $college->update($request->all());
        return redirect()->route('colleges.index')->with('success', 'College updated successfully!');
    }

    /**
     * remove a college from db
     * if students are linked to it, better check how that’s handled
     */
    public function destroy(College $college)
    {
        $college->delete();
        return redirect()->route('colleges.index')->with('success', 'College deleted successfully!');
    }
}
