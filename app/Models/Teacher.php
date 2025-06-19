<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ Add this

class Teacher extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function courses() // a teacher can have many courses.
    {
        return $this->hasMany(Course::class);
    }

    public function user() // a teacher has only one user account.
    {
        return $this->hasOne(User::class);
    }
}
