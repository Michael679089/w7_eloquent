<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ Add this

class Course extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'subjects',
        'course_code',
        'credits',
        'description'
    ];

    public function students() // a course can be owned by many students
    {
        return $this->belongsToMany(Student::class, 'class_students');
    }

    public function teachers() // a course can be owned by many teachers
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function schedules() // a course can be found in many schedules.
    {
        return $this->hasMany(Schedule::class);
    }
}
