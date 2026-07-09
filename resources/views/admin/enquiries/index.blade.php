@extends('admin.layouts.app')

@section('title', 'Enquiries')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Customer Enquiries</h2>
</div>

<div class="table-card mb-3">
    <form method="GET" class="row g-2">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Search name, email, message..." value="{{ request('search') }}">
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select">
                <option value="">All statuses</option>
                @foreach($statuses as $value => $label)
                    <option value="{{ $value }}" {{ request('status') === $value ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Filter</button>
        </div>
    </form>
</div>

<div class="table-card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Source</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($enquiries as $enquiry)
                    <tr class="{{ $enquiry->status === 'new' ? 'table-warning' : '' }}">
                        <td>{{ $enquiry->name }}</td>
                        <td>{{ $enquiry->email }}</td>
                        <td>{{ $enquiry->source }}</td>
                        <td><span class="badge bg-{{ $enquiry->status === 'new' ? 'danger' : 'secondary' }}">{{ ucfirst($enquiry->status) }}</span></td>
                        <td>{{ $enquiry->created_at->format('M d, Y H:i') }}</td>
                        <td>
                            <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="btn btn-sm btn-outline-primary">View</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-muted text-center py-4">No enquiries found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-3">{{ $enquiries->links() }}</div>
</div>
@endsection
