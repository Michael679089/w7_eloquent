<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition(): array
    {
        return [
            'role_name' => $this->faker->jobTitle(),
            'description' => $this->faker->sentence(),
        ];
        // i wouldn't need to use this becuase I only need Teacher, Student, Admin
    }
}
