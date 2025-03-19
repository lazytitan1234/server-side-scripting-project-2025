<div class="mb-4">
    <div class="btn-group">
        {{-- sort A-Z --}}
        <a 
            href="{{ route(request()->route()->getName(), array_merge(request()->query(), ['sort_by' => 'asc'])) }}" 
            class="btn btn-outline-primary {{ request('sort_by') == 'asc' ? 'active' : '' }}"
        >
            Sort by Name (A-Z)
        </a>

        {{-- sort Z-A --}}
        <a 
            href="{{ route(request()->route()->getName(), array_merge(request()->query(), ['sort_by' => 'desc'])) }}" 
            class="btn btn-outline-primary {{ request('sort_by') == 'desc' ? 'active' : '' }}"
        >
            Sort by Name (Z-A)
        </a>
    </div>
</div>
