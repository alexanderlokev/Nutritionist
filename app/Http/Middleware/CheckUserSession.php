<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Periksa apakah sesi 'user' tersedia
        if (!Session::has('user')) {
            return redirect('/login')->with('error', 'Session expired. Please login again.');
        }

        return $next($request);
    }
}
