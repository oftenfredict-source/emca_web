<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteImage extends Model
{
    protected $fillable = [
        'key',
        'label',
        'group',
        'path',
        'default_path',
        'sort_order',
    ];

    public function resolvedPath(): string
    {
        $path = filled($this->path) ? $this->path : $this->default_path;

        return ltrim(str_replace('\\', '/', (string) $path), '/');
    }

    public function url(): string
    {
        $path = $this->resolvedPath();

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (str_starts_with($path, 'storage/')) {
            return asset($path);
        }

        return asset($path);
    }

    public function isCustom(): bool
    {
        return filled($this->path) && $this->path !== $this->default_path;
    }
}
