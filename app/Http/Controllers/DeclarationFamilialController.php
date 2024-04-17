<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeclarationFamiliale;

class DeclarationFamilialeController extends Controller
{
   
    public function create(Request $request)
    {
        // Valider les données reçues
        $validatedData = $request->validate([
            'matricule' => 'required|string|max:5|unique:declaration_familials',
            'situation_familiale' => 'required|string|in:Célibataire,Marié(e),Divorcé(e),Veuf/Veuve',
            'nombre_enfants' => 'nullable|integer|min:0',
            'details_enfants' => 'nullable|json',
        ]);
    
        // Enregistrer la déclaration familiale dans la base de données
        $declaration = DeclarationFamiliale::create($validatedData);
    
        return response()->json(['message' => 'Déclaration familiale enregistrée avec succès', 'declaration' => $declaration], 201);
    }
    
}