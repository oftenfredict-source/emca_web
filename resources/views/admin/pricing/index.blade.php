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
                    Add a package from a ready template, reorder it, then edit, hide, delete, or save all.
                @else
                    No pricing services found. Run the PricingSeeder to import packages from config.
                @endif
            </p>
        </div>
        @if ($activeService)
            <div class="admin-dash-hero-actions d-flex flex-wrap gap-2">
                <form action="{{ route('admin.pricing.packages.store', $activeService) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-light btn-sm">
                        <i class="bi bi-plus-lg"></i> Add package
                    </button>
                </form>
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
                    <p>{{ $packages->count() }} package{{ $packages->count() === 1 ? '' : 's' }} · amounts are in TZS · move a package to position 2, then save all</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <form action="{{ route('admin.pricing.packages.store', $activeService) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-plus-lg"></i> Add package
                        </button>
                    </form>
                    @if ($packages->isNotEmpty())
                        <button type="submit" form="packages-bulk-form" class="btn btn-sm btn-primary">
                            <i class="bi bi-save"></i> Save all packages
                        </button>
                    @endif
                </div>
            </div>

            @if ($packages->isEmpty())
                <div class="admin-empty">
                    <i class="bi bi-tags"></i>
                    <p>No packages for this service. Add one from the default template, then edit the details.</p>
                    <form action="{{ route('admin.pricing.packages.store', $activeService) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-plus-lg"></i> Add package
                        </button>
                    </form>
                </div>
            @else
                <form
                    id="packages-bulk-form"
                    action="{{ route('admin.pricing.packages.bulk-update', $activeService) }}"
                    method="POST"
                >
                    @csrf
                    @method('PUT')

                    <div class="row g-3 pricing-package-list">
                        @foreach ($packages as $package)
                            @php
                                $oldHidden = (bool) old('packages.'.$package->id.'.is_hidden', $package->is_hidden);
                                $oldHidePrice = (bool) old('packages.'.$package->id.'.hide_price', $package->hide_price);
                                $justAdded = (int) request('added') === (int) $package->id;
                            @endphp
                            <div class="col-12 pricing-package-item" id="package-{{ $package->id }}" data-package-item>
                                <div class="border rounded-3 p-3 bg-white pricing-package-card {{ $oldHidden ? 'is-hidden-package' : '' }} {{ $justAdded ? 'is-new-package' : '' }}">
                                    <div class="d-flex justify-content-between align-items-start gap-2 mb-3">
                                        <div>
                                            <h3 class="h6 mb-1">{{ $package->name }}</h3>
                                            <p class="small text-muted mb-0">{{ $package->formattedPriceLabel() }}</p>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-end">
                                            @if ($justAdded)
                                                <span class="admin-status admin-status--new">New template</span>
                                            @endif
                                            @if ($oldHidden)
                                                <span class="admin-status admin-status--muted">Package hidden</span>
                                            @endif
                                            @if ($oldHidePrice)
                                                <span class="admin-status admin-status--muted">Price hidden</span>
                                            @endif
                                            <div class="pricing-sort-controls">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-move="up" title="Move up" aria-label="Move up">
                                                    <i class="bi bi-chevron-up"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-move="down" title="Move down" aria-label="Move down">
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <label class="form-label mb-0 small text-muted" for="package_position_{{ $package->id }}">Pos</label>
                                                <input
                                                    type="number"
                                                    id="package_position_{{ $package->id }}"
                                                    name="packages[{{ $package->id }}][position]"
                                                    class="form-control form-control-sm pricing-sort-position"
                                                    min="1"
                                                    max="{{ max(1, $packages->count()) }}"
                                                    value="{{ old('packages.'.$package->id.'.position', $loop->iteration) }}"
                                                    data-package-position
                                                    required
                                                >
                                                <span class="badge text-bg-light border" data-package-badge>#{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                            </div>
                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                form="delete-package-{{ $package->id }}"
                                                onclick="return confirm(@json('Delete '.$package->name.'? This cannot be undone.'));"
                                            >
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <label class="form-label" for="package_name_{{ $package->id }}">Package name</label>
                                            <input
                                                type="text"
                                                id="package_name_{{ $package->id }}"
                                                name="packages[{{ $package->id }}][name]"
                                                class="form-control form-control-sm"
                                                value="{{ old('packages.'.$package->id.'.name', $package->name) }}"
                                                required
                                                @if ($justAdded) autofocus @endif
                                            >
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label" for="package_amount_{{ $package->id }}">Amount (TZS)</label>
                                            <input
                                                type="number"
                                                id="package_amount_{{ $package->id }}"
                                                name="packages[{{ $package->id }}][amount]"
                                                class="form-control form-control-sm"
                                                min="0"
                                                step="1"
                                                value="{{ old('packages.'.$package->id.'.amount', $package->amount) }}"
                                                required
                                            >
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label" for="package_period_{{ $package->id }}">Period</label>
                                            <input
                                                type="text"
                                                id="package_period_{{ $package->id }}"
                                                name="packages[{{ $package->id }}][period]"
                                                class="form-control form-control-sm"
                                                value="{{ old('packages.'.$package->id.'.period', $package->period) }}"
                                                placeholder="/ mo, / yr, / pt"
                                            >
                                            <div class="form-text">Leave empty for one-time price</div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="package_includes_{{ $package->id }}">Includes</label>
                                            <textarea
                                                id="package_includes_{{ $package->id }}"
                                                name="packages[{{ $package->id }}][includes]"
                                                class="form-control form-control-sm"
                                                rows="2"
                                            >{{ old('packages.'.$package->id.'.includes', $package->includes) }}</textarea>
                                        </div>

                                        <div class="col-12 d-flex flex-wrap gap-4 pt-1">
                                            <div class="form-check form-switch">
                                                <input type="hidden" name="packages[{{ $package->id }}][is_hidden]" value="0">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    role="switch"
                                                    id="package_hidden_{{ $package->id }}"
                                                    name="packages[{{ $package->id }}][is_hidden]"
                                                    value="1"
                                                    @checked($oldHidden)
                                                >
                                                <label class="form-check-label" for="package_hidden_{{ $package->id }}">
                                                    Hide package on public page
                                                </label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input type="hidden" name="packages[{{ $package->id }}][hide_price]" value="0">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    role="switch"
                                                    id="package_hide_price_{{ $package->id }}"
                                                    name="packages[{{ $package->id }}][hide_price]"
                                                    value="1"
                                                    @checked($oldHidePrice)
                                                >
                                                <label class="form-check-label" for="package_hide_price_{{ $package->id }}">
                                                    Hide price (show “Contact us”)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Save all packages
                        </button>
                    </div>
                </form>

                @foreach ($packages as $package)
                    <form
                        id="delete-package-{{ $package->id }}"
                        action="{{ route('admin.pricing.packages.destroy', $package) }}"
                        method="POST"
                        class="d-none"
                    >
                        @csrf
                        @method('DELETE')
                    </form>
                @endforeach
            @endif
        </div>
    @endif
