<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function hasCv(): bool
    {
        return filled($this->cv_path);
    }

    public function imageUrl(): string
    {
        if (! $this->image) {
            return asset('visaland-html/assets/img/team/01.jpg');
        }

        if (str_starts_with($this->image, 'visaland-html/') || str_starts_with($this->image, 'images/')) {
            return asset($this->image);
        }

        return asset('storage/'.$this->image);
    }

    public function cvUrl(): ?string
    {
        if (! $this->cv_path) {
            return null;
        }

        if (file_exists(public_path($this->cv_path))) {
            return asset($this->cv_path);
        }

        return asset('storage/'.$this->cv_path);
    }
}
