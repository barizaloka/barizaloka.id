<?php

namespace App\Models;

use App\Models\Concerns\TracksMediaLibrary;
use Database\Factories\PopupSlideFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PopupSlide extends Model
{
    /** @use HasFactory<PopupSlideFactory> */
    use HasFactory, TracksMediaLibrary;

    protected $fillable = [
        'popup_id',
        'type',
        'media_path',
        'button_label',
        'button_url',
        'sort_order',
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::saved(fn (PopupSlide $slide) => $slide->syncMediaLibrary());
    }

    public function syncMediaLibrary(): void
    {
        $this->trackMediaFromField('media_path');
    }

    public function popup(): BelongsTo
    {
        return $this->belongsTo(Popup::class);
    }
}
