<?php

namespace App\Models;

use Database\Factories\PopupSlideFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PopupSlide extends Model
{
    /** @use HasFactory<PopupSlideFactory> */
    use HasFactory;

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

    public function popup(): BelongsTo
    {
        return $this->belongsTo(Popup::class);
    }
}
