<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        }
        // if (!auth()->check()) {
        //     return redirect()->route('admin.login');
        // }
        // if (auth()->user()->roles()->where('title', 'user')->count() > 0) {
        //     return redirect('/');
        // }
        return $next($request);
    }
}