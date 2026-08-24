<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdminUser
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->user() || $request->user()->email !== 'admin@barizaloka.id') {
            abort(403, 'Akses ditolak. Anda tidak memiliki izin untuk mengakses area admin v2.');
        }

        return $next($request);
    }
}
