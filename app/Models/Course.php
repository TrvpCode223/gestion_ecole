<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'titre',
        'description',
        'classe_id',
        'professeur_id',
    ];

    /**
     * Obtenir la classe associée au cours.
     */
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    /**
     * Obtenir le professeur associé au cours.
     */
    public function professeur()
    {
        return $this->belongsTo(User::class, 'professeur_id');
    }
}
