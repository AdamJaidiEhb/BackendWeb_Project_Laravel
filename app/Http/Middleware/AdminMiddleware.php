<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Controleer of de gebruiker is ingelogd en een admin is
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Redirect als de gebruiker geen admin is
        return redirect('/')->with('error', 'Toegang geweigerd');
    }
}
