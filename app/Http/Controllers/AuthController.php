<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //  // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('matricule', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('TokenName')->accessToken;
            echo "Token: " . $token . "\n";
            // Connexion réussie, rediriger l'utilisateur en fonction du rôle
            if ($user->role === 'super_admin') {
                return redirect()->route('dashboard')->with('token', $token);
            } elseif ($user->role === 'rh') {
                return redirect()->route('rh_dashboard')->with('token', $token);


            }
        
    } 
    
        else {
            // Erreur d'authentification, rediriger avec un message d'erreur
            return redirect()->route('login')->with('error', 'Identifiants invalides');
        }
    }

    // Page de tableau de bord après connexion réussie (pour super_admin)
    public function dashboard(Request $request)
    {
        return view('dashboard')->with('token', $request->session()->get('token'));
    }

    // Page de tableau de bord après connexion réussie (pour rh)
    public function rhDashboard(Request $request)
    {
        return view('rh_dashboard')->with('token', $request->session()->get('token'));
    }
      // Déconnexion de l'utilisateur
      public function logout(Request $request)
      {
          //$request->user()->token()->delete();;
          return redirect()->route('login');
      }
      public function loginForPostiers(Request $request)
      {
          // Validation des données de la requête
          $request->validate([
              'matricule' => 'required|string',
              'password' => 'required|string',
          ]);
      
          // Tentative d'authentification de l'utilisateur
          if (Auth::attempt(['matricule' => $request->matricule, 'password' => $request->password])) {
              // Vérification du rôle "postier"
              if (auth()->user()->role === 'postier') {
                  // Génération du token d'authentification pour l'utilisateur
                  $token = auth()->user()->createToken('authToken')->plainTextToken;
                  // Retourner les données de l'utilisateur avec le token
                  return response()->json(['user' => auth()->user(), 'token' => $token], 200);
              } else {
                  // Retourner une réponse "Unauthorized" si l'utilisateur n'a pas le rôle "postier"
                  return response()->json(['error' => 'Unauthorized'], 401);
              }
          }
      
          // En cas d'échec de l'authentification, retourner une réponse JSON avec un message d'erreur
          return response()->json(['error' => 'Les informations d\'identification fournies sont incorrectes.'], 401);
      }
      
      
}
