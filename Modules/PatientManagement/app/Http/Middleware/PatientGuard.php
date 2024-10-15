<?php

namespace Modules\PatientManagement\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PatientGuard
{

    public function handle(Request $request, Closure $next)
    {
      //  dd('Request received in middleware', ['user' => Auth::guard('patient')]);
        if (!Auth::guard('patient')->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}
