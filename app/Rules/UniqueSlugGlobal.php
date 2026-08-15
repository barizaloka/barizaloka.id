<?php

namespace App\Rules;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

/**
 * A post using the /artikel/{slug} permalink format needs a globally unique
 * slug among other posts using that same format, since the public URL
 * carries no year/month to disambiguate.
 */
class UniqueSlugGlobal implements ValidationRule
{
    public function __construct(
        protected ?int $ignoreId = null,
    ) {}

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $exists = Post::query()
            ->where('slug', $value)
            ->where('permalink_format', 'slug')
            ->when($this->ignoreId, fn ($query) => $query->whereKeyNot($this->ignoreId))
            ->exists();

        if ($exists) {
            $fail('Slug ini sudah dipakai oleh artikel lain.');
        }
    }
}
