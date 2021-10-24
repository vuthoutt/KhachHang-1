<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkAdminLogin
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
        // nếu user đã đăng nhập
        if (Auth::check())
        {
            $user = Auth::user();
            if ($user->chuc_vu_id == 5)
            {
                return $next($request);

            }
            else
            {
                Auth::logout();
                return response()->view('quanly.layout.login');
            }
        } else{
            return response()->view('quanly.layout.login');
        }


    }
}
