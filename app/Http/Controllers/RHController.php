<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan; 

use Illuminate\Http\Request;
use App\Models\User;

class RHController extends Controller
{


    

    // Afficher le formulaire d'ajout de RH
    public function create()
    {
        return view('rh.create');
    }
    public function show()
    {
        return view('log');
    }
    // Traitement de la soumission du formulaire d'ajout de RH
    public function store(Request $request)
{
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'name' => 'required',
        'prenom' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'matricule' => 'required|unique:users',
        'telephone' => 'required|unique:users',
        'cin'=>'required|unique:users|min:8',
        'date_naissance'=>'required|date',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',  // Ajoutez d'autres règles de validation si nécessaire
    ]);
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('images', $imageName); // Enregistrement de l'image dans le dossier "images" du stockage
    }

    // Création d'un nouvel utilisateur de type RH
    $user = new User();
    $user->name = $validatedData['name'];
    $user->prenom = $validatedData['prenom'];
    $user->email = $validatedData['email'];
    $user->password = bcrypt($validatedData['password']);
    $user->matricule = $validatedData['matricule'];
    $user->telephone = $validatedData['telephone']; 
    $user->cin = $validatedData['cin']; 
    $user->date_naissance = $validatedData['date_naissance']; 
    $user->image = $imageName ?? null; // Vous pouvez récupérer le téléphone de la même manière que d'autres champs
    $user->role = 'rh';
    echo "user: " . $user . "\n";

    // Enregistrement de l'utilisateur dans la base de données
    $user->save();

    // Rediriger avec un message de succès
  
    return redirect()->route('dashboard')->with('success', 'RH ajouté avec succès.');
}

public function profilesupertadmin()
{
    // Vérifiez si l'utilisateur est authentifié et a le rôle "rh"
    if (Auth::check() && Auth::user()->role === 'super_admin') {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Passer les données utilisateur à la vue et afficher la page de profil
        return view('supertadmin', compact('user'));
    } else {
        // Rediriger vers une autre page avec un message d'erreur
        return redirect()->route('home')->with('error', 'Accès non autorisé.');
    }
}
public function listeRH()
    {
        // Récupérer tous les utilisateurs avec le rôle "rh"
        $rh = User::where('role', 'rh')->get();
        
        // Retourner la vue avec la liste des RH
        return view('rh.listeRH', ['rh' => $rh]);
    }
    public function edit($id)
    {
        // Récupérer le RH à modifier en fonction de son ID
        $rh = User::findOrFail($id);

        // Retourner la vue du formulaire de modification avec les données du RH
        return view('rh.edit', compact('rh'));
    }

    // Méthode pour mettre à jour les informations d'un RH
    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'nullable|string',
            'matricule' => 'nullable|string',
            // Ajoutez d'autres règles de validation au besoin
        ]);

        // Récupérer le RH à modifier en fonction de son ID
        $rh = User::findOrFail($id);

        // Mettre à jour les informations du RH
        $rh->update($validatedData);

        // Redirection avec un message de succès
        return redirect()->route('rh.listeRH')->with('success', 'Les informations du RH ont été mises à jour avec succès!');
    }

    // Méthode pour supprimer un RH
    public function destroy($id)
    {
        // Récupérer le RH à supprimer en fonction de son ID
        $rh = User::findOrFail($id);

        // Supprimer le RH
        $rh->delete();

        // Redirection avec un message de succès
        return redirect()->route('rh.listeRH')->with('success', 'Le RH a été supprimé avec succès!');
    }


}