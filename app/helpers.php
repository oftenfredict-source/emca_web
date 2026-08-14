<?php

use App\Services\SiteImageService;
use App\Services\SiteSettingService;

if (! function_exists('site_image')) {
    /**
     * Relative public path for a managed site image key.
     */
    function site_image(string $key, ?string $fallback = null): string
    {
        try {
            return app(SiteImageService::class)->path($key, $fallback);
        } catch (\Throwable $exception) {
            $default = is_string(config("site-images.slots.{$key}.default") ?? null)
                ? config("site-images.slots.{$key}.default")
                : null;

            return ltrim((string) ($default ?: $fallback ?: 'images/logo_header.png'), '/');
        }
    }
}

if (! function_exists('site_image_url')) {
    /**
     * Full asset URL for a managed site image key.
     */
    function site_image_url(string $key, ?string $fallback = null): string
    {
        try {
            return app(SiteImageService::class)->url($key, $fallback);
        } catch (\Throwable $exception) {
            $path = site_image($key, $fallback);

            return $path !== '' ? asset($path) : asset('images/logo_header.png');
        }
    }
}

if (! function_exists('site_setting')) {
    /**
     * Read a site setting value.
     */
    function site_setting(string $key, ?string $default = null): ?string
    {
        try {
            return app(SiteSettingService::class)->get($key, $default);
        } catch (\Throwable $exception) {
            return $default;
        }
    }
}
