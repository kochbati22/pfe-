<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan; 

use Illuminate\Http\Request;

use App\Models\Demandemutation;

class DemandeMutationController extends Controller
{
    public function store(Request $request)
    {
        // Valider les données de la demande de mutation
        $validatedData = $request->validate([
            'matricule' => 'required',
            'motif' => 'required',
            'nombre_annees_travaillees' => 'required|integer',
            'direction' => 'required|in:gafsa,sousse,mahdia,sfax,bizert,beja,kef,tunisie',
        ]);
    
        // Créer une nouvelle instance de DemandeMutation
        $demandeMutations = Demandemutation::create($validatedData);
    
        return response()->json(['message' => 'Demande de mutation enregistrée avec succès.', 'data' => $demandeMutations], 201);
    }

    public function index()
    {
        // Récupérer toutes les demandes de mutation
        $demandeMutations = Demandemutation::all();
    
        // Retourner la vue avec les demandes de mutation
        return view('demandemutation.index', compact('demandeMutations'));
    }
 // Méthode pour accepter une demande de congé
 public function accept(demandemitation $demandeMutations)
 {
     // Mettre à jour le statut de la demande pour l'accepter
     $demandeMutations->update(['statut' => 'acceptée']);
 
    
     return redirect()->route('demandemutation.index')->with('success', 'La demande de  mutation a été acceptée avec succès.');
 }
 
 public function refuse( demandemitation $demandeMutations)
 {
     // Mettre à jour le statut de la demande pour la refuser
     $demandeMutations->update(['statut' => 'refusée']);
 
    
     return redirect()->route('demandemutation.index')->with('success', 'La demande de mutation a été refusée avec succès.');
 }
}