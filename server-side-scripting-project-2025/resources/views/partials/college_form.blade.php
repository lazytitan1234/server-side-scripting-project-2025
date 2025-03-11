<form action="{{ $action }}" method="POST" class="mb-4">
    @csrf
    @if ($method === 'PUT')
        @method('PUT')
    @endif
    <div class="mb-3">
        <label for="name" class="form-label">College Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $college->name ?? '' }}" required>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ $college->address ?? '' }}" required>
    </div>
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
</form>