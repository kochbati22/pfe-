<?php 
namespace App\Http\Middleware;

use Closure;

class CheckSuperAdmin
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
        // Votre logique de vérification du rôle super admin ici
        
        // Exemple : Vérification que l'utilisateur est un super admin
        if (!auth()->user() || auth()->user()->role !== 'super_admin') {
            // Rediriger l'utilisateur vers la page d'accueil ou afficher un message d'erreur
            return redirect()->route('home')->with('error', 'Vous n\'avez pas les autorisations nécessaires.');
        }

        return $next($request);
    }
}