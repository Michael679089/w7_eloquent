<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = Role::all();

        // Loop through each user and assign one random role
        User::all()->each(function ($user) use ($roles) {
            UserRole::create([
                'user_id' => $user->id,
                'role_id' => $roles->random()->id,
            ]);
        });
    }
}
