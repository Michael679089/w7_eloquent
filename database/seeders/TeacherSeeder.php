<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        // Get the role ID for "teacher"
        $teacherRoleId = Role::where('role_name', 'teacher')->first()?->id;

        // Get users who have the "teacher" role and are not yet teachers
        $users = User::whereHas('userRoles', function ($query) use ($teacherRoleId) {
            $query->where('role_id', $teacherRoleId);
        })->whereDoesntHave('teacher')->get();

        foreach ($users as $user) {
            Teacher::create([
                'user_id'    => $user->id,
                'first_name' => fake()->firstName(), // this should be first name of user
                'last_name'  => fake()->lastName(), // this should be last name of user
                'email'      => fake()->unique()->safeEmail(),
                'department' => fake()->randomElement(['CS', 'IT', 'Math', 'Physics']),
                'birthday'   => fake()->dateTimeBetween('-60 years', '-25 years'),
            ]);
        }
    }
}
