<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclarationFamilial extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'situation_familiale',
        'nombre_enfants',
        'details_enfants',
    ];

    protected $casts = [
        'details_enfants' => 'array', // Convertir le champ 'details_enfants' de JSON en tableau PHP
    ];
}
