<?php

namespace App\Models;

use App\Models\Concerns\TracksMediaLibrary;
use Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    /** @use HasFactory<ProjectFactory> */
    use HasFactory, TracksMediaLibrary;

    protected $fillable = [
        'title',
        'slug',
        'client_name',
        'category',
        'summary',
        'description',
        'url',
        'thumbnail',
        'is_featured',
        'order',
        'meta_title',
        'meta_description',
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'order' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Project $project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });

        static::saved(fn (Project $project) => $project->syncMediaLibrary());
    }

    public function syncMediaLibrary(): void
    {
        $this->trackMediaFromField('thumbnail');
        $this->trackMediaFromHtml('description');
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order')->latest();
    }
}
