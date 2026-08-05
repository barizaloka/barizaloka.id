<?php

namespace App\Models;

use Carbon\CarbonInterface;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'permalink_format',
        'excerpt',
        'content',
        'featured_image',
        'status',
        'published_at',
        'is_featured',
        'views_count',
        'meta_title',
        'meta_description',
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_featured' => 'boolean',
            'views_count' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Post $post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function incrementViews(): void
    {
        $this->increment('views_count');
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')
            ->where('published_at', '<=', now());
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    /**
     * The date used to build the post's /{year}/{month}/{slug} permalink.
     * Falls back to created_at for drafts that haven't been published yet.
     */
    public function permalinkDate(): CarbonInterface
    {
        return $this->published_at ?? $this->created_at ?? now();
    }

    public function permalink(): string
    {
        if ($this->permalink_format === 'slug') {
            return route('posts.showBySlug', ['slug' => $this->slug]);
        }

        $date = $this->permalinkDate();

        return route('posts.show', [
            'year' => $date->format('Y'),
            'month' => $date->format('m'),
            'slug' => $this->slug,
        ]);
    }
}
