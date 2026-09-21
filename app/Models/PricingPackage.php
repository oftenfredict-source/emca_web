<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PricingPackage extends Model
{
    protected $fillable = [
        'pricing_service_id',
        'name',
        'includes',
        'amount',
        'period',
        'sort_order',
        'is_hidden',
        'hide_price',
    ];

    protected $casts = [
        'amount' => 'integer',
        'is_hidden' => 'boolean',
        'hide_price' => 'boolean',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(PricingService::class, 'pricing_service_id');
    }

    public function formattedPriceLabel(): string
    {
        $amount = number_format((int) $this->amount);
        $period = trim((string) $this->period);

        if ($period === '') {
            return 'From TZS '.$amount;
        }

        return 'From TZS '.$amount.' '.$period;
    }
}
