<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:colleges|max:255',
            'address' => 'required',
        ]);

        College::create($request->all());
        return redirect()->route('colleges.index')
                        ->with('success', 'College added successfully!');
    }

    public function show(College $college)
    {
        return view('colleges.show', compact('college'));
    }

    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    public function update(Request $request, College $college)
    {
        $request->validate([
            'name' => 'required|unique:colleges,name,' . $college->id,
            'address' => 'required',
        ]);

        $college->update($request->all());
        return redirect()->route('colleges.index')->with('success', 'College updated successfully!');
    }

    public function destroy(College $college)
    {
        $college->delete();
        return redirect()->route('colleges.index')->with('success', 'College deleted successfully!');
    }
}

