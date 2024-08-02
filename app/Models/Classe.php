<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'professeur_id',
    ];

    public function professeur()
    {
        return $this->belongsTo(User::class, 'professeur_id');
    }

    public function etudiants()
    {
        return $this->belongsToMany(User::class, 'classe_etudiant', 'classe_id', 'etudiant_id');
    }
}
