<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class EnsureValidApiBearerToken
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $expectedToken = config('api.bearer_token');
        $providedToken = $request->bearerToken();

        if (empty($expectedToken) || empty($providedToken) || ! hash_equals($expectedToken, $providedToken)) {
            Log::warning('Unauthorized API access attempt to create article.', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'has_token' => ! empty($providedToken),
            ]);

            return response()->json([
                'message' => 'Unauthenticated.',
            ], 401);
        }

        return $next($request);
    }
}
