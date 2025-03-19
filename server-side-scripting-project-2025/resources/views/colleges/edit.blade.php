@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit College</h1>
    @include('partials.college_form', ['college' => $college])
</div>
@endsection
