<?php

namespace App\Rules;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Carbon;

/**
 * A post's slug only needs to be unique among posts sharing the same
 * publish year/month, since the public URL is /{year}/{month}/{slug}.
 */
class UniqueSlugPerMonth implements ValidationRule
{
    public function __construct(
        protected ?string $publishedAt,
        protected ?int $ignoreId = null,
    ) {}

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $date = $this->publishedAt ? Carbon::parse($this->publishedAt) : now();

        $exists = Post::query()
            ->whereYear('published_at', $date->format('Y'))
            ->whereMonth('published_at', $date->format('m'))
            ->where('slug', $value)
            ->when($this->ignoreId, fn ($query) => $query->whereKeyNot($this->ignoreId))
            ->exists();

        if ($exists) {
            $fail('Slug ini sudah dipakai oleh artikel lain di bulan yang sama.');
        }
    }
}
