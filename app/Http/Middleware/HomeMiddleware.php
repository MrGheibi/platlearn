<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HomeMiddleware
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
        if ($request->typeRequest)
        {
            echo "<script>history.replaceState(null, '', location.href.split('?')[0])</script>";
            auth('web')->logout();
        }
        return $next($request);
    }
}
