@extends('admin.layouts.app')

@section('title', 'Testimonials')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Testimonials</h2>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i> Add Testimonial
    </a>
</div>

<div class="table-card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Rating</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->role }}</td>
                        <td>{{ str_repeat('★', $testimonial->rating) }}</td>
                        <td>
                            <span class="badge bg-{{ $testimonial->is_active ? 'success' : 'secondary' }}">
                                {{ $testimonial->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this testimonial?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-muted text-center py-4">No testimonials yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-3">{{ $testimonials->links() }}</div>
</div>
@endsection
