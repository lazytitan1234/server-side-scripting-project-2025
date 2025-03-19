<form action="{{ route('students.index') }}" method="GET" class="mb-4">
    <div class="input-group">
        {{-- dropdown to filter students by college --}}
        <select name="college_id" onchange="this.form.submit()" class="form-select">
            <option value="">All Colleges</option>
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}" {{ request('college_id') == $college->id ? 'selected' : '' }}>
                    {{ $college->name }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-outline-secondary">Filter</button>
    </div>
</form>
