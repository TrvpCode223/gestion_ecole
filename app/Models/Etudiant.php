<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
    ];

    public function emargements()
    {
        return $this->belongsToMany(Emargement::class, 'emargement_etudiant', 'etudiant_id', 'emargement_id')
                    ->withPivot('presence')
                    ->withTimestamps();
    }
}
