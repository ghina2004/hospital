<?php

namespace Modules\DoctorManagement\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DoctorGuard
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('doctor')->check()) {
            return $next($request);
        }

        return response()->json(['message' => 'Unauthorized'], 403);
    }
}
