<form action="{{ isset($college) ? route('colleges.update', $college->id) : route('colleges.store') }}" method="POST">
    @csrf
    @if (isset($college))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">College Name</label>
        <input type="text" name="name" id="name" class="form-control" 
               value="{{ old('name', $college->name ?? '') }}" required>
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" class="form-control" 
               value="{{ old('address', $college->address ?? '') }}" required>
        @error('address') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        {{ isset($college) ? 'Update College' : 'Add College' }}
    </button>
</form>
