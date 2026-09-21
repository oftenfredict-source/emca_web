<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPackage;
use App\Models\PricingService;
use App\Services\PricingCatalogService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function bulkUpdatePackages(Request $request, PricingService $service): RedirectResponse
    {
        $data = $request->validate([
            'packages' => ['required', 'array'],
            'packages.*.name' => ['required', 'string', 'max:255'],
            'packages.*.includes' => ['nullable', 'string', 'max:5000'],
            'packages.*.amount' => ['required', 'integer', 'min:0'],
            'packages.*.period' => ['nullable', 'string', 'max:50'],
            'packages.*.is_hidden' => ['sometimes', 'boolean'],
            'packages.*.hide_price' => ['sometimes', 'boolean'],
        ]);

        DB::transaction(function () use ($service, $data) {
            $packages = PricingPackage::query()
                ->where('pricing_service_id', $service->id)
                ->whereIn('id', array_keys($data['packages']))
                ->get()
                ->keyBy('id');

            foreach ($data['packages'] as $packageId => $payload) {
                $package = $packages->get((int) $packageId);

                if (! $package) {
                    continue;
                }

                $package->update([
                    'name' => $payload['name'],
                    'includes' => $payload['includes'] ?? null,
                    'amount' => (int) $payload['amount'],
                    'period' => $payload['period'] ?? '',
                    'is_hidden' => filter_var($payload['is_hidden'] ?? false, FILTER_VALIDATE_BOOLEAN),
                    'hide_price' => filter_var($payload['hide_price'] ?? false, FILTER_VALIDATE_BOOLEAN),
                ]);
            }
        });

        $this->pricing->forgetCache();

        return redirect()
            ->route('admin.pricing.index', ['service' => $service->slug])
            ->with('success', $service->name.' packages saved.');
    }

    public function destroyPackage(PricingPackage $package): RedirectResponse
    {
        $service = $package->service;
        $name = $package->name;

        $package->delete();
        $this->pricing->forgetCache();

        return redirect()
            ->route('admin.pricing.index', ['service' => $service?->slug])
            ->with('success', $name.' package deleted.');
    }
}
