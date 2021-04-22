<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @param $parameter
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $parameter)
    {
//        if ($parameter == 'logout')
//        {
//            !auth('web')->check() ?: redirect('/');
//        }
        return $next($request);
    }
}
