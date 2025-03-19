<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * show all students, filter by college if needed.
     * sorting works too (A-Z or Z-A).
     */
    public function index(Request $request)
    {
        $colleges = College::all();
        $collegeId = $request->input('college_id');
        $sortBy = $request->input('sort_by', 'asc');

        $students = Student::when($collegeId, fn($query) => $query->where('college_id', $collegeId))
            ->orderBy('name', $sortBy)
            ->get();

        return view('students.index', compact('students', 'colleges'));
    }

    public function create()
    {
        $colleges = College::all();
        return view('students.create', compact('colleges'));
    }

    //save a new student. email must be unique obviously

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email',
            'phone' => 'required',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $colleges = College::all();
        return view('students.edit', compact('student', 'colleges'));
    }

    //update student data. Keeps email unique too.
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email,' . $student->id,
            'phone' => 'required',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
