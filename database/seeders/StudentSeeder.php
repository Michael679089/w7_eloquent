<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $studentRoleId = Role::where('role_name', 'student')->first()?->id;

        // Get all users with 'student' role and no existing student record
        $studentUsers = User::whereHas('userRoles', function ($query) use ($studentRoleId) {
            $query->where('role_id', $studentRoleId);
        })
            ->whereDoesntHave('student') // skip if student record already exists
            ->get();

        foreach ($studentUsers as $user) {
            \App\Models\Student::factory()->create([
                'user_id'     => $user->id,
                'first_name'  => $user->first_name,
                'last_name'   => $user->last_name,
            ]);
        }
    }
}
