<?php

namespace App\Models\Concerns;

use App\Models\Media;
use Illuminate\Support\Facades\Storage;

trait TracksMediaLibrary
{
    /**
     * Track the file stored in a given attribute (e.g. an image path from a FileUpload field)
     * in the central media library.
     */
    protected function trackMediaFromField(string $field, ?int $uploadedBy = null, string $disk = 'public'): void
    {
        $path = $this->{$field};

        if (! $path) {
            return;
        }

        Media::track($disk, $path, $uploadedBy);
    }

    /**
     * Track any storage-hosted images referenced inside an HTML/rich text attribute
     * (e.g. images inserted through a RichEditor).
     */
    protected function trackMediaFromHtml(string $field, ?int $uploadedBy = null, string $disk = 'public'): void
    {
        $html = $this->{$field};

        if (! $html) {
            return;
        }

        $prefix = rtrim(Storage::disk($disk)->url(''), '/').'/';

        if (! preg_match_all('/src="([^"]+)"/i', $html, $matches)) {
            return;
        }

        foreach ($matches[1] as $src) {
            if (! str_starts_with($src, $prefix)) {
                continue;
            }

            Media::track($disk, urldecode(substr($src, strlen($prefix))), $uploadedBy);
        }
    }
}
