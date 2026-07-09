@extends('admin.layouts.app')

@section('title', 'Enquiry Details')

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.enquiries.index') }}" class="text-decoration-none">&larr; Back to Enquiries</a>
    <h2 class="mt-2">Enquiry from {{ $enquiry->name }}</h2>
</div>

<div class="row g-4">
    <div class="col-lg-8">
        <div class="table-card">
            <dl class="row mb-0">
                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{ $enquiry->name }}</dd>
                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9"><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></dd>
                @if($enquiry->phone)
                    <dt class="col-sm-3">Phone</dt>
                    <dd class="col-sm-9">{{ $enquiry->phone }}</dd>
                @endif
                @if($enquiry->subject)
                    <dt class="col-sm-3">Subject</dt>
                    <dd class="col-sm-9">{{ $enquiry->subject }}</dd>
                @endif
                <dt class="col-sm-3">Source</dt>
                <dd class="col-sm-9">{{ $enquiry->source }}</dd>
                <dt class="col-sm-3">Received</dt>
                <dd class="col-sm-9">{{ $enquiry->created_at->format('F d, Y \a\t H:i') }}</dd>
                <dt class="col-sm-3">Message</dt>
                <dd class="col-sm-9"><div class="border rounded p-3 bg-light">{{ nl2br(e($enquiry->message)) }}</div></dd>
            </dl>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="table-card">
            <h5>Manage</h5>
            <form action="{{ route('admin.enquiries.update', $enquiry) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        @foreach($statuses as $value => $label)
                            <option value="{{ $value }}" {{ $enquiry->status === $value ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Admin Notes</label>
                    <textarea name="admin_notes" class="form-control" rows="4">{{ old('admin_notes', $enquiry->admin_notes) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-2">Update</button>
            </form>
            <form action="{{ route('admin.enquiries.destroy', $enquiry) }}" method="POST" onsubmit="return confirm('Delete this enquiry?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
