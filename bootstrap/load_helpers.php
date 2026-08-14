<?php

/**
 * Load site helpers for every request.
 * Bluehost/public_html deploys often miss Composer "files" autoload refresh.
 */
$helpers = dirname(__DIR__).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'helpers.php';

if (is_file($helpers)) {
    require_once $helpers;
}

if (! function_exists('site_image')) {
    function site_image(string $key, ?string $fallback = null): string
    {
        $default = null;

        try {
            $default = config("site-images.slots.{$key}.default");
        } catch (\Throwable $exception) {
            // config may be unavailable during very early boot
        }

        return ltrim((string) ($default ?: $fallback ?: 'images/logo_header.png'), '/');
    }
}

if (! function_exists('site_image_url')) {
    function site_image_url(string $key, ?string $fallback = null): string
    {
        try {
            return asset(site_image($key, $fallback));
        } catch (\Throwable $exception) {
            $path = site_image($key, $fallback);

            return '/'.ltrim($path, '/');
        }
    }
}

if (! function_exists('site_setting')) {
    function site_setting(string $key, ?string $default = null): ?string
    {
        return $default;
    }
}
