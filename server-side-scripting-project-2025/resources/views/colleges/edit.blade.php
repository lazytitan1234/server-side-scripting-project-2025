@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Edit College</h1>

    <div class="card shadow-lg p-4">
        <form action="{{ route('colleges.update', $college->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">College Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $college->name }}" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $college->location }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $college->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update College</button>
            <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
