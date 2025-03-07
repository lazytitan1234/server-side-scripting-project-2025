@extends('layouts.app')

@section('content')
    <h1>Students</h1>
    <a href="{{ route('students.create') }}">Add Student</a>

    @foreach ($students as $student)
        <div>
            <h3>{{ $student->name }}</h3>
            <p>Email: {{ $student->email }}</p>
            <p>Phone: {{ $student->phone }}</p>
            <p>Date of Birth: {{ $student->dob }}</p>
            <p>College: {{ $student->college->name }}</p>
            <a href="{{ route('students.edit', $student->id) }}">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection