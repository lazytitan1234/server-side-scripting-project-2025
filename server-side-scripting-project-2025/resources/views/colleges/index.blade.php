@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Colleges</h1>
    
    <a href="{{ route('colleges.create') }}" class="btn btn-primary mb-3">Add College</a>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colleges as $college)
                    <tr>
                        <td>{{ $college->id }}</td>
                        <td>{{ $college->name }}</td>
                        <td>{{ $college->location }}</td>
                        <td>
                            <a href="{{ route('colleges.show', $college->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('colleges.destroy', $college->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
