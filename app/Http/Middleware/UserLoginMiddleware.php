<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserLoginMiddleware
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
        if (Auth::check() && Auth::user()->chuc_vu_id == 7) {
        return $next($request);
        }
        else{
            return redirect()->route('khachhang.login');
        }
    }
}
