<div class="row g-3">
    <div class="col-md-8">
        <label class="form-label">Title *</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $post->title ?? '') }}" required>
    </div>
    <div class="col-md-4">
        <label class="form-label">Author</label>
        <input type="text" name="author" class="form-control" value="{{ old('author', $post->author ?? auth()->user()->name) }}">
    </div>
    <div class="col-12">
        <label class="form-label">Excerpt</label>
        <textarea name="excerpt" class="form-control" rows="2">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
    </div>
    <div class="col-12">
        <label class="form-label">Content *</label>
        <textarea name="content" class="form-control" rows="12" required>{{ old('content', $post->content ?? '') }}</textarea>
    </div>
    <div class="col-md-6">
        <label class="form-label">Featured Image</label>
        <input type="file" name="image" class="form-control" accept="image/*">
        @if(!empty($post?->image))
            <small class="text-muted">Current: {{ $post->image }}</small>
        @endif
    </div>
    <div class="col-md-3">
        <label class="form-label">Publish Date</label>
        <input type="datetime-local" name="published_at" class="form-control"
            value="{{ old('published_at', isset($post) && $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}">
    </div>
    <div class="col-md-3 d-flex align-items-end">
        <div class="form-check mb-2">
            <input type="checkbox" name="is_published" value="1" class="form-check-input" id="is_published"
                {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Publish immediately</label>
        </div>
    </div>
</div>
