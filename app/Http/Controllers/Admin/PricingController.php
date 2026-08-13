<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPackage;
use App\Models\PricingService;
use App\Services\PricingCatalogService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PricingController extends Controller
{
    public function __construct(
        private readonly PricingCatalogService $pricing
    ) {}

    public function index(Request $request): View
    {
        $services = PricingService::query()
            ->orderBy('sort_order')
            ->get();

        if ($services->isEmpty()) {
            return view('admin.pricing.index', [
                'services' => $services,
                'activeService' => null,
                'packages' => collect(),
            ]);
        }

        $slug = (string) $request->query('service', $services->first()->slug);
        $activeService = $services->firstWhere('slug', $slug) ?? $services->first();

        $packages = PricingPackage::query()
            ->where('pricing_service_id', $activeService->id)
            ->orderBy('sort_order')
            ->get();

        return view('admin.pricing.index', [
            'services' => $services,
            'activeService' => $activeService,
            'packages' => $packages,
        ]);
    }

    public function updateService(Request $request, PricingService $service): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:5000'],
            'note' => ['nullable', 'string', 'max:5000'],
        ]);

        $service->update($data);
        $this->pricing->forgetCache();

        return redirect()
            ->route('admin.pricing.index', ['service' => $service->slug])
            ->with('success', $service->name.' details updated.');
    }

    public function updatePackage(Request $request, PricingPackage $package): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'includes' => ['nullable', 'string', 'max:5000'],
            'amount' => ['required', 'integer', 'min:0'],
            'period' => ['nullable', 'string', 'max:50'],
        ]);

        $data['period'] = $data['period'] ?? '';

        $package->update($data);
        $this->pricing->forgetCache();

        $service = $package->service;

        return redirect()
            ->route('admin.pricing.index', ['service' => $service?->slug])
            ->with('success', $package->name.' package updated.');
    }
}
