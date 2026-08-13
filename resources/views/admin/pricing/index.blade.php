@extends('admin.layouts.app')

@section('title', ($activeService?->name ?? 'Pricing').' · Pricing')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Pricing</p>
            <h1 class="admin-dash-title">{{ $activeService->name ?? 'Pricing' }}</h1>
            <p class="admin-dash-subtitle">
                @if ($activeService)
                    Edit this service description and its package prices. Choose another service from the sidebar.
                @else
                    No pricing services found. Run the PricingSeeder to import packages from config.
                @endif
            </p>
        </div>
        @if ($activeService)
            <div class="admin-dash-hero-actions">
                <a href="{{ route('pricing.show', $activeService->slug) }}" class="btn btn-outline-light btn-sm" target="_blank">
                    <i class="bi bi-box-arrow-up-right"></i> View public page
                </a>
            </div>
        @endif
    </div>

    @if ($activeService)
        <div class="admin-panel mb-4">
            <div class="admin-panel-head">
                <div>
                    <h2>Service details</h2>
                    <p>Name, description, and optional note shown on the public pricing page.</p>
                </div>
            </div>

            <form action="{{ route('admin.pricing.services.update', $activeService) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <label class="form-label" for="service_name">Service name</label>
                    <input
                        type="text"
                        name="name"
                        id="service_name"
                        class="form-control"
                        value="{{ old('name', $activeService->name) }}"
                        required
                    >
                </div>

                <div class="col-12">
                    <label class="form-label" for="service_description">Description</label>
                    <textarea
                        name="description"
                        id="service_description"
                        class="form-control"
                        rows="3"
                    >{{ old('description', $activeService->description) }}</textarea>
                </div>

                <div class="col-12">
                    <label class="form-label" for="service_note">Note (optional)</label>
                    <textarea
                        name="note"
                        id="service_note"
                        class="form-control"
                        rows="2"
                        placeholder="Extra note shown under the description"
                    >{{ old('note', $activeService->note) }}</textarea>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Save service details
                    </button>
                </div>
            </form>
        </div>

        <div class="admin-panel">
            <div class="admin-panel-head">
                <div>
                    <h2>Packages</h2>
                    <p>{{ $packages->count() }} package{{ $packages->count() === 1 ? '' : 's' }} · amounts are in TZS</p>
                </div>
            </div>

            @if ($packages->isEmpty())
                <div class="admin-empty">
                    <i class="bi bi-tags"></i>
                    <p>No packages for this service.</p>
                </div>
            @else
                <div class="row g-3">
                    @foreach ($packages as $package)
                        <div class="col-12">
                            <div class="border rounded-3 p-3 bg-white">
                                <div class="d-flex justify-content-between align-items-start gap-2 mb-3">
                                    <div>
                                        <h3 class="h6 mb-1">{{ $package->name }}</h3>
                                        <p class="small text-muted mb-0">{{ $package->formattedPriceLabel() }}</p>
                                    </div>
                                    <span class="badge text-bg-light border">#{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                </div>

                                <form action="{{ route('admin.pricing.packages.update', $package) }}" method="POST" class="row g-2">
                                    @csrf
                                    @method('PUT')

                                    <div class="col-md-6">
                                        <label class="form-label">Package name</label>
                                        <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name', $package->name) }}" required>
                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">Amount (TZS)</label>
                                        <input type="number" name="amount" class="form-control form-control-sm" min="0" step="1" value="{{ old('amount', $package->amount) }}" required>
                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">Period</label>
                                        <input type="text" name="period" class="form-control form-control-sm" value="{{ old('period', $package->period) }}" placeholder="/ mo, / yr, / pt">
                                        <div class="form-text">Leave empty for one-time price</div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Includes</label>
                                        <textarea name="includes" class="form-control form-control-sm" rows="2">{{ old('includes', $package->includes) }}</textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            <i class="bi bi-save"></i> Save package
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    @endif
</div>
@endsection
