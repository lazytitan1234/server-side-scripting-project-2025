@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Colleges</h1>
    
    <a href="{{ route('colleges.create') }}" class="btn btn-primary mb-3">Add College</a>

    {{-- Include sorting (no filtering needed for colleges) --}}
    @include('partials.sort')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($colleges as $college)
                <tr>
                    <td>{{ $college->name }}</td>
                    <td>{{ $college->address }}</td>
                    <td>
                        <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('colleges.destroy', $college->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No colleges found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
