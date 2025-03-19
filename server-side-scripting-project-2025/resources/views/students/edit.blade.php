@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Student</h1>

    {{-- using the same form as create, but prefilled with existing student data --}}
    @include('partials.student_form', ['student' => $student, 'colleges' => $colleges])
</div>
@endsection
