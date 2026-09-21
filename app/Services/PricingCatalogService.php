<?php

namespace App\Services;

use App\Models\PricingService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class PricingCatalogService
{
    private const CACHE_KEY = 'emca.pricing.catalog';

    /**
     * Services keyed by slug, shaped for the public pricing views.
     *
     * @return array<string, array{
     *     name: string,
     *     icon: string|null,
     *     description: string|null,
     *     note: string|null,
     *     packages: list<array{name: string, includes: string|null, amount: int, period: string, price: string, hide_price: bool}>
     * }>
     */
    public function services(): array
    {
        return Cache::remember(self::CACHE_KEY, now()->addHour(), function () {
            try {
                return PricingService::query()
                    ->with(['packages' => function ($query) {
                        $query->where('is_hidden', false)->orderBy('sort_order');
                    }])
                    ->orderBy('sort_order')
                    ->get()
                    ->mapWithKeys(function (PricingService $service) {
                        return [
                            $service->slug => [
                                'name' => $service->name,
                                'icon' => $service->icon,
                                'description' => $service->description,
                                'note' => $service->note,
                                'packages' => $service->packages->map(function ($package) {
                                    $hidePrice = (bool) $package->hide_price;

                                    return [
                                        'name' => $package->name,
                                        'includes' => $package->includes,
                                        'amount' => (int) $package->amount,
                                        'period' => (string) ($package->period ?? ''),
                                        'price' => $hidePrice ? 'Contact us' : $package->formattedPriceLabel(),
                                        'hide_price' => $hidePrice,
                                    ];
                                })->values()->all(),
                            ],
                        ];
                    })
                    ->all();
            } catch (\Throwable $exception) {
                return config('pricing.services', []);
            }
        });
    }

    public function find(string $slug): ?array
    {
        return $this->services()[$slug] ?? null;
    }

    public function firstSlug(): ?string
    {
        return array_key_first($this->services());
    }

    /**
     * @return Collection<int, PricingService>
     */
    public function navigation(): Collection
    {
        return PricingService::query()
            ->orderBy('sort_order')
            ->get(['id', 'slug', 'name', 'sort_order']);
    }

    public function forgetCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}
