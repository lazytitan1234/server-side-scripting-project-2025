@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Add Student</h1>
    @include('partials.student_form', ['colleges' => $colleges])
</div>
@endsection
