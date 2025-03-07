@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone:</label>
        <input type="text" name="phone" required>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required>

        <label>College:</label>
        <select name="college_id" required>
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}">{{ $college->name }}</option>
            @endforeach
        </select>

        <button type="submit">Save</button>
    </form>
@endsection
