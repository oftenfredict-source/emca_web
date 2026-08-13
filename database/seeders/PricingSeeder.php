<?php

namespace Database\Seeders;

use App\Models\PricingPackage;
use App\Models\PricingService;
use App\Services\PricingCatalogService;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    public function run(): void
    {
        $services = config('pricing.services', []);
        $sort = 0;

        foreach ($services as $slug => $service) {
            $sort++;

            $model = PricingService::updateOrCreate(
                ['slug' => $slug],
                [
                    'name' => $service['name'] ?? $slug,
                    'icon' => $service['icon'] ?? null,
                    'description' => $service['description'] ?? null,
                    'note' => $service['note'] ?? null,
                    'sort_order' => $sort * 10,
                ]
            );

            $packageSort = 0;
            foreach ($service['packages'] ?? [] as $package) {
                $packageSort++;

                PricingPackage::updateOrCreate(
                    [
                        'pricing_service_id' => $model->id,
                        'sort_order' => $packageSort * 10,
                    ],
                    [
                        'name' => $package['name'] ?? 'Package',
                        'includes' => $package['includes'] ?? null,
                        'amount' => (int) ($package['amount'] ?? 0),
                        'period' => $package['period'] ?? null,
                    ]
                );
            }
        }

        app(PricingCatalogService::class)->forgetCache();
    }
}
