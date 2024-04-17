<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventDirectAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    { 
        if ($request->server('HTTP_REFERER') === null) {
            // La requête est directe, donc nous redirigeons l'utilisateur
            return redirect()->route('login')->with('error', 'Accès non autorisé.');
        }

        return $next($request);
    }
}