<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 
        'lastname', 
        'email', 
        'password', 
        'subject', 
        'gender', 
        'birth_date', 
        'joining_date', 
        'mobile_number', 
        'address'
    ];
}
