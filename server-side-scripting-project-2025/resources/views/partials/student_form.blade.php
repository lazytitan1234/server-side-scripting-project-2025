<form action="{{ $action }}" method="POST" class="mb-4">
    @csrf
    @if ($method === 'PUT')
        @method('PUT')
    @endif
    <div class="mb-3">
        <label for="name" class="form-label">Student Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $student->name ?? '' }}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $student->email ?? '' }}" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{ $student->phone ?? '' }}" required>
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" value="{{ $student->dob ?? '' }}" required>
    </div>
    <div class="mb-3">
        <label for="college_id" class="form-label">College</label>
        <select name="college_id" id="college_id" class="form-select" required>
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}" {{ isset($student) && $student->college_id == $college->id ? 'selected' : '' }}>
                    {{ $college->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
</form>