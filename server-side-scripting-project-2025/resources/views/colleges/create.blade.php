@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Add a New College</h1>

    <form action="{{ route('colleges.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">College Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
