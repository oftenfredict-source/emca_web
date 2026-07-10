@extends('admin.layouts.app')

@section('title', 'Enquiry Details')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Enquiry</p>
            <h1 class="admin-dash-title">{{ $enquiry->name }}</h1>
            <p class="admin-dash-subtitle">
                Received {{ $enquiry->created_at->format('F d, Y \a\t H:i') }}
                · {{ ucfirst($enquiry->source) }}
            </p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.enquiries.index') }}" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            <a href="mailto:{{ $enquiry->email }}" class="btn btn-light btn-sm">
                <i class="bi bi-reply"></i> Reply by email
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4">
        <div class="col-lg-8">
            <div class="admin-panel">
                <div class="admin-panel-head">
                    <div>
                        <h2>Message details</h2>
                        <p>Customer contact information and message</p>
                    </div>
                    <span class="admin-status admin-status--{{ $enquiry->status === 'new' ? 'new' : 'muted' }}">
                        {{ ucfirst($enquiry->status) }}
                    </span>
                </div>

                <div class="admin-detail-grid">
                    <div class="admin-detail-item">
                        <span class="admin-detail-label">Name</span>
                        <strong>{{ $enquiry->name }}</strong>
                    </div>
                    <div class="admin-detail-item">
                        <span class="admin-detail-label">Email</span>
                        <strong><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></strong>
                    </div>
                    @if($enquiry->phone)
                        <div class="admin-detail-item">
                            <span class="admin-detail-label">Phone</span>
                            <strong><a href="tel:{{ preg_replace('/\s+/', '', $enquiry->phone) }}">{{ $enquiry->phone }}</a></strong>
                        </div>
                    @endif
                    @if($enquiry->subject)
                        <div class="admin-detail-item">
                            <span class="admin-detail-label">Subject</span>
                            <strong>{{ $enquiry->subject }}</strong>
                        </div>
                    @endif
                    <div class="admin-detail-item">
                        <span class="admin-detail-label">Source</span>
                        <strong>{{ ucfirst($enquiry->source) }}</strong>
                    </div>
                    <div class="admin-detail-item">
                        <span class="admin-detail-label">Received</span>
                        <strong>{{ $enquiry->created_at->diffForHumans() }}</strong>
                    </div>
                </div>

                <div class="admin-message-box mt-4">
                    <span class="admin-detail-label d-block mb-2 px-3 pt-3">Message</span>
                    <div class="admin-message-body">{{ $enquiry->message }}</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="admin-panel">
                <div class="admin-panel-head">
                    <div>
                        <h2>Manage</h2>
                        <p>Update status and notes</p>
                    </div>
                </div>

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
                        <textarea name="admin_notes" class="form-control" rows="5" placeholder="Internal notes...">{{ old('admin_notes', $enquiry->admin_notes) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-2">
                        <i class="bi bi-check-lg"></i> Update Enquiry
                    </button>
                </form>

                <form action="{{ route('admin.enquiries.destroy', $enquiry) }}" method="POST" onsubmit="return confirm('Delete this enquiry?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger w-100">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
