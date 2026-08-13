<?php

use App\Services\SiteImageService;
use App\Services\SiteSettingService;

if (! function_exists('site_image')) {
    /**
     * Relative public path for a managed site image key.
     */
    function site_image(string $key, ?string $fallback = null): string
    {
        return app(SiteImageService::class)->path($key, $fallback);
    }
}

if (! function_exists('site_image_url')) {
    /**
     * Full asset URL for a managed site image key.
     */
    function site_image_url(string $key, ?string $fallback = null): string
    {
        return app(SiteImageService::class)->url($key, $fallback);
    }
}

if (! function_exists('site_setting')) {
    /**
     * Read a site setting value.
     */
    function site_setting(string $key, ?string $default = null): ?string
    {
        return app(SiteSettingService::class)->get($key, $default);
    }
}
