<?php

namespace App\Models;

use App\Support\PublicUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'role',
        'image',
        'email',
        'mobile',
        'bio',
        'social',
        'cv_path',
        'style',
        'delay',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'bio' => 'array',
            'social' => 'array',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }

    public function resolvedEmail(): string
    {
        if (filled($this->email)) {
            return (string) $this->email;
        }

        return (string) config('team.members.'.$this->slug.'.email', '');
    }

    public function resolvedMobile(): string
    {
        if (filled($this->mobile)) {
            return (string) $this->mobile;
        }

        return (string) config('team.members.'.$this->slug.'.mobile', '');
    }

    public function hasCv(): bool
    {
        return $this->resolveCvPath() !== null;
    }

    public function imageUrl(): string
    {
        if (! $this->image) {
            return asset('visaland-html/assets/img/team/01.jpg');
        }

        $path = $this->normalizedImagePath();

        if (str_starts_with($path, 'visaland-html/') || str_starts_with($path, 'images/')) {
            $url = asset($path);
        } elseif (Storage::disk('public')->exists($path)) {
            $url = asset('storage/'.$path);
        } elseif (is_file(public_path($path))) {
            $url = asset($path);
        } else {
            $url = asset($path);
        }

        $version = optional($this->updated_at)->getTimestamp() ?: time();

        return $url.(str_contains($url, '?') ? '&' : '?').'v='.$version;
    }

    /**
     * Convert legacy storage upload paths into public web paths.
     */
    public function normalizedImagePath(): string
    {
        $path = ltrim(str_replace('\\', '/', (string) $this->image), '/');

        if (str_starts_with($path, 'storage/team/')) {
            return 'images/team/'.substr($path, strlen('storage/team/'));
        }

        if (str_starts_with($path, 'team/')) {
            return 'images/'.$path;
        }

        return $path;
    }

    public function cvUrl(): string
    {
        $resolved = $this->resolveCvPath();

        if (! $resolved) {
            return '#';
        }

        return $resolved['url'];
    }

    /**
     * @return array{url: string, path: string}|null
     */
    public function resolveCvPath(): ?array
    {
        $candidates = array_values(array_filter([
            $this->cv_path,
            $this->normalizeLegacyCvPath($this->cv_path),
            $this->slug ? 'cv/'.$this->slug.'.pdf' : null,
            $this->slug ? 'cv/'.Str::slug($this->name).'-cv.pdf' : null,
        ]));

        foreach (array_unique($candidates) as $path) {
            $path = ltrim(str_replace('\\', '/', $path), '/');

            // Prefer web-visible public/cv (and public_html/cv on shared hosting).
            if (PublicUpload::exists($path) || is_file(public_path($path))) {
                return [
                    'path' => $path,
                    'url' => asset($path),
                ];
            }

            // Legacy admin uploads on the storage public disk.
            if (Storage::disk('public')->exists($path)) {
                return [
                    'path' => $path,
                    'url' => asset('storage/'.$path),
                ];
            }
        }

        return null;
    }

    private function normalizeLegacyCvPath(?string $path): ?string
    {
        if (! filled($path)) {
            return null;
        }

        $path = ltrim(str_replace('\\', '/', $path), '/');

        if (str_starts_with($path, 'storage/cv/')) {
            return 'cv/'.substr($path, strlen('storage/cv/'));
        }

        return $path;
    }
}
