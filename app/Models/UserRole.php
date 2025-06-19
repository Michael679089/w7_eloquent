<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = ['user_id', 'role_id'];

    public function user() // a user can have multiple UserRoles
    {
        return $this->belongsTo(User::class);
    }

    public function role() // a role can have multiple UserRoles
    {
        return $this->belongsTo(Role::class);
    }
}
