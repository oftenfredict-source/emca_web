<?php

namespace App\Services;

use App\Models\SiteImage;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class SiteImageService
{
    private const CACHE_KEY = 'emca.site_images.map';

    /**
     * Ensure all catalog slots exist in the database.
     */
    public function syncCatalog(): void
    {
        $slots = config('site-images.slots', []);

        foreach ($slots as $key => $slot) {
            SiteImage::updateOrCreate(
                ['key' => $key],
                [
                    'label' => $slot['label'],
                    'group' => $slot['group'] ?? 'general',
                    'default_path' => $slot['default'],
                    'sort_order' => $slot['sort'] ?? 0,
                ]
            );
        }

        $this->forgetCache();
    }

    /**
     * @return Collection<string, SiteImage>
     */
    public function allByKey(): Collection
    {
        return Cache::remember(self::CACHE_KEY, now()->addHours(6), function () {
            return SiteImage::query()
                ->orderBy('sort_order')
                ->get()
                ->keyBy('key');
        });
    }

    public function path(string $key, ?string $fallback = null): string
    {
        $image = $this->allByKey()->get($key);

        if ($image) {
            return $image->resolvedPath();
        }

        $default = config("site-images.slots.{$key}.default");

        if (is_string($default) && $default !== '') {
            return ltrim($default, '/');
        }

        return ltrim((string) ($fallback ?? ''), '/');
    }

    public function url(string $key, ?string $fallback = null): string
    {
        $path = $this->path($key, $fallback);

        if ($path === '') {
            return '';
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        return asset($path);
    }

    public function forgetCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}
