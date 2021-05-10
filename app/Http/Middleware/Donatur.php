<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Donatur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->level == 1) {
            return $next($request);
            }
            abort(404);
    }
}
