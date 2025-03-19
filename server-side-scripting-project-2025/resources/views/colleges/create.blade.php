@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Add College</h1>

    {{-- reusing the form partial to reduce redundency --}}
    @include('partials.college_form')

</div>
@endsection
