@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $student->phone }}" required>

        <label>Date of Birth:</label>
        <input type="date" name="dob" value="{{ $student->dob }}" required>

        <label>College:</label>
        <select name="college_id" required>
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}" {{ $student->college_id == $college->id ? 'selected' : '' }}>
                    {{ $college->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Update</button>
    </form>
@endsection
