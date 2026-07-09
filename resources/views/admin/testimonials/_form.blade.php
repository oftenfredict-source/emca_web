<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Name *</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $testimonial->name ?? '') }}" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Role / Title</label>
        <input type="text" name="role" class="form-control" value="{{ old('role', $testimonial->role ?? '') }}">
    </div>
    <div class="col-12">
        <label class="form-label">Testimonial *</label>
        <textarea name="content" class="form-control" rows="4" required>{{ old('content', $testimonial->content ?? '') }}</textarea>
    </div>
    <div class="col-md-4">
        <label class="form-label">Rating (1-5)</label>
        <select name="rating" class="form-select">
            @for($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}" {{ old('rating', $testimonial->rating ?? 5) == $i ? 'selected' : '' }}>{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
            @endfor
        </select>
    </div>
    <div class="col-md-4">
        <label class="form-label">Sort Order</label>
        <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $testimonial->sort_order ?? 0) }}" min="0">
    </div>
    <div class="col-md-4">
        <label class="form-label">Photo (optional)</label>
        <input type="file" name="image" class="form-control" accept="image/*">
    </div>
    <div class="col-12">
        <div class="form-check">
            <input type="checkbox" name="is_active" value="1" class="form-check-input" id="is_active"
                {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Show on website</label>
        </div>
    </div>
</div>
