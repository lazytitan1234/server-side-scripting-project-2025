@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="mb-4">Welcome to the College & Student Management System</h1>
    
    <p class="lead">Easily manage colleges and students.</p>

    <div class="mt-4">
        <a href="{{ route('colleges.index') }}" class="btn btn-primary btn-lg mx-2">View Colleges</a>
        <a href="{{ route('students.index') }}" class="btn btn-secondary btn-lg mx-2">View Students</a>
    </div>
</div>
@endsection
