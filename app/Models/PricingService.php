<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PricingService extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'icon',
        'description',
        'note',
        'sort_order',
    ];

    public function packages(): HasMany
    {
        return $this->hasMany(PricingPackage::class)->orderBy('sort_order');
    }
}
