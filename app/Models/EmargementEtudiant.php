<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EmargementEtudiant extends Pivot
{
    protected $table = 'emargement_etudiant';

    protected $fillable = [
        'emargement_id',
        'etudiant_id',
        'presence',
    ];
}
