<?php

namespace App\Support;

use App\Http\Middleware\EnsurePopupVisitorId;
use App\Models\Popup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

final class PopupMatcher
{
    public static function current(): ?Popup
    {
        $popups = Popup::query()->active()->orderByDesc('priority')->get();

        if ($popups->isEmpty()) {
            return null;
        }

        $routeName = Route::currentRouteName() ?? '';
        $path = request()->path();
        $categoryId = View::getShared()['currentCategoryId'] ?? null;
        $visitorId = request()->attributes->get(EnsurePopupVisitorId::COOKIE);
        $sessionId = session()->getId();

        foreach ($popups as $popup) {
            if (! $popup->matchesRequest($routeName, $path, $categoryId)) {
                continue;
            }

            if ($visitorId && $popup->hasBeenSeenBy($visitorId, $sessionId)) {
                continue;
            }

            if ($visitorId) {
                $popup->views()->create([
                    'visitor_id' => $visitorId,
                    'session_id' => $sessionId,
                ]);
            }

            return $popup;
        }

        return null;
    }
}
