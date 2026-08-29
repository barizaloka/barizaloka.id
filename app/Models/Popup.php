<?php

namespace App\Models;

use Database\Factories\PopupFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Popup extends Model
{
    /** @use HasFactory<PopupFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active',
        'target_type',
        'pages',
        'url_patterns',
        'category_ids',
        'frequency',
        'delay_seconds',
        'priority',
        'start_at',
        'end_at',
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'pages' => 'array',
            'url_patterns' => 'array',
            'category_ids' => 'array',
            'delay_seconds' => 'integer',
            'priority' => 'integer',
            'start_at' => 'datetime',
            'end_at' => 'datetime',
        ];
    }

    /** @return array<string, string> */
    public static function availablePages(): array
    {
        return [
            'home' => 'Beranda',
            'blog.index' => 'Blog (Semua Artikel)',
            'harga' => 'Harga',
            'jasa-website' => 'Jasa Website',
            'kontak' => 'Kontak',
            'portofolio.index' => 'Portofolio',
            'faq.index' => 'FAQ',
            'tentang' => 'Tentang Kami',
            'kalkulator-biaya-admin-marketplace' => 'Kalkulator Biaya Admin Marketplace',
        ];
    }

    /** @return array<string, string> */
    public static function frequencyOptions(): array
    {
        return [
            'every_load' => 'Setiap kali halaman dibuka',
            'once_per_session' => 'Sekali per sesi browser',
            'once_per_day' => 'Sekali per hari',
            'once_ever' => 'Sekali saja (selamanya)',
        ];
    }

    public function views(): HasMany
    {
        return $this->hasMany(PopupView::class);
    }

    public function slides(): HasMany
    {
        return $this->hasMany(PopupSlide::class)->orderBy('sort_order');
    }

    public function hasBeenSeenBy(string $visitorId, ?string $sessionId): bool
    {
        if ($this->frequency === 'every_load') {
            return false;
        }

        $query = $this->views()->where('visitor_id', $visitorId);

        return match ($this->frequency) {
            'once_per_session' => $sessionId !== null && $query->where('session_id', $sessionId)->exists(),
            'once_per_day' => $query->where('created_at', '>=', now()->subDay())->exists(),
            'once_ever' => $query->exists(),
            default => false,
        };
    }

    public function scopeActive(Builder $query): Builder
    {
        $now = now();

        return $query->where('is_active', true)
            ->where(function (Builder $q) use ($now) {
                $q->whereNull('start_at')->orWhere('start_at', '<=', $now);
            })
            ->where(function (Builder $q) use ($now) {
                $q->whereNull('end_at')->orWhere('end_at', '>=', $now);
            });
    }

    public function matchesRequest(string $routeName, string $path, ?int $categoryId): bool
    {
        return match ($this->target_type) {
            'all' => true,
            'pages' => $this->matchesPages($routeName, $path),
            'categories' => $categoryId !== null && in_array($categoryId, $this->category_ids ?? [], true),
            default => false,
        };
    }

    private function matchesPages(string $routeName, string $path): bool
    {
        if (in_array($routeName, $this->pages ?? [], true)) {
            return true;
        }

        foreach ($this->url_patterns ?? [] as $pattern) {
            if (Str::is(trim($pattern, '/'), trim($path, '/'))) {
                return true;
            }
        }

        return false;
    }
}
