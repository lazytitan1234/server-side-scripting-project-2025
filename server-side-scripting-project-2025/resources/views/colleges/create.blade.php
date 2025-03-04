@extends('layouts.app')

@section('content')
    <h1>Add College</h1>
    <form action="{{ route('colleges.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Address:</label>
        <input type="text" name="address" required>
        <button type="submit">Save</button>
    </form>
@endsection
