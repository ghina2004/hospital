<?php

namespace Modules\RoomManagement\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminGuard
{

    public function handle(Request $request, Closure $next)
   {//dd( [ 'user'=> Auth::guard('admin')->check()]);


    if( (Auth::guard('admin')->check())) {

        return $next($request);
    }

        return response()->json(['message' => 'Unauthorized'], 403);
   }
}
