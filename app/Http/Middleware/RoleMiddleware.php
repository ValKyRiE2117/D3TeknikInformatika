<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user has the correct role
        if ($request->user() && $request->user()->role !== $role) {
            // Optionally, you can redirect to a specific page if the user doesn't have the role
            return redirect('/');
        }

        return $next($request);
    }
}
