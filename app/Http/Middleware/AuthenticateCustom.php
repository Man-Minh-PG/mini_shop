<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AuthenticateCustom
{
    /**
     * Handle an incoming request.
     * Adapter function
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role == 1 && Auth::check()) {
            return $next($request);
        }
        return response()->json('Your account is inactive');
    }
}