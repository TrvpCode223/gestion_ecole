<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emargement extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id',
        'course_id',
        'date',
        'heure_debut',
        'heure_fin',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'emargement_etudiant', 'emargement_id', 'etudiant_id')
                    ->withPivot('presence')
                    ->withTimestamps();
    }
}
