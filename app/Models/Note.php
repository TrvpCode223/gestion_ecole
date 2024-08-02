<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'etudiant_id',
        'cours_id',
        'professeur_id',
        'administrateur_id',
        'note',
    ];

    public function etudiant()
    {
        return $this->belongsTo(User::class, 'etudiant_id');
    }

    public function cours()
    {
        return $this->belongsTo(Course::class);
    }

    public function professeur()
    {
        return $this->belongsTo(User::class, 'professeur_id');
    }

    public function administrateur()
    {
        return $this->belongsTo(User::class, 'administrateur_id');
    }
}
