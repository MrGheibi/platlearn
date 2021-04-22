<?php

namespace App\Http\Middleware;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class CheckAdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::query()->where('email', $request->email)->first();
        if (!$user || $user->level != 'PAdmin' || !$request->password) {
            return response()->json(['message' => 'اطلاعات وارد شده همخوانی ندارند !'], 422);
        }

        return $next($request);
    }
}
