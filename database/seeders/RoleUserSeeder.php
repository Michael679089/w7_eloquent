<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $roles = Role::all();

        foreach ($users as $user) {
            // Attach 1-2 random roles to each user
            $user->roles()->attach(
                $roles->random(rand(1, 2))->pluck('id')->toArray()
            );
        }
    }
}