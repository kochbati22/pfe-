<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan; 

use Illuminate\Http\Request;
use App\Models\demandeconger;

class DemandeCongeController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'matricule' => 'required|string',
            'motif' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

        // Création d'une nouvelle demande de congé
        $demandeConge = demandeconger::create($validatedData);
        // Envoyer une notification aux RH
   

        return response()->json(['message' => 'Demande de congé enregistrée avec succès.', 'data' => $demandeConge], 201);
    }
    public function index()
{
    // Récupérer toutes les demandes de congé
    $demandesConge = demandeconger::all();

    // Retourner la vue avec les demandes de congé
    return view('demandes_conger.index', compact('demandesConge'));
}



    // Méthode pour accepter une demande de congé
   // Méthode pour accepter une demande de congé
   public function accept(demandeconger $demandeConge)
{
    // Mettre à jour le statut de la demande pour l'accepter
    $demandeConge->update(['statut' => 'acceptée']);

   
    return redirect()->route('demandes_conger.index')->with('success', 'La demande de congé a été acceptée avec succès.');
}

public function refuse(demandeconger $demandeConge)
{
    // Mettre à jour le statut de la demande pour la refuser
    $demandeConge->update(['statut' => 'refusée']);

   
    return redirect()->route('demandes_conger.index')->with('success', 'La demande de congé a été refusée avec succès.');
}
}


