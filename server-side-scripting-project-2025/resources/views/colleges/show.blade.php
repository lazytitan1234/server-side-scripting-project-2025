@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">{{ $college->name }}</h1>

    <div class="card shadow-lg">
        <div class="card-body">
            {{-- basic college details --}}
            <h5 class="card-title"><strong>Location:</strong> {{ $college->location }}</h5>
            <p class="card-text"><strong>Established:</strong> {{ $college->established_at ?? 'N/A' }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $college->description ?? 'No description available' }}</p>
        </div>
    </div>

    {{-- back button to return to the college list --}}
    <a href="{{ route('colleges.index') }}" class="btn btn-secondary mt-3">Back to Colleges</a>
</div>
@endsection
