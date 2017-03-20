<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Wefixer
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
        if(Auth::check()) {
            if (Auth::user()->role_id == 0) {
                return $next($request);
            }
        }
    return redirect('/');
    }
}
