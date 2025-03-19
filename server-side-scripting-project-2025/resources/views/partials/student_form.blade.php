<form action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}" method="POST">
    @csrf
    @if (isset($student))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Student Name</label>
        <input type="text" name="name" id="name" class="form-control" 
               value="{{ old('name', $student->name ?? '') }}" required>
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" 
               value="{{ old('email', $student->email ?? '') }}" required>
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control" 
               value="{{ old('phone', $student->phone ?? '') }}" required>
        @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" 
               value="{{ old('dob', $student->dob ?? '') }}" required>
        @error('dob') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label for="college_id" class="form-label">College</label>
        <select name="college_id" id="college_id" class="form-control" required>
            <option value="">Select College</option>
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}" 
                    {{ old('college_id', $student->college_id ?? '') == $college->id ? 'selected' : '' }}>
                    {{ $college->name }}
                </option>
            @endforeach
        </select>
        @error('college_id') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        {{ isset($student) ? 'Update Student' : 'Add Student' }}
    </button>
</form>
