@extends('admin.layouts.app')

@section('title', $activeGroupLabel.' · Site Images')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Site Images</p>
            <h1 class="admin-dash-title">{{ $activeGroupLabel }}</h1>
            <p class="admin-dash-subtitle">
                @if ($activeGroup === 'hero')
                    Choose Image slides or YouTube video for the homepage hero, then manage slide images below.
                @else
                    {{ $images->count() }} image{{ $images->count() === 1 ? '' : 's' }} in this group. Choose another group from the sidebar.
                @endif
            </p>
        </div>
    </div>

    @if ($activeGroup === 'hero')
        <div class="admin-panel mb-4">
            <div class="admin-panel-head">
                <div>
                    <h2>Hero type</h2>
                    <p>Switch between image slideshow and YouTube background video.</p>
                </div>
            </div>

            <form action="{{ route('admin.site-images.hero-settings') }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-md-4">
                    <label class="form-label">Homepage hero</label>
                    <select name="hero_mode" id="hero_mode" class="form-select" required>
                        <option value="slides" @selected(old('hero_mode', $heroMode) === 'slides')>Image slides</option>
                        <option value="video" @selected(old('hero_mode', $heroMode) === 'video')>YouTube video</option>
                    </select>
                </div>

                <div class="col-md-8" id="hero-youtube-field">
                    <label class="form-label" for="hero_youtube_url">YouTube link</label>
                    <input
                        type="url"
                        name="hero_youtube_url"
                        id="hero_youtube_url"
                        class="form-control @error('hero_youtube_url') is-invalid @enderror"
                        value="{{ old('hero_youtube_url', $heroYoutubeUrl) }}"
                        placeholder="https://www.youtube.com/watch?v=..."
                    >
                    @error('hero_youtube_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">
                        Paste a normal YouTube watch / youtu.be / Shorts link. It will play muted and loop like a background video.
                        @if ($heroYoutubeId)
                            Current video ID: <code>{{ $heroYoutubeId }}</code>
                        @endif
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Save hero settings
                    </button>
                </div>
            </form>
        </div>
    @endif

    <div class="admin-panel">
        @if ($activeGroup === 'hero')
            <div class="admin-panel-head">
                <div>
                    <h2>Hero slide images</h2>
                    <p>Used when Hero type is Image slides. Slide 1 is also used as the video poster fallback.</p>
                </div>
            </div>
        @endif

        @if ($images->isEmpty())
            <div class="admin-empty">
                <i class="bi bi-images"></i>
                <p>No images in this group yet.</p>
            </div>
        @else
            <div class="row g-3">
                @foreach ($images as $image)
                    @php
                        $slot = config('site-images.slots.'.$image->key, []);
                        $recommendedWidth = (int) ($slot['width'] ?? 0);
                        $recommendedHeight = (int) ($slot['height'] ?? 0);
                    @endphp
                    <div class="col-md-6 col-xl-4">
                        <div class="border rounded-3 p-3 h-100 bg-white">
                            <div class="ratio ratio-16x9 mb-3 bg-light rounded overflow-hidden">
                                <img
                                    src="{{ $image->url() }}?v={{ $image->updated_at?->timestamp }}"
                                    alt="{{ $image->label }}"
                                    class="w-100 h-100"
                                    style="object-fit: {{ $image->group === 'brand' ? 'contain' : 'cover' }};"
                                >
                            </div>
                            <div class="d-flex justify-content-between align-items-start gap-2 mb-2">
                                <div>
                                    <h3 class="h6 mb-1">{{ $image->label }}</h3>
                                    @if ($recommendedWidth > 0 && $recommendedHeight > 0)
                                        <p class="small mb-1">
                                            <span class="badge text-bg-light border">
                                                <i class="bi bi-aspect-ratio"></i>
                                                {{ $recommendedWidth }} × {{ $recommendedHeight }} px
                                            </span>
                                        </p>
                                    @endif
                                    <p class="small text-muted mb-0">
                                        @if ($image->isCustom())
                                            Custom upload
                                        @else
                                            Default image
                                        @endif
                                    </p>
                                </div>
                                @if ($image->isCustom())
                                    <form action="{{ route('admin.site-images.restore', $image) }}" method="POST" onsubmit="return confirm('Restore the default image for {{ $image->label }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-secondary" title="Restore default">
                                            <i class="bi bi-arrow-counterclockwise"></i>
                                        </button>
                                    </form>
                                @endif
                            </div>

                            <form action="{{ route('admin.site-images.update', $image) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-2">
                                    <input type="file" name="image" class="form-control form-control-sm" accept="image/*" required>
                                    @if ($recommendedWidth > 0 && $recommendedHeight > 0)
                                        <div class="form-text">Recommended size: {{ $recommendedWidth }} × {{ $recommendedHeight }} px</div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary w-100">
                                    <i class="bi bi-upload"></i> Upload new image
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection

@if ($activeGroup === 'hero')
@push('scripts')
<script>
    (function () {
        var mode = document.getElementById('hero_mode');
        var field = document.getElementById('hero-youtube-field');
        var input = document.getElementById('hero_youtube_url');
        if (!mode || !field || !input) return;

        function sync() {
            var isVideo = mode.value === 'video';
            field.style.opacity = isVideo ? '1' : '0.55';
            input.required = isVideo;
        }

        mode.addEventListener('change', sync);
        sync();
    })();
</script>
@endpush
@endif
