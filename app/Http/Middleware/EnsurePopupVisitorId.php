<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class EnsurePopupVisitorId
{
    public const COOKIE = 'popup_visitor_id';

    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $visitorId = $request->cookie(self::COOKIE);

        if (! $visitorId) {
            $visitorId = (string) Str::uuid();
            Cookie::queue(Cookie::make(self::COOKIE, $visitorId, 60 * 24 * 365));
        }

        $request->attributes->set(self::COOKIE, $visitorId);

        return $next($request);
    }
}
