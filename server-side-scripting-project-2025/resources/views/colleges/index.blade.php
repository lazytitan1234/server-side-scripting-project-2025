@extends('layouts.app')

@section('content')
    <h1>Colleges</h1>
    <a href="{{ route('colleges.create') }}">Add College</a>

    @foreach ($colleges as $college)
        <div>
            <h3>{{ $college->name }}</h3>
            <p>{{ $college->address }}</p>
            <a href="{{ route('colleges.edit', $college->id) }}">Edit</a>
            <form action="{{ route('colleges.destroy', $college->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
