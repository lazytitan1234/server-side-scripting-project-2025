@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Student</h1>
    <div class="card p-4">
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone:</label>
                <input type="text" name="phone" class="form-control" value="{{ $student->phone }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Date of Birth:</label>
                <input type="date" name="dob" class="form-control" value="{{ $student->dob }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">College:</label>
                <select name="college_id" class="form-control" required>
                    @foreach ($colleges as $college)
                        <option value="{{ $college->id }}" {{ $student->college_id == $college->id ? 'selected' : '' }}>
                            {{ $college->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
