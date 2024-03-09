<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AdminRedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        if (Auth::guard('admin')->check()) {
            Log::info('Admin is authenticated, redirecting...');
            return redirect()->route('admin.dashboard');
        }

        Log::info('Admin is not authenticated, proceeding...');
        return $next($request);
    }
}
