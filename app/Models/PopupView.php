<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PopupView extends Model
{
    protected $fillable = [
        'popup_id',
        'visitor_id',
        'session_id',
    ];

    public function popup(): BelongsTo
    {
        return $this->belongsTo(Popup::class);
    }
}
