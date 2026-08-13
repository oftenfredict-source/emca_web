<?php

namespace App\Services;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;

class SiteSettingService
{
    private const CACHE_KEY = 'emca.site_settings.map';

    /**
     * @return array<string, string|null>
     */
    public function all(): array
    {
        return Cache::remember(self::CACHE_KEY, now()->addHours(6), function () {
            return SiteSetting::query()
                ->pluck('value', 'key')
                ->all();
        });
    }

    public function get(string $key, ?string $default = null): ?string
    {
        $value = $this->all()[$key] ?? null;

        if ($value === null || $value === '') {
            return $default;
        }

        return $value;
    }

    public function set(string $key, ?string $value): void
    {
        SiteSetting::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        $this->forgetCache();
    }

    /**
     * @param  array<string, string|null>  $values
     */
    public function setMany(array $values): void
    {
        foreach ($values as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $this->forgetCache();
    }

    public function forgetCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }

    public function heroMode(): string
    {
        $mode = $this->get('hero_mode', 'slides');

        return in_array($mode, ['slides', 'video'], true) ? $mode : 'slides';
    }

    public function heroYoutubeUrl(): string
    {
        return (string) $this->get('hero_youtube_url', '');
    }

    public function heroYoutubeId(): ?string
    {
        return $this->extractYoutubeId($this->heroYoutubeUrl());
    }

    public function extractYoutubeId(?string $url): ?string
    {
        if (! is_string($url) || trim($url) === '') {
            return null;
        }

        $url = trim($url);

        if (preg_match('/^[a-zA-Z0-9_-]{11}$/', $url) === 1) {
            return $url;
        }

        $patterns = [
            '/youtu\.be\/([a-zA-Z0-9_-]{11})/',
            '/youtube\.com\/(?:embed|v|shorts)\/([a-zA-Z0-9_-]{11})/',
            '/youtube\.com\/watch\?(?:.*&)?v=([a-zA-Z0-9_-]{11})/',
            '/youtube\.com\/watch\?v=([a-zA-Z0-9_-]{11})/',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches) === 1) {
                return $matches[1];
            }
        }

        return null;
    }

    public function youtubeEmbedUrl(?string $url = null): ?string
    {
        $id = $this->extractYoutubeId($url ?? $this->heroYoutubeUrl());

        if ($id === null) {
            return null;
        }

        $query = http_build_query([
            'autoplay' => 1,
            'mute' => 1,
            'controls' => 0,
            'rel' => 0,
            'modestbranding' => 1,
            'playsinline' => 1,
            'loop' => 1,
            'playlist' => $id,
            'showinfo' => 0,
            'iv_load_policy' => 3,
            'fs' => 0,
            'disablekb' => 1,
        ]);

        return 'https://www.youtube-nocookie.com/embed/'.$id.'?'.$query;
    }
}
