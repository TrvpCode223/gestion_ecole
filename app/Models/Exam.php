<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'salle',
        'course_id',
        'professor_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function professor()
    {
        return $this->belongsTo(User::class, 'professor_id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'exam_etudiant', 'exam_id', 'etudiant_id');
    }
}
