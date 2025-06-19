<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function courses() // a student is connected to multiple class_students
    {
        return $this->belongsToMany(Course::class, 'class_students');
    }

    public function user() // a student only has one user account.
    {
        return $this->hasOne(User::class);
    }
}
