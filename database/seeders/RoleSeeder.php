<?php

// database/seeders/RoleSeeder.php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['role_name' => 'admin', 'description' => 'System Administrator'],
            ['role_name' => 'teacher', 'description' => 'Instructor with access to class records'],
            ['role_name' => 'student', 'description' => 'Student user with limited access'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
