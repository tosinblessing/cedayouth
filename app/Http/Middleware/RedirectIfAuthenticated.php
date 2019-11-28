<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/admin');
        }
        if ($guard == "youthreg" && Auth::guard($guard)->check()) {
            return redirect('/youthreg');
        }
        if ($guard == "ownedgov" && Auth::guard($guard)->check()) {
            return redirect('/ownedgov');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/homepage');
        }

        return $next($request);
    }
}