</div>
@endsection

@push('styles')
<style>
    .pricing-package-card.is-hidden-package {
        background: #f8f5f5;
        border-style: dashed !important;
        opacity: 0.78;
    }

    .pricing-package-card.is-new-package {
        border-color: var(--emca-primary) !important;
        box-shadow: 0 0 0 3px rgba(148, 0, 0, 0.12);
    }

    .pricing-sort-controls {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .pricing-sort-position {
        width: 4.2rem;
        text-align: center;
    }
</style>
@endpush

@push('scripts')
<script>
    document.querySelectorAll('[id^="package_hidden_"]').forEach(function (input) {
        input.addEventListener('change', function () {
            var card = input.closest('.pricing-package-card');
            if (card) {
                card.classList.toggle('is-hidden-package', input.checked);
            }
        });
    });

    var addedCard = document.querySelector('.pricing-package-card.is-new-package');
    if (addedCard) {
        addedCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
        var nameInput = addedCard.querySelector('input[name$="[name]"]');
        if (nameInput) {
            nameInput.focus();
            nameInput.select();
        }
    }

    var list = document.querySelector('.pricing-package-list');
    if (list) {
        function items() {
            return Array.from(list.querySelectorAll('[data-package-item]'));
        }

        function refreshPositions() {
            var rows = items();
            rows.forEach(function (row, index) {
                var position = index + 1;
                var input = row.querySelector('[data-package-position]');
                var badge = row.querySelector('[data-package-badge]');
                var up = row.querySelector('[data-move="up"]');
                var down = row.querySelector('[data-move="down"]');

                if (input) {
                    input.value = position;
                    input.max = String(rows.length);
                }
                if (badge) {
                    badge.textContent = '#' + String(position).padStart(2, '0');
                }
                if (up) up.disabled = index === 0;
                if (down) down.disabled = index === rows.length - 1;
            });
        }

        function moveRow(row, direction) {
            var rows = items();
            var index = rows.indexOf(row);
            var next = index + direction;
            if (index < 0 || next < 0 || next >= rows.length) return;

            if (direction < 0) {
                list.insertBefore(row, rows[next]);
            } else {
                list.insertBefore(row, rows[next].nextSibling);
            }

            refreshPositions();
        }

        function jumpToPosition(row, target) {
            var rows = items();
            var max = rows.length;
            if (isNaN(target) || target < 1) target = 1;
            if (target > max) target = max;

            var current = rows.indexOf(row) + 1;
            if (current < 1 || target === current) {
                refreshPositions();
                return;
            }

            var destination = rows[target - 1];
            if (target < current) {
                list.insertBefore(row, destination);
            } else {
                list.insertBefore(row, destination.nextSibling);
            }

            refreshPositions();
        }

        list.addEventListener('click', function (event) {
            var button = event.target.closest('[data-move]');
            if (!button) return;
            var row = button.closest('[data-package-item]');
            if (!row) return;
            moveRow(row, button.getAttribute('data-move') === 'up' ? -1 : 1);
        });

        list.addEventListener('change', function (event) {
            var input = event.target.closest('[data-package-position]');
            if (!input) return;
            var row = input.closest('[data-package-item]');
            if (!row) return;
            jumpToPosition(row, parseInt(input.value, 10));
        });

        refreshPositions();
    }
</script>
@endpush
