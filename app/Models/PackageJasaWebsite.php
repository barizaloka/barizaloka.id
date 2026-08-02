<?php

namespace App\Models;

use Database\Factories\PackageJasaWebsiteFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PackageJasaWebsite extends Model
{
    /** @use HasFactory<PackageJasaWebsiteFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'price',
        'price_label',
        'price_period',
        'features',
        'cta_label',
        'whatsapp_message',
        'is_featured',
        'badge_label',
        'order',
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'price' => 'integer',
            'features' => 'array',
            'is_featured' => 'boolean',
            'order' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (PackageJasaWebsite $package) {
            if (empty($package->slug)) {
                $package->slug = Str::slug($package->name);
            }
        });
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order')->orderBy('name');
    }
}
