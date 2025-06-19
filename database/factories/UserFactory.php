<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'user_name' => $this->faker->unique()->userName(),
            'password' => bcrypt('password'), // or use Hash::make() if Hash is imported
            'registration_date' => now(),
        ];
    }
}
