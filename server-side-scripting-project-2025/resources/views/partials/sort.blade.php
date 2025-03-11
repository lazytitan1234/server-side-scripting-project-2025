<div class="mb-4">
    <a href="{{ route('students.index', ['sort_by' => 'asc']) }}" class="btn btn-outline-primary me-2">Sort by Name (A-Z)</a>
    <a href="{{ route('students.index', ['sort_by' => 'desc']) }}" class="btn btn-outline-primary">Sort by Name (Z-A)</a>
</div>