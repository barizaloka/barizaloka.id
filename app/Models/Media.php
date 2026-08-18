<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Media extends Model
{
    protected $fillable = [
        'uploaded_by',
        'disk',
        'path',
        'name',
        'mime_type',
        'size',
        'alt_text',
        'caption',
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'size' => 'integer',
        ];
    }

    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    public function url(): string
    {
        return Storage::disk($this->disk)->url($this->path);
    }

    public function isImage(): bool
    {
        return Str::startsWith((string) $this->mime_type, 'image/');
    }

    public function humanSize(): string
    {
        $bytes = $this->size;

        foreach (['B', 'KB', 'MB', 'GB'] as $unit) {
            if ($bytes < 1024) {
                return round($bytes, $unit === 'B' ? 0 : 1).' '.$unit;
            }

            $bytes /= 1024;
        }

        return round($bytes, 1).' TB';
    }

    /**
     * Create or update a media library record for a file that already exists on a disk.
     */
    public static function track(string $disk, string $path, ?int $uploadedBy = null): ?self
    {
        if (! Storage::disk($disk)->exists($path)) {
            return null;
        }

        $media = static::firstOrNew([
            'disk' => $disk,
            'path' => $path,
        ]);

        $media->fill([
            'name' => basename($path),
            'mime_type' => Storage::disk($disk)->mimeType($path) ?: null,
            'size' => Storage::disk($disk)->size($path),
        ]);

        if (! $media->exists && $uploadedBy) {
            $media->uploaded_by = $uploadedBy;
        }

        $media->save();

        return $media;
    }
}
