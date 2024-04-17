<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Support\Facades\Artisan; 

class PostierController extends Controller
{
    // Afficher le formulaire de création d'un postier
    public function create()
    {
        return view('postier.create');
    }

    // Enregistrer un nouveau postier
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:users',
            'adresse' => 'nullable|string',
            'telephone' => 'nullable|string',
            'matricule' => 'nullable|string',
           'cv' => 'required|file|mimes:pdf|max:2048',
            'password' => 'required|string|min:8',
            'cin'=>'required|unique:users|min:8',
            'date_naissance'=>'required|date',
        ]);
        

        // Création de l'utilisateur (postier)
        $user = new User();
        $user->name = $validatedData['name'];
        $user->prenom = $validatedData['prenom'];
        $user->email = $validatedData['email'];
        $user->adresse = $validatedData['adresse'];
        $user->telephone = $validatedData['telephone'];
        $user->matricule = $validatedData['matricule'];
        $user->password = Hash::make($validatedData['password']);
        $user->cin = $validatedData['cin']; 
        $user->date_naissance = $validatedData['date_naissance']; 
        $user->soldeconge = 0; // Solde initial à 0
        $user->role = 'postier'; // Définir le rôle comme "postier"
        $user->save();

        // Traitement du CV
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs');
            $user->cv = $cvPath;
            $user->save();
        }
        // Appeler la commande artisan pour mettre à jour le solde de congé
        Artisan::call('conge:update');


        // Redirection avec un message de succès
        return redirect()->route('postier.create')->with('success', 'Postier créé avec succès!');
    }
    public function index()
    {
        // Récupérer tous les utilisateurs avec le rôle "postier"
        $postiers = User::where('role', 'postier')->get();
        
        // Retourner la vue avec la liste des postiers
        return view('postier.index', ['postiers' => $postiers]);
        //return response()->json($postiers);
    }
    public function afficher()
    {
        // Récupérer tous les utilisateurs avec le rôle "postier"
        $postiers = User::where('role', 'postier')->get();
        
        // Retourner la vue avec la liste des postiers
        //return view('postier.index', ['postiers' => $postiers]);
        return response()->json($postiers);
    }
    

        // Retourner la vue avec la liste des postiers
        
      /**
    * Affiche le formulaire de modification d'un postier.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   
public function edit($id)
{
    // Récupérer le postier à modifier en fonction de son ID
    $postier = User::findOrFail($id);

    // Retourner la vue du formulaire de modification avec les données du postier
    return view('postier.edit', compact('postier'));
    
}
public function update(Request $request, $id)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'name' => 'required|string',
        'prenom' => 'required|string',
        'email' => 'required|email',
        'adresse' => 'nullable|string',
        'telephone' => 'nullable|string',
        'matricule' => 'nullable|string',
        'password'=> 'required|string|min:8',
        'cin'=>'required|unique:users|min:8',
        'date_naissance'=>'required|date',
        // Ajoutez d'autres règles de validation au besoin
    ]);

    // Récupérer le postier à modifier en fonction de son ID
    $postier = User::findOrFail($id);

    // Mettre à jour les informations du postier
    $postier->update($validatedData);

    // Redirection avec un message de succès
    return redirect()->route('postier.index')->with('success', 'Les informations du postier ont été mises à jour avec succès!');
}
public function destroy($id)
{
    // Trouver le postier à supprimer
    $postier = User::findOrFail($id);

    // Supprimer le postier
    $postier->delete();

    // Redirection avec un message de succès
    return redirect()->route('postier.index')->with('success', 'Le postier a été supprimé avec succès!');
}
public function show()
{
    // Vérifiez si l'utilisateur est authentifié et a le rôle "rh"
    if (Auth::check() && Auth::user()->role === 'rh') {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Passer les données utilisateur à la vue et afficher la page de profil
        return view('profile', compact('user'));
    } else {
        // Rediriger vers une autre page avec un message d'erreur
        return redirect()->route('home')->with('error', 'Accès non autorisé.');
    }
}
 /**
     * Récupérer les données du postier authentifié.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

     public function getUserData(Request $request)
     {
         // Récupérer l'utilisateur authentifié
         $user = $request->user();
 
         // Vérifier si l'utilisateur a le rôle de "postier"
         if ($user->role === 'postier') {
             // Retourner les données de l'utilisateur
             return response()->json(['user' => $user], 200);
         } else {
             // Retourner une réponse "Unauthorized" si l'utilisateur n'est pas un "postier"
             return response()->json(['error' => 'Unauthorized'], 401);
         }
     }
     
}