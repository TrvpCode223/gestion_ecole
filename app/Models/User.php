<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'role',
        'telephone',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setRoleAttribute($value)
    {
        $allowedRoles = ['administrateur', 'professeur', 'etudiant'];

        if (!in_array($value, $allowedRoles)) {
            throw new \InvalidArgumentException("Invalid role: $value");
        }

        $this->attributes['role'] = $value;
    }

    public function classes()
    {
        return $this->hasMany(Classe::class, 'professeur_id');
    }

    public function classesEnseignees()
    {
        return $this->belongsToMany(Classe::class, 'classe_etudiant', 'etudiant_id', 'classe_id');
    }
}
