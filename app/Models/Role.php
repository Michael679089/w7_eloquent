<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role_name', 'description'];
    public $timestamps = true;

    public function userRoles() // a userrole has many Roles
    {
        return $this->hasMany(UserRole::class);
    }
}
