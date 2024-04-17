<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandeconger extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'motif',
        'date_debut',
        'date_fin',
        'statut',
    ];
}
