<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'password',
        'registration_date',
    ];

    public function student()
    {
        return $this->hasOne(Student::class); // ✅ corrected
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class); // ✅ corrected
    }

    public function userRoles()
    {
        return $this->hasMany(UserRole::class);
    }
}
