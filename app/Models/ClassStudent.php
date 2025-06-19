<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassStudent extends Model
{
    use HasFactory;

    public function courses() // a class student can have many courses
    {
        $this->hasMany(Course::class);
    }

    public function students() // a class student is owned by many students
    {
        $this->hasMany(Student::class);
    }
}
