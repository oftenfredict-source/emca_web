@extends('admin.layouts.app')

@section('title', 'Team & CVs')

@section('content')
<div class="mb-4">
    <h2>Team Members & CV Management</h2>
    <p class="text-muted">Upload and manage team member CVs and profile details.</p>
</div>

<div class="table-card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>CV</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->role }}</td>
                        <td>
                            @if($member->hasCv())
                                <span class="badge bg-success"><i class="bi bi-file-pdf"></i> Attached</span>
                            @else
                                <span class="badge bg-secondary">No CV</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge bg-{{ $member->is_active ? 'success' : 'secondary' }}">
                                {{ $member->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.team-members.edit', $member) }}" class="btn btn-sm btn-outline-primary">Edit / Upload CV</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-3">{{ $members->links() }}</div>
</div>
@endsection
