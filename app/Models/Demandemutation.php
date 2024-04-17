<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandemutation extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'motif',
        'statut',
        'nombre_annees_travaillees',
        'direction',
    ];

    // Définir la relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class, 'matricule', 'matricule');
    }
}
