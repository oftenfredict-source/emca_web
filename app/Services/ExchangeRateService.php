<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class ExchangeRateService
{
    /**
     * Return TZS per 1 USD, preferring a live/cached market rate.
     *
     * @return array{rate: float, source: string, fetched_at: string|null, is_live: bool}
     */
    public function usdToTzs(): array
    {
        $fallback = (float) config('pricing.meta.usd_rate', 2650);
        $ttlMinutes = (int) config('pricing.exchange.cache_minutes', 720);
        $cacheKey = 'emca.exchange.usd_tzs';

        $cached = Cache::get($cacheKey);
        if (is_array($cached) && isset($cached['rate']) && $cached['rate'] > 0) {
            return [
                'rate' => (float) $cached['rate'],
                'source' => (string) ($cached['source'] ?? 'cache'),
                'fetched_at' => $cached['fetched_at'] ?? null,
                'is_live' => true,
            ];
        }

        try {
            $live = $this->fetchLiveRate();
            if ($live !== null && $live['rate'] > 0) {
                Cache::put($cacheKey, $live, now()->addMinutes($ttlMinutes));

                return [
                    'rate' => $live['rate'],
                    'source' => $live['source'],
                    'fetched_at' => $live['fetched_at'],
                    'is_live' => true,
                ];
            }
        } catch (Throwable $e) {
            Log::warning('USD/TZS exchange rate fetch failed', [
                'message' => $e->getMessage(),
            ]);
        }

        return [
            'rate' => $fallback,
            'source' => 'fallback',
            'fetched_at' => null,
            'is_live' => false,
        ];
    }

    /**
     * @return array{rate: float, source: string, fetched_at: string}|null
     */
    private function fetchLiveRate(): ?array
    {
        $timeout = (int) config('pricing.exchange.timeout_seconds', 8);
        $endpoints = config('pricing.exchange.endpoints', []);

        foreach ($endpoints as $endpoint) {
            $url = $endpoint['url'] ?? null;
            $path = $endpoint['tzs_path'] ?? 'rates.TZS';
            $source = $endpoint['source'] ?? 'api';

            if (! is_string($url) || $url === '') {
                continue;
            }

            $response = Http::timeout($timeout)
                ->acceptJson()
                ->get($url);

            if (! $response->successful()) {
                continue;
            }

            $rate = data_get($response->json(), $path);
            if (! is_numeric($rate) || (float) $rate <= 0) {
                continue;
            }

            return [
                'rate' => round((float) $rate, 4),
                'source' => $source,
                'fetched_at' => now()->toIso8601String(),
            ];
        }

        return null;
    }
}
