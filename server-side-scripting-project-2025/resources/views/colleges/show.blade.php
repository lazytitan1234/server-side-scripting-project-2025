@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">{{ $college->name }}</h1>

    <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title"><strong>Address:</strong> {{ $college->address }}</h5>
        </div>
    </div>

    <a href="{{ route('colleges.index') }}" class="btn btn-secondary mt-3">Back to Colleges</a>
</div>
@endsection
